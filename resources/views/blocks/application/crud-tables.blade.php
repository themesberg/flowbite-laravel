<x-layouts.app title="CRUD Tables - Application Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">CRUD Tables</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Table-based CRUD blocks for listing, searching, and managing items with built-in pagination, filters, and action controls in application interfaces.</p>

    {{-- crud: Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.application.crud />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default CRUD Table" />

    {{-- crud: Custom props --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.application.crud title="All Employees">
    <x-slot:rows>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">Name</th>
                <th scope="col" class="px-4 py-3">Department</th>
                <th scope="col" class="px-4 py-3">Role</th>
                <th scope="col" class="px-4 py-3">Email</th>
                <th scope="col" class="px-4 py-3">
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b dark:border-gray-700">
                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Jane Smith</th>
                <td class="px-4 py-3">Design</td>
                <td class="px-4 py-3">Senior Designer</td>
                <td class="px-4 py-3">jane@example.com</td>
                <td class="px-4 py-3 flex items-center justify-end">
                    <button class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                        <x-fwb-o-dots-horizontal class="w-5 h-5" />
                    </button>
                </td>
            </tr>
            <tr class="border-b dark:border-gray-700">
                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">John Doe</th>
                <td class="px-4 py-3">Engineering</td>
                <td class="px-4 py-3">Backend Developer</td>
                <td class="px-4 py-3">john@example.com</td>
                <td class="px-4 py-3 flex items-center justify-end">
                    <button class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                        <x-fwb-o-dots-horizontal class="w-5 h-5" />
                    </button>
                </td>
            </tr>
        </tbody>
    </x-slot:rows>
</x-fwb.blocks.application.crud>
BLADE;
    @endphp
    <x-preview :code="$code2" title="CRUD Table with Custom Rows" />

    {{-- crud-products: Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.application.crud-products />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default CRUD Products Table" />

    {{-- crud-products: Custom props --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.application.crud-products title="Inventory">
    <x-slot:rows>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-4">Item</th>
                <th scope="col" class="px-4 py-3">Type</th>
                <th scope="col" class="px-4 py-3">Manufacturer</th>
                <th scope="col" class="px-4 py-3">Quantity</th>
                <th scope="col" class="px-4 py-3">Price</th>
                <th scope="col" class="px-4 py-3">
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b dark:border-gray-700">
                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="flex items-center mr-3">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-front-image.png" alt="iMac Front Image" class="h-8 w-auto mr-3">
                        Dell Monitor 24"
                    </div>
                </th>
                <td class="px-4 py-3">
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Monitor</span>
                </td>
                <td class="px-4 py-3">Dell</td>
                <td class="px-4 py-3">150</td>
                <td class="px-4 py-3">$349</td>
                <td class="px-4 py-3 flex items-center justify-end">
                    <button class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                        <x-fwb-o-dots-horizontal class="w-5 h-5" />
                    </button>
                </td>
            </tr>
        </tbody>
    </x-slot:rows>
</x-fwb.blocks.application.crud-products>
BLADE;
    @endphp
    <x-preview :code="$code4" title="CRUD Products Table with Custom Rows" />

    {{-- advanced-table: Default --}}
    @php
    $code5 = <<<'BLADE'
<x-fwb.blocks.application.advanced-table />
BLADE;
    @endphp
    <x-preview :code="$code5" title="Default Advanced Table" />

    {{-- advanced-table: Custom props --}}
    @php
    $code6 = <<<'BLADE'
<x-fwb.blocks.application.advanced-table
    title="Team Members"
    searchPlaceholder="Search members..."
    addButtonText="Add member"
    addAction="/members/create">
    <x-slot:thead>
        <tr>
            <th scope="col" class="px-4 py-3">Name</th>
            <th scope="col" class="px-4 py-3">Role</th>
            <th scope="col" class="px-4 py-3">Status</th>
            <th scope="col" class="px-4 py-3">Joined</th>
            <th scope="col" class="px-4 py-3">
                <span class="sr-only">Actions</span>
            </th>
        </tr>
    </x-slot:thead>
    <x-slot:rows>
        <tr class="border-b dark:border-gray-700">
            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Alice Johnson</th>
            <td class="px-4 py-3">Lead Engineer</td>
            <td class="px-4 py-3">
                <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Active</span>
            </td>
            <td class="px-4 py-3">Jan 2024</td>
            <td class="px-4 py-3 flex items-center justify-end">
                <button class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                    <x-fwb-o-dots-horizontal class="w-5 h-5" />
                </button>
            </td>
        </tr>
        <tr class="border-b dark:border-gray-700">
            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Bob Williams</th>
            <td class="px-4 py-3">Designer</td>
            <td class="px-4 py-3">
                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">On Leave</span>
            </td>
            <td class="px-4 py-3">Mar 2024</td>
            <td class="px-4 py-3 flex items-center justify-end">
                <button class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                    <x-fwb-o-dots-horizontal class="w-5 h-5" />
                </button>
            </td>
        </tr>
    </x-slot:rows>
</x-fwb.blocks.application.advanced-table>
BLADE;
    @endphp
    <x-preview :code="$code6" title="Advanced Table with Custom Props" />

    {{-- advanced-table-products: Default --}}
    @php
    $code7 = <<<'BLADE'
<x-fwb.blocks.application.advanced-table-products />
BLADE;
    @endphp
    <x-preview :code="$code7" title="Default Advanced Table with Products" />

    {{-- advanced-table-products: Custom props --}}
    @php
    $code8 = <<<'BLADE'
<x-fwb.blocks.application.advanced-table-products title="Sales Overview">
    <x-slot:rows>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                </th>
                <th scope="col" class="px-4 py-3">Product</th>
                <th scope="col" class="px-4 py-3">Category</th>
                <th scope="col" class="px-4 py-3">Stock</th>
                <th scope="col" class="px-4 py-3">Revenue</th>
                <th scope="col" class="px-4 py-3">
                    <span class="sr-only">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 px-4 py-3">
                    <div class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-blue-600 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    </div>
                </td>
                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="flex items-center">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-front-image.png" alt="Product" class="h-8 w-auto mr-3">
                        Samsung Galaxy S24
                    </div>
                </th>
                <td class="px-4 py-3">
                    <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Phone</span>
                </td>
                <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">
                    <div class="flex items-center">
                        <div class="h-4 w-4 rounded-full bg-green-400 inline-block mr-2"></div>
                        230
                    </div>
                </td>
                <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">$18,500</td>
                <td class="px-4 py-3 flex items-center justify-end">
                    <button class="inline-flex items-center text-sm font-medium hover:bg-gray-100 dark:hover:bg-gray-700 p-1.5 text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                        <x-fwb-o-dots-horizontal class="w-5 h-5" />
                    </button>
                </td>
            </tr>
        </tbody>
    </x-slot:rows>
</x-fwb.blocks.application.advanced-table-products>
BLADE;
    @endphp
    <x-preview :code="$code8" title="Advanced Table Products with Custom Rows" />

    {{-- Properties Tables --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- crud --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">CRUD Table <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud</code></h3>
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
                        <td class="px-6 py-4">The table section heading (used for accessibility).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">header</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom header area replacing the default search bar and action buttons.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">rows</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom table head and body content replacing the default product rows.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">footer</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom footer area replacing the default pagination navigation.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- crud-products --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">CRUD Products Table <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-products</code></h3>
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
                        <td class="px-6 py-4">The table section heading (used for accessibility).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">header</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom header area replacing the default search bar, action buttons, and filter dropdown.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">rows</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom table head and body content replacing the default product rows with images and category badges.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- advanced-table --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Advanced Table <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.advanced-table</code></h3>
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
                        <td class="px-6 py-4">The table section heading (used for accessibility).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">searchPlaceholder</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Search</code></td>
                        <td class="px-6 py-4">Placeholder text for the search input field.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">addButtonText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Add product</code></td>
                        <td class="px-6 py-4">Label for the primary add/create button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">addAction</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">URL for the add button link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">header</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom header area replacing the default search, add button, actions, and filter controls.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">thead</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom table header row(s) replacing the default column headings.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">rows</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom table body rows replacing the default product data.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">pagination</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom pagination content replacing the default page navigation.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actionsDropdown</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom content for the Actions dropdown menu.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">filterDropdown</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom content for the Filter dropdown menu.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for custom table body rows (used when rows slot is not set).</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- advanced-table-products --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Advanced Table Products <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.advanced-table-products</code></h3>
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
                        <td class="px-6 py-4">The table section heading (used for accessibility).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">header</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom header area replacing the default search bar, action buttons, and filter dropdown.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">rows</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom table head and body content replacing the default product rows with checkboxes, images, badges, and stock indicators.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
