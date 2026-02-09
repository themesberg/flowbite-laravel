<x-layouts.app title="Toggle - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Toggle</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the toggle component to switch between two states such as on/off or enabled/disabled, with support for sizes, colors, and disabled state.</p>

    {{-- Default Toggle --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.toggle label="Toggle me" />
    <x-fwb.toggle label="Checked toggle" :checked="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Toggle" />

    {{-- Checked State --}}
    @php
    $code = <<<'BLADE'
<x-fwb.toggle label="Enabled" :checked="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Checked State" />

    {{-- Disabled State --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.toggle label="Disabled toggle" :disabled="true" />
    <x-fwb.toggle label="Disabled checked" :disabled="true" :checked="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Disabled State" />

    {{-- Colors --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.toggle label="Blue" color="blue" :checked="true" />
    <x-fwb.toggle label="Red" color="red" :checked="true" />
    <x-fwb.toggle label="Green" color="green" :checked="true" />
    <x-fwb.toggle label="Purple" color="purple" :checked="true" />
    <x-fwb.toggle label="Yellow" color="yellow" :checked="true" />
    <x-fwb.toggle label="Teal" color="teal" :checked="true" />
    <x-fwb.toggle label="Orange" color="orange" :checked="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Colors" />

    {{-- Sizes --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.toggle label="Small toggle" size="sm" :checked="true" />
    <x-fwb.toggle label="Default toggle" size="md" :checked="true" />
    <x-fwb.toggle label="Large toggle" size="lg" :checked="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Sizes" />

    {{-- Toggle Card --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <div class="flex items-center justify-between p-4 border border-gray-200 rounded-lg dark:border-gray-700">
        <div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Email notifications</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Receive email updates about your account activity.</p>
        </div>
        <x-fwb.toggle :checked="true" />
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Toggle Card" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Toggle <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.toggle</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the toggle. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Label text displayed next to the toggle.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">checked</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Set the toggle to be on by default.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">disabled</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Disable the toggle.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">required</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the toggle as required.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">color</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code></td>
                        <td class="px-6 py-4">Toggle color: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">red</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">green</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">purple</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">yellow</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">teal</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">orange</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">Toggle size: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
