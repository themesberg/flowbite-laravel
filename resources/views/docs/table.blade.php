<x-layouts.app title="Table - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Table</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the table component to show data in a structured tabular format with support for striped rows, hover states, and more.</p>

    {{-- Default Table --}}
    @php
    $code = <<<'BLADE'
<x-fwb.table>
    <x-slot:head>
        <x-fwb.table.head>
            <x-fwb.table.cell :header="true">Product name</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Color</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Category</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Price</x-fwb.table.cell>
        </x-fwb.table.head>
    </x-slot:head>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Apple MacBook Pro 17"</x-fwb.table.cell>
        <x-fwb.table.cell>Silver</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop</x-fwb.table.cell>
        <x-fwb.table.cell>$2999</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Microsoft Surface Pro</x-fwb.table.cell>
        <x-fwb.table.cell>White</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop PC</x-fwb.table.cell>
        <x-fwb.table.cell>$1999</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Magic Mouse 2</x-fwb.table.cell>
        <x-fwb.table.cell>Black</x-fwb.table.cell>
        <x-fwb.table.cell>Accessories</x-fwb.table.cell>
        <x-fwb.table.cell>$99</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Apple Watch</x-fwb.table.cell>
        <x-fwb.table.cell>Silver</x-fwb.table.cell>
        <x-fwb.table.cell>Accessories</x-fwb.table.cell>
        <x-fwb.table.cell>$179</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">iPad</x-fwb.table.cell>
        <x-fwb.table.cell>Gold</x-fwb.table.cell>
        <x-fwb.table.cell>Tablet</x-fwb.table.cell>
        <x-fwb.table.cell>$799</x-fwb.table.cell>
    </x-fwb.table.row>
</x-fwb.table>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Table" />

    {{-- Striped Rows --}}
    @php
    $code = <<<'BLADE'
<x-fwb.table :striped="true">
    <x-slot:head>
        <x-fwb.table.head>
            <x-fwb.table.cell :header="true">Product name</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Color</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Category</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Price</x-fwb.table.cell>
        </x-fwb.table.head>
    </x-slot:head>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Apple MacBook Pro 17"</x-fwb.table.cell>
        <x-fwb.table.cell>Silver</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop</x-fwb.table.cell>
        <x-fwb.table.cell>$2999</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Microsoft Surface Pro</x-fwb.table.cell>
        <x-fwb.table.cell>White</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop PC</x-fwb.table.cell>
        <x-fwb.table.cell>$1999</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Magic Mouse 2</x-fwb.table.cell>
        <x-fwb.table.cell>Black</x-fwb.table.cell>
        <x-fwb.table.cell>Accessories</x-fwb.table.cell>
        <x-fwb.table.cell>$99</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Apple Watch</x-fwb.table.cell>
        <x-fwb.table.cell>Silver</x-fwb.table.cell>
        <x-fwb.table.cell>Accessories</x-fwb.table.cell>
        <x-fwb.table.cell>$179</x-fwb.table.cell>
    </x-fwb.table.row>
</x-fwb.table>
BLADE;
    @endphp
    <x-preview :code="$code" title="Striped Rows" />

    {{-- Hover State --}}
    @php
    $code = <<<'BLADE'
<x-fwb.table :hoverable="true">
    <x-slot:head>
        <x-fwb.table.head>
            <x-fwb.table.cell :header="true">Product name</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Color</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Category</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Price</x-fwb.table.cell>
        </x-fwb.table.head>
    </x-slot:head>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Apple MacBook Pro 17"</x-fwb.table.cell>
        <x-fwb.table.cell>Silver</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop</x-fwb.table.cell>
        <x-fwb.table.cell>$2999</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Microsoft Surface Pro</x-fwb.table.cell>
        <x-fwb.table.cell>White</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop PC</x-fwb.table.cell>
        <x-fwb.table.cell>$1999</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Magic Mouse 2</x-fwb.table.cell>
        <x-fwb.table.cell>Black</x-fwb.table.cell>
        <x-fwb.table.cell>Accessories</x-fwb.table.cell>
        <x-fwb.table.cell>$99</x-fwb.table.cell>
    </x-fwb.table.row>
</x-fwb.table>
BLADE;
    @endphp
    <x-preview :code="$code" title="Hover State" />

    {{-- Table with Shadow --}}
    @php
    $code = <<<'BLADE'
<x-fwb.table :shadow="true">
    <x-slot:head>
        <x-fwb.table.head>
            <x-fwb.table.cell :header="true">Product name</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Color</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Category</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Price</x-fwb.table.cell>
        </x-fwb.table.head>
    </x-slot:head>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Apple MacBook Pro 17"</x-fwb.table.cell>
        <x-fwb.table.cell>Silver</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop</x-fwb.table.cell>
        <x-fwb.table.cell>$2999</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Microsoft Surface Pro</x-fwb.table.cell>
        <x-fwb.table.cell>White</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop PC</x-fwb.table.cell>
        <x-fwb.table.cell>$1999</x-fwb.table.cell>
    </x-fwb.table.row>
</x-fwb.table>
BLADE;
    @endphp
    <x-preview :code="$code" title="Table with Shadow" />

    {{-- Table Foot --}}
    @php
    $code = <<<'BLADE'
<x-fwb.table>
    <x-slot:head>
        <x-fwb.table.head>
            <x-fwb.table.cell :header="true">Product name</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Qty</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Price</x-fwb.table.cell>
        </x-fwb.table.head>
    </x-slot:head>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Apple MacBook Pro 17"</x-fwb.table.cell>
        <x-fwb.table.cell>1</x-fwb.table.cell>
        <x-fwb.table.cell>$2999</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Magic Mouse 2</x-fwb.table.cell>
        <x-fwb.table.cell>2</x-fwb.table.cell>
        <x-fwb.table.cell>$198</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-slot:foot>
        <x-fwb.table.row>
            <x-fwb.table.cell class="font-semibold text-heading">Total</x-fwb.table.cell>
            <x-fwb.table.cell class="font-semibold text-heading">3</x-fwb.table.cell>
            <x-fwb.table.cell class="font-semibold text-heading">$3197</x-fwb.table.cell>
        </x-fwb.table.row>
    </x-slot:foot>
</x-fwb.table>
BLADE;
    @endphp
    <x-preview :code="$code" title="Table Foot" />

    {{-- Table Caption --}}
    @php
    $code = <<<'BLADE'
<x-fwb.table>
    <x-slot:caption>
        Our products
        <p class="mt-1.5 text-sm font-normal text-body">Browse a list of Flowbite products designed to help you work and play, stay organized, get answers, keep in touch, grow your business, and more.</p>
    </x-slot:caption>
    <x-slot:head>
        <x-fwb.table.head>
            <x-fwb.table.cell :header="true">Product name</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Color</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Category</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Price</x-fwb.table.cell>
        </x-fwb.table.head>
    </x-slot:head>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Apple MacBook Pro 17"</x-fwb.table.cell>
        <x-fwb.table.cell>Silver</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop</x-fwb.table.cell>
        <x-fwb.table.cell>$2999</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Microsoft Surface Pro</x-fwb.table.cell>
        <x-fwb.table.cell>White</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop PC</x-fwb.table.cell>
        <x-fwb.table.cell>$1999</x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Magic Mouse 2</x-fwb.table.cell>
        <x-fwb.table.cell>Black</x-fwb.table.cell>
        <x-fwb.table.cell>Accessories</x-fwb.table.cell>
        <x-fwb.table.cell>$99</x-fwb.table.cell>
    </x-fwb.table.row>
</x-fwb.table>
BLADE;
    @endphp
    <x-preview :code="$code" title="Table Caption" />

    {{-- Striped Rows with Hover --}}
    @php
    $code = <<<'BLADE'
<x-fwb.table :striped="true" :hoverable="true">
    <x-slot:head>
        <x-fwb.table.head>
            <x-fwb.table.cell :header="true">Product name</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Color</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Category</x-fwb.table.cell>
            <x-fwb.table.cell :header="true">Price</x-fwb.table.cell>
            <x-fwb.table.cell :header="true"><span class="sr-only">Edit</span></x-fwb.table.cell>
        </x-fwb.table.head>
    </x-slot:head>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Apple MacBook Pro 17"</x-fwb.table.cell>
        <x-fwb.table.cell>Silver</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop</x-fwb.table.cell>
        <x-fwb.table.cell>$2999</x-fwb.table.cell>
        <x-fwb.table.cell><a href="#" class="font-medium text-brand hover:underline">Edit</a></x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Microsoft Surface Pro</x-fwb.table.cell>
        <x-fwb.table.cell>White</x-fwb.table.cell>
        <x-fwb.table.cell>Laptop PC</x-fwb.table.cell>
        <x-fwb.table.cell>$1999</x-fwb.table.cell>
        <x-fwb.table.cell><a href="#" class="font-medium text-brand hover:underline">Edit</a></x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Magic Mouse 2</x-fwb.table.cell>
        <x-fwb.table.cell>Black</x-fwb.table.cell>
        <x-fwb.table.cell>Accessories</x-fwb.table.cell>
        <x-fwb.table.cell>$99</x-fwb.table.cell>
        <x-fwb.table.cell><a href="#" class="font-medium text-brand hover:underline">Edit</a></x-fwb.table.cell>
    </x-fwb.table.row>
    <x-fwb.table.row>
        <x-fwb.table.cell :row-header="true">Apple Watch</x-fwb.table.cell>
        <x-fwb.table.cell>Silver</x-fwb.table.cell>
        <x-fwb.table.cell>Accessories</x-fwb.table.cell>
        <x-fwb.table.cell>$179</x-fwb.table.cell>
        <x-fwb.table.cell><a href="#" class="font-medium text-brand hover:underline">Edit</a></x-fwb.table.cell>
    </x-fwb.table.row>
</x-fwb.table>
BLADE;
    @endphp
    <x-preview :code="$code" title="Striped Rows with Hover and Actions" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Table <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.table</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">striped</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Enable striped rows with alternating background colors. Automatically applied to all child rows.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">hoverable</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Enable hover highlighting on all child rows.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">shadow</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Add a subtle shadow to the table wrapper.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">noborder</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Remove the border from the table wrapper.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">head</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the table header row(s).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">foot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the table footer row(s).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">caption</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the table caption.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Table Head <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.table.head</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for header cells.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Table Row <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.table.row</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for table cells. Striped and hoverable styles are inherited from the parent <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">x-fwb.table</code> component.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Table Cell <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.table.cell</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">header</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Render as a column header <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&lt;th scope="col"&gt;</code>. Used inside <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">x-fwb.table.head</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">row-header</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Render as a row header <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&lt;th scope="row"&gt;</code> with bold text. Used for the first cell in a body row.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
