<x-layouts.app title="Table Headers - Application Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Table Headers</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Table header and footer blocks for search, filtering, pagination, and action buttons in data tables.</p>

    {{-- table-header: Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.application.table-header />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Table Header" />

    {{-- table-header: Custom props --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.application.table-header
    title="Users"
    buttonText="Add user"
    action="/users/create"
    searchPlaceholder="Search users..." />
BLADE;
    @endphp
    <x-preview :code="$code2" title="Table Header with Custom Props" />

    {{-- table-header-cta: Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.application.table-header-cta />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default Table Header with CTA" />

    {{-- table-header-cta: Custom props --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.application.table-header-cta
    title="Inventory"
    description="Manage your inventory items and track stock levels across all warehouses." />
BLADE;
    @endphp
    <x-preview :code="$code4" title="Table Header CTA with Custom Props" />

    {{-- table-header-button-group: Default --}}
    @php
    $code5 = <<<'BLADE'
<x-fwb.blocks.application.table-header-button-group />
BLADE;
    @endphp
    <x-preview :code="$code5" title="Default Table Header with Button Group" />

    {{-- table-header-button-group: Custom props --}}
    @php
    $code6 = <<<'BLADE'
<x-fwb.blocks.application.table-header-button-group
    title="Orders"
    searchPlaceholder="Search orders..." />
BLADE;
    @endphp
    <x-preview :code="$code6" title="Table Header Button Group with Custom Props" />

    {{-- table-footer: Default --}}
    @php
    $code7 = <<<'BLADE'
<x-fwb.blocks.application.table-footer />
BLADE;
    @endphp
    <x-preview :code="$code7" title="Default Table Footer" />

    {{-- table-footer: Custom props --}}
    @php
    $code8 = <<<'BLADE'
<x-fwb.blocks.application.table-footer showing="1-25" total="500" />
BLADE;
    @endphp
    <x-preview :code="$code8" title="Table Footer with Custom Props" />

    {{-- table-footer-button: Default --}}
    @php
    $code9 = <<<'BLADE'
<x-fwb.blocks.application.table-footer-button />
BLADE;
    @endphp
    <x-preview :code="$code9" title="Default Table Footer with Buttons" />

    {{-- table-footer-button: Custom props --}}
    @php
    $code10 = <<<'BLADE'
<x-fwb.blocks.application.table-footer-button showing="11-20" total="250" />
BLADE;
    @endphp
    <x-preview :code="$code10" title="Table Footer Buttons with Custom Props" />

    {{-- Properties Tables --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- table-header --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Table Header <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.table-header</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">All Products</code></td>
                        <td class="px-6 py-4">The heading displayed in the table header.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">buttonText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Add product</code></td>
                        <td class="px-6 py-4">Label for the primary action button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">URL for the primary action button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">searchPlaceholder</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Search</code></td>
                        <td class="px-6 py-4">Placeholder text for the search input.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">search</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom search area replacing the default search input.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom actions area replacing the default add button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Content rendered below the header (e.g. table rows).</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- table-header-cta --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Table Header CTA <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.table-header-cta</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">All Products</code></td>
                        <td class="px-6 py-4">The heading displayed in the header.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Browse a list of Flowbite products...</code></td>
                        <td class="px-6 py-4">Description text shown in the info banner.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom actions area next to the title.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">cta</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom CTA content replacing the default description.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Content rendered below the header.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- table-header-button-group --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Table Header Button Group <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.table-header-button-group</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">All Products</code></td>
                        <td class="px-6 py-4">The heading displayed in the header.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">searchPlaceholder</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Search</code></td>
                        <td class="px-6 py-4">Placeholder text for the search input.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">buttonGroup</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom button group replacing the default All/Active/Inactive buttons.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom actions area replacing the default Actions/Filter dropdowns.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Content rendered below the header.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- table-footer --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Table Footer <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.table-footer</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">showing</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">1-10</code></td>
                        <td class="px-6 py-4">The range of items currently displayed.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">total</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">1000</code></td>
                        <td class="px-6 py-4">The total number of items.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom pagination content replacing the default numbered pagination.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- table-footer-button --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Table Footer Button <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.table-footer-button</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">showing</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">1-10</code></td>
                        <td class="px-6 py-4">The range of items currently displayed.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">total</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">1000</code></td>
                        <td class="px-6 py-4">The total number of items.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">buttons</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom buttons replacing the default Previous/Next navigation.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
