<x-layouts.app title="Cart &amp; Summary - E-commerce Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Cart & Summary</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Manage shopping cart items, display order summaries, and offer discount codes using Flowbite Blade e-commerce block components.</p>

    {{-- Shopping Cart - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.shopping-cart />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Shopping Cart" />

    {{-- Shopping Cart - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.shopping-cart title="Your Bag" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Shopping Cart" />

    {{-- Order Summary - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.order-summary />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Order Summary" />

    {{-- Order Summary - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.order-summary title="Review your order" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Order Summary" />

    {{-- Discount - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.discount />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Discount" />

    {{-- Discount - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.discount
    title="Get 10% OFF your first order!"
    description="Sign up for our newsletter and receive an exclusive discount code."
    code="WELCOME10"
    buttonText="Start Shopping"
    buttonHref="/products"
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Discount" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- Shopping Cart --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Shopping Cart <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.shopping-cart</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Shopping Cart</code></td>
                        <td class="px-6 py-4">Section heading for the shopping cart.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">summary</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default sidebar with order summary and voucher form.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the cart item list.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Order Summary --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Order Summary <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.order-summary</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Order summary</code></td>
                        <td class="px-6 py-4">Section heading for the order summary.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">totals</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default price breakdown and total.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default "Return to shopping" and "Send the order" buttons.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the order items list.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Discount --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Discount <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.discount</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Get 5% OFF your order!</code></td>
                        <td class="px-6 py-4">Discount banner heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Use our exclusive discount...</code></td>
                        <td class="px-6 py-4">Description text for the discount offer.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">code</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">SAVE5NOW</code></td>
                        <td class="px-6 py-4">Discount code displayed with a copy-to-clipboard button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">buttonText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Shop Now</code></td>
                        <td class="px-6 py-4">Label for the call-to-action button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">buttonHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">URL for the call-to-action button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for additional content below the discount section.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
