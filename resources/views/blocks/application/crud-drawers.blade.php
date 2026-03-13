<x-layouts.app title="CRUD Drawers - Application Blocks - Flowbite Blade" description="Drawer-based CRUD operation blocks for creating, reading, and updating items using slide-out panels.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">CRUD Drawers</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Drawer-based CRUD operation blocks for creating, reading, and updating items using slide-out panels.</p>

    {{-- crud-create-drawer: Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.application.crud-create-drawer />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Create Drawer" />

    {{-- crud-create-drawer: Custom props --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.application.crud-create-drawer
    title="New employee"
    id="employee-create-drawer"
    action="/employees">
    <div class="space-y-4">
        <div>
            <label for="emp-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
            <input type="text" name="name" id="emp-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="John Doe" required>
        </div>
        <div>
            <label for="emp-role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
            <input type="text" name="role" id="emp-role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Developer" required>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Add employee
        </button>
    </div>
</x-fwb.blocks.application.crud-create-drawer>
BLADE;
    @endphp
    <x-preview :code="$code2" title="Create Drawer with Custom Fields" />

    {{-- crud-update-drawer: Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.application.crud-update-drawer />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default Update Drawer" />

    {{-- crud-update-drawer: Custom props --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.application.crud-update-drawer
    title="Edit item"
    id="edit-item-drawer"
    action="/items/1">
    <div class="space-y-4">
        <div>
            <label for="item-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="item-name" value="Existing Item" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Save changes
        </button>
    </div>
</x-fwb.blocks.application.crud-update-drawer>
BLADE;
    @endphp
    <x-preview :code="$code4" title="Update Drawer with Custom Fields" />

    {{-- crud-read-drawer: Default --}}
    @php
    $code5 = <<<'BLADE'
<x-fwb.blocks.application.crud-read-drawer />
BLADE;
    @endphp
    <x-preview :code="$code5" title="Default Read Drawer" />

    {{-- crud-read-drawer: Custom props --}}
    @php
    $code6 = <<<'BLADE'
<x-fwb.blocks.application.crud-read-drawer
    title="Order Details"
    id="order-details-drawer">
    <dl>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Order ID</dt>
        <dd class="mb-4 font-light text-gray-500 dark:text-gray-400">#ORD-12345</dd>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Status</dt>
        <dd class="mb-4 font-light text-gray-500 dark:text-gray-400">
            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Delivered</span>
        </dd>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Total</dt>
        <dd class="mb-4 font-light text-gray-500 dark:text-gray-400">$459.99</dd>
    </dl>
</x-fwb.blocks.application.crud-read-drawer>
BLADE;
    @endphp
    <x-preview :code="$code6" title="Read Drawer with Custom Content" />

    {{-- Properties Tables --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- crud-create-drawer --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Create Drawer <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-create-drawer</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Add new item</code></td>
                        <td class="px-6 py-4">The drawer heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">create-drawer</code></td>
                        <td class="px-6 py-4">The HTML id for the drawer element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">Form action URL.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Form fields and buttons inside the drawer. Wrapped in a POST form.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- crud-update-drawer --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Update Drawer <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-update-drawer</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Update item</code></td>
                        <td class="px-6 py-4">The drawer heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">update-drawer</code></td>
                        <td class="px-6 py-4">The HTML id for the drawer element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">Form action URL. Uses PUT method spoofing.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom action buttons rendered below the form.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Form fields inside the drawer. Wrapped in a PUT form.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- crud-read-drawer --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Read Drawer <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-read-drawer</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Item Details</code></td>
                        <td class="px-6 py-4">The drawer heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">read-drawer</code></td>
                        <td class="px-6 py-4">The HTML id for the drawer element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom action buttons rendered below the content with a top border.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Detail content inside the drawer body.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
