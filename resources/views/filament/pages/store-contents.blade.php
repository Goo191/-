<x-filament-panels::page>
    @if (count($this->getHeaderWidgets()))
        <x-filament-widgets::widgets
            :columns="$this->getHeaderWidgetsColumns()"
            :widgets="$this->getHeaderWidgets()"
            :data="$this->getHeaderWidgetsData()"
        />
    @endif

    {{ $this->table }}
</x-filament-panels::page>


