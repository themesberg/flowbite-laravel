<x-layouts.app title="Admin Layout - Flowbite Blade Blocks" description="A full-page admin layout with a fixed navbar, collapsible sidebar, and main content area. Includes user dropdown, dark mode, and responsive toggle.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Admin Layout</h1>
    <p class="mb-8 text-lg text-gray-600 dark:text-gray-400">A full-page admin layout with a fixed navbar, collapsible sidebar, and main content area. Includes a user dropdown menu, dark mode support, and responsive mobile sidebar toggle.</p>

    @php
    $code = <<<'BLADE'
<div class="bg-gray-50 dark:bg-gray-900 p-4 rounded-lg">
    <div class="flex items-center justify-between mb-4 p-3 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
        <span class="text-lg font-semibold text-gray-900 dark:text-white">Dashboard</span>
        <div class="flex items-center gap-2">
            <span class="text-sm text-gray-500 dark:text-gray-400">Admin User</span>
        </div>
    </div>
    <div class="flex gap-4">
        <div class="w-48 p-3 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
            <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                <li class="font-medium text-gray-900 dark:text-white">Dashboard</li>
                <li>Users</li>
                <li>Products</li>
                <li>Settings</li>
            </ul>
        </div>
        <div class="flex-1 p-3 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700">
            <h2 class="text-lg font-bold text-gray-900 dark:text-white">Welcome</h2>
            <p class="mt-2 text-gray-500 dark:text-gray-400">This is the main content area of the admin layout.</p>
        </div>
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Layout Preview" />

    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Usage</h2>
        <p class="mb-4 text-gray-500 dark:text-gray-400">Use the admin layout as a full-page wrapper:</p>
        <pre class="p-4 bg-gray-50 dark:bg-gray-900 rounded-lg text-sm overflow-x-auto text-gray-800 dark:text-gray-200"><code>&lt;x-fwb.layouts.admin title="Dashboard"&gt;
    &lt;div class="p-4"&gt;
        &lt;h1&gt;Dashboard content&lt;/h1&gt;
    &lt;/div&gt;
&lt;/x-fwb.layouts.admin&gt;</code></pre>
    </div>

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
