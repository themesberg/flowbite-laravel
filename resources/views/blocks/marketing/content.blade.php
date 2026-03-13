<x-layouts.app title="Content Sections - Marketing Blocks - Flowbite Blade" description="Content block components for displaying long-form text with a CTA link, or a side-by-side layout pairing text content with images.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Content Sections</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Content block components for displaying long-form text with a CTA link, or a side-by-side layout pairing text content with images.</p>

    {{-- Default Content --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.content />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Content Section" />

    {{-- Custom Content --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.content
    title="Powering innovation at 500+ companies worldwide"
    description="We provide the tools and infrastructure that modern teams need to build, deploy, and scale their applications with confidence."
    ctaText="Read our story"
    ctaHref="/about"
>
    <p class="mb-4 font-light">Our platform is trusted by developers and businesses across the globe for its reliability, flexibility, and ease of use.</p>
</x-fwb.blocks.marketing.content>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Content Properties" />

    {{-- Default Content Images --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.content-images />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Content with Images" />

    {{-- Custom Content Images --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.content-images
    title="Our story and mission"
    description="We started with a simple idea: make web development accessible to everyone. Today we serve thousands of developers worldwide."
>
    <p class="mb-4">Our team is passionate about creating tools that empower developers to build beautiful, functional web applications without the complexity.</p>
</x-fwb.blocks.marketing.content-images>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Content Images Properties" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Content <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.content</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Powering innovation at &lt;span&gt;200,000+&lt;/span&gt;...</code></td>
                        <td class="px-6 py-4">The heading text. Supports inline HTML.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Track work across the enterprise...</code></td>
                        <td class="px-6 py-4">The paragraph text below the heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">ctaText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Learn more</code></td>
                        <td class="px-6 py-4">Text for the CTA link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">ctaHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">URL for the CTA link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for additional content between the description and the CTA link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">cta</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default CTA link.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Content Images <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.content-images</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">We didn't reinvent the wheel</code></td>
                        <td class="px-6 py-4">The heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">We are strategists, designers and...</code></td>
                        <td class="px-6 py-4">The paragraph text below the heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for additional content below the description.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">images</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default two-column images with custom visual content.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
