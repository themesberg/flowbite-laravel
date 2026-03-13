<x-layouts.app title="Sidebar - Flowbite Blade" description="Use the sidebar component to show a list of menu items and multi-level dropdown items on the left side of your page for navigation purposes.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Sidebar - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the sidebar component to show a list of menu items and multi-level dropdown items on the left side of your page for navigation purposes.</p>

    {{-- Default Sidebar --}}
    @php
    $code = <<<'BLADE'
<x-fwb.sidebar id="default-sidebar">
    <x-fwb.sidebar.item href="#" :active="true" fwb-icon="s-home">Dashboard</x-fwb.sidebar.item>
    <x-fwb.sidebar.item href="#" fwb-icon="o-grid">Kanban</x-fwb.sidebar.item>
    <x-fwb.sidebar.item href="#" badge="3" fwb-icon="o-inbox">Inbox</x-fwb.sidebar.item>
    <x-fwb.sidebar.item href="#" fwb-icon="o-users">Users</x-fwb.sidebar.item>
    <x-fwb.sidebar.item href="#" fwb-icon="o-arrow-right">Sign In</x-fwb.sidebar.item>
</x-fwb.sidebar>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Sidebar" />

    {{-- Multi-level Dropdown --}}
    @php
    $code = <<<'BLADE'
<x-fwb.sidebar id="multi-sidebar">
    <x-fwb.sidebar.item href="#" :active="true" fwb-icon="s-home">Dashboard</x-fwb.sidebar.item>
    <x-fwb.sidebar.group label="E-commerce" id="ecommerce-dropdown" fwb-icon="o-cart">
        <x-fwb.sidebar.item href="#">Products</x-fwb.sidebar.item>
        <x-fwb.sidebar.item href="#">Billing</x-fwb.sidebar.item>
        <x-fwb.sidebar.item href="#">Invoice</x-fwb.sidebar.item>
    </x-fwb.sidebar.group>
    <x-fwb.sidebar.item href="#" fwb-icon="o-inbox">Inbox</x-fwb.sidebar.item>
    <x-fwb.sidebar.item href="#" fwb-icon="o-users">Users</x-fwb.sidebar.item>
</x-fwb.sidebar>
BLADE;
    @endphp
    <x-preview :code="$code" title="Multi-level Dropdown" />

    {{-- Content Separator --}}
    @php
    $code = <<<'BLADE'
<x-fwb.sidebar id="separator-sidebar">
    <x-fwb.sidebar.item href="#" :active="true" fwb-icon="s-home">Dashboard</x-fwb.sidebar.item>
    <x-fwb.sidebar.item href="#" fwb-icon="o-grid">Kanban</x-fwb.sidebar.item>
    <x-fwb.sidebar.item href="#" badge="3" fwb-icon="o-inbox">Inbox</x-fwb.sidebar.item>
    <li class="border-t border-gray-200 dark:border-gray-700 pt-4 mt-4"></li>
    <x-fwb.sidebar.item href="#" fwb-icon="o-book-open">Documentation</x-fwb.sidebar.item>
    <x-fwb.sidebar.item href="#" fwb-icon="o-question-circle">Help</x-fwb.sidebar.item>
</x-fwb.sidebar>
BLADE;
    @endphp
    <x-preview :code="$code" title="Content Separator" />

    {{-- Logo Branding --}}
    @php
    $code = <<<'BLADE'
<x-fwb.sidebar id="logo-sidebar">
    <x-slot:logo>
        <a href="#" class="flex items-center ps-2.5 mb-5">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
    </x-slot:logo>
    <x-fwb.sidebar.item href="#" :active="true" fwb-icon="s-home">Dashboard</x-fwb.sidebar.item>
    <x-fwb.sidebar.item href="#" fwb-icon="o-grid">Kanban</x-fwb.sidebar.item>
    <x-fwb.sidebar.item href="#" fwb-icon="o-inbox">Inbox</x-fwb.sidebar.item>
</x-fwb.sidebar>
BLADE;
    @endphp
    <x-preview :code="$code" title="Logo Branding" />

    {{-- CTA Button --}}
    @php
    $code = <<<'BLADE'
<x-fwb.sidebar id="cta-sidebar">
    <x-fwb.sidebar.item href="#" :active="true" fwb-icon="s-home">Dashboard</x-fwb.sidebar.item>
    <x-fwb.sidebar.item href="#" fwb-icon="o-grid">Kanban</x-fwb.sidebar.item>
    <x-slot:cta>
        <div id="dropdown-cta" class="p-4 mt-6 rounded-lg bg-blue-50 dark:bg-blue-900" role="alert">
            <div class="flex items-center mb-3">
                <span class="bg-blue-100 text-blue-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-900">Beta</span>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 inline-flex justify-center items-center w-6 h-6 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <x-fwb-o-close class="w-2.5 h-2.5" />
                </button>
            </div>
            <p class="mb-3 text-sm text-blue-800 dark:text-blue-400">Preview the new Flowbite dashboard navigation! You can turn the new navigation off for a limited time in your profile.</p>
            <a class="text-sm text-blue-800 underline font-medium hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300" href="#">Turn new navigation off</a>
        </div>
    </x-slot:cta>
</x-fwb.sidebar>
BLADE;
    @endphp
    <x-preview :code="$code" title="CTA Button" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Sidebar <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.sidebar</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the sidebar element. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">logo</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for a logo/brand section displayed above the menu items.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">cta</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for a call-to-action banner displayed below the menu items.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Sidebar Item <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.sidebar.item</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">href</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">URL for the sidebar item link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">active</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Highlight the item as the current active page.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">badge</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Display a badge label next to the item text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">badgeColor</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Badge color variant: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">gray</code>, or default.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">fwb-icon</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Shorthand icon name from <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">flowbite-blade-icons</code> (e.g. <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">s-home</code>). Renders with default sidebar icon classes.</td>
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

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Sidebar Group <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.sidebar.group</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the collapsible dropdown. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">Display text for the dropdown toggle button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">fwb-icon</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Shorthand icon name from <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">flowbite-blade-icons</code> (e.g. <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">o-cart</code>). Renders with default sidebar icon classes.</td>
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
