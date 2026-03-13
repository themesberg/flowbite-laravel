<x-layouts.app title="Orders - E-commerce Blocks - Flowbite Blade" description="View and manage customer orders with an overview list and detailed tracking timeline using Flowbite Blade e-commerce block components.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Orders</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">View and manage customer orders with an overview list and detailed tracking timeline using Flowbite Blade e-commerce block components.</p>

    {{-- Orders Overview - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.orders-overview />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Orders Overview" />

    {{-- Orders Overview - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.orders-overview title="Order History" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Orders Overview" />

    {{-- Order Tracking - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.order-tracking />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Order Tracking" />

    {{-- Order Tracking - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.order-tracking
    title="Tracking order"
    orderId="#ORD-20240215"
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Order Tracking" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- Orders Overview --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Orders Overview <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.orders-overview</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">My orders</code></td>
                        <td class="px-6 py-4">Section heading for the orders list.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">filters</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default order type and duration filter dropdowns.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">pagination</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for pagination controls below the order list.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the order rows list.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Order Tracking --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Order Tracking <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.order-tracking</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Track the delivery of order</code></td>
                        <td class="px-6 py-4">Page heading before the order ID.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">orderId</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#957684673</code></td>
                        <td class="px-6 py-4">Order ID displayed next to the heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">timeline</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default order history timeline.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default "Cancel" and "Order details" buttons.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the product items and order summary panel.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
