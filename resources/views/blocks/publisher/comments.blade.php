<x-layouts.app title="Comments - Publisher Blocks - Flowbite Blade" description="A comment section with a form for posting comments and support for nested replies.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Comments</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">A comment section with a form for posting comments and support for nested replies.</p>

    {{-- Default Comments --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.publisher.comments />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Comments" />

    {{-- Custom Comments --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.publisher.comments
    title="Comments"
    :commentCount="3"
/>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Title & Count" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Comments <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.publisher.comments</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Discussion</code></td>
                        <td class="px-6 py-4">The heading text for the comments section.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">commentCount</td>
                        <td class="px-6 py-4">int</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">0</code></td>
                        <td class="px-6 py-4">The number of comments displayed next to the title.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">form</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot to replace the default comment form with a custom one.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for comment items. When empty, shows example comments with nested replies.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
