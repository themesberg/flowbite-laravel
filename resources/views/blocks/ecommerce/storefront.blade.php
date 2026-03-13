<x-layouts.app title="Storefront - E-commerce Blocks - Flowbite Blade" description="Build a complete e-commerce storefront using hero sections, promotional banners, navigation bars, and mega footers with Flowbite Blade block components.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Storefront</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Build a complete e-commerce storefront using hero sections, promotional banners, navigation bars, and mega footers with Flowbite Blade block components.</p>

    {{-- Storefront Hero - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.storefront-hero />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Storefront Hero" />

    {{-- Storefront Hero - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.storefront-hero
    title="Summer Sale!<br>Save Big Today!"
    description="Exclusive deals on electronics, fashion, and more."
    primaryButtonText="Browse Deals"
    primaryButtonHref="/deals"
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Storefront Hero" />

    {{-- Promotional Section - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.promotional-section />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Promotional Section" />

    {{-- Promotional Section - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.promotional-section
    title="Get $200 off the new MacBook Pro."
    description="Order now and receive free express shipping on all qualifying purchases."
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Promotional Section" />

    {{-- Navbar - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.navbar />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default E-commerce Navbar" />

    {{-- Navbar - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.navbar
    brandName="MyShop"
    brandHref="/store"
    :cartCount="3"
    cartHref="/cart"
    searchAction="/search"
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom E-commerce Navbar" />

    {{-- Mega Footer - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.mega-footer />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Mega Footer" />

    {{-- Mega Footer - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.mega-footer
    brandName="MyShop"
    copyright="&copy; 2024 MyShop&trade;. All Rights Reserved."
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Mega Footer" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- Storefront Hero --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Storefront Hero <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.storefront-hero</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Limited Time Offer!...</code></td>
                        <td class="px-6 py-4">Hero headline text. Supports HTML.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Don't Wait - Limited Stock...</code></td>
                        <td class="px-6 py-4">Subheading text below the title.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">primaryButtonText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Shop Now</code></td>
                        <td class="px-6 py-4">Label for the primary call-to-action button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">primaryButtonHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">URL for the primary button link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default primary button with custom actions.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">image</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default hero illustration.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the brand logos section.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Promotional Section --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Promotional Section <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.promotional-section</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Save $500 today...</code></td>
                        <td class="px-6 py-4">Promotional banner headline.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Reserve your new Apple...</code></td>
                        <td class="px-6 py-4">Description text below the title.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">image</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default product image.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default pre-order button.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Navbar --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Navbar <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.navbar</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandName</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Flowbite</code></td>
                        <td class="px-6 py-4">Brand name displayed next to the logo.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">/</code></td>
                        <td class="px-6 py-4">URL for the brand link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandLogoSrc</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">https://flowbite.s3...</code></td>
                        <td class="px-6 py-4">URL for the brand logo image.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">cartCount</td>
                        <td class="px-6 py-4">int</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">0</code></td>
                        <td class="px-6 py-4">Number of items in cart. Badge hidden when 0.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">cartHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">URL for the cart link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">searchAction</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">Form action URL for the search form.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">nav</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for additional navigation items in the top bar.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default user menu button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the secondary category navigation.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Mega Footer --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Mega Footer <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.mega-footer</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandName</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Flowbite</code></td>
                        <td class="px-6 py-4">Brand name displayed in the footer header.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">copyright</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&copy; 2024 Flowbite...</code></td>
                        <td class="px-6 py-4">Copyright text. Supports HTML.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brand</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default brand logo and name.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">columns</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default footer links section.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">social</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for social media icons row.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
