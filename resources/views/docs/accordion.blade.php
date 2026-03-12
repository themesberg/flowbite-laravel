<x-layouts.app title="Accordion - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Accordion - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the accordion component to show and hide content based on a collapsible element, useful for FAQ sections, navigation menus, and more.</p>

    {{-- Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.accordion id="default-accordion">
    <x-fwb.accordion.item id="item-1" title="What is Flowbite?" :open="true">
        Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="item-2" title="Is there a Figma file available?">
        Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="item-3" title="What are the differences between Flowbite and Tailwind UI?">
        The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.
    </x-fwb.accordion.item>
</x-fwb.accordion>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Accordion" />

    {{-- Custom Content --}}
    @php
    $code = <<<'BLADE'
<x-fwb.accordion id="custom-content-accordion">
    <x-fwb.accordion.item id="cc-1" title="Using the content slot for custom HTML" :open="true">
        <x-slot:content>
            <p class="mb-2 text-gray-500 dark:text-gray-400">Use the <code>content</code> named slot when you need full control over the HTML inside the accordion body.</p>
            <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
        </x-slot:content>
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="cc-2" title="Simple text gets auto-styled">
        When you pass plain text without using the content slot, it is automatically wrapped in a styled paragraph.
    </x-fwb.accordion.item>
</x-fwb.accordion>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Content" />

    {{-- Title as Slot --}}
    @php
    $code = <<<'BLADE'
<x-fwb.accordion id="title-slot-accordion">
    <x-fwb.accordion.item id="ts-1" :open="true">
        <x-slot:title>Title as a named slot</x-slot:title>
        You can also pass the title as a named slot instead of a prop. This is useful if you need HTML inside the title.
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="ts-2" title="Title as a prop">
        Both approaches work — use whichever fits your needs.
    </x-fwb.accordion.item>
</x-fwb.accordion>
BLADE;
    @endphp
    <x-preview :code="$code" title="Title as Prop vs Slot" />

    {{-- Always Open --}}
    @php
    $code = <<<'BLADE'
<x-fwb.accordion id="always-open-accordion" :alwaysOpen="true">
    <x-fwb.accordion.item id="ao-1" title="What is Flowbite?" :open="true">
        Flowbite is an open-source library of interactive components built on top of Tailwind CSS.
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="ao-2" title="Is there a Figma file available?" :open="true">
        Flowbite is first conceptualized and designed using the Figma software.
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="ao-3" title="What are the differences between Flowbite and Tailwind UI?">
        The main difference is that the core components from Flowbite are open source under the MIT license.
    </x-fwb.accordion.item>
</x-fwb.accordion>
BLADE;
    @endphp
    <x-preview :code="$code" title="Always Open" />

    {{-- Separated Cards --}}
    @php
    $code = <<<'BLADE'
<x-fwb.accordion id="separated-accordion" :separated="true">
    <x-fwb.accordion.item id="sep-1" title="What is Flowbite?" :open="true">
        Flowbite is an open-source library of interactive components built on top of Tailwind CSS.
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="sep-2" title="Is there a Figma file available?">
        Flowbite is first conceptualized and designed using the Figma software.
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="sep-3" title="What are the differences between Flowbite and Tailwind UI?">
        The main difference is that the core components from Flowbite are open source under the MIT license.
    </x-fwb.accordion.item>
</x-fwb.accordion>
BLADE;
    @endphp
    <x-preview :code="$code" title="Separated Cards" />

    {{-- Flush --}}
    @php
    $code = <<<'BLADE'
<x-fwb.accordion id="flush-accordion" :flush="true">
    <x-fwb.accordion.item id="flush-1" title="What is Flowbite?" :open="true">
        Flowbite is an open-source library of interactive components built on top of Tailwind CSS.
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="flush-2" title="Is there a Figma file available?">
        Flowbite is first conceptualized and designed using the Figma software.
    </x-fwb.accordion.item>
</x-fwb.accordion>
BLADE;
    @endphp
    <x-preview :code="$code" title="Flush Accordion" />

    {{-- Color Options --}}
    @php
    $code = <<<'BLADE'
<x-fwb.accordion id="color-accordion" activeClasses="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white" inactiveClasses="text-gray-500 dark:text-gray-400">
    <x-fwb.accordion.item id="color-1" title="What is Flowbite?" :open="true">
        Flowbite is an open-source library of interactive components built on top of Tailwind CSS.
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="color-2" title="Is there a Figma file available?">
        Flowbite is first conceptualized and designed using the Figma software.
    </x-fwb.accordion.item>
</x-fwb.accordion>
BLADE;
    @endphp
    <x-preview :code="$code" title="Color Options" />

    {{-- Arrow Style --}}
    @php
    $code = <<<'BLADE'
<x-fwb.accordion id="arrow-accordion">
    <x-fwb.accordion.item id="arrow-1" title="No arrow icon" arrowStyle="none" :open="true">
        This accordion item has no arrow indicator.
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="arrow-2" title="Static arrow (no rotation)" arrowStyle="static">
        This accordion item has an arrow that does not rotate on open/close.
    </x-fwb.accordion.item>
    <x-fwb.accordion.item id="arrow-3" title="Rotating arrow (default)" arrowStyle="default">
        This accordion item has the default rotating arrow indicator.
    </x-fwb.accordion.item>
</x-fwb.accordion>
BLADE;
    @endphp
    <x-preview :code="$code" title="Arrow Style" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Accordion <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.accordion</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">auto</code></td>
                        <td class="px-6 py-4">Unique identifier for the accordion container. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">flush</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Remove background, borders, and shadow for a flat appearance.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">alwaysOpen</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Allow multiple accordion items to be open simultaneously.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">separated</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Display items as individual cards with spacing between them.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">activeClasses</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Custom Tailwind CSS classes applied to the active (open) accordion item button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">inactiveClasses</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Custom Tailwind CSS classes applied to inactive (closed) accordion item buttons.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Accordion Item <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.accordion.item</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">auto</code></td>
                        <td class="px-6 py-4">Unique identifier for the accordion item. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string|slot</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Heading text. Can be passed as a prop (<code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">title="..."</code>) or as a named slot (<code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&lt;x-slot:title&gt;</code>).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">open</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Set the item to be initially expanded.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">arrowStyle</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Arrow icon style: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code> (rotating), <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">static</code> (no rotation), or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">none</code> (hidden).</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mt-8 mb-3 text-lg font-medium text-gray-900 dark:text-white">Accordion Item Slots</h3>
        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">Slot</th>
                        <th class="px-6 py-3">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">default</td>
                        <td class="px-6 py-4">Body content. Plain text is auto-wrapped in <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&lt;p class="mb-2 text-gray-500 dark:text-gray-400"&gt;</code>. HTML content is rendered as-is.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">content</td>
                        <td class="px-6 py-4">Named slot for full control over body HTML. When used, the default slot is ignored and no auto-wrapping occurs.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">Named slot alternative to the <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">title</code> prop. Useful if you need HTML inside the heading.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
