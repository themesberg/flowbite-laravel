<x-layouts.app title="Button - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Button</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the button component inside forms, as links, social login buttons, and more with support for multiple colors, sizes, and states.</p>

    {{-- Default Buttons --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.button color="blue">Default</x-fwb.button>
    <x-fwb.button color="dark">Dark</x-fwb.button>
    <x-fwb.button color="light">Light</x-fwb.button>
    <x-fwb.button color="green">Green</x-fwb.button>
    <x-fwb.button color="red">Red</x-fwb.button>
    <x-fwb.button color="yellow">Yellow</x-fwb.button>
    <x-fwb.button color="purple">Purple</x-fwb.button>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Buttons" />

    {{-- Outline Buttons --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.button color="blue" :outline="true">Default</x-fwb.button>
    <x-fwb.button color="dark" :outline="true">Dark</x-fwb.button>
    <x-fwb.button color="green" :outline="true">Green</x-fwb.button>
    <x-fwb.button color="red" :outline="true">Red</x-fwb.button>
    <x-fwb.button color="yellow" :outline="true">Yellow</x-fwb.button>
    <x-fwb.button color="purple" :outline="true">Purple</x-fwb.button>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Outline Buttons" />

    {{-- Pill Buttons --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.button :pill="true" color="blue">Default</x-fwb.button>
    <x-fwb.button :pill="true" color="dark">Dark</x-fwb.button>
    <x-fwb.button :pill="true" color="light">Light</x-fwb.button>
    <x-fwb.button :pill="true" color="green">Green</x-fwb.button>
    <x-fwb.button :pill="true" color="red">Red</x-fwb.button>
    <x-fwb.button :pill="true" color="yellow">Yellow</x-fwb.button>
    <x-fwb.button :pill="true" color="purple">Purple</x-fwb.button>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Pill Buttons" />

    {{-- Button Sizes --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap items-center gap-2">
    <x-fwb.button size="xs">Extra small</x-fwb.button>
    <x-fwb.button size="sm">Small</x-fwb.button>
    <x-fwb.button size="md">Base</x-fwb.button>
    <x-fwb.button size="lg">Large</x-fwb.button>
    <x-fwb.button size="xl">Extra large</x-fwb.button>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Button Sizes" />

    {{-- Buttons with Icon --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.button color="blue" fwb-icon="s-shopping-cart">Buy now</x-fwb.button>
    <x-fwb.button color="blue">
        Choose plan
        <x-fwb-o-arrow-right class="w-3.5 h-3.5 ms-2 rtl:rotate-180" />
    </x-fwb.button>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Buttons with Icon" />

    {{-- Disabled Button --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button :disabled="true">Disabled button</x-fwb.button>
BLADE;
    @endphp
    <x-preview :code="$code" title="Disabled Button" />

    {{-- Button as Link --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button href="#">Link button</x-fwb.button>
BLADE;
    @endphp
    <x-preview :code="$code" title="Button as Link" />

    {{-- Button with Label / Badge --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button color="blue">
    Messages
    <span class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">2</span>
</x-fwb.button>
BLADE;
    @endphp
    <x-preview :code="$code" title="Button with Label" />

    {{-- Loader Button --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button color="blue" :disabled="true">
    <x-fwb.spinner size="sm" color="white" class="me-3" />
    Loading...
</x-fwb.button>
BLADE;
    @endphp
    <x-preview :code="$code" title="Loader Button" />

    {{-- Button Group --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button.group>
    <x-fwb.button color="blue">Profile</x-fwb.button>
    <x-fwb.button color="blue">Settings</x-fwb.button>
    <x-fwb.button color="blue">Messages</x-fwb.button>
</x-fwb.button.group>
BLADE;
    @endphp
    <x-preview :code="$code" title="Button Group" />

    {{-- Outline Button Group --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button.group>
    <x-fwb.button color="blue" :outline="true">Profile</x-fwb.button>
    <x-fwb.button color="blue" :outline="true">Settings</x-fwb.button>
    <x-fwb.button color="blue" :outline="true">Messages</x-fwb.button>
</x-fwb.button.group>
BLADE;
    @endphp
    <x-preview :code="$code" title="Outline Button Group" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Button <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.button</code></h3>
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
                        <td class="px-6 py-4">Button color. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">red</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">green</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">yellow</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">purple</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">dark</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">light</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">Button size. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xs</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xl</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">pill</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Use fully rounded pill shape.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">outline</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Use outline/bordered style instead of solid fill.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">disabled</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Disable the button with reduced opacity and no interaction.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">href</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Render as an anchor link instead of a button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">fwb-icon</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Shorthand leading icon name from <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">flowbite-blade-icons</code> (e.g. <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">s-shopping-cart</code>). Renders with default <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">w-3.5 h-3.5 me-2</code> classes.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">icon</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">—</code></td>
                        <td class="px-6 py-4">Named slot for full leading icon control. Takes priority over <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">fwb-icon</code> prop.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">tag</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Override the HTML tag. Defaults to <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">button</code> or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">a</code> if href is set.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Button Group <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.button.group</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot containing the button components to group together.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
