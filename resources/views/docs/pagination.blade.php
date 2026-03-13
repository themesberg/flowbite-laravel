<x-layouts.app title="Pagination - Flowbite Blade" description="Use the pagination component to indicate the number of pages with number links, previous and next buttons, and table data navigation variants.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Pagination - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the pagination component to indicate the number of pages with number links, previous and next buttons, and table data navigation variants.</p>

    {{-- Default Pagination --}}
    @php
    $code = <<<'BLADE'
<x-fwb.pagination :paginator="$users" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Pagination" :data="['users' => $users]" />

    {{-- Pagination with Icons --}}
    @php
    $code = <<<'BLADE'
<x-fwb.pagination :paginator="$users" :icons="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Pagination with Icons" :data="['users' => $users]" />

    {{-- Previous and Next --}}
    @php
    $code = <<<'BLADE'
<x-fwb.pagination :paginator="$users" variant="simple" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Previous and Next" :data="['users' => $users]" />

    {{-- Previous and Next with Icons --}}
    @php
    $code = <<<'BLADE'
<x-fwb.pagination :paginator="$users" variant="simple" :icons="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Previous and Next with Icons" :data="['users' => $users]" />

    {{-- Table Data Navigation --}}
    @php
    $code = <<<'BLADE'
<x-fwb.pagination :paginator="$users" :showInfo="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Table Data Navigation" :data="['users' => $users]" />

    {{-- Table Data Navigation with Icons --}}
    @php
    $code = <<<'BLADE'
<x-fwb.pagination :paginator="$users" :showInfo="true" :icons="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Table Data Navigation with Icons" :data="['users' => $users]" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Pagination <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.pagination</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">paginator</td>
                        <td class="px-6 py-4">mixed</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Laravel paginator instance (e.g., from <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Model::paginate()</code>).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">variant</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Pagination style: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code> (numbered pages) or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">simple</code> (previous/next only).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">icons</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Use arrow icons instead of or alongside text labels for previous/next.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">previousLabel</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Previous</code></td>
                        <td class="px-6 py-4">Custom label text for the previous page button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">nextLabel</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Next</code></td>
                        <td class="px-6 py-4">Custom label text for the next page button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">showInfo</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Show "Showing X to Y of Z Entries" text above the navigation buttons.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
