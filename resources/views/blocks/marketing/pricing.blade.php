<x-layouts.app title="Pricing - Marketing Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Pricing</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">A pricing section component with a heading, description, and a three-column grid for pricing cards. Provide your own pricing cards via the default slot.</p>

    {{-- Default Pricing --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.pricing />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Pricing Section" />

    {{-- Custom Pricing --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.pricing
    title="Simple, transparent pricing"
    description="Choose the plan that fits your needs. Upgrade or downgrade at any time."
>
    <!-- Free Plan -->
    <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
        <h3 class="mb-4 text-2xl font-semibold">Free</h3>
        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">For personal projects and experimentation.</p>
        <div class="flex justify-center items-baseline my-8">
            <span class="mr-2 text-5xl font-extrabold">$0</span>
            <span class="text-gray-500 dark:text-gray-400">/month</span>
        </div>
        <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                <span>1 project</span>
            </li>
            <li class="flex items-center space-x-3">
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                <span>Community support</span>
            </li>
        </ul>
        <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-900">Get started</a>
    </div>
    <!-- Pro Plan -->
    <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
        <h3 class="mb-4 text-2xl font-semibold">Pro</h3>
        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">For growing teams and businesses.</p>
        <div class="flex justify-center items-baseline my-8">
            <span class="mr-2 text-5xl font-extrabold">$49</span>
            <span class="text-gray-500 dark:text-gray-400">/month</span>
        </div>
        <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                <span>Unlimited projects</span>
            </li>
            <li class="flex items-center space-x-3">
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                <span>Priority support</span>
            </li>
        </ul>
        <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-900">Get started</a>
    </div>
    <!-- Enterprise Plan -->
    <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
        <h3 class="mb-4 text-2xl font-semibold">Enterprise</h3>
        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">For large-scale operations and custom needs.</p>
        <div class="flex justify-center items-baseline my-8">
            <span class="mr-2 text-5xl font-extrabold">$199</span>
            <span class="text-gray-500 dark:text-gray-400">/month</span>
        </div>
        <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                <span>Everything in Pro</span>
            </li>
            <li class="flex items-center space-x-3">
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                <span>Dedicated account manager</span>
            </li>
        </ul>
        <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-900">Contact sales</a>
    </div>
</x-fwb.blocks.marketing.pricing>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Pricing with Slot Content" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>
        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Pricing <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.pricing</code></h3>
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
                        <td class="px-6 py-4">Default slot for pricing cards. Rendered inside a three-column grid. When empty, three default pricing cards (Starter $29, Company $99, Enterprise $499) are displayed.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
