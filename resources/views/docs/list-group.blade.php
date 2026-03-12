<x-layouts.app title="List Group - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">List Group - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the list group component to display a series of items, links, or buttons in a vertical list format with support for icons, active states, and disabled items.</p>

    {{-- Default List Group --}}
    @php
    $code = <<<'BLADE'
<x-fwb.list-group>
    <x-fwb.list-group.item>Profile</x-fwb.list-group.item>
    <x-fwb.list-group.item>Settings</x-fwb.list-group.item>
    <x-fwb.list-group.item>Messages</x-fwb.list-group.item>
    <x-fwb.list-group.item>Download</x-fwb.list-group.item>
</x-fwb.list-group>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default List Group" />

    {{-- List Group with Links --}}
    @php
    $code = <<<'BLADE'
<x-fwb.list-group>
    <x-fwb.list-group.item href="#" :active="true">Profile</x-fwb.list-group.item>
    <x-fwb.list-group.item href="#">Settings</x-fwb.list-group.item>
    <x-fwb.list-group.item href="#">Messages</x-fwb.list-group.item>
    <x-fwb.list-group.item href="#" :disabled="true">Download</x-fwb.list-group.item>
</x-fwb.list-group>
BLADE;
    @endphp
    <x-preview :code="$code" title="List Group with Links" />

    {{-- List Group with Buttons --}}
    @php
    $code = <<<'BLADE'
<x-fwb.list-group>
    <x-fwb.list-group.item :button="true" :active="true">Profile</x-fwb.list-group.item>
    <x-fwb.list-group.item :button="true">Settings</x-fwb.list-group.item>
    <x-fwb.list-group.item :button="true">Messages</x-fwb.list-group.item>
    <x-fwb.list-group.item :button="true" :disabled="true">Download</x-fwb.list-group.item>
</x-fwb.list-group>
BLADE;
    @endphp
    <x-preview :code="$code" title="List Group with Buttons" />

    {{-- List Group with Icons --}}
    @php
    $code = <<<'BLADE'
<x-fwb.list-group>
    <x-fwb.list-group.item href="#" fwb-icon="s-user-circle">Profile</x-fwb.list-group.item>
    <x-fwb.list-group.item href="#" fwb-icon="o-cog">Settings</x-fwb.list-group.item>
    <x-fwb.list-group.item href="#" fwb-icon="o-envelope">Messages</x-fwb.list-group.item>
    <x-fwb.list-group.item href="#" fwb-icon="o-download">Download</x-fwb.list-group.item>
</x-fwb.list-group>
BLADE;
    @endphp
    <x-preview :code="$code" title="List Group with Icons" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">List Group <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.list-group</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">bordered</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">true</code></td>
                        <td class="px-6 py-4">Show border and rounded corners around the list group.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">List Group Item <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.list-group.item</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">href</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">URL for the item. Renders as an anchor tag when provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">fwb-icon</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Shorthand icon name from <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">flowbite-blade-icons</code> (e.g. <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">s-user-circle</code>). Renders with default <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">w-4 h-4 me-2.5</code> classes.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">icon</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Raw HTML/SVG icon string. Takes priority over <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">fwb-icon</code> prop.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">active</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Highlight the item with an active (blue) background.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">disabled</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Disable the item with reduced opacity and no-cursor styling.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">button</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Render the item as a button element with interactive styles.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
