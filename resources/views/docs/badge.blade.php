<x-layouts.app title="Badge - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Badge</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the badge component to highlight important information, show notification counts, or label content with color-coded indicators.</p>

    {{-- Default Badges --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.badge color="blue">Default</x-fwb.badge>
    <x-fwb.badge color="gray">Dark</x-fwb.badge>
    <x-fwb.badge color="red">Red</x-fwb.badge>
    <x-fwb.badge color="green">Green</x-fwb.badge>
    <x-fwb.badge color="yellow">Yellow</x-fwb.badge>
    <x-fwb.badge color="indigo">Indigo</x-fwb.badge>
    <x-fwb.badge color="purple">Purple</x-fwb.badge>
    <x-fwb.badge color="pink">Pink</x-fwb.badge>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Badges" />

    {{-- Bordered Badges --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.badge color="blue" :bordered="true">Default</x-fwb.badge>
    <x-fwb.badge color="gray" :bordered="true">Dark</x-fwb.badge>
    <x-fwb.badge color="red" :bordered="true">Red</x-fwb.badge>
    <x-fwb.badge color="green" :bordered="true">Green</x-fwb.badge>
    <x-fwb.badge color="yellow" :bordered="true">Yellow</x-fwb.badge>
    <x-fwb.badge color="indigo" :bordered="true">Indigo</x-fwb.badge>
    <x-fwb.badge color="purple" :bordered="true">Purple</x-fwb.badge>
    <x-fwb.badge color="pink" :bordered="true">Pink</x-fwb.badge>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Bordered Badges" />

    {{-- Pill Badges --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.badge color="blue" :pill="true">Default</x-fwb.badge>
    <x-fwb.badge color="gray" :pill="true">Dark</x-fwb.badge>
    <x-fwb.badge color="red" :pill="true">Red</x-fwb.badge>
    <x-fwb.badge color="green" :pill="true">Green</x-fwb.badge>
    <x-fwb.badge color="yellow" :pill="true">Yellow</x-fwb.badge>
    <x-fwb.badge color="indigo" :pill="true">Indigo</x-fwb.badge>
    <x-fwb.badge color="purple" :pill="true">Purple</x-fwb.badge>
    <x-fwb.badge color="pink" :pill="true">Pink</x-fwb.badge>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Pill Badges" />

    {{-- Large Badges --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.badge color="blue" size="sm">Default</x-fwb.badge>
    <x-fwb.badge color="gray" size="sm">Dark</x-fwb.badge>
    <x-fwb.badge color="red" size="sm">Red</x-fwb.badge>
    <x-fwb.badge color="green" size="sm">Green</x-fwb.badge>
    <x-fwb.badge color="yellow" size="sm">Yellow</x-fwb.badge>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Large Badges" />

    {{-- Badges with Icon --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.badge color="blue">
        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
        </svg>
        3 days ago
    </x-fwb.badge>
    <x-fwb.badge color="red">
        <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
        </svg>
        2 minutes ago
    </x-fwb.badge>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Badges with Icon" />

    {{-- Badge as Link --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.badge color="blue" href="#">Badge link</x-fwb.badge>
    <x-fwb.badge color="blue" href="#" size="sm">Badge link</x-fwb.badge>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Badge as Link" />

    {{-- Icon Only Badge --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.badge color="blue" :iconOnly="true" :pill="true">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path fill="currentColor" d="m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z"/>
            <path fill="#fff" d="M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z"/>
        </svg>
        <span class="sr-only">Icon description</span>
    </x-fwb.badge>
    <x-fwb.badge color="red" :iconOnly="true" :pill="true">
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 11.086l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
        </svg>
        <span class="sr-only">Icon description</span>
    </x-fwb.badge>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Icon Only Badge" />

    {{-- Dismissible Badges --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.badge color="blue" :dismissible="true">Default</x-fwb.badge>
    <x-fwb.badge color="red" :dismissible="true">Red</x-fwb.badge>
    <x-fwb.badge color="green" :dismissible="true">Green</x-fwb.badge>
    <x-fwb.badge color="yellow" :dismissible="true">Yellow</x-fwb.badge>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Dismissible Badges" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Badge <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.badge</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">color</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code></td>
                        <td class="px-6 py-4">Badge color. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">red</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">green</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">yellow</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">indigo</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">purple</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">pink</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">gray</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xs</code></td>
                        <td class="px-6 py-4">Badge size. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xs</code> (default), <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code> (large).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">pill</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Use a fully rounded pill shape instead of default rounded corners.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">bordered</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Add a border around the badge.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">dismissible</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Show a close button to dismiss the badge.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">href</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Render as a link with the given URL.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">iconOnly</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Use compact padding for icon-only badges.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">auto</code></td>
                        <td class="px-6 py-4">Unique identifier. Auto-generated if not provided. Used for dismiss targeting.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
