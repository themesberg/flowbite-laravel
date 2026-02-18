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

    {{-- Tabs with Icons (fwb-icon prop) --}}
    @php
    $code = <<<'BLADE'
<x-fwb.tabs id="icon-tabs" variant="underline">
    <x-fwb.tabs.item :active="true" variant="underline" fwb-icon="s-user-circle">Profile</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline" fwb-icon="o-grid">Dashboard</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline" fwb-icon="o-adjustments-horizontal">Settings</x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline" fwb-icon="s-user-circle">Contacts</x-fwb.tabs.item>
</x-fwb.tabs>
BLADE;
    @endphp
    <x-preview :code="$code" title="Tabs with Icons" />

    {{-- Tabs with Icons (icon slot) --}}
    @php
    $code = <<<'BLADE'
<x-fwb.tabs id="icon-slot-tabs" variant="underline">
    <x-fwb.tabs.item :active="true" variant="underline">
        <x-slot name="icon"><x-fwb-s-user-circle class="w-4 h-4 me-2 text-body-subtle" /></x-slot>
        Profile
    </x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">
        <x-slot name="icon"><x-fwb-o-grid class="w-5 h-5 me-2 text-danger" /></x-slot>
        Dashboard
    </x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">
        <x-slot name="icon"><x-fwb-o-adjustments-horizontal class="w-4 h-4 me-2 text-body-subtle" /></x-slot>
        Settings
    </x-fwb.tabs.item>
    <x-fwb.tabs.item variant="underline">
        <x-slot name="icon"><x-fwb-s-user-circle class="w-4 h-4 me-2 text-body-subtle" /></x-slot>
        Contacts
    </x-fwb.tabs.item>
</x-fwb.tabs>
BLADE;
    @endphp
    <x-preview :code="$code" title="Tabs with Icons (Slot)" />

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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">fwb-icon</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Shorthand icon name from <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">flowbite-blade-icons</code> (e.g. <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">s-user-circle</code>). Renders with default <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">w-4 h-4 me-2 text-body-subtle</code> classes.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">icon</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">—</code></td>
                        <td class="px-6 py-4">Named slot for full icon control. Takes priority over <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">fwb-icon</code> prop.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
