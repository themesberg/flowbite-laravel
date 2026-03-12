<x-layouts.app title="Toast - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Toast - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the toast component to show success or error messages.</p>

    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.toast fwb-icon="s-check-circle">
        Item moved successfully.
    </x-fwb.toast>

    <x-fwb.toast color="red" fwb-icon="o-exclamation-circle">
        Item has been deleted.
    </x-fwb.toast>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Toast" />
</x-layouts.app>
