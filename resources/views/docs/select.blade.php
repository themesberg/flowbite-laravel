<x-layouts.app title="Select - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Select</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the select component to allow users to choose one or more options from a dropdown list, with support for sizes, disabled state, underline variant, and multiple selection.</p>

    {{-- Default Select --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.select label="Select a country" placeholder="Choose a country" :options="['us' => 'United States', 'ca' => 'Canada', 'fr' => 'France', 'de' => 'Germany']" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Select" />

    {{-- Multiple Select --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.select label="Select countries" :multiple="true" :options="['us' => 'United States', 'ca' => 'Canada', 'fr' => 'France', 'de' => 'Germany', 'uk' => 'United Kingdom']" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Multiple Select" />

    {{-- Select Sizes --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4 max-w-md">
    <x-fwb.select label="Small select" size="sm" placeholder="Choose an option" :options="['1' => 'Option 1', '2' => 'Option 2', '3' => 'Option 3']" />
    <x-fwb.select label="Default select" size="md" placeholder="Choose an option" :options="['1' => 'Option 1', '2' => 'Option 2', '3' => 'Option 3']" />
    <x-fwb.select label="Large select" size="lg" placeholder="Choose an option" :options="['1' => 'Option 1', '2' => 'Option 2', '3' => 'Option 3']" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Select Sizes" />

    {{-- Disabled State --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.select label="Disabled select" :disabled="true" placeholder="You cannot change this" :options="['1' => 'Option 1', '2' => 'Option 2']" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Disabled State" />

    {{-- Underline Select --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.select label="Underline select" :underline="true" placeholder="Choose a country" :options="['us' => 'United States', 'ca' => 'Canada', 'fr' => 'France', 'de' => 'Germany']" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Underline Select" />

    {{-- Helper Text --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.select label="Select your country" placeholder="Choose a country" :options="['us' => 'United States', 'ca' => 'Canada', 'fr' => 'France']" helper="Please select your country of residence." />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Helper Text" />

    {{-- Select with Slot Content --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.select label="Choose a category">
        <option value="" disabled selected>Select a category</option>
        <optgroup label="Electronics">
            <option value="phones">Phones</option>
            <option value="laptops">Laptops</option>
        </optgroup>
        <optgroup label="Clothing">
            <option value="shirts">Shirts</option>
            <option value="pants">Pants</option>
        </optgroup>
    </x-fwb.select>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Select with Option Groups" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Select <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.select</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the select. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Label text displayed above the select.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">options</td>
                        <td class="px-6 py-4">array</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">[]</code></td>
                        <td class="px-6 py-4">Associative array of value => text pairs for the options.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">placeholder</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Placeholder text shown as the first disabled option.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">helper</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Helper text displayed below the select.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">Select size: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">disabled</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Disable the select field.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">required</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the select field as required.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">multiple</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Allow multiple options to be selected.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">underline</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Use underline style instead of bordered box.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
