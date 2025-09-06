<x-filament-panels::page>
    {{-- فلتر اختيار المخزن --}}
    <div class="mb-6 p-4 bg-white rounded-lg shadow">
        <div class="flex items-center space-x-4">
            <label class="text-lg font-medium text-gray-700">اختر المخزن:</label>
            <select 
                wire:model.live="selectedStoreId" 
                wire:change="onStoreChanged($event.target.value)"
                class="px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
            >
                @foreach($this->getStores() as $id => $name)
                    <option value="{{ $id }}" {{ $selectedStoreId == $id ? 'selected' : '' }}>
                        {{ $name }}
                    </option>
                @endforeach
            </select>
            
            {{-- زر إضافة منتج جديد --}}
            <button 
                wire:click="$dispatch('openModal', { component: 'add-product-modal', arguments: { storeId: {{ $selectedStoreId }} }})"
                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500"
            >
                إضافة منتج جديد
            </button>
        </div>
    </div>

    {{-- الإحصائيات --}}
    @if (count($this->getHeaderWidgets()))
        <x-filament-widgets::widgets
            :columns="$this->getHeaderWidgetsColumns()"
            :widgets="$this->getHeaderWidgets()"
            :data="$this->getHeaderWidgetsData()"
        />
    @endif

    {{-- جدول المنتجات --}}
    {{ $this->table }}
</x-filament-panels::page>


