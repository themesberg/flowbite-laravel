<x-layouts.app title="Tabs - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Tabs</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the tabs component to navigate between grouped content by switching between tabs, available in multiple styles including default, underline, pills, and full-width variants.</p>

    {{-- Default Tabs --}}
    @php
    $code = <<<'BLADE'
<x-fwb.tabs id="default-tabs" variant="default">
    <x-fwb.tabs.item :active="true" variant="default">Profile</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="default">Dashboard</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="default">Settings</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="default">Contacts</x-fwb.tabs.item>
    <x-fwb.tabs.item :disabled="true" variant="default">Disabled</x-fwb.tabs.item>
</x-fwb.tabs>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Tabs" />

    {{-- Underline Tabs --}}
    @php
    $code = <<<'BLADE'
<x-fwb.tabs id="underline-tabs" variant="underline">
    <x-fwb.tabs.item :active="true" variant="underline">Profile</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">Dashboard</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">Settings</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">Contacts</x-fwb.tabs.item>
    <x-fwb.tabs.item :disabled="true" variant="underline">Disabled</x-fwb.tabs.item>
</x-fwb.tabs>
BLADE;
    @endphp
    <x-preview :code="$code" title="Tabs with Underline" />

    {{-- Tabs with Icons --}}
    @php
    $code = <<<'BLADE'
<x-fwb.tabs id="icon-tabs" variant="underline">
    <x-fwb.tabs.item :active="true" variant="underline">
        <span class="inline-flex items-center justify-center">
            <svg class="w-4 h-4 me-2 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/></svg>
            Profile
        </span>
    </x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">
        <span class="inline-flex items-center justify-center">
            <svg class="w-4 h-4 me-2 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18"><path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/></svg>
            Dashboard
        </span>
    </x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">
        <span class="inline-flex items-center justify-center">
            <svg class="w-4 h-4 me-2 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M5 11.424V1a1 1 0 1 0-2 0v10.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-1.424a3.228 3.228 0 0 0 0-6.152ZM19.25 14.5A3.243 3.243 0 0 0 17 11.424V1a1 1 0 0 0-2 0v10.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 0 0 2 0v-1.424a3.243 3.243 0 0 0 2.25-3.076ZM11 1a1 1 0 1 0-2 0v3.424a3.228 3.228 0 0 0 0 6.152V19a1 1 0 1 0 2 0v-8.424a3.228 3.228 0 0 0 0-6.152V1Z"/></svg>
            Settings
        </span>
    </x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">
        <span class="inline-flex items-center justify-center">
            <svg class="w-4 h-4 me-2 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/></svg>
            Contacts
        </span>
    </x-fwb.tabs.item>
</x-fwb.tabs>
BLADE;
    @endphp
    <x-preview :code="$code" title="Tabs with Icons" />

    {{-- Pills Tabs --}}
    @php
    $code = <<<'BLADE'
<x-fwb.tabs id="pills-tabs" variant="pills">
    <x-fwb.tabs.item :active="true" variant="pills">Profile</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="pills">Dashboard</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="pills">Settings</x-fwb.tabs.item>
    <x-fwb.tabs.item :disabled="true" variant="pills">Disabled</x-fwb.tabs.item>
</x-fwb.tabs>
BLADE;
    @endphp
    <x-preview :code="$code" title="Pills" />

    {{-- Full Width Tabs --}}
    @php
    $code = <<<'BLADE'
<x-fwb.tabs id="full-tabs" variant="full">
    <x-fwb.tabs.item :active="true" variant="full">Profile</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="full">Dashboard</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="full">Settings</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="full">Invoice</x-fwb.tabs.item>
</x-fwb.tabs>
BLADE;
    @endphp
    <x-preview :code="$code" title="Full Width Tabs" />

    {{-- Custom Active Color --}}
    @php
    $code = <<<'BLADE'
<x-fwb.tabs id="custom-tabs" variant="underline" activeClasses="text-purple-600 border-purple-600 dark:text-purple-500 dark:border-purple-500" inactiveClasses="text-gray-500 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">
    <x-fwb.tabs.item :active="true" variant="underline">Profile</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">Dashboard</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">Settings</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">Contacts</x-fwb.tabs.item>
</x-fwb.tabs>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Active Color" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Tabs <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.tabs</code></h3>
        <div class="overflow-x-auto mb-8">
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">auto</code></td>
                        <td class="px-6 py-4">Unique identifier for the tabs container. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">variant</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Tab style variant: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">underline</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">pills</code>, or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">full</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">activeClasses</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Custom Tailwind CSS classes for the active tab state.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">inactiveClasses</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Custom Tailwind CSS classes for inactive tab states.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Tabs Item <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.tabs.item</code></h3>
        <div class="overflow-x-auto">
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">auto</code></td>
                        <td class="px-6 py-4">Unique identifier for the tab item. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">active</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the tab as currently selected.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">disabled</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Disable the tab so it cannot be clicked.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">variant</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Must match the parent tabs variant to apply correct styling.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
