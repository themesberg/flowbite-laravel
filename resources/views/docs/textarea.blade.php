<x-layouts.app title="Textarea - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Textarea</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the textarea component for multi-line text input fields with support for labels, helper text, validation states, and a comment box layout with a footer slot.</p>

    {{-- Default Textarea --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.textarea label="Your message" placeholder="Write your thoughts here..." />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Textarea" />

    {{-- Comment Box with Footer --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.textarea label="Your comment" placeholder="Write a comment...">
        <x-slot:footer>
            <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                Post comment
            </button>
            <p class="text-xs text-gray-500 dark:text-gray-400 ms-auto">Remember, contributions should follow our <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">Community Guidelines</a>.</p>
        </x-slot:footer>
    </x-fwb.textarea>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Comment Box" />

    {{-- Validation States --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4 max-w-md">
    <x-fwb.textarea label="Success" color="green" placeholder="Write here..." helper="Well done! Your message looks great." />
    <x-fwb.textarea label="Error" color="red" placeholder="Write here..." helper="Please provide a longer message." />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Validation States" />

    {{-- Helper Text --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.textarea label="Your message" placeholder="Write your thoughts here..." helper="We will never share your message with anyone." />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Helper Text" />

    {{-- Disabled --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.textarea label="Disabled textarea" placeholder="You cannot type here..." :disabled="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Disabled State" />

    {{-- Custom Rows --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4 max-w-md">
    <x-fwb.textarea label="Short textarea" placeholder="Brief message..." :rows="2" />
    <x-fwb.textarea label="Tall textarea" placeholder="Detailed description..." :rows="8" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Rows" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Textarea <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.textarea</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the textarea. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Label text displayed above the textarea.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">placeholder</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Placeholder text shown when the textarea is empty.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">rows</td>
                        <td class="px-6 py-4">int</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">4</code></td>
                        <td class="px-6 py-4">Number of visible text rows.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">helper</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Helper text displayed below the textarea.</td>
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
                        <td class="px-6 py-4">Disable the textarea.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">required</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the textarea as required.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">footer</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for footer content below the textarea, useful for comment box layouts with buttons.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
