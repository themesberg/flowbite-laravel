<x-layouts.app title="Spinner - Flowbite Blade" description="Use the spinner component as a loading indicator built with SVG and Tailwind CSS, available in multiple colors and sizes.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Spinner - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the spinner component as a loading indicator built with SVG and Tailwind CSS, available in multiple colors and sizes.</p>

    {{-- Default Spinner --}}
    @php
    $code = <<<'BLADE'
<x-fwb.spinner />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Spinner" />

    {{-- Colors --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-4">
    <x-fwb.spinner color="blue" />
    <x-fwb.spinner color="gray" />
    <x-fwb.spinner color="green" />
    <x-fwb.spinner color="red" />
    <x-fwb.spinner color="yellow" />
    <x-fwb.spinner color="pink" />
    <x-fwb.spinner color="purple" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Spinner Colors" />

    {{-- Sizes --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap items-center gap-4">
    <x-fwb.spinner size="xs" />
    <x-fwb.spinner size="sm" />
    <x-fwb.spinner size="md" />
    <x-fwb.spinner size="lg" />
    <x-fwb.spinner size="xl" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Spinner Sizes" />

    {{-- Alignment --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <div class="text-left">
        <x-fwb.spinner />
    </div>
    <div class="text-center">
        <x-fwb.spinner />
    </div>
    <div class="text-right">
        <x-fwb.spinner />
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Alignment" />

    {{-- Button with Spinner --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-2">
    <x-fwb.button color="blue" :disabled="true">
        <x-fwb.spinner size="sm" color="white" class="me-3" />
        Loading...
    </x-fwb.button>
    <x-fwb.button color="dark" :disabled="true">
        <x-fwb.spinner size="sm" color="white" class="me-3" />
        Loading...
    </x-fwb.button>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Button with Spinner" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Spinner <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.spinner</code></h3>
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
                        <td class="px-6 py-4">Spinner color. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">red</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">green</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">yellow</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">purple</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">pink</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">gray</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">white</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">Spinner size. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xs</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xl</code>.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
