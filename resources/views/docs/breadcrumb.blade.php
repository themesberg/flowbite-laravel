<x-layouts.app title="Breadcrumb - Flowbite Blade" description="Show the location of the current page in a hierarchical structure using the breadcrumb component.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Breadcrumb - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Show the location of the current page in a hierarchical structure using the breadcrumb component.</p>

    {{-- Default Breadcrumb --}}
    @php
    $code = <<<'BLADE'
<x-fwb.breadcrumb>
    <x-fwb.breadcrumb.item href="/" :home="true">Home</x-fwb.breadcrumb.item>
    <x-fwb.breadcrumb.item href="/projects">Projects</x-fwb.breadcrumb.item>
    <x-fwb.breadcrumb.item>Flowbite</x-fwb.breadcrumb.item>
</x-fwb.breadcrumb>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Breadcrumb" />

    {{-- Solid Background --}}
    @php
    $code = <<<'BLADE'
<x-fwb.breadcrumb :solid="true">
    <x-fwb.breadcrumb.item href="/" :home="true">Home</x-fwb.breadcrumb.item>
    <x-fwb.breadcrumb.item href="/projects">Projects</x-fwb.breadcrumb.item>
    <x-fwb.breadcrumb.item>Flowbite</x-fwb.breadcrumb.item>
</x-fwb.breadcrumb>
BLADE;
    @endphp
    <x-preview :code="$code" title="Solid Background" />

    {{-- Without Home Icon --}}
    @php
    $code = <<<'BLADE'
<x-fwb.breadcrumb>
    <x-fwb.breadcrumb.item href="/">Home</x-fwb.breadcrumb.item>
    <x-fwb.breadcrumb.item href="/projects">Projects</x-fwb.breadcrumb.item>
    <x-fwb.breadcrumb.item>Flowbite</x-fwb.breadcrumb.item>
</x-fwb.breadcrumb>
BLADE;
    @endphp
    <x-preview :code="$code" title="Without Home Icon" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Breadcrumb <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.breadcrumb</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">solid</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Apply a solid background with border and rounded corners.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Breadcrumb Item <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.breadcrumb.item</code></h3>
        <div class="overflow-x-auto">
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">href</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">URL for the breadcrumb link. When null, renders as plain text (current page).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">home</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Display a home icon and omit the chevron separator. Use on the first item.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
