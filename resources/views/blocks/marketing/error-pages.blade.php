<x-layouts.app title="Error & Maintenance Pages - Marketing Blocks - Flowbite Blade" description="Use error and maintenance page blocks to display user-friendly messages for 404, 500, and scheduled maintenance situations.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Error & Maintenance Pages</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use error and maintenance page blocks to display user-friendly messages for 404, 500, and scheduled maintenance situations.</p>

    {{-- Error 404 Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.error-404 />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default 404 Error Page" />

    {{-- Error 404 Custom --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.marketing.error-404
    title="Page not found."
    description="The page you are looking for might have been removed, had its name changed, or is temporarily unavailable."
    buttonText="Go to Dashboard"
    buttonHref="/dashboard"
    errorCode="404"
/>
BLADE;
    @endphp
    <x-preview :code="$code2" title="Custom 404 Error Page" />

    {{-- Error 500 Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.marketing.error-500 />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default 500 Error Page" />

    {{-- Error 500 Custom --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.marketing.error-500
    title="Something went wrong."
    description="Our team has been notified and we are working on a fix. Please try again in a few minutes."
    errorCode="500"
/>
BLADE;
    @endphp
    <x-preview :code="$code4" title="Custom 500 Error Page" />

    {{-- Maintenance Default --}}
    @php
    $code5 = <<<'BLADE'
<x-fwb.blocks.marketing.maintenance />
BLADE;
    @endphp
    <x-preview :code="$code5" title="Default Maintenance Page" />

    {{-- Maintenance Custom --}}
    @php
    $code6 = <<<'BLADE'
<x-fwb.blocks.marketing.maintenance
    title="Scheduled Maintenance"
    description="We are performing upgrades to improve your experience. Service will resume at 6:00 AM UTC."
/>
BLADE;
    @endphp
    <x-preview :code="$code6" title="Custom Maintenance Page" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Error404 <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.error-404</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Something\'s missing.'</code></td>
                        <td class="px-6 py-4">Heading text displayed below the error code.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Sorry, we can\'t find that page...'</code></td>
                        <td class="px-6 py-4">Description text explaining the error to the user.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">buttonText</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Back to Homepage'</code></td>
                        <td class="px-6 py-4">Text displayed on the call-to-action button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">buttonHref</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'#'</code></td>
                        <td class="px-6 py-4">URL the button links to.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">errorCode</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'404'</code></td>
                        <td class="px-6 py-4">The large error code number displayed prominently on the page.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Error500 <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.error-500</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Internal Server Error.'</code></td>
                        <td class="px-6 py-4">Heading text displayed below the error code.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'We are already working to solve...'</code></td>
                        <td class="px-6 py-4">Description text explaining the error to the user.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">errorCode</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'500'</code></td>
                        <td class="px-6 py-4">The large error code number displayed prominently on the page.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Maintenance <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.maintenance</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Under Maintenance'</code></td>
                        <td class="px-6 py-4">Heading text displayed below the wrench icon.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Our enterprise administrators...'</code></td>
                        <td class="px-6 py-4">Description text explaining the maintenance period to the user.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
