<x-layouts.app title="Products - E-commerce Blocks - Flowbite Blade" description="Browse and display products using category grids, product cards, detailed overviews, informational descriptions, and customer reviews.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Products</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Browse and display products using category grids, product cards, detailed overviews, informational descriptions, and customer reviews built with Flowbite Blade blocks.</p>

    {{-- Product Categories - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.product-categories />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Product Categories" />

    {{-- Product Categories - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.product-categories
    title="Browse by department"
    seeMoreHref="/categories"
    seeMoreText="View all departments"
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Product Categories" />

    {{-- Product Cards - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.product-cards />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Product Cards" />

    {{-- Product Cards - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.product-cards title="Featured Products" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Product Cards" />

    {{-- Product Overview - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.product-overview />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Product Overview" />

    {{-- Product Overview - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.product-overview
    title="Apple MacBook Pro 16&quot;"
    price="$2,499.00"
    description="The most powerful MacBook Pro ever with M3 Max chip, up to 128GB unified memory, and a stunning Liquid Retina XDR display."
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Product Overview" />

    {{-- Product Information - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.product-information />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Product Information" />

    {{-- Product Information - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.product-information title="Technical Specifications" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Product Information" />

    {{-- Product Review - Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.product-review />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Product Review" />

    {{-- Product Review - Custom --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.ecommerce.product-review
    title="Customer Reviews"
    averageRating="4.2"
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Product Review" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        {{-- Product Categories --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Product Categories <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.product-categories</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Shop by category</code></td>
                        <td class="px-6 py-4">Section heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">seeMoreHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">URL for the "see more" link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">seeMoreText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">See more categories</code></td>
                        <td class="px-6 py-4">Label for the "see more" link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the category grid with custom content.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Product Cards --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Product Cards <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.product-cards</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Products</code></td>
                        <td class="px-6 py-4">Section heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the product cards grid with custom content.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Product Overview --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Product Overview <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.product-overview</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Product Title</code></td>
                        <td class="px-6 py-4">Product name displayed as the heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">price</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">$0.00</code></td>
                        <td class="px-6 py-4">Product price text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">Product description text. Falls back to default copy if empty.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">gallery</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default product image.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default "Add to favorites" and "Add to cart" buttons.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">details</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default description area below the divider.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Product Information --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Product Information <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.product-information</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Product description</code></td>
                        <td class="px-6 py-4">Section heading for the product description.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">media</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default product showcase image.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">video</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for an embedded video section.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the entire description body content.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Product Review --}}
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Product Review <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.ecommerce.product-review</code></h3>
        <div class="overflow-x-auto mb-8">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr><th class="px-6 py-3">Prop</th><th class="px-6 py-3">Type</th><th class="px-6 py-3">Default</th><th class="px-6 py-3">Description</th></tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Reviews</code></td>
                        <td class="px-6 py-4">Section heading for the reviews area.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">averageRating</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">4.65</code></td>
                        <td class="px-6 py-4">Average star rating displayed with filled stars.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">reviewCount</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default review count link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">ratingSummary</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the rating summary and "Write a review" button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">ratingBars</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the rating distribution bar chart.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to replace the individual review items list.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
