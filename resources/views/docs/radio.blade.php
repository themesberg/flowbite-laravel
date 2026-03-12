<x-layouts.app title="Radio - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Radio - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the radio component to select a single option from a group, with support for colors, helper text, disabled state, and various layout options.</p>

    {{-- Default Radio --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.radio label="Default radio" name="default-radio" :checked="true" />
    <x-fwb.radio label="Another option" name="default-radio" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Radio" />

    {{-- Disabled State --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.radio label="Disabled radio" name="disabled-radio" :disabled="true" />
    <x-fwb.radio label="Disabled checked" name="disabled-radio-2" :disabled="true" :checked="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Disabled State" />

    {{-- Helper Text --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.radio label="Free shipping" name="shipping" helper="For orders over $25 in eligible categories." :checked="true" />
    <x-fwb.radio label="Express delivery" name="shipping" helper="Get it within 2-3 business days for $9.99." />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Helper Text" />

    {{-- Inline Layout --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-6">
    <x-fwb.radio label="Inline 1" name="inline-radio" :checked="true" />
    <x-fwb.radio label="Inline 2" name="inline-radio" />
    <x-fwb.radio label="Inline 3" name="inline-radio" />
    <x-fwb.radio label="Inline disabled" name="inline-radio" :disabled="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Inline Layout" />

    {{-- Colors --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-6">
    <x-fwb.radio label="Blue" color="blue" name="color-radio" :checked="true" />
    <x-fwb.radio label="Red" color="red" name="color-radio-red" :checked="true" />
    <x-fwb.radio label="Green" color="green" name="color-radio-green" :checked="true" />
    <x-fwb.radio label="Purple" color="purple" name="color-radio-purple" :checked="true" />
    <x-fwb.radio label="Teal" color="teal" name="color-radio-teal" :checked="true" />
    <x-fwb.radio label="Yellow" color="yellow" name="color-radio-yellow" :checked="true" />
    <x-fwb.radio label="Orange" color="orange" name="color-radio-orange" :checked="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Colors" />

    {{-- Bordered --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4 max-w-md">
    <div class="flex items-center ps-4 border border-gray-200 rounded-lg dark:border-gray-700">
        <x-fwb.radio id="bordered-radio-1" name="bordered-radio" label="Default radio" :checked="true" />
    </div>
    <div class="flex items-center ps-4 border border-gray-200 rounded-lg dark:border-gray-700">
        <x-fwb.radio id="bordered-radio-2" name="bordered-radio" label="Another option" />
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Bordered" />

    {{-- Radio List Group --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Identification</h3>
    <ul class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
            <div class="flex items-center ps-3">
                <x-fwb.radio id="list-radio-passport" name="list-radio" label="Passport" />
            </div>
        </li>
        <li class="w-full border-b border-gray-200 dark:border-gray-600">
            <div class="flex items-center ps-3">
                <x-fwb.radio id="list-radio-id" name="list-radio" label="ID Card" />
            </div>
        </li>
        <li class="w-full border-b border-gray-200 dark:border-gray-600">
            <div class="flex items-center ps-3">
                <x-fwb.radio id="list-radio-visa" name="list-radio" label="Visa" />
            </div>
        </li>
        <li class="w-full rounded-b-lg dark:border-gray-600">
            <div class="flex items-center ps-3">
                <x-fwb.radio id="list-radio-license" name="list-radio" label="Driver License" />
            </div>
        </li>
    </ul>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Radio List Group" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Radio <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.radio</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the radio. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Label text displayed next to the radio button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">helper</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Helper text displayed below the label.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">name</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Name attribute to group radio buttons together.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">checked</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Set the radio button to be selected by default.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">disabled</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Disable the radio button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">required</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the radio button as required.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">color</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code></td>
                        <td class="px-6 py-4">Radio button color: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">red</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">green</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">purple</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">teal</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">yellow</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">orange</code>.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
