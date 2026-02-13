<x-layouts.app title="Filters & Search - Application Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Filters & Search</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Filter and faceted search blocks for building product filtering interfaces with dropdowns, modals, drawers, and toggle panels.</p>

    {{-- filter: Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.application.filter />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Filter Dropdown" />

    {{-- filter: Custom props --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.application.filter
    title="Filter Options"
    id="customFilter"
    action="/reset-filters"
    submitText="Apply"
    resetText="Clear all" />
BLADE;
    @endphp
    <x-preview :code="$code2" title="Filter Dropdown with Custom Props" />

    {{-- faceted-search-modal: Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.application.faceted-search-modal />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default Faceted Search Modal" />

    {{-- faceted-search-modal: Custom props --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.application.faceted-search-modal
    title="Advanced Filters"
    id="advanced-filter-modal">
    <div class="space-y-4">
        <h4 class="text-sm font-medium text-gray-900 dark:text-white">Status</h4>
        <div class="flex items-center">
            <input id="status-active" type="checkbox" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
            <label for="status-active" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Active</label>
        </div>
        <div class="flex items-center">
            <input id="status-inactive" type="checkbox" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
            <label for="status-inactive" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Inactive</label>
        </div>
    </div>
</x-fwb.blocks.application.faceted-search-modal>
BLADE;
    @endphp
    <x-preview :code="$code4" title="Faceted Search Modal with Custom Content" />

    {{-- faceted-search-toggle: Default --}}
    @php
    $code5 = <<<'BLADE'
<x-fwb.blocks.application.faceted-search-toggle />
BLADE;
    @endphp
    <x-preview :code="$code5" title="Default Faceted Search Toggle Panel" />

    {{-- faceted-search-toggle: Custom props --}}
    @php
    $code6 = <<<'BLADE'
<x-fwb.blocks.application.faceted-search-toggle title="Refine Results">
    <div class="grid gap-4 sm:grid-cols-2 pb-4">
        <div>
            <h3 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Status</h3>
            <label class="flex items-center justify-between cursor-pointer">
                <span class="text-sm font-medium text-gray-900 dark:text-gray-300">Published</span>
                <div class="relative">
                    <input type="checkbox" class="sr-only peer">
                    <div class="w-9 h-5 bg-gray-200 rounded-full peer peer-checked:bg-blue-600 after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:after:translate-x-full"></div>
                </div>
            </label>
        </div>
    </div>
</x-fwb.blocks.application.faceted-search-toggle>
BLADE;
    @endphp
    <x-preview :code="$code6" title="Faceted Search Toggle with Custom Content" />

    {{-- faceted-search-drawer: Default --}}
    @php
    $code7 = <<<'BLADE'
<x-fwb.blocks.application.faceted-search-drawer />
BLADE;
    @endphp
    <x-preview :code="$code7" title="Default Faceted Search Drawer" />

    {{-- faceted-search-drawer: Custom props --}}
    @php
    $code8 = <<<'BLADE'
<x-fwb.blocks.application.faceted-search-drawer
    title="Filter Products"
    id="product-filter-drawer">
    <div class="space-y-6">
        <div>
            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Brand</h6>
            <ul class="space-y-2">
                <li class="flex items-center">
                    <input id="brand-apple" type="checkbox" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                    <label for="brand-apple" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Apple</label>
                </li>
                <li class="flex items-center">
                    <input id="brand-samsung" type="checkbox" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                    <label for="brand-samsung" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Samsung</label>
                </li>
            </ul>
        </div>
    </div>
</x-fwb.blocks.application.faceted-search-drawer>
BLADE;
    @endphp
    <x-preview :code="$code8" title="Faceted Search Drawer with Custom Content" />

    {{-- Properties Tables --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- filter --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Filter <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.filter</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Filters</code></td>
                        <td class="px-6 py-4">The heading displayed at the top of the filter panel.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">filterDropdown</code></td>
                        <td class="px-6 py-4">The HTML id attribute for the filter container.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">URL for the reset action link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">submitText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Apply filters</code></td>
                        <td class="px-6 py-4">Label for the submit button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">resetText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Reset</code></td>
                        <td class="px-6 py-4">Label for the reset link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">headerActions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom actions in the header area replacing the reset link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom filter content replacing the default checkboxes and radio buttons.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- faceted-search-modal --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Faceted Search Modal <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.faceted-search-modal</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Filter by</code></td>
                        <td class="px-6 py-4">The modal heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">filter-modal</code></td>
                        <td class="px-6 py-4">The HTML id for the modal element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">footer</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom footer replacing the default Show results/Reset buttons.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Filter content inside the modal body.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- faceted-search-toggle --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Faceted Search Toggle <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.faceted-search-toggle</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Filter products</code></td>
                        <td class="px-6 py-4">The heading text shown above the toggle panel.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">results</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Content displayed below the filter toggles for search results.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Filter toggle content inside the collapsible panel.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- faceted-search-drawer --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Faceted Search Drawer <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.faceted-search-drawer</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Filter options</code></td>
                        <td class="px-6 py-4">The drawer heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">filter-drawer</code></td>
                        <td class="px-6 py-4">The HTML id for the drawer element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">footer</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom footer replacing the default Apply filters/Reset buttons.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Filter content inside the drawer body.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
