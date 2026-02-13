<x-layouts.app title="CRUD Forms & Details - Application Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">CRUD Forms & Details</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Form-based and section-based CRUD blocks for creating, updating, and reading items, along with success message feedback in application interfaces.</p>

    {{-- crud-create-form: Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.application.crud-create-form />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Create Form" />

    {{-- crud-create-form: Custom props --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.application.crud-create-form
    title="Add new employee"
    action="/employees">
    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
        <div class="sm:col-span-2">
            <label for="emp-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
            <input type="text" name="name" id="emp-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="John Doe" required>
        </div>
        <div>
            <label for="emp-email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="emp-email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="john@example.com" required>
        </div>
        <div>
            <label for="emp-department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
            <select id="emp-department" name="department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                <option selected="">Select department</option>
                <option value="engineering">Engineering</option>
                <option value="design">Design</option>
                <option value="marketing">Marketing</option>
            </select>
        </div>
    </div>
    <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
        Add employee
    </button>
</x-fwb.blocks.application.crud-create-form>
BLADE;
    @endphp
    <x-preview :code="$code2" title="Create Form with Custom Fields" />

    {{-- crud-update-form: Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.application.crud-update-form />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default Update Form" />

    {{-- crud-update-form: Custom props --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.application.crud-update-form
    title="Edit employee"
    action="/employees/1">
    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
        <div class="sm:col-span-2">
            <label for="edit-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
            <input type="text" name="name" id="edit-name" value="Jane Smith" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
        </div>
        <div>
            <label for="edit-email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
            <input type="email" name="email" id="edit-email" value="jane@example.com" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
        </div>
        <div>
            <label for="edit-role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
            <input type="text" name="role" id="edit-role" value="Senior Designer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required>
        </div>
    </div>
    <div class="flex items-center space-x-4 mt-4 sm:mt-6">
        <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Save changes
        </button>
        <button type="button" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
            Delete
        </button>
    </div>
</x-fwb.blocks.application.crud-update-form>
BLADE;
    @endphp
    <x-preview :code="$code4" title="Update Form with Custom Fields" />

    {{-- crud-read-section: Default --}}
    @php
    $code5 = <<<'BLADE'
<x-fwb.blocks.application.crud-read-section />
BLADE;
    @endphp
    <x-preview :code="$code5" title="Default Read Section" />

    {{-- crud-read-section: Custom props --}}
    @php
    $code6 = <<<'BLADE'
<x-fwb.blocks.application.crud-read-section title="Employee Profile">
    <dl>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Name</dt>
        <dd class="mb-4 font-light text-gray-500 dark:text-gray-400">Jane Smith</dd>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Department</dt>
        <dd class="mb-4 font-light text-gray-500 dark:text-gray-400">
            <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Design</span>
        </dd>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Email</dt>
        <dd class="mb-4 font-light text-gray-500 dark:text-gray-400">jane@example.com</dd>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Role</dt>
        <dd class="mb-4 font-light text-gray-500 dark:text-gray-400">Senior Designer</dd>
    </dl>
    <div class="flex items-center space-x-4">
        <button type="button" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Edit
        </button>
        <button type="button" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
            Delete
        </button>
    </div>
</x-fwb.blocks.application.crud-read-section>
BLADE;
    @endphp
    <x-preview :code="$code6" title="Read Section with Custom Content" />

    {{-- crud-success-message: Default --}}
    @php
    $code7 = <<<'BLADE'
<x-fwb.blocks.application.crud-success-message />
BLADE;
    @endphp
    <x-preview :code="$code7" title="Default Success Message" />

    {{-- crud-success-message: Custom props --}}
    @php
    $code8 = <<<'BLADE'
<x-fwb.blocks.application.crud-success-message
    title="Product created"
    message="Your new product has been added to the catalog successfully.">
    <x-slot:actions>
        <a href="#" class="py-2 px-3 text-sm font-medium text-center text-white rounded-lg bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
            View product
        </a>
        <button type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 hover:text-gray-900 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
            Back to list
        </button>
    </x-slot:actions>
</x-fwb.blocks.application.crud-success-message>
BLADE;
    @endphp
    <x-preview :code="$code8" title="Success Message with Custom Actions" />

    {{-- Properties Tables --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- crud-create-form --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Create Form <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-create-form</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Add a new product</code></td>
                        <td class="px-6 py-4">The form heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">Form action URL for the POST request.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom form fields and submit button replacing the default product form.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- crud-update-form --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Update Form <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-update-form</code></h3>
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
                        <td class="px-6 py-4">The form heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">Form action URL. Uses PUT method spoofing.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom form fields and action buttons replacing the default product form.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- crud-read-section --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Read Section <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-read-section</code></h3>
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
                        <td class="px-6 py-4">The section heading text.</td>
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

        {{-- crud-success-message --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Success Message <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.application.crud-success-message</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Successfully completed</code></td>
                        <td class="px-6 py-4">The success message heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">message</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Your action has been completed successfully.</code></td>
                        <td class="px-6 py-4">The descriptive message shown below the heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for custom action buttons replacing the default Continue button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for custom action buttons (used when actions slot is not set).</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
