<x-layouts.app title="Tooltip - Flowbite Blade" description="Use tooltips to show extra information when hovering over an element.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Tooltip - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use tooltips to show extra information when hovering over an element.</p>

    @php
    $code = <<<'BLADE'
<div class="flex gap-4">
    <x-fwb.tooltip id="tooltip-top" placement="top">
        <x-slot:triggerSlot>
            <x-fwb.button>Tooltip top</x-fwb.button>
        </x-slot:triggerSlot>
        Tooltip on top
    </x-fwb.tooltip>

    <x-fwb.tooltip id="tooltip-bottom" placement="bottom">
        <x-slot:triggerSlot>
            <x-fwb.button>Tooltip bottom</x-fwb.button>
        </x-slot:triggerSlot>
        Tooltip on bottom
    </x-fwb.tooltip>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Tooltip" />
</x-layouts.app>
