<x-layouts.app title="Pricing - Marketing Blocks - Flowbite Blade" description="A pricing section component with a heading, description, and a three-column grid for pricing cards.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Pricing</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">A pricing section component with a heading, description, and a three-column grid for pricing cards. Use the <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">x-fwb.pricing-card</code> component inside the default slot.</p>

    {{-- Default Pricing --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.pricing>
    <x-fwb.pricing-card
        title="Starter"
        description="Best option for personal use & for your next project."
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
        <x-fwb.pricing-card.feature>Premium support: <span class="font-semibold">36 months</span></x-fwb.pricing-card.feature>
        <x-fwb.pricing-card.feature>Free updates: <span class="font-semibold">36 months</span></x-fwb.pricing-card.feature>
    </x-fwb.pricing-card>
</x-fwb.blocks.marketing.pricing>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Pricing Section" />

    {{-- Custom Title and Excluded Features --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.pricing
    title="Simple, transparent pricing"
    description="Choose the perfect plan for your team. All plans include access to our full component library and priority support."
>
    <x-fwb.pricing-card
        title="Starter"
        description="Best option for personal use & for your next project."
        price="29"
        period="/month"
        button-text="Get started"
        button-href="#"
    >
        <x-fwb.pricing-card.feature>Individual configuration</x-fwb.pricing-card.feature>
        <x-fwb.pricing-card.feature>No setup, or hidden fees</x-fwb.pricing-card.feature>
        <x-fwb.pricing-card.feature>Team size: <span class="font-semibold">1 developer</span></x-fwb.pricing-card.feature>
        <x-fwb.pricing-card.feature :included="false">Premium support</x-fwb.pricing-card.feature>
        <x-fwb.pricing-card.feature :included="false">Free updates</x-fwb.pricing-card.feature>
    </x-fwb.pricing-card>

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
        <x-fwb.pricing-card.feature :included="false">Free updates</x-fwb.pricing-card.feature>
    </x-fwb.pricing-card>

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
        <x-fwb.pricing-card.feature>Premium support: <span class="font-semibold">36 months</span></x-fwb.pricing-card.feature>
        <x-fwb.pricing-card.feature>Free updates: <span class="font-semibold">36 months</span></x-fwb.pricing-card.feature>
    </x-fwb.pricing-card>
</x-fwb.blocks.marketing.pricing>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Title and Excluded Features" />

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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">The section heading text. Hidden when empty.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">The paragraph text below the heading. Hidden when empty.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for pricing cards. Rendered inside a three-column grid. Use <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">x-fwb.pricing-card</code> components as children.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
