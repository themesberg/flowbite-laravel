<x-layouts.app title="File Input - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">File Input - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the file input component to allow users to upload one or more files, with support for sizes, helper text, multiple file uploads, and a drag-and-drop dropzone variant.</p>

    {{-- Default File Input --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.file-input label="Upload file" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default File Input" />

    {{-- Helper Text --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.file-input label="Upload file" helper="SVG, PNG, JPG or GIF (MAX. 800x400px)." />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Helper Text" />

    {{-- Multiple Files --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.file-input label="Upload multiple files" :multiple="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Multiple Files" />

    {{-- Sizes --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4 max-w-md">
    <x-fwb.file-input label="Small file input" size="sm" />
    <x-fwb.file-input label="Default file input" size="md" />
    <x-fwb.file-input label="Large file input" size="lg" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Sizes" />

    {{-- Disabled State --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.file-input label="Disabled file input" :disabled="true" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Disabled State" />

    {{-- Dropzone --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.file-input label="Upload file" :dropzone="true" helper="SVG, PNG, JPG or GIF (MAX. 800x400px)" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Dropzone" />

    {{-- Dropzone Multiple --}}
    @php
    $code = <<<'BLADE'
<div class="max-w-md">
    <x-fwb.file-input label="Upload files" :dropzone="true" :multiple="true" helper="PDF, DOC or TXT (MAX. 10MB per file)" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Dropzone Multiple" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">File Input <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.file-input</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the file input. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Label text displayed above the file input. For dropzone, it is required as it wraps the clickable area.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">helper</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Helper text displayed below the file input or inside the dropzone.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">multiple</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Allow uploading multiple files.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">File input size: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">disabled</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Disable the file input.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">required</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the file input as required.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">dropzone</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Use the drag-and-drop dropzone variant instead of the standard file input.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
