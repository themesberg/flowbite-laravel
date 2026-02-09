<x-layouts.app title="Range - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Range</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the range slider input component to select a numeric value from a range of values with support for min/max limits, steps, sizes, and disabled state.</p>

    {{-- Default Range --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.range label="Default range" :value="50" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Range" />

    {{-- Disabled State --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.range label="Disabled range" :value="50" :disabled="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Disabled State" />

    {{-- Min and Max --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.range label="Min and max range" :min="0" :max="10" :value="5" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Min and Max" />

    {{-- Steps --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.range label="Steps range" :min="0" :max="5" :step="0.5" :value="2.5" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Steps" />

    {{-- Sizes --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-6 max-w-md">
    <x-fwb.range label="Small range" size="sm" :value="50" />
    <x-fwb.range label="Default range" size="md" :value="50" />
    <x-fwb.range label="Large range" size="lg" :value="50" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Sizes" />

    {{-- Labels --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.range label="Price range" :min="100" :max="1500" :value="500" :step="100" />
    <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 -mt-1">
        <span>$100</span>
        <span>$500</span>
        <span>$1000</span>
        <span>$1500</span>
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Range with Labels" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Range <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.range</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the range input. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Label text displayed above the range slider.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">min</td>
                        <td class="px-6 py-4">int|float</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">0</code></td>
                        <td class="px-6 py-4">Minimum value of the range.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">max</td>
                        <td class="px-6 py-4">int|float</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">100</code></td>
                        <td class="px-6 py-4">Maximum value of the range.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">step</td>
                        <td class="px-6 py-4">int|float</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">1</code></td>
                        <td class="px-6 py-4">Step increment between values.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">value</td>
                        <td class="px-6 py-4">int|float</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">50</code></td>
                        <td class="px-6 py-4">Initial value of the range slider.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">Range slider size: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">disabled</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Disable the range slider.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">required</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the range slider as required.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
