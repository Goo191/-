<?php

namespace App\Filament\Pages;

use App\Models\Store;
use App\Models\Product;
use App\Models\StoreProduct;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\DB;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'الرئيسية';
    protected static ?string $title = 'إدارة المخازن';
    
    public ?int $selectedStoreId = null;
    public ?string $selectedStoreName = null;

    public function mount()
    {
        // تحديد أول مخزن افتراضياً
        $firstStore = Store::first();
        if ($firstStore) {
            $this->selectedStoreId = $firstStore->id;
            $this->selectedStoreName = $firstStore->name;
        }
    }

    public function selectStore($storeId)
    {
        $store = Store::find($storeId);
        if ($store) {
            $this->selectedStoreId = $store->id;
            $this->selectedStoreName = $store->name;
        }
    }

    public function addProduct()
    {
        $this->dispatch('open-modal', id: 'add-product-modal');
    }

    public function addProductToStore($data)
    {
        // التحقق من وجود المنتج في المخزن
        $existingProduct = StoreProduct::where('store_id', $this->selectedStoreId)
            ->where('product_id', $data['product_id'])
            ->first();

        if ($existingProduct) {
            // تحديث الكمية
            $existingProduct->update([
                'quantity' => $existingProduct->quantity + $data['quantity'],
                'purchase_price' => $data['purchase_price'] ?? $existingProduct->purchase_price,
                'selling_price' => $data['selling_price'] ?? $existingProduct->selling_price,
            ]);
        } else {
            // إضافة منتج جديد
            StoreProduct::create([
                'store_id' => $this->selectedStoreId,
                'product_id' => $data['product_id'],
                'quantity' => $data['quantity'],
                'purchase_price' => $data['purchase_price'],
                'selling_price' => $data['selling_price'],
            ]);
        }

        Notification::make()
            ->title('تم إضافة المنتج بنجاح')
            ->success()
            ->send();

        $this->dispatch('close-modal', id: 'add-product-modal');
    }

    public function removeProduct($storeProductId)
    {
        $storeProduct = StoreProduct::find($storeProductId);
        if ($storeProduct) {
            $storeProduct->delete();
            Notification::make()
                ->title('تم حذف المنتج بنجاح')
                ->success()
                ->send();
        }
    }

    public function getStoreProducts()
    {
        if (!$this->selectedStoreId) return collect();

        return StoreProduct::where('store_id', $this->selectedStoreId)
            ->with(['product', 'store'])
            ->get();
    }

    protected function getViewData(): array
    {
        return [
            'stores' => Store::all(),
            'products' => Product::all(),
            'storeProducts' => $this->getStoreProducts(),
            'totalStores' => Store::count(),
            'totalProducts' => Product::count(),
            'totalQuantities' => StoreProduct::sum('quantity') ?? 0,
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            Select::make('product_id')
                ->label('المنتج')
                ->options(Product::all()->pluck('name', 'id'))
                ->required()
                ->searchable(),
            TextInput::make('quantity')
                ->label('الكمية')
                ->numeric()
                ->required()
                ->minValue(1),
            TextInput::make('purchase_price')
                ->label('سعر الشراء')
                ->numeric()
                ->prefix('ج.م'),
            TextInput::make('selling_price')
                ->label('سعر البيع')
                ->numeric()
                ->prefix('ج.م'),
        ];
    }

    public function getView(): string
    {
        return 'filament.pages.dashboard';
    }
}
