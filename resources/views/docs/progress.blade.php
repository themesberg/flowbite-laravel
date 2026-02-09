<x-layouts.app title="Progress - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Progress Bar</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the progress bar component to show the completion rate of a data indicator or use it as a loader element, available in multiple sizes, colors, and label options.</p>

    {{-- Default Progress --}}
    @php
    $code = <<<'BLADE'
<x-fwb.progress :value="45" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Progress" />

    {{-- Sizes --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <div>
        <div class="mb-1 text-base font-medium text-gray-700 dark:text-white">Extra small</div>
        <x-fwb.progress :value="45" size="xs" />
    </div>
    <div>
        <div class="mb-1 text-base font-medium text-gray-700 dark:text-white">Small</div>
        <x-fwb.progress :value="45" size="sm" />
    </div>
    <div>
        <div class="mb-1 text-base font-medium text-gray-700 dark:text-white">Default</div>
        <x-fwb.progress :value="45" size="md" />
    </div>
    <div>
        <div class="mb-1 text-base font-medium text-gray-700 dark:text-white">Large</div>
        <x-fwb.progress :value="45" size="lg" />
    </div>
    <div>
        <div class="mb-1 text-base font-medium text-gray-700 dark:text-white">Extra large</div>
        <x-fwb.progress :value="45" size="xl" />
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Sizes" />

    {{-- With Label Inside --}}
    @php
    $code = <<<'BLADE'
<x-fwb.progress :value="45" size="lg" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Label Inside" />

    {{-- With Label Outside --}}
    @php
    $code = <<<'BLADE'
<x-fwb.progress :value="45" label="Flowbite" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Label Outside" />

    {{-- Colors --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <div>
        <div class="mb-1 text-base font-medium text-blue-700 dark:text-blue-500">Blue</div>
        <x-fwb.progress :value="45" color="blue" />
    </div>
    <div>
        <div class="mb-1 text-base font-medium text-gray-700 dark:text-gray-500">Dark</div>
        <x-fwb.progress :value="50" color="gray" />
    </div>
    <div>
        <div class="mb-1 text-base font-medium text-red-700 dark:text-red-500">Red</div>
        <x-fwb.progress :value="55" color="red" />
    </div>
    <div>
        <div class="mb-1 text-base font-medium text-green-700 dark:text-green-500">Green</div>
        <x-fwb.progress :value="60" color="green" />
    </div>
    <div>
        <div class="mb-1 text-base font-medium text-yellow-700 dark:text-yellow-500">Yellow</div>
        <x-fwb.progress :value="65" color="yellow" />
    </div>
    <div>
        <div class="mb-1 text-base font-medium text-indigo-700 dark:text-indigo-500">Indigo</div>
        <x-fwb.progress :value="70" color="indigo" />
    </div>
    <div>
        <div class="mb-1 text-base font-medium text-purple-700 dark:text-purple-500">Purple</div>
        <x-fwb.progress :value="75" color="purple" />
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Colors" />

    {{-- Multiple Progress Values --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.progress :value="0" label="Starting" />
    <x-fwb.progress :value="25" label="Quarter" />
    <x-fwb.progress :value="50" label="Half" />
    <x-fwb.progress :value="75" label="Three Quarters" />
    <x-fwb.progress :value="100" label="Complete" color="green" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Progress Values" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Progress <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.progress</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">value</td>
                        <td class="px-6 py-4">int|float</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">0</code></td>
                        <td class="px-6 py-4">Current progress value.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">max</td>
                        <td class="px-6 py-4">int</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">100</code></td>
                        <td class="px-6 py-4">Maximum progress value for percentage calculation.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">color</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code></td>
                        <td class="px-6 py-4">Progress bar color. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">red</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">green</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">yellow</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">purple</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">indigo</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">gray</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">Bar height size. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xs</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xl</code>. The lg and xl sizes display the percentage inside the bar.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Label text displayed above the progress bar with percentage on the right.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
