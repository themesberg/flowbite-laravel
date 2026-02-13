<x-layouts.app title="Blog Template - Publisher Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Blog Template</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">A full blog post template with article content, author info, sidebar, related posts, and share buttons.</p>

    {{-- Default Blog Template --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.publisher.blog-template />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Blog Template" />

    {{-- Custom Blog Template --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.publisher.blog-template
    title="Getting Started with Laravel Blade Components"
    author="Jane Smith"
    authorRole="Senior Developer at Acme Corp"
    publishDate="Jan. 15, 2026"
    publishDatetime="2026-01-15"
    category="Development"
>
    <p class="lead">Learn how to build reusable Blade components in Laravel.</p>
    <p>Blade components are a powerful way to create reusable UI elements in your Laravel applications. In this tutorial, we will explore the basics of creating and using Blade components.</p>
    <h2>What are Blade Components?</h2>
    <p>Blade components provide a convenient way to extract reusable pieces of your UI into dedicated classes and templates.</p>
</x-fwb.blocks.publisher.blog-template>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Blog Template" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Blog Template <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.publisher.blog-template</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Best practices for successful prototypes</code></td>
                        <td class="px-6 py-4">The blog post title displayed as the main heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">author</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Jese Leos</code></td>
                        <td class="px-6 py-4">The author name displayed in the article header.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">authorRole</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Graphic Designer, educator &amp; CEO Flowbite</code></td>
                        <td class="px-6 py-4">The author's role or job title.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">authorAvatar</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">https://flowbite.com/.../profile-picture-2.jpg</code></td>
                        <td class="px-6 py-4">URL of the author's avatar image.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">publishDate</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Feb. 8, 2022</code></td>
                        <td class="px-6 py-4">Human-readable publish date.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">publishDatetime</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">2022-02-08</code></td>
                        <td class="px-6 py-4">Machine-readable datetime for the &lt;time&gt; element.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">category</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Tutorial</code></td>
                        <td class="px-6 py-4">The article category label.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">The article body content. When empty, shows default example content.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
