<x-layouts.app title="Social Proof - Marketing Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Social Proof</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use social proof and customer logo blocks to build trust and credibility with your audience by showcasing statistics and brand partnerships.</p>

    {{-- Social Proof Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.social-proof />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Social Proof" />

    {{-- Social Proof Custom --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.marketing.social-proof class="bg-gray-50 dark:bg-gray-800">
    <div class="flex flex-col items-center justify-center">
        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">150K+</dt>
        <dd class="font-light text-gray-500 dark:text-gray-400">active users</dd>
    </div>
    <div class="flex flex-col items-center justify-center">
        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">30+</dt>
        <dd class="font-light text-gray-500 dark:text-gray-400">countries</dd>
    </div>
    <div class="flex flex-col items-center justify-center">
        <dt class="mb-2 text-3xl md:text-4xl font-extrabold">99.9%</dt>
        <dd class="font-light text-gray-500 dark:text-gray-400">uptime</dd>
    </div>
</x-fwb.blocks.marketing.social-proof>
BLADE;
    @endphp
    <x-preview :code="$code2" title="Custom Social Proof" />

    {{-- Customer Logos Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.marketing.customer-logos />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default Customer Logos" />

    {{-- Customer Logos Custom --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.marketing.customer-logos title="Trusted by leading companies">
    <a href="#" class="flex justify-center items-center">
        <svg class="h-9 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 86 29" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <title>Google</title>
            <path d="M27.514 14.728C27.514 13.864 27.442 13.036 27.31 12.244H14.028V16.924H21.558C21.226 18.624 20.254 20.068 18.802 21.04V24.508H23.318C26.038 22 27.514 18.672 27.514 14.728Z" />
        </svg>
    </a>
    <a href="#" class="flex justify-center items-center">
        <svg class="h-8 hover:text-gray-900 dark:hover:text-white" viewBox="0 0 2499.6 578.6" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <title>Microsoft</title>
            <path d="M897.9 473.4V118.5H981v280.3l132.5-173.1h82.4L1074 380l128.7 93.4h-88.4l-103.3-80.5-30 38V473.4H897.9z" />
        </svg>
    </a>
</x-fwb.blocks.marketing.customer-logos>
BLADE;
    @endphp
    <x-preview :code="$code4" title="Custom Customer Logos" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">SocialProof <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.social-proof</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">Optional title displayed above the statistics (unused in default template).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Statistics items. Each item should contain a <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&lt;dt&gt;</code> and <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&lt;dd&gt;</code> pair.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">CustomerLogos <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.customer-logos</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'You'll be in good company'</code></td>
                        <td class="px-6 py-4">Heading text displayed above the logo grid.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Logo items. Each should be an anchor element containing an SVG logo icon.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
