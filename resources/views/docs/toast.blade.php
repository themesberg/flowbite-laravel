<x-layouts.app title="Toast - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Toast</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the toast component to show success or error messages.</p>

    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.toast>
        <x-slot:icon>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/></svg>
        </x-slot:icon>
        Item moved successfully.
    </x-fwb.toast>

    <x-fwb.toast color="red">
        <x-slot:icon>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/></svg>
        </x-slot:icon>
        Item has been deleted.
    </x-fwb.toast>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Toast" />
</x-layouts.app>
