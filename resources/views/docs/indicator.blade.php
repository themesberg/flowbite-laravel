<x-layouts.app title="Indicator - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Indicator</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the indicator component to show status or notifications.</p>

    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-4">
    <x-fwb.indicator color="blue" />
    <x-fwb.indicator color="red" />
    <x-fwb.indicator color="green" />
    <x-fwb.indicator color="yellow" />
    <x-fwb.indicator color="purple" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Indicators" />

    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap items-center gap-4">
    <x-fwb.indicator color="blue" size="xs" />
    <x-fwb.indicator color="blue" size="sm" />
    <x-fwb.indicator color="blue" size="md" />
    <x-fwb.indicator color="blue" size="lg" />
    <x-fwb.indicator color="blue" size="xl" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Sizes" />
</x-layouts.app>
