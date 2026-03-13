<x-layouts.app title="Bottom Navigation - Flowbite Blade" description="Use the bottom navigation bar component to provide navigation links at the bottom of the page.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Bottom Navigation - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the bottom navigation bar component to provide navigation links at the bottom of the page.</p>

    @php
    $code = <<<'BLADE'
<x-fwb.bottom-nav>
    <x-fwb.bottom-nav.item href="#" label="Home" :active="true" />
    <x-fwb.bottom-nav.item href="#" label="Wallet" />
    <x-fwb.bottom-nav.item href="#" label="Settings" />
    <x-fwb.bottom-nav.item href="#" label="Profile" />
</x-fwb.bottom-nav>
BLADE;
    @endphp
    <x-preview :code="$code" title="Usage" />
</x-layouts.app>
