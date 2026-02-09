<x-layouts.app title="Input - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Input</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the input component for text-based form fields including text, email, password, number, URL, and phone inputs with support for labels, helper text, validation states, and icon addons.</p>

    {{-- Default Input --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4 max-w-md">
    <x-fwb.input label="First name" placeholder="John" />
    <x-fwb.input label="Email address" type="email" placeholder="name@flowbite.com" />
    <x-fwb.input label="Password" type="password" placeholder="********" />
    <x-fwb.input label="Website URL" type="url" placeholder="https://flowbite.com" />
    <x-fwb.input label="Phone number" type="tel" placeholder="+1 (555) 000-0000" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Input" />

    {{-- Input Sizes --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4 max-w-md">
    <x-fwb.input label="Small input" size="sm" placeholder="Small input" />
    <x-fwb.input label="Default input" size="md" placeholder="Default input" />
    <x-fwb.input label="Large input" size="lg" placeholder="Large input" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Input Sizes" />

    {{-- Disabled and Readonly --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4 max-w-md">
    <x-fwb.input label="Disabled input" :disabled="true" placeholder="Disabled input" />
    <x-fwb.input label="Readonly input" :readonly="true" value="This is readonly" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Disabled and Readonly" />

    {{-- Validation States --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4 max-w-md">
    <x-fwb.input label="Success input" color="green" placeholder="Success input" helper="Well done! Some success message." />
    <x-fwb.input label="Error input" color="red" placeholder="Error input" helper="Oops! Something went wrong." />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Validation States" />

    {{-- Input with Icon (Prefix) --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4 max-w-md">
    <x-fwb.input label="Your email" type="email" placeholder="name@flowbite.com">
        <x-slot:prefix>
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
            </svg>
        </x-slot:prefix>
    </x-fwb.input>
    <x-fwb.input label="Username" placeholder="Username">
        <x-slot:prefix>
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
            </svg>
        </x-slot:prefix>
    </x-fwb.input>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Input with Icon" />

    {{-- Helper Text --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.input label="Your email" type="email" placeholder="name@flowbite.com" helper="We will never share your details. Read our Privacy Policy." />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Helper Text" />

    {{-- Required Input --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.input label="Email address" type="email" placeholder="name@flowbite.com" :required="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Required Input" />

    {{-- Search Input --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.input label="Search" type="search" placeholder="Search...">
        <x-slot:prefix>
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </x-slot:prefix>
        <x-slot:suffix>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </x-slot:suffix>
    </x-fwb.input>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Search Input" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Input <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.input</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the input. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">type</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">text</code></td>
                        <td class="px-6 py-4">The input type attribute (text, email, password, number, url, tel, search).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Label text displayed above the input field.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">placeholder</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Placeholder text shown when the input is empty.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">helper</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Helper text displayed below the input field.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">Input size: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">color</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Validation color state: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">green</code> (success), or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">red</code> (error).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">disabled</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Disable the input field.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">readonly</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Make the input field read-only.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">required</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the input field as required.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">prefix</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for an icon or content at the start of the input.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">suffix</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for an icon or content at the end of the input.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
