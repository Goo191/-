<x-filament-panels::page>
    <style>
        .btn-primary {
            background: linear-gradient(to right, #2563eb, #1d4ed8);
            color: white;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 2px solid #3b82f6;
            transition: all 0.2s;
        }
        .btn-primary:hover {
            background: linear-gradient(to right, #1d4ed8, #1e40af);
            border-color: #2563eb;
        }
        
        .btn-success {
            background: linear-gradient(to right, #16a34a, #15803d);
            color: white;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 2px solid #22c55e;
            transition: all 0.2s;
        }
        .btn-success:hover {
            background: linear-gradient(to right, #15803d, #166534);
            border-color: #16a34a;
        }
        
        .btn-danger {
            background: linear-gradient(to right, #dc2626, #b91c1c);
            color: white;
            font-weight: bold;
            padding: 0.5rem 1.25rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 2px solid #ef4444;
            transition: all 0.2s;
        }
        .btn-danger:hover {
            background: linear-gradient(to right, #b91c1c, #991b1b);
            border-color: #dc2626;
        }
        
        .action-btn-edit {
            background: linear-gradient(to right, #2563eb, #1d4ed8);
            color: white;
            font-weight: bold;
            padding: 0.5rem 1.25rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 2px solid #3b82f6;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            min-width: 80px;
            justify-content: center;
        }
        .action-btn-edit:hover {
            background: linear-gradient(to right, #1d4ed8, #1e40af);
            border-color: #2563eb;
        }
        
        .action-btn-delete {
            background: linear-gradient(to right, #dc2626, #b91c1c);
            color: white;
            font-weight: bold;
            padding: 0.5rem 1.25rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 2px solid #ef4444;
            transition: all 0.2s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            min-width: 80px;
            justify-content: center;
        }
        .action-btn-delete:hover {
            background: linear-gradient(to right, #b91c1c, #991b1b);
            border-color: #dc2626;
        }
        
        .modal-btn-cancel {
            background: linear-gradient(to right, #e5e7eb, #d1d5db);
            color: #1f2937;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 2px solid #9ca3af;
            transition: all 0.2s;
        }
        .modal-btn-cancel:hover {
            background: linear-gradient(to right, #d1d5db, #9ca3af);
            border-color: #6b7280;
        }
        
        .modal-btn-submit {
            background: linear-gradient(to right, #16a34a, #15803d);
            color: white;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 2px solid #22c55e;
            transition: all 0.2s;
        }
        .modal-btn-submit:hover {
            background: linear-gradient(to right, #15803d, #166534);
            border-color: #16a34a;
        }
        
        .modal-btn-edit {
            background: linear-gradient(to right, #2563eb, #1d4ed8);
            color: white;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 2px solid #3b82f6;
            transition: all 0.2s;
        }
        .modal-btn-edit:hover {
            background: linear-gradient(to right, #1d4ed8, #1e40af);
            border-color: #2563eb;
        }
        
        .search-section {
            background: linear-gradient(to right, #eff6ff, #e0e7ff);
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 1px solid #bfdbfe;
            padding: 1.5rem;
        }
        
        .store-section {
            background: linear-gradient(to right, #f0fdf4, #ecfdf5);
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 1px solid #bbf7d0;
            padding: 1.5rem;
        }
        
        .store-info-section {
            background: linear-gradient(to right, #faf5ff, #f3e8ff);
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 1px solid #d8b4fe;
            padding: 1.5rem;
        }
        
        .local-search-section {
            background: linear-gradient(to right, #fefce8, #fef3c7);
            border-radius: 0.5rem;
            padding: 1rem;
            border: 1px solid #fde047;
        }
        
        .store-btn {
            padding: 1rem;
            text-align: center;
            border-radius: 0.75rem;
            border: 2px solid;
            transition: all 0.2s;
            font-weight: 600;
        }
        
        .store-btn-selected {
            border-color: #3b82f6;
            background: linear-gradient(to bottom right, #eff6ff, #dbeafe);
            color: #1e40af;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .store-btn-unselected {
            border-color: #e5e7eb;
            background: white;
        }
        .store-btn-unselected:hover {
            border-color: #93c5fd;
            background: linear-gradient(to bottom right, #f9fafb, #eff6ff);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .product-table {
            overflow-x: auto;
            background: white;
            border-radius: 0.5rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            border: 1px solid #e5e7eb;
        }
        
        .table-header {
            background: linear-gradient(to right, #f9fafb, #f3f4f6);
        }
    </style>
    <div class="space-y-6">
        <!-- البحث الشامل -->
        <div class="search-section">
            <h2 class="text-lg font-semibold mb-4 text-gray-900">البحث الشامل في جميع المخازن</h2>
            <div class="flex gap-4">
                <div class="flex-1 relative">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input 
                        type="text" 
                        wire:model.live="globalSearch" 
                        class="block w-full pr-10 pl-3 py-3 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-lg"
                        placeholder="ابحث عن منتج في جميع المخازن..."
                    >
                </div>
                <button 
                    wire:click="openGlobalSearch"
                    class="btn-primary"
                >
                    عرض النتائج
                </button>
            </div>
        </div>

        <!-- فلتر المخازن -->
        <div class="store-section">
            <h2 class="text-lg font-semibold mb-4 text-gray-900">اختر المخزن</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3">
                @foreach($stores as $store)
                    <button
                        wire:click="selectStore({{ $store->id }})"
                        class="store-btn {{ $selectedStoreId == $store->id ? 'store-btn-selected' : 'store-btn-unselected' }}"
                    >
                        <div class="font-medium">{{ $store->name }}</div>
                        <div class="text-sm text-gray-500">{{ $store->description }}</div>
                    </button>
                @endforeach
            </div>
        </div>

        @if($selectedStoreId)
            <!-- معلومات المخزن المختار -->
            <div class="store-info-section">
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">مخزن: {{ $selectedStoreName }}</h2>
                        <p class="text-gray-600 mt-1">إدارة المنتجات والكميات</p>
                    </div>
                    <div class="flex gap-3">
                        <button
                            wire:click="addProduct"
                            class="btn-success flex items-center gap-2 text-lg px-6 py-3"
                        >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            إضافة منتج جديد
                        </button>
                    </div>
                </div>

                <!-- شريط البحث المحلي -->
                <div class="mb-6 local-search-section">
                    <div class="relative">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input 
                            type="text" 
                            wire:model.live="localSearch" 
                            class="block w-full pr-10 pl-3 py-3 border border-gray-300 rounded-lg leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-lg"
                            placeholder="ابحث في منتجات هذا المخزن..."
                        >
                    </div>
                    @if($localSearch)
                        <div class="mt-2 text-sm text-gray-600">
                            <span class="font-medium">{{ $filteredProducts->count() }}</span> منتج من أصل {{ $storeProducts->count() }}
                        </div>
                    @endif
                </div>

                <!-- جدول المنتجات -->
                <div class="product-table">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="table-header">
                            <tr>
                                <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">المنتج</th>
                                <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">الفئة</th>
                                <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">الكمية</th>
                                <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">الوحدة</th>
                                <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">سعر الشراء</th>
                                <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">سعر البيع الجملة</th>
                                <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">سعر البيع القطاعي</th>
                                <th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse($filteredProducts as $storeProduct)
                                <tr class="hover:bg-green-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $storeProduct->product->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            {{ $storeProduct->product->category }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-bold text-gray-900">{{ $storeProduct->quantity }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $storeProduct->product->unit }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        @if($storeProduct->purchase_price)
                                            <span class="text-green-600 font-medium">ج.م {{ number_format($storeProduct->purchase_price, 2) }}</span>
                                        @else
                                            <span class="text-gray-400">-</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        @if($storeProduct->selling_price)
                                            <span class="text-blue-600 font-medium">ج.م {{ number_format($storeProduct->selling_price, 2) }}</span>
                                        @else
                                            <span class="text-gray-400">-</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        @if($storeProduct->retail_price)
                                            <span class="text-purple-600 font-medium">ج.م {{ number_format($storeProduct->retail_price, 2) }}</span>
                                        @else
                                            <span class="text-gray-400">-</span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex gap-2">
                                            <button
                                                wire:click="editProduct({{ $storeProduct->id }})"
                                                class="action-btn-edit"
                                            >
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                                تعديل
                                            </button>
                                            <button
                                                wire:click="removeProduct({{ $storeProduct->id }})"
                                                wire:confirm="هل أنت متأكد من حذف هذا المنتج؟"
                                                class="action-btn-delete"
                                            >
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                                حذف
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-6 py-8 text-center">
                                        <div class="text-gray-500">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                            </svg>
                                            <h3 class="mt-2 text-sm font-medium text-gray-900">لا توجد منتجات</h3>
                                            <p class="mt-1 text-sm text-gray-500">ابدأ بإضافة منتج جديد إلى هذا المخزن</p>
                                            <button
                                                wire:click="addProduct"
                                                class="mt-4 bg-gradient-to-r from-green-600 to-green-700 hover:from-green-700 hover:to-green-800 text-white px-6 py-3 rounded-lg flex items-center gap-2 mx-auto shadow-xl border-2 border-green-500 hover:border-green-600 transition-all duration-200 font-bold"
                                            >
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>
                                                إضافة أول منتج
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>

    <!-- Modal إضافة منتج -->
    <x-filament::modal id="add-product-modal" width="lg">
        <x-slot name="header">
            <div class="flex items-center gap-3">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="text-lg font-semibold">إضافة منتج جديد إلى {{ $selectedStoreName }}</span>
            </div>
        </x-slot>

        <form wire:submit="addProductToStore">
            <div class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">اسم المنتج *</label>
                        <input 
                            type="text" 
                            wire:model="new_product_name" 
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg" 
                            placeholder="أدخل اسم المنتج"
                            required
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">فئة المنتج</label>
                        <input 
                            type="text" 
                            wire:model="new_product_category" 
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg" 
                            placeholder="مثل: توابل، خضروات، فواكه"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">الوحدة</label>
                        <input 
                            type="text" 
                            wire:model="new_product_unit" 
                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg" 
                            placeholder="مثل: قطعة، كيلو، لتر، علبة"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">الكمية *</label>
                        <input type="number" wire:model="quantity" min="1" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg" placeholder="أدخل الكمية">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">سعر الشراء</label>
                        <div class="relative">
                            <input type="number" wire:model="purchase_price" step="0.01" min="0" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg pr-12" placeholder="0.00">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 text-lg">ج.م</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">سعر البيع الجملة</label>
                        <div class="relative">
                            <input type="number" wire:model="selling_price" step="0.01" min="0" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg pr-12" placeholder="0.00">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 text-lg">ج.م</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">سعر البيع القطاعي</label>
                        <div class="relative">
                            <input type="number" wire:model="retail_price" step="0.01" min="0" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 text-lg pr-12" placeholder="0.00">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 text-lg">ج.م</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end gap-3 mt-8 pt-6 border-t border-gray-200">
                <button
                    type="button"
                    wire:click="$dispatch('close-modal', { id: 'add-product-modal' })"
                    class="modal-btn-cancel"
                >
                    إلغاء
                </button>
                <button type="submit" class="modal-btn-submit">
                    إضافة المنتج
                </button>
            </div>
        </form>
    </x-filament::modal>

    <!-- Modal تعديل منتج -->
    <x-filament::modal id="edit-product-modal" width="lg">
        <x-slot name="header">
            <div class="flex items-center gap-3">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                <span class="text-lg font-semibold">تعديل المنتج</span>
            </div>
        </x-slot>

        <form wire:submit="updateProduct">
            <div class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">المنتج</label>
                        <input type="text" value="{{ $editingProduct->product->name ?? '' }}" class="w-full border-gray-300 rounded-lg shadow-sm bg-gray-50 text-lg" disabled>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">الكمية *</label>
                        <input type="number" wire:model="editing_quantity" min="1" required class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">سعر الشراء</label>
                        <div class="relative">
                            <input type="number" wire:model="editing_purchase_price" step="0.01" min="0" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg pr-12">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 text-lg">ج.م</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">سعر البيع الجملة</label>
                        <div class="relative">
                            <input type="number" wire:model="editing_selling_price" step="0.01" min="0" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-lg pr-12">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 text-lg">ج.م</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">سعر البيع القطاعي</label>
                        <div class="relative">
                            <input type="number" wire:model="editing_retail_price" step="0.01" min="0" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-purple-500 focus:border-purple-500 text-lg pr-12">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 text-lg">ج.م</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-end gap-3 mt-8 pt-6 border-t border-gray-200">
                <button
                    type="button"
                    wire:click="$dispatch('close-modal', { id: 'edit-product-modal' })"
                    class="modal-btn-cancel"
                >
                    إلغاء
                </button>
                <button type="submit" class="modal-btn-edit">
                    حفظ التعديلات
                </button>
            </div>
        </form>
    </x-filament::modal>

    <!-- Modal البحث الشامل -->
    <x-filament::modal id="global-search-modal" width="7xl">
        <x-slot name="header">
            <div class="flex items-center gap-3">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="text-lg font-semibold">نتائج البحث الشامل: "{{ $globalSearch }}"</span>
            </div>
        </x-slot>

        <div class="space-y-4">
            @if($globalSearchResults->count() > 0)
                <div class="text-sm text-gray-600 mb-4">
                    تم العثور على <span class="font-bold text-blue-600">{{ $globalSearchResults->count() }}</span> منتج في 
                    <span class="font-bold text-green-600">{{ $globalSearchResults->groupBy('store.name')->count() }}</span> مخزن
                </div>
                
                <div class="space-y-4">
                    @foreach($globalSearchResults->groupBy('store.name') as $storeName => $products)
                        <div class="bg-gray-50 rounded-lg p-4">
                            <h3 class="text-lg font-bold text-gray-900 mb-3 flex items-center gap-2">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                {{ $storeName }}
                                <span class="text-sm font-normal text-gray-500">({{ $products->count() }} منتج)</span>
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                                @foreach($products as $storeProduct)
                                    <div class="bg-white rounded-lg p-4 border border-gray-200 hover:border-blue-300 transition-colors">
                                        <div class="flex justify-between items-start mb-2">
                                            <h4 class="font-bold text-gray-900">{{ $storeProduct->product->name }}</h4>
                                            <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">{{ $storeProduct->product->category }}</span>
                                        </div>
                                        
                                        <div class="space-y-1 text-sm text-gray-600">
                                            <div class="flex justify-between">
                                                <span>الكمية:</span>
                                                <span class="font-bold text-gray-900">{{ $storeProduct->quantity }} {{ $storeProduct->product->unit }}</span>
                                            </div>
                                            
                                            @if($storeProduct->purchase_price)
                                                <div class="flex justify-between">
                                                    <span>سعر الشراء:</span>
                                                    <span class="text-green-600 font-medium">ج.م {{ number_format($storeProduct->purchase_price, 2) }}</span>
                                                </div>
                                            @endif
                                            
                                            @if($storeProduct->selling_price)
                                                <div class="flex justify-between">
                                                    <span>سعر الجملة:</span>
                                                    <span class="text-blue-600 font-medium">ج.م {{ number_format($storeProduct->selling_price, 2) }}</span>
                                                </div>
                                            @endif
                                            
                                            @if($storeProduct->retail_price)
                                                <div class="flex justify-between">
                                                    <span>سعر القطاعي:</span>
                                                    <span class="text-purple-600 font-medium">ج.م {{ number_format($storeProduct->retail_price, 2) }}</span>
                                                </div>
                                            @endif
                                        </div>
                                        
                                        <div class="mt-3 flex gap-2">
                                            <button
                                                wire:click="selectStore({{ $storeProduct->store_id }})"
                                                class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white px-3 py-2 rounded-md text-xs font-bold transition-all duration-200 shadow-md"
                                            >
                                                عرض المخزن
                                            </button>
                                            <button
                                                wire:click="editProduct({{ $storeProduct->id }})"
                                                class="bg-gradient-to-r from-gray-600 to-gray-700 hover:from-gray-700 hover:to-gray-800 text-white px-3 py-2 rounded-md text-xs font-bold transition-all duration-200 shadow-md"
                                            >
                                                تعديل
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-8">
                    <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <h3 class="mt-2 text-sm font-medium text-gray-900">لم يتم العثور على نتائج</h3>
                    <p class="mt-1 text-sm text-gray-500">جرب البحث بكلمات مختلفة أو تحقق من الإملاء</p>
                </div>
            @endif
        </div>

        <div class="flex justify-end mt-6 pt-4 border-t border-gray-200">
            <button
                type="button"
                wire:click="$dispatch('close-modal', { id: 'global-search-modal' })"
                class="px-6 py-3 text-sm font-bold text-gray-800 bg-gradient-to-r from-gray-200 to-gray-300 hover:from-gray-300 hover:to-gray-400 border-2 border-gray-400 rounded-lg transition-all duration-200 shadow-lg"
            >
                إغلاق
            </button>
        </div>
    </x-filament::modal>
</x-filament-panels::page>
