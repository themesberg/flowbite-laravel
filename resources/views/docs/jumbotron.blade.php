<x-layouts.app title="Jumbotron - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Jumbotron</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the jumbotron component as a full-width hero section with a title, subtitle, and call-to-action buttons to promote your website content.</p>

    {{-- Default Jumbotron --}}
    @php
    $code = <<<'BLADE'
<x-fwb.jumbotron>
    <x-slot:title>We invest in the world's potential</x-slot:title>
    <x-slot:subtitle>Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</x-slot:subtitle>
    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
        <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Get started
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
        </a>
        <a href="#" class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
            Learn more
        </a>
    </div>
</x-fwb.jumbotron>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Jumbotron" />

    {{-- Background Image --}}
    @php
    $code = <<<'BLADE'
<x-fwb.jumbotron bg="https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg">
    <x-slot:title>We invest in the world's potential</x-slot:title>
    <x-slot:subtitle>Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</x-slot:subtitle>
    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
        <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Get started
            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
        </a>
        <a href="#" class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-white hover:text-gray-900 focus:ring-4 focus:ring-gray-400">
            Learn more
        </a>
    </div>
</x-fwb.jumbotron>
BLADE;
    @endphp
    <x-preview :code="$code" title="Background Image" />

    {{-- Featured Video --}}
    @php
    $code = <<<'BLADE'
<x-fwb.jumbotron variant="grid">
    <div class="grid lg:grid-cols-2 gap-8 lg:gap-16">
        <div class="flex flex-col justify-center">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">We invest in the world's potential</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
                </a>
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Learn more
                </a>
            </div>
        </div>
        <div>
            <iframe class="mx-auto w-full lg:max-w-xl h-64 rounded-lg sm:h-96" src="https://www.youtube.com/embed/KaLxCiilHns" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</x-fwb.jumbotron>
BLADE;
    @endphp
    <x-preview :code="$code" title="Featured Video" />

    {{-- Gradient Background --}}
    @php
    $code = <<<'BLADE'
<x-fwb.jumbotron class="bg-gradient-to-r from-blue-500 to-indigo-600">
    <x-slot:title><span class="text-white">Quick search for anything</span></x-slot:title>
    <x-slot:subtitle><span class="text-blue-100">Search through our library of components, sections, and pages to find what you need.</span></x-slot:subtitle>
    <form class="w-full max-w-md mx-auto">
        <div class="relative">
            <div class="absolute inset-y-0 rtl:inset-x-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/></svg>
            </div>
            <input type="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search components, pages..." required />
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>
</x-fwb.jumbotron>
BLADE;
    @endphp
    <x-preview :code="$code" title="Gradient Background" />

    {{-- Jumbotron with Cards --}}
    @php
    $code = <<<'BLADE'
<x-fwb.jumbotron variant="grid">
    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
            <span class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                Tutorial
            </span>
            <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">How to quickly deploy a static website</h2>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools.</p>
            <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read more
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
            </a>
        </div>
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
            <span class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                Design
            </span>
            <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Start with Flowbite Design System</h2>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Static websites are now used to bootstrap lots of websites and are becoming the basis for a variety of tools.</p>
            <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read more
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/></svg>
            </a>
        </div>
    </div>
</x-fwb.jumbotron>
BLADE;
    @endphp
    <x-preview :code="$code" title="Jumbotron with Cards" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Jumbotron <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.jumbotron</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">bg</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Background image URL. When set, applies a darkened overlay for text readability.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">variant</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Layout variant. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code> (centered text) or <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">grid</code> (no text centering, for multi-column layouts).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the main heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">subtitle</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the description text below the heading.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
