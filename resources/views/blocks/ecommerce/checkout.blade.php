<x-layouts.app title="Checkout &amp; Payment - E-commerce Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Checkout & Payment</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Complete the purchase flow with payment forms, checkout pages with delivery details, and order confirmation screens using Flowbite Blade block components.</p>

    {{-- Payment Form - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.payment-form />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Payment Form" />

    {{-- Payment Form - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.payment-form
    title="Secure Payment"
    action="/process-payment"
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Payment Form" />

    {{-- Checkout - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.checkout />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Checkout" />

    {{-- Checkout - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.checkout
    title="Shipping Information"
    action="/place-order"
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Checkout" />

    {{-- Order Confirmation - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.order-confirmation />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Order Confirmation" />

    {{-- Order Confirmation - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.order-confirmation
    title="Your order is confirmed!"
    orderId="#ORD-20240215"
    message="will be shipped within 48 hours. You will receive a tracking email shortly."
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Order Confirmation" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- Payment Form --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Payment Form <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.payment-form</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Payment</code></td>
                        <td class="px-6 py-4">Section heading for the payment form.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">Form action URL for payment submission.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">summary</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default order summary sidebar with payment logos.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the credit card form fields.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Checkout --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Checkout <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.checkout</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Delivery Details</code></td>
                        <td class="px-6 py-4">Heading for the delivery form section.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">Form action URL for checkout submission.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">steps</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default progress steps indicator.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">form</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the entire form section (delivery, payment, delivery method, voucher).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">summary</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default order summary sidebar.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Order Confirmation --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Order Confirmation <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.order-confirmation</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Thanks for your order!</code></td>
                        <td class="px-6 py-4">Confirmation page heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">orderId</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#7564804</code></td>
                        <td class="px-6 py-4">Order ID displayed prominently.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">message</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Your order will be processed...</code></td>
                        <td class="px-6 py-4">Message text displayed after the order ID.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">details</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default order details card (date, payment, address, etc.).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default "Track your order" and "Return to shopping" buttons.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for additional content below the confirmation.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
