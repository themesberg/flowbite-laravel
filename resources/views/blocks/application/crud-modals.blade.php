<x-layouts.app title="CRUD Modals - Application Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">CRUD Modals</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Modal-based CRUD operation blocks for creating, reading, updating, and deleting items in application interfaces.</p>

    {{-- crud-create-modal: Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.application.crud-create-modal />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Create Modal" />

    {{-- crud-create-modal: Custom props --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.application.crud-create-modal
    title="Add new user"
    id="createUserModal"
    action="/users"
    method="POST"
    submitText="Create user">
    <div class="grid gap-4 mb-4 sm:grid-cols-2">
        <div>
            <label for="user-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
            <input type="text" name="name" id="user-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="John Doe" required>
        </div>
        <div>
            <label for="user-email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="user-email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="john@example.com" required>
        </div>
    </div>
</x-fwb.blocks.application.crud-create-modal>
BLADE;
    @endphp
    <x-preview :code="$code2" title="Create Modal with Custom Fields" />

    {{-- crud-update-modal: Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.application.crud-update-modal />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default Update Modal" />

    {{-- crud-update-modal: Custom props --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.application.crud-update-modal
    title="Edit product"
    id="editProductModal"
    action="/products/1"
    method="PUT"
    submitText="Save changes" />
BLADE;
    @endphp
    <x-preview :code="$code4" title="Update Modal with Custom Props" />

    {{-- crud-read-modal: Default --}}
    @php
    $code5 = <<<'BLADE'
<x-fwb.blocks.application.crud-read-modal />
BLADE;
    @endphp
    <x-preview :code="$code5" title="Default Read Modal" />

    {{-- crud-read-modal: Custom props --}}
    @php
    $code6 = <<<'BLADE'
<x-fwb.blocks.application.crud-read-modal
    title="Product Details"
    id="viewProductModal">
    <dl>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Name</dt>
        <dd class="mb-4 font-light text-gray-500 dark:text-gray-400">Custom Product</dd>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Price</dt>
        <dd class="mb-4 font-light text-gray-500 dark:text-gray-400">$1,499</dd>
    </dl>
</x-fwb.blocks.application.crud-read-modal>
BLADE;
    @endphp
    <x-preview :code="$code6" title="Read Modal with Custom Content" />

    {{-- crud-delete-confirm: Default --}}
    @php
    $code7 = <<<'BLADE'
<x-fwb.blocks.application.crud-delete-confirm />
BLADE;
    @endphp
    <x-preview :code="$code7" title="Default Delete Confirmation Modal" />

    {{-- crud-delete-confirm: Custom props --}}
    @php
    $code8 = <<<'BLADE'
<x-fwb.blocks.application.crud-delete-confirm
    title="Delete this item?"
    message="This will permanently remove the item and all associated data. This action cannot be undone."
    id="confirmDeleteModal"
    action="/products/1" />
BLADE;
    @endphp
    <x-preview :code="$code8" title="Delete Confirmation with Custom Props" />

    {{-- Properties Tables --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- crud-create-modal --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Create Modal <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-create-modal</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Add new product</code></td>
                        <td class="px-6 py-4">The modal heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">createProductModal</code></td>
                        <td class="px-6 py-4">The HTML id for the modal element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">Form action URL.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">method</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">POST</code></td>
                        <td class="px-6 py-4">HTTP method for the form.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">submitText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Add new product</code></td>
                        <td class="px-6 py-4">Label for the submit button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">footer</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom footer replacing the default submit button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom form fields replacing the default product form.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- crud-update-modal --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Update Modal <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-update-modal</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Update product</code></td>
                        <td class="px-6 py-4">The modal heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">updateProductModal</code></td>
                        <td class="px-6 py-4">The HTML id for the modal element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">Form action URL.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">method</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">POST</code></td>
                        <td class="px-6 py-4">HTTP method for the form. Supports PUT, PATCH, DELETE via method spoofing.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">submitText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Update</code></td>
                        <td class="px-6 py-4">Label for the submit button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">footer</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom footer replacing the default Update/Delete buttons.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom form fields replacing the default product form.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- crud-read-modal --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Read Modal <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-read-modal</code></h3>
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
                        <td class="px-6 py-4">The modal heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">read-modal</code></td>
                        <td class="px-6 py-4">The HTML id for the modal element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom content replacing the default product details and action buttons.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- crud-delete-confirm --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Delete Confirmation <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-delete-confirm</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Are you sure?</code></td>
                        <td class="px-6 py-4">The confirmation dialog heading (used for sr-only context).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">message</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Are you sure you want to delete this item?...</code></td>
                        <td class="px-6 py-4">The confirmation message displayed to the user.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">delete-modal</code></td>
                        <td class="px-6 py-4">The HTML id for the modal element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">Form action URL for the DELETE request.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom action buttons replacing the default Cancel/Confirm buttons.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
