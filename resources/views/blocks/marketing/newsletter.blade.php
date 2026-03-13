<x-layouts.app title="Newsletter & Banner - Marketing Blocks - Flowbite Blade" description="Use newsletter and banner blocks to capture email subscriptions and display important announcements or promotional messages to your visitors.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Newsletter & Banner</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use newsletter and banner blocks to capture email subscriptions and display important announcements or promotional messages to your visitors.</p>

    {{-- Newsletter Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.newsletter />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Newsletter" />

    {{-- Newsletter Custom --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.marketing.newsletter
    title="Join our mailing list"
    description="Get the latest updates, tips, and exclusive offers delivered straight to your inbox."
    action="/subscribe"
    buttonText="Sign up"
/>
BLADE;
    @endphp
    <x-preview :code="$code2" title="Custom Newsletter" />

    {{-- Banner Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.marketing.banner />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default Banner" />

    {{-- Banner Custom --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.marketing.banner
    message="New feature released: Check out our latest update!"
    href="/changelog"
    id="promo-banner"
/>
BLADE;
    @endphp
    <x-preview :code="$code4" title="Custom Banner" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Newsletter <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.newsletter</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Sign up for our newsletter'</code></td>
                        <td class="px-6 py-4">Heading text displayed above the email input.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Stay up to date with the roadmap...'</code></td>
                        <td class="px-6 py-4">Subheading text displayed below the title.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">action</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'#'</code></td>
                        <td class="px-6 py-4">The form action URL for the subscription form.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">buttonText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Subscribe'</code></td>
                        <td class="px-6 py-4">Text displayed on the subscribe button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom content to replace the default email subscription form. When provided, the default form is hidden.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Banner <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.banner</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">message</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Get 5% commission per sale'</code></td>
                        <td class="px-6 py-4">The main text displayed in the banner.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">href</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'#'</code></td>
                        <td class="px-6 py-4">URL for the "Learn More" link in the banner.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'banner'</code></td>
                        <td class="px-6 py-4">Unique ID for the banner element, used by the dismiss toggle.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Custom content to replace the default message and link. When provided, the default content is hidden.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
