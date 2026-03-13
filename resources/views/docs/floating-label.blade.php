<x-layouts.app title="Floating Label - Flowbite Blade" description="Use the floating label style for inputs with animated labels.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Floating Label - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the floating label style for inputs with animated labels.</p>

    @php
    $code = <<<'BLADE'
<div class="space-y-6 max-w-md">
    <x-fwb.floating-label label="Standard" variant="standard" />
    <x-fwb.floating-label label="Outlined" variant="outlined" />
    <x-fwb.floating-label label="Filled" variant="filled" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Variants" />
</x-layouts.app>
