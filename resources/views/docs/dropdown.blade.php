<x-layouts.app title="Dropdown - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Dropdown - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Get started with the dropdown component to show a list of menu items when clicking on a trigger element based on multiple layouts, styles, and placements.</p>

    {{-- Default Dropdown --}}
    @php
    $code = <<<'BLADE'
<x-fwb.dropdown label="Dropdown button" id="default-dropdown">
    <x-fwb.dropdown.item href="#">Dashboard</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Settings</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Earnings</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Sign out</x-fwb.dropdown.item>
</x-fwb.dropdown>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Dropdown" />

    {{-- Dropdown Hover --}}
    @php
    $code = <<<'BLADE'
<x-fwb.dropdown label="Dropdown hover" id="hover-dropdown" triggerType="hover">
    <x-fwb.dropdown.item href="#">Dashboard</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Settings</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Earnings</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Sign out</x-fwb.dropdown.item>
</x-fwb.dropdown>
BLADE;
    @endphp
    <x-preview :code="$code" title="Dropdown Hover" />

    {{-- Dropdown with Divider --}}
    @php
    $code = <<<'BLADE'
<x-fwb.dropdown label="Dropdown button" id="divider-dropdown">
    <x-fwb.dropdown.item href="#">Dashboard</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Settings</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Earnings</x-fwb.dropdown.item>
    <x-fwb.dropdown.item :divider="true" href="#">Separated link</x-fwb.dropdown.item>
</x-fwb.dropdown>
BLADE;
    @endphp
    <x-preview :code="$code" title="Dropdown with Divider" />

    {{-- Dropdown with Header --}}
    @php
    $code = <<<'BLADE'
<x-fwb.dropdown label="Dropdown button" id="header-dropdown">
    <x-slot:header>
        <div class="font-medium truncate">Bonnie Green</div>
        <div class="truncate">bonnie@flowbite.com</div>
    </x-slot:header>
    <x-fwb.dropdown.item href="#">Dashboard</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Settings</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Earnings</x-fwb.dropdown.item>
    <x-fwb.dropdown.item :divider="true" href="#">Sign out</x-fwb.dropdown.item>
</x-fwb.dropdown>
BLADE;
    @endphp
    <x-preview :code="$code" title="Dropdown with Header" />

    {{-- Dropdown with Icons --}}
    @php
    $code = <<<'BLADE'
<x-fwb.dropdown label="Dropdown button" id="icon-dropdown">
    <x-fwb.dropdown.item href="#" fwb-icon="o-grid">Dashboard</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#" fwb-icon="o-users">Team</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#" fwb-icon="s-user-circle">Profile</x-fwb.dropdown.item>
</x-fwb.dropdown>
BLADE;
    @endphp
    <x-preview :code="$code" title="Dropdown with Icons" />

    {{-- Dropdown with Footer --}}
    @php
    $code = <<<'BLADE'
<x-fwb.dropdown label="Dropdown button" id="footer-dropdown">
    <x-fwb.dropdown.item href="#">Dashboard</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Settings</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Earnings</x-fwb.dropdown.item>
    <x-slot:footer>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
    </x-slot:footer>
</x-fwb.dropdown>
BLADE;
    @endphp
    <x-preview :code="$code" title="Dropdown with Footer" />

    {{-- Placement --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-4">
    <x-fwb.dropdown label="Dropdown top" id="top-dropdown" placement="top">
        <x-fwb.dropdown.item href="#">Dashboard</x-fwb.dropdown.item>
        <x-fwb.dropdown.item href="#">Settings</x-fwb.dropdown.item>
        <x-fwb.dropdown.item href="#">Earnings</x-fwb.dropdown.item>
    </x-fwb.dropdown>

    <x-fwb.dropdown label="Dropdown right" id="right-dropdown" placement="right">
        <x-fwb.dropdown.item href="#">Dashboard</x-fwb.dropdown.item>
        <x-fwb.dropdown.item href="#">Settings</x-fwb.dropdown.item>
        <x-fwb.dropdown.item href="#">Earnings</x-fwb.dropdown.item>
    </x-fwb.dropdown>

    <x-fwb.dropdown label="Dropdown bottom" id="bottom-dropdown" placement="bottom">
        <x-fwb.dropdown.item href="#">Dashboard</x-fwb.dropdown.item>
        <x-fwb.dropdown.item href="#">Settings</x-fwb.dropdown.item>
        <x-fwb.dropdown.item href="#">Earnings</x-fwb.dropdown.item>
    </x-fwb.dropdown>

    <x-fwb.dropdown label="Dropdown left" id="left-dropdown" placement="left">
        <x-fwb.dropdown.item href="#">Dashboard</x-fwb.dropdown.item>
        <x-fwb.dropdown.item href="#">Settings</x-fwb.dropdown.item>
        <x-fwb.dropdown.item href="#">Earnings</x-fwb.dropdown.item>
    </x-fwb.dropdown>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Placement" />

    {{-- Inline Dropdown --}}
    @php
    $code = <<<'BLADE'
<x-fwb.dropdown label="Options" id="inline-dropdown" :inline="true">
    <x-fwb.dropdown.item href="#">Dashboard</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Settings</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Earnings</x-fwb.dropdown.item>
</x-fwb.dropdown>
BLADE;
    @endphp
    <x-preview :code="$code" title="Inline Dropdown" />

    {{-- Custom Trigger --}}
    @php
    $code = <<<'BLADE'
<x-fwb.dropdown id="custom-trigger-dropdown">
    <x-slot:trigger>
        <button type="button" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <x-fwb-o-dots-vertical class="w-5 h-5" />
        </button>
    </x-slot:trigger>
    <x-fwb.dropdown.item href="#">Edit</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Remove</x-fwb.dropdown.item>
    <x-fwb.dropdown.item href="#">Report</x-fwb.dropdown.item>
</x-fwb.dropdown>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Trigger (Menu Icon)" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Dropdown <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.dropdown</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the dropdown. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Dropdown</code></td>
                        <td class="px-6 py-4">Text label for the default trigger button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">color</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code></td>
                        <td class="px-6 py-4">Color theme of the default trigger button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">Size of the default trigger button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">placement</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">bottom</code></td>
                        <td class="px-6 py-4">Placement of the dropdown menu. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">top</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">right</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">bottom</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">left</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">inline</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Use a minimal inline trigger button style instead of the full button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">triggerType</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">click</code></td>
                        <td class="px-6 py-4">How the dropdown is triggered. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">click</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">hover</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">trigger</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for a custom trigger element instead of the default button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">header</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for a header section above the menu items (e.g., user info).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">footer</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for a footer section below the menu items.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Dropdown Item <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.dropdown.item</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">href</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">URL for the item. Renders as an anchor tag when set, otherwise as a button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">fwb-icon</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Shorthand icon name from <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">flowbite-blade-icons</code> (e.g. <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">o-grid</code>). Renders with default <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">w-4 h-4 me-2 text-body-subtle</code> classes.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">icon</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">—</code></td>
                        <td class="px-6 py-4">Named slot for full icon control. Takes priority over <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">fwb-icon</code> prop.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">divider</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Show a divider line above this item.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
