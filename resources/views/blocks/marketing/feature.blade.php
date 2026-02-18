<x-layouts.app title="Feature Section - Marketing Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Feature Section</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Feature section component to showcase product capabilities in a responsive grid layout with icons, titles, and descriptions.</p>

    {{-- Default Feature --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.feature />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Feature Section" />

    {{-- Custom Feature --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.feature
    title="Everything you need to build modern apps"
    description="Our platform provides all the tools and components you need to create stunning web applications."
>
    <div>
        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
            <x-fwb-o-adjustments-horizontal class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" />
        </div>
        <h3 class="mb-2 text-xl font-bold dark:text-white">Analytics</h3>
        <p class="text-gray-500 dark:text-gray-400">Track your performance with real-time analytics and detailed reporting dashboards.</p>
    </div>
    <div>
        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
            <x-fwb-o-cog class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" />
        </div>
        <h3 class="mb-2 text-xl font-bold dark:text-white">Configuration</h3>
        <p class="text-gray-500 dark:text-gray-400">Customize every aspect of your application with our flexible configuration options.</p>
    </div>
    <div>
        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">
            <x-fwb-o-grid class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" />
        </div>
        <h3 class="mb-2 text-xl font-bold dark:text-white">Templates</h3>
        <p class="text-gray-500 dark:text-gray-400">Start quickly with our library of pre-built templates and UI components.</p>
    </div>
</x-fwb.blocks.marketing.feature>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Feature Section with Slot Content" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Feature <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.feature</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Designed for business teams like yours</code></td>
                        <td class="px-6 py-4">The section heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Here at Flowbite we focus on...</code></td>
                        <td class="px-6 py-4">The paragraph text below the heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot to provide custom feature items. When empty, six default feature cards are rendered (Marketing, Legal, Business Automation, Finance, Enterprise Design, Operations).</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
