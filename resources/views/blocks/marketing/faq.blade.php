<x-layouts.app title="FAQ - Marketing Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">FAQ</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the FAQ block to display frequently asked questions in a two-column grid layout with question icons and organized answers.</p>

    {{-- FAQ Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.faq />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default FAQ" />

    {{-- FAQ Custom --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.marketing.faq title="Common Questions">
    <div>
        <div class="mb-10">
            <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                <x-fwb-o-question-circle class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" />
                How do I install the package?
            </h3>
            <p class="text-gray-500 dark:text-gray-400">You can install the package via Composer by running <code>composer require themesberg/flowbite-blade</code>.</p>
        </div>
        <div class="mb-10">
            <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                <x-fwb-o-question-circle class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" />
                Is dark mode supported?
            </h3>
            <p class="text-gray-500 dark:text-gray-400">Yes, all components include full dark mode support out of the box using Tailwind CSS dark variant classes.</p>
        </div>
    </div>
    <div>
        <div class="mb-10">
            <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                <x-fwb-o-question-circle class="flex-shrink-0 mr-2 w-5 h-5 text-gray-500 dark:text-gray-400" />
                Can I customize the components?
            </h3>
            <p class="text-gray-500 dark:text-gray-400">Absolutely. All components accept custom attributes and classes, and you can override the default slot content with your own markup.</p>
        </div>
    </div>
</x-fwb.blocks.marketing.faq>
BLADE;
    @endphp
    <x-preview :code="$code2" title="Custom FAQ" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">FAQ <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.faq</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Frequently asked questions'</code></td>
                        <td class="px-6 py-4">Heading text displayed above the questions grid.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">FAQ content arranged in a two-column grid. Each column should be a <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&lt;div&gt;</code> containing question/answer pairs.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
