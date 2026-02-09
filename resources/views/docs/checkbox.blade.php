<x-layouts.app title="Checkbox - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Checkbox</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the checkbox component to select one or more options from a list, with support for colors, helper text, disabled state, and various layout options.</p>

    {{-- Default Checkbox --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.checkbox label="Default checkbox" />
    <x-fwb.checkbox label="Checked state" :checked="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Checkbox" />

    {{-- Disabled State --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.checkbox label="Disabled checkbox" :disabled="true" />
    <x-fwb.checkbox label="Disabled checked" :disabled="true" :checked="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Disabled State" />

    {{-- Helper Text --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.checkbox label="Free shipping" helper="For orders shipped from $25 in books or $29 in other categories." />
    <x-fwb.checkbox label="I agree to the terms and conditions" helper="You will receive promotional emails and special offers." :required="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Helper Text" />

    {{-- Inline Layout --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-6">
    <x-fwb.checkbox label="Vue JS" :checked="true" />
    <x-fwb.checkbox label="React" />
    <x-fwb.checkbox label="Angular" />
    <x-fwb.checkbox label="Svelte" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Inline Layout" />

    {{-- Colors --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-6">
    <x-fwb.checkbox label="Blue" color="blue" :checked="true" />
    <x-fwb.checkbox label="Red" color="red" :checked="true" />
    <x-fwb.checkbox label="Green" color="green" :checked="true" />
    <x-fwb.checkbox label="Purple" color="purple" :checked="true" />
    <x-fwb.checkbox label="Teal" color="teal" :checked="true" />
    <x-fwb.checkbox label="Yellow" color="yellow" :checked="true" />
    <x-fwb.checkbox label="Orange" color="orange" :checked="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Colors" />

    {{-- Bordered --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4 max-w-md">
    <div class="flex items-center ps-4 border border-gray-200 rounded-lg dark:border-gray-700">
        <x-fwb.checkbox id="bordered-checkbox-1" label="Default radio" :checked="true" />
    </div>
    <div class="flex items-center ps-4 border border-gray-200 rounded-lg dark:border-gray-700">
        <x-fwb.checkbox id="bordered-checkbox-2" label="Checked state" />
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Bordered" />

    {{-- Checkbox List Group --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Technology</h3>
    <ul class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600">
            <div class="flex items-center ps-3">
                <x-fwb.checkbox id="vue-checkbox" label="Vue JS" />
            </div>
        </li>
        <li class="w-full border-b border-gray-200 dark:border-gray-600">
            <div class="flex items-center ps-3">
                <x-fwb.checkbox id="react-checkbox" label="React" />
            </div>
        </li>
        <li class="w-full border-b border-gray-200 dark:border-gray-600">
            <div class="flex items-center ps-3">
                <x-fwb.checkbox id="angular-checkbox" label="Angular" />
            </div>
        </li>
        <li class="w-full rounded-b-lg dark:border-gray-600">
            <div class="flex items-center ps-3">
                <x-fwb.checkbox id="laravel-checkbox" label="Laravel" />
            </div>
        </li>
    </ul>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Checkbox List Group" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Checkbox <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.checkbox</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the checkbox. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Label text displayed next to the checkbox.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">helper</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Helper text displayed below the label.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">checked</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Set the checkbox to be checked by default.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">disabled</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Disable the checkbox.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">required</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the checkbox as required.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">color</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code></td>
                        <td class="px-6 py-4">Checkbox color: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">red</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">green</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">purple</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">teal</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">yellow</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">orange</code>.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
