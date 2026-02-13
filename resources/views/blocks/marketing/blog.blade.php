<x-layouts.app title="Blog, Portfolio & Events - Marketing Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Blog, Portfolio & Events</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use blog, portfolio, and event schedule blocks to showcase articles, case studies, and conference or event agendas on your marketing pages.</p>

    {{-- Blog Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.blog />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Blog" />

    {{-- Blog Custom --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.marketing.blog title="Latest Articles" description="Insights and tutorials from our engineering team.">
    <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-between items-center mb-5 text-gray-500">
            <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                Guide
            </span>
            <span class="text-sm">3 days ago</span>
        </div>
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">Getting started with Flowbite Blade</a></h2>
        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">Learn how to install and configure Flowbite Blade components in your Laravel application step by step.</p>
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-4 rtl:space-x-reverse">
                <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                <span class="font-medium dark:text-white">Jese Leos</span>
            </div>
            <a href="#" class="inline-flex items-center font-medium text-blue-600 dark:text-blue-500 hover:underline">
                Read more
                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
    </article>
</x-fwb.blocks.marketing.blog>
BLADE;
    @endphp
    <x-preview :code="$code2" title="Custom Blog" />

    {{-- Portfolio Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.marketing.portfolio />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default Portfolio" />

    {{-- Portfolio Custom --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.marketing.portfolio title="Featured Projects" description="A selection of our best work from the past year.">
    <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 mb-4">
            Design System
        </span>
        <h3 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Component Library</h3>
        <p class="mb-4 font-light text-gray-500 dark:text-gray-400">A comprehensive design system with over 200 reusable components built for enterprise applications.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            View case study
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</x-fwb.blocks.marketing.portfolio>
BLADE;
    @endphp
    <x-preview :code="$code4" title="Custom Portfolio" />

    {{-- Event Schedule Default --}}
    @php
    $code5 = <<<'BLADE'
<x-fwb.blocks.marketing.event-schedule />
BLADE;
    @endphp
    <x-preview :code="$code5" title="Default Event Schedule" />

    {{-- Event Schedule Custom --}}
    @php
    $code6 = <<<'BLADE'
<x-fwb.blocks.marketing.event-schedule title="Conference Agenda">
    <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
        <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">09:00 - 10:00</p>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Welcome and Registration</h3>
    </div>
    <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
        <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">10:00 - 11:30</p>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Keynote: Building Modern Web Apps with Laravel</h3>
    </div>
    <div class="flex flex-col gap-2 py-4 sm:gap-6 sm:flex-row sm:items-center">
        <p class="w-32 text-lg font-normal text-gray-500 sm:text-right dark:text-gray-400 shrink-0">11:30 - 12:30</p>
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Panel Discussion: The Future of PHP</h3>
    </div>
</x-fwb.blocks.marketing.event-schedule>
BLADE;
    @endphp
    <x-preview :code="$code6" title="Custom Event Schedule" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Blog <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.blog</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Our Blog'</code></td>
                        <td class="px-6 py-4">Heading text displayed above the blog post cards.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'We use an agile approach...'</code></td>
                        <td class="px-6 py-4">Subheading text displayed below the title.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Blog post <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&lt;article&gt;</code> elements displayed in a two-column grid. When empty, default sample posts are shown.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Portfolio <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.portfolio</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Our work'</code></td>
                        <td class="px-6 py-4">Heading text displayed above the portfolio cards.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Crafted with skill and care...'</code></td>
                        <td class="px-6 py-4">Subheading text displayed below the title.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Portfolio card elements displayed in a three-column grid. When empty, default sample projects are shown.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">EventSchedule <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.event-schedule</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Schedule'</code></td>
                        <td class="px-6 py-4">Heading text displayed above the schedule timeline.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Schedule items, each containing a time and event title in a flex row layout. When empty, default sample schedule is shown.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
