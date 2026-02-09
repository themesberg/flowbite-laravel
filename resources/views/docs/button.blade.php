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
    <x-fwb.button color="blue">
        <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
            <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.184.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
        </svg>
        Buy now
    </x-fwb.button>
    <x-fwb.button color="blue">
        Choose plan
        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
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
<x-fwb.button color="blue">
    <svg aria-hidden="true" role="status" class="inline w-4 h-4 me-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
    </svg>
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
