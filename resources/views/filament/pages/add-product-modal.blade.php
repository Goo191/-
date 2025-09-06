<x-filament-panels::page>
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">إضافة منتج جديد لمخزن: {{ $store->name ?? '' }}</h2>
            
            <form wire:submit="save">
                {{ $this->form }}
                
                <div class="flex justify-end space-x-3 mt-6">
                    <button
                        type="button"
                        onclick="window.history.back()"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:ring-2 focus:ring-gray-500"
                    >
                        إلغاء
                    </button>
                    <button
                        type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500"
                    >
                        حفظ
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-filament-panels::page>


