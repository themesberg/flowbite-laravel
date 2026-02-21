<x-layouts.app title="Feature Section - Marketing Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Feature Section</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Feature section component to showcase product capabilities in a responsive grid layout with icons, titles, and descriptions. Use the <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">x-fwb.blocks.marketing.feature.item</code> sub-component inside the default slot.</p>

    {{-- Default Feature --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.feature
    title="Designed for business teams like yours"
    description="Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value."
>
    <x-fwb.blocks.marketing.feature.item fwb-icon="o-chart-mixed" title="Marketing" description="Plan it, create it, launch it. Collaborate seamlessly with all the organization and hit your marketing goals every month with our marketing plan." />
    <x-fwb.blocks.marketing.feature.item fwb-icon="o-globe" title="Legal" description="Protect your organization, devices and stay compliant with our structured workflows and custom permissions made for you." />
    <x-fwb.blocks.marketing.feature.item fwb-icon="o-adjustments-horizontal" title="Business Automation" description="Auto-assign tasks, send Slack messages, and much more. Now power up with hundreds of new templates to help you get started." />
</x-fwb.blocks.marketing.feature>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Feature Section" />

    {{-- Description as slot content --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.feature
    title="Everything you need to build modern apps"
    description="Our platform provides all the tools and components you need to create stunning web applications."
>
    <x-fwb.blocks.marketing.feature.item fwb-icon="o-adjustments-horizontal" title="Analytics" description="Track your performance with real-time analytics and detailed reporting dashboards." />
    <x-fwb.blocks.marketing.feature.item fwb-icon="o-cog" title="Configuration">
        Customize every aspect of your application with our <strong>flexible configuration</strong> options and presets.
    </x-fwb.blocks.marketing.feature.item>
    <x-fwb.blocks.marketing.feature.item fwb-icon="o-grid" title="Templates" description="Start quickly with our library of pre-built templates and UI components." />
</x-fwb.blocks.marketing.feature>
BLADE;
    @endphp
    <x-preview :code="$code" title="Description as Slot Content" />

    {{-- Custom grid columns --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.feature
    title="Core Features"
    :nb-items="2"
>
    <x-fwb.blocks.marketing.feature.item fwb-icon="s-rocket" title="Fast Performance" description="Optimized for speed with lazy loading, code splitting, and server-side rendering out of the box." />
    <x-fwb.blocks.marketing.feature.item fwb-icon="s-shield-check" title="Secure by Default" description="Built-in security features including CSRF protection, XSS prevention, and encrypted sessions." />
</x-fwb.blocks.marketing.feature>
BLADE;
    @endphp
    <x-preview :code="$code" title="Two-Column Grid with nb-items" />

    {{-- Without title/description --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.feature :nb-items="4">
    <x-fwb.blocks.marketing.feature.item fwb-icon="s-user-circle" title="Authentication" description="Complete auth scaffolding with login, register, and password reset." />
    <x-fwb.blocks.marketing.feature.item fwb-icon="s-moon" title="Dark Mode" description="Built-in dark mode support with system preference detection." />
    <x-fwb.blocks.marketing.feature.item fwb-icon="s-desktop-pc" title="Responsive" description="Mobile-first and fully responsive layouts and components." />
    <x-fwb.blocks.marketing.feature.item fwb-icon="s-layers" title="Components" description="50+ pre-built Blade components with Tailwind CSS styling." />
</x-fwb.blocks.marketing.feature>
BLADE;
    @endphp
    <x-preview :code="$code" title="Four-Column Grid without Section Header" />

    {{-- Properties Tables --}}
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">nb-items</td>
                        <td class="px-6 py-4">int</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">3</code></td>
                        <td class="px-6 py-4">Number of grid columns on large screens (1, 2, 3, or 4).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for feature items. Use <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">x-fwb.blocks.marketing.feature.item</code> components as children.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Feature Item <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.feature.item</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">fwb-icon</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">Flowbite icon name (e.g. <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">o-chart-mixed</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">s-rocket</code>). Rendered inside a rounded circle.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">The feature item heading text. Hidden when empty.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">The feature description text. Can also be provided as slot content for rich HTML.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title-element</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">h3</code></td>
                        <td class="px-6 py-4">The HTML element used for the title (e.g. <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">h3</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">h4</code>).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for rich description content (HTML). Takes priority over the <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">description</code> prop when provided.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
