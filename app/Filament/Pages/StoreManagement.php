<?php

namespace App\Filament\Pages;

use App\Models\Store;
use App\Models\Product;
use App\Models\StoreProduct;
use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;

class StoreManagement extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-cube';
    protected static ?string $navigationLabel = 'إدارة المخازن';
    protected static ?string $title = 'إدارة المنتجات في المخازن';
    protected static ?string $slug = 'store-management';
    
    public ?int $selectedStoreId = null;
    public ?string $selectedStoreName = null;
    
    // Form properties
    public $quantity;
    public $purchase_price;
    public $selling_price;
    public $retail_price;
    
    // New product properties
    public $new_product_name;
    public $new_product_category;
    public $new_product_unit;
    
    // Search properties
    public $localSearch = '';
    public $globalSearch = '';

    // Edit properties
    public $editingProductId;
    public $editing_quantity;
    public $editing_purchase_price;
    public $editing_selling_price;
    public $editing_retail_price;

    public function mount()
    {
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
        $this->resetForm();
        $this->dispatch('open-modal', id: 'add-product-modal');
    }
    
    public function openGlobalSearch()
    {
        if (empty($this->globalSearch)) {
            return;
        }
        $this->dispatch('open-modal', id: 'global-search-modal');
    }

    public function editProduct($storeProductId)
    {
        $storeProduct = StoreProduct::with('product')->find($storeProductId);
        if ($storeProduct) {
            $this->editingProductId = $storeProduct->id;
        $this->editing_quantity = $storeProduct->quantity;
        $this->editing_purchase_price = $storeProduct->purchase_price;
        $this->editing_selling_price = $storeProduct->selling_price;
        $this->editing_retail_price = $storeProduct->retail_price;
            $this->dispatch('open-modal', id: 'edit-product-modal');
        }
    }

    public function updateProduct()
    {
        $this->validate([
            'editing_quantity' => 'required|integer|min:1',
            'editing_purchase_price' => 'nullable|numeric|min:0',
            'editing_selling_price' => 'nullable|numeric|min:0',
            'editing_retail_price' => 'nullable|numeric|min:0',
        ]);

        $storeProduct = StoreProduct::find($this->editingProductId);
        if ($storeProduct) {
            $storeProduct->update([
                'quantity' => $this->editing_quantity,
                'purchase_price' => $this->editing_purchase_price,
                'selling_price' => $this->editing_selling_price,
                'retail_price' => $this->editing_retail_price,
            ]);
            
            Notification::make()
                ->title('تم تحديث المنتج بنجاح')
                ->success()
                ->send();

            $this->dispatch('close-modal', id: 'edit-product-modal');
            $this->resetEditForm();
        }
    }

    public function resetForm()
    {
        $this->quantity = null;
        $this->purchase_price = null;
        $this->selling_price = null;
        $this->retail_price = null;
        $this->new_product_name = null;
        $this->new_product_category = null;
        $this->new_product_unit = null;
    }

    public function resetEditForm()
    {
        $this->editingProductId = null;
        $this->editing_quantity = null;
        $this->editing_purchase_price = null;
        $this->editing_selling_price = null;
        $this->editing_retail_price = null;
    }

    public function addProductToStore()
    {
        $this->validate([
            'new_product_name' => 'required|string|max:255',
            'new_product_category' => 'nullable|string|max:255',
            'new_product_unit' => 'nullable|string|max:50',
            'quantity' => 'required|integer|min:1',
            'purchase_price' => 'nullable|numeric|min:0',
            'selling_price' => 'nullable|numeric|min:0',
            'retail_price' => 'nullable|numeric|min:0',
        ]);

        // إنشاء منتج جديد
        $product = Product::create([
            'name' => $this->new_product_name,
            'category' => $this->new_product_category ?? 'عام',
            'unit' => $this->new_product_unit ?? 'قطعة',
        ]);

        // التحقق من وجود المنتج في المخزن
        $existingProduct = StoreProduct::where('store_id', $this->selectedStoreId)
            ->where('product_id', $product->id)
            ->first();

        if ($existingProduct) {
            // تحديث الكمية
            $existingProduct->update([
                'quantity' => $existingProduct->quantity + $this->quantity,
                'purchase_price' => $this->purchase_price ?? $existingProduct->purchase_price,
                'selling_price' => $this->selling_price ?? $existingProduct->selling_price,
                'retail_price' => $this->retail_price ?? $existingProduct->retail_price,
            ]);
            
            Notification::make()
                ->title('تم تحديث الكمية بنجاح')
                ->success()
                ->send();
        } else {
            // إضافة منتج جديد
            StoreProduct::create([
                'store_id' => $this->selectedStoreId,
                'product_id' => $product->id,
                'quantity' => $this->quantity,
                'purchase_price' => $this->purchase_price,
                'selling_price' => $this->selling_price,
                'retail_price' => $this->retail_price,
            ]);
            
            Notification::make()
                ->title('تم إضافة المنتج بنجاح')
                ->success()
                ->send();
        }

        $this->dispatch('close-modal', id: 'add-product-modal');
        $this->resetForm();
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
    
    public function getFilteredProductsProperty()
    {
        $products = $this->getStoreProducts();
        
        if (empty($this->localSearch)) {
            return $products;
        }
        
        return $products->filter(function ($storeProduct) {
            return stripos($storeProduct->product->name, $this->localSearch) !== false ||
                   stripos($storeProduct->product->category, $this->localSearch) !== false;
        });
    }
    
    public function getGlobalSearchResultsProperty()
    {
        if (empty($this->globalSearch)) {
            return collect();
        }
        
        return StoreProduct::with(['product', 'store'])
            ->whereHas('product', function ($query) {
                $query->where('name', 'like', '%' . $this->globalSearch . '%')
                      ->orWhere('category', 'like', '%' . $this->globalSearch . '%');
            })
            ->get();
    }

    public function getEditingProductProperty()
    {
        if (!$this->editingProductId) return null;
        
        return StoreProduct::with('product')->find($this->editingProductId);
    }

    protected function getViewData(): array
    {
        return [
            'stores' => Store::all(),
            'products' => Product::all(),
            'storeProducts' => $this->getStoreProducts(),
            'filteredProducts' => $this->filteredProducts,
            'globalSearchResults' => $this->globalSearchResults,
            'editingProduct' => $this->editingProduct,
        ];
    }

    public function getView(): string
    {
        return 'filament.pages.store-management';
    }
}
