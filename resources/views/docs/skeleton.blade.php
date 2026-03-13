<x-layouts.app title="Skeleton - Flowbite Blade" description="Use the skeleton component to indicate a loading state.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Skeleton - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the skeleton component to indicate a loading state.</p>

    @php
    $code = <<<'BLADE'
<div class="space-y-8">
    <div>
        <h3 class="mb-2 text-lg font-medium text-gray-900 dark:text-white">Text</h3>
        <x-fwb.skeleton variant="text" />
    </div>
    <div>
        <h3 class="mb-2 text-lg font-medium text-gray-900 dark:text-white">Card</h3>
        <x-fwb.skeleton variant="card" />
    </div>
    <div>
        <h3 class="mb-2 text-lg font-medium text-gray-900 dark:text-white">Image</h3>
        <x-fwb.skeleton variant="image" />
    </div>
    <div>
        <h3 class="mb-2 text-lg font-medium text-gray-900 dark:text-white">List</h3>
        <x-fwb.skeleton variant="list" />
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Variants" />
</x-layouts.app>
