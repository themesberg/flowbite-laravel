<x-layouts.app title="Speed Dial - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Speed Dial</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the speed dial component to show a list of action buttons.</p>

    @php
    $code = <<<'BLADE'
<x-fwb.speed-dial id="speed-dial">
    <button class="...">Share</button>
    <button class="...">Print</button>
    <button class="...">Download</button>
</x-fwb.speed-dial>
BLADE;
    @endphp
    <x-preview :code="$code" title="Usage" />
</x-layouts.app>
