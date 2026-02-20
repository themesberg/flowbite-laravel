<x-layouts.app title="Pricing Card - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Pricing Card</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the pricing card component to display pricing plans with a title, price, features list, and call-to-action button.</p>

    {{-- Default Pricing Card --}}
    @php
    $code = <<<'BLADE'
<x-fwb.pricing-card
    title="Starter"
    price="29"
    period="/month"
    button-text="Get started"
    button-href="#"
>
    <x-fwb.pricing-card.feature>Individual configuration</x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature>No setup, or hidden fees</x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature>Team size: <span class="font-semibold">1 developer</span></x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature>Premium support: <span class="font-semibold">6 months</span></x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature>Free updates: <span class="font-semibold">6 months</span></x-fwb.pricing-card.feature>
</x-fwb.pricing-card>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Pricing Card" />

    {{-- With Description --}}
    @php
    $code = <<<'BLADE'
<x-fwb.pricing-card
    title="Company"
    description="Relevant for multiple users, extended & premium support."
    price="99"
    period="/month"
    button-text="Get started"
    button-href="#"
>
    <x-fwb.pricing-card.feature>Individual configuration</x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature>No setup, or hidden fees</x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature>Team size: <span class="font-semibold">10 developers</span></x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature>Premium support: <span class="font-semibold">24 months</span></x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature>Free updates: <span class="font-semibold">24 months</span></x-fwb.pricing-card.feature>
</x-fwb.pricing-card>
BLADE;
    @endphp
    <x-preview :code="$code" title="With Description" />

    {{-- With Excluded Features --}}
    @php
    $code = <<<'BLADE'
<x-fwb.pricing-card
    title="Enterprise"
    description="Best for large scale uses and extended redistribution rights."
    price="499"
    period="/month"
    button-text="Get started"
    button-href="#"
>
    <x-fwb.pricing-card.feature>Individual configuration</x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature>No setup, or hidden fees</x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature>Team size: <span class="font-semibold">100+ developers</span></x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature :included="false">Custom integration</x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature :included="false">24x7 phone & email support</x-fwb.pricing-card.feature>
</x-fwb.pricing-card>
BLADE;
    @endphp
    <x-preview :code="$code" title="With Excluded Features" />

    {{-- Custom Footer Slot --}}
    @php
    $code = <<<'BLADE'
<x-fwb.pricing-card
    title="Free"
    price="0"
    period="/month"
>
    <x-fwb.pricing-card.feature>1 team member</x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature>5GB Cloud storage</x-fwb.pricing-card.feature>
    <x-fwb.pricing-card.feature :included="false">Premium support</x-fwb.pricing-card.feature>

    <x-slot:footer>
        <x-fwb.button color="light" class="w-full">Contact sales</x-fwb.button>
    </x-slot:footer>
</x-fwb.pricing-card>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Footer Slot" />

    {{-- Properties Tables --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Pricing Card <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.pricing-card</code></h3>
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
                        <td class="px-6 py-4">The plan name displayed as a heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Optional description text below the title.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">price</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">The price value to display.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">currency</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">$</code></td>
                        <td class="px-6 py-4">Currency symbol displayed before the price.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">period</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Billing period text (e.g. <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">/month</code>).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">button-text</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Text for the CTA button. Omit to hide the default button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">button-href</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">URL for the CTA button link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">button-color</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code></td>
                        <td class="px-6 py-4">Color variant for the CTA button (any <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">x-fwb.button</code> color).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">footer</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">-</code></td>
                        <td class="px-6 py-4">Named slot to override the default CTA button with custom content.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Feature <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.pricing-card.feature</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">included</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">true</code></td>
                        <td class="px-6 py-4">Whether the feature is included. When <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code>, the text is shown with a strikethrough and an X icon.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
