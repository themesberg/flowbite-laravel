<x-layouts.app title="Timeline - Flowbite Blade" description="Use the timeline component to show a series of events in chronological order with support for vertical and horizontal layouts.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Timeline - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the timeline component to show a series of events in chronological order with support for vertical and horizontal layouts.</p>

    {{-- Default Timeline --}}
    @php
    $code = <<<'BLADE'
<x-fwb.timeline>
    <x-fwb.timeline.item title="Application UI code in Tailwind CSS" date="February 2022">
        Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.
    </x-fwb.timeline.item>
    <x-fwb.timeline.item title="Marketing UI design in Figma" date="March 2022">
        All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.
    </x-fwb.timeline.item>
    <x-fwb.timeline.item title="E-Commerce UI code in Tailwind CSS" date="April 2022">
        Get started with dozens of web components and interactive elements built on top of Tailwind CSS.
    </x-fwb.timeline.item>
</x-fwb.timeline>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Timeline" />

    {{-- Timeline with Icons --}}
    @php
    $code = <<<'BLADE'
<x-fwb.timeline>
    <x-fwb.timeline.item title="Flowbite Application UI v2.0.0" date="Released on January 13th, 2022" fwb-icon="s-calendar-month">
        Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.
        <a href="#" class="inline-flex items-center px-4 py-2 mt-3 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn more
            <x-fwb-o-arrow-right class="w-3 h-3 ms-2 rtl:rotate-180" />
        </a>
    </x-fwb.timeline.item>
    <x-fwb.timeline.item title="Flowbite Figma v1.3.0" date="Released on December 7th, 2021" fwb-icon="s-calendar-month">
        All of the pages and components are first designed in Figma and we keep a parity between the two versions even as we update the project.
    </x-fwb.timeline.item>
    <x-fwb.timeline.item title="Flowbite Library v1.2.2" date="Released on December 2nd, 2021" fwb-icon="s-calendar-month">
        Get started with dozens of web components and interactive elements built on top of Tailwind CSS.
    </x-fwb.timeline.item>
</x-fwb.timeline>
BLADE;
    @endphp
    <x-preview :code="$code" title="Timeline with Icons" />

    {{-- Horizontal Timeline --}}
    @php
    $code = <<<'BLADE'
<x-fwb.timeline :horizontal="true">
    <x-fwb.timeline.item :horizontal="true" title="Flowbite Library v1.0" date="Released on January 2022">
        Get started with dozens of web components and interactive elements.
    </x-fwb.timeline.item>
    <x-fwb.timeline.item :horizontal="true" title="Flowbite Library v1.2" date="Released on March 2022">
        All of the pages and components are first designed in Figma.
    </x-fwb.timeline.item>
    <x-fwb.timeline.item :horizontal="true" title="Flowbite Library v1.3" date="Released on December 2022">
        Get access to over 20+ pages including a dashboard layout.
    </x-fwb.timeline.item>
</x-fwb.timeline>
BLADE;
    @endphp
    <x-preview :code="$code" title="Horizontal Timeline" />

    {{-- Activity Log --}}
    @php
    $code = <<<'BLADE'
<x-fwb.timeline>
    <x-fwb.timeline.item date="Just now">
        <x-slot:icon>
            <img class="rounded-full shadow-lg" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bonnie Green">
        </x-slot:icon>
        <span class="font-semibold text-gray-900 dark:text-white">Bonnie Green</span> commented on <span class="font-semibold text-gray-900 dark:text-white">Flowbite Pro</span>
    </x-fwb.timeline.item>
    <x-fwb.timeline.item date="2 hours ago">
        <x-slot:icon>
            <img class="rounded-full shadow-lg" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Thomas Lean">
        </x-slot:icon>
        <span class="font-semibold text-gray-900 dark:text-white">Thomas Lean</span> moved <span class="font-semibold text-gray-900 dark:text-white">Pricing page</span> to In Progress
    </x-fwb.timeline.item>
    <x-fwb.timeline.item date="1 day ago">
        <x-slot:icon>
            <img class="rounded-full shadow-lg" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Jese Leos">
        </x-slot:icon>
        <span class="font-semibold text-gray-900 dark:text-white">Jese Leos</span> liked <span class="font-semibold text-gray-900 dark:text-white">Flowbite Pro</span>
    </x-fwb.timeline.item>
</x-fwb.timeline>
BLADE;
    @endphp
    <x-preview :code="$code" title="Activity Log" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Timeline <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.timeline</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">horizontal</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Display the timeline in a horizontal layout.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">variant</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Timeline style variant: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code> or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">activity</code>.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Timeline Item <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.timeline.item</code></h3>
        <div class="overflow-x-auto">
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
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">The heading text for the timeline item.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">date</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Date or timestamp text displayed below the title.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">horizontal</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Render this item in horizontal layout mode.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">fwb-icon</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Shorthand icon name from <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">flowbite-blade-icons</code> (e.g. <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">s-calendar-month</code>). Renders with default <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">w-2.5 h-2.5 text-fg-brand-strong</code> classes.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">icon</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">—</code></td>
                        <td class="px-6 py-4">Named slot for full icon control in the timeline dot area. Takes priority over <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">fwb-icon</code> prop.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
