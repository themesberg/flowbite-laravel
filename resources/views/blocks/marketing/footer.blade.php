<x-layouts.app title="Footer Sections - Marketing Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Footer Sections</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Footer block components for marketing pages. Includes a centered footer with brand logo and links, and a sitemap-style footer with column-based navigation and social icons.</p>

    {{-- Default Footer --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.footer />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Footer" />

    {{-- Custom Footer --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.footer
    brandName="My App"
    copyright="&copy; 2026 My App. All Rights Reserved."
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Footer Properties" />

    {{-- Default Footer Sitemap --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.footer-sitemap />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Footer with Sitemap" />

    {{-- Custom Footer Sitemap --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.footer-sitemap
    brandName="My App"
    brandHref="/home"
    copyright="&copy; 2026 My App Inc. All Rights Reserved."
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Footer Sitemap Properties" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Footer <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.footer</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandName</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Flowbite</code></td>
                        <td class="px-6 py-4">The brand name displayed with the logo.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">copyright</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&amp;copy; 2026 Flowbite&amp;trade;. All Rights Reserved.</code></td>
                        <td class="px-6 py-4">Copyright text displayed at the bottom. Supports inline HTML.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">logo</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default SVG logo and brand name.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">links</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default navigation links (About, Premium, Campaigns, Blog, Affiliate Program, FAQs, Contact).</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Footer Sitemap <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.footer-sitemap</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandName</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Flowbite</code></td>
                        <td class="px-6 py-4">The brand name displayed next to the logo.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brandHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">URL for the brand logo link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">copyright</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&amp;copy; 2026 Flowbite&amp;trade;. All Rights Reserved.</code></td>
                        <td class="px-6 py-4">Copyright text displayed at the bottom. Supports inline HTML.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">logo</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default SVG logo and brand name.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">columns</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default sitemap columns (Resources, Follow us, Legal).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">social</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default social media icon links (Facebook, Instagram, Twitter, GitHub, Dribbble).</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
