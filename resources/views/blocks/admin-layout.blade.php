<x-layouts.app title="Admin Layout - Flowbite Blade Blocks">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Admin Layout</h1>
    <p class="mb-8 text-lg text-gray-600 dark:text-gray-400">A full-page admin layout with a fixed navbar, collapsible sidebar, and main content area. Includes a user dropdown menu, dark mode support, and responsive mobile sidebar toggle.</p>

    @php
    $code = <<<'BLADE'
    <x-fwb.layouts.admin title="Dashboard">
        <div class="p-4">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Dashboard</h1>
            <p class="mt-2 text-gray-500 dark:text-gray-400">Welcome to the admin panel.</p>
        </div>
    </x-fwb.layouts.admin>
    BLADE;
    @endphp
    <x-preview :code="$code" title="Basic Usage" />

    @php
    $code2 = <<<'BLADE'
    <x-fwb.layouts.admin title="Custom Sidebar">
        <x-slot name="sidebarNav">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="ms-3">Custom Menu Item</span>
                    </a>
                </li>
            </ul>
        </x-slot>

        <div class="p-4">
            <p>Content with custom sidebar navigation.</p>
        </div>
    </x-fwb.layouts.admin>
    BLADE;
    @endphp
    <x-preview :code="$code2" title="Custom Sidebar Navigation" />

    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Properties</h2>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">Prop</th>
                    <th class="px-6 py-3">Type</th>
                    <th class="px-6 py-3">Default</th>
                    <th class="px-6 py-3">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 font-medium">title</td>
                    <td class="px-6 py-4">?string</td>
                    <td class="px-6 py-4">null</td>
                    <td class="px-6 py-4">Page title for the document &lt;title&gt; tag</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Slots</h2>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">Slot</th>
                    <th class="px-6 py-3">Description</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 font-medium">default</td>
                    <td class="px-6 py-4">Main content area</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 font-medium">logo</td>
                    <td class="px-6 py-4">Custom logo in the navbar (defaults to app name)</td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 font-medium">sidebarNav</td>
                    <td class="px-6 py-4">Custom sidebar navigation (defaults to Dashboard link)</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layouts.app>
