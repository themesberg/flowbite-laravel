<x-layouts.app title="Account - E-commerce Blocks - Flowbite Blade" description="Display customer account information with profile details, delivery addresses, payment methods, and review history using Flowbite Blade blocks.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Account</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Display customer account information with profile details, delivery addresses, payment methods, and review history using Flowbite Blade block components.</p>

    {{-- Account Overview - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.account-overview />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Account Overview" />

    {{-- Account Overview - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.account-overview title="My Profile" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Account Overview" />

    {{-- Reviews History - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.reviews-history />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Reviews History" />

    {{-- Reviews History - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.reviews-history title="Your Product Reviews" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Reviews History" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- Account Overview --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Account Overview <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.account-overview</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Account overview</code></td>
                        <td class="px-6 py-4">Section heading for the account page.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">breadcrumb</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default breadcrumb navigation.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the information cards grid (general info, address, payment).</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Reviews History --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Reviews History <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.reviews-history</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">My reviews</code></td>
                        <td class="px-6 py-4">Section heading for the reviews list.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">filter</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default star rating filter dropdown.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the review items list.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
