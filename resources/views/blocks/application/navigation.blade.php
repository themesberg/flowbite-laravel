<x-layouts.app title="Navigation - Application Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Navigation</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Application navigation blocks including sidebars, shells, navbars, and dashboard footers for building admin panel layouts.</p>

    {{-- sidenav: Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.application.sidenav />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Sidebar Navigation" />

    {{-- sidenav: Custom props --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.application.sidenav
    brandName="My App"
    brandHref="/dashboard"
    id="custom-sidebar">
    <ul class="space-y-2 font-medium">
        <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <span class="ms-3">Custom Item</span>
            </a>
        </li>
    </ul>
</x-fwb.blocks.application.sidenav>
BLADE;
    @endphp
    <x-preview :code="$code2" title="Sidebar Navigation with Custom Props" />

    {{-- shell: Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.application.shell />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default Application Shell" />

    {{-- shell: Custom props --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.application.shell
    brandName="Admin Panel"
    brandHref="/admin"
    sidebarId="admin-sidebar">
    <div class="p-4">
        <h2 class="text-xl font-bold text-gray-900 dark:text-white">Dashboard Content</h2>
        <p class="mt-2 text-gray-500 dark:text-gray-400">Main content goes here.</p>
    </div>
</x-fwb.blocks.application.shell>
BLADE;
    @endphp
    <x-preview :code="$code4" title="Application Shell with Custom Props" />

    {{-- navbar: Default --}}
    @php
    $code5 = <<<'BLADE'
<x-fwb.blocks.application.navbar />
BLADE;
    @endphp
    <x-preview :code="$code5" title="Default Dashboard Navbar" />

    {{-- navbar: Custom props --}}
    @php
    $code6 = <<<'BLADE'
<x-fwb.blocks.application.navbar
    brandName="My Dashboard"
    brandHref="/home" />
BLADE;
    @endphp
    <x-preview :code="$code6" title="Dashboard Navbar with Custom Props" />

    {{-- dashboard-footer: Default --}}
    @php
    $code7 = <<<'BLADE'
<x-fwb.blocks.application.dashboard-footer />
BLADE;
    @endphp
    <x-preview :code="$code7" title="Default Dashboard Footer" />

    {{-- dashboard-footer: Custom props --}}
    @php
    $code8 = <<<'BLADE'
<x-fwb.blocks.application.dashboard-footer
    brandName="My Company"
    brandHref="/about"
    copyright="&copy; 2026 My Company. All Rights Reserved." />
BLADE;
    @endphp
    <x-preview :code="$code8" title="Dashboard Footer with Custom Props" />

    {{-- Properties Tables --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- sidenav --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Sidebar Navigation <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.sidenav</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandName</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Flowbite</code></td>
                        <td class="px-6 py-4">Brand name displayed at the top of the sidebar.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">/</code></td>
                        <td class="px-6 py-4">URL for the brand link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default-sidebar</code></td>
                        <td class="px-6 py-4">The HTML id attribute for the sidebar element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">logo</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom logo replacing the default SVG icon.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom navigation items replacing the default menu.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- shell --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Application Shell <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.shell</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandName</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Flowbite</code></td>
                        <td class="px-6 py-4">Brand name displayed in navbar and sidebar.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">/</code></td>
                        <td class="px-6 py-4">URL for the brand link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">sidebarId</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">logo-sidebar</code></td>
                        <td class="px-6 py-4">The HTML id for the sidebar element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">navbar</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom navbar replacing the default top navigation bar.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">logo</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom logo replacing the default SVG icon in the navbar.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">navbarEnd</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom content at the end of the navbar.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">sidebar</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom sidebar navigation content.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">sidebarBottom</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Content pinned to the bottom of the sidebar.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">content</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Main content area (alias for default slot).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for the main content area.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- navbar --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Dashboard Navbar <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.navbar</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandName</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Flowbite</code></td>
                        <td class="px-6 py-4">Brand name displayed in the navbar.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">/</code></td>
                        <td class="px-6 py-4">URL for the brand link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">logo</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom logo replacing the default image.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">search</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom search form replacing the default search input.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom actions replacing the default notification, apps, and user menus.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- dashboard-footer --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Dashboard Footer <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.dashboard-footer</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandName</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Flowbite</code></td>
                        <td class="px-6 py-4">Brand name used in the copyright text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">/</code></td>
                        <td class="px-6 py-4">URL for the brand link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">copyright</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&amp;copy; {year} Flowbite&amp;trade;...</code></td>
                        <td class="px-6 py-4">Custom copyright text (supports HTML).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">links</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom links replacing the default footer links.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Alternative to the links slot for custom footer content.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
