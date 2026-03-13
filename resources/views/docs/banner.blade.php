<x-layouts.app title="Banner - Flowbite Blade" description="Use the banner component to show marketing messages, announcements, and CTA buttons at the top or bottom of your page, with dismissible functionality.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Banner - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the banner component to show marketing messages, announcements, and CTA buttons at the top or bottom of your page, with dismissible functionality.</p>

    {{-- Default Sticky Banner --}}
    @php
    $code = <<<'BLADE'
<x-fwb.banner id="default-banner">
    <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
        <span class="inline-flex p-1 me-3 bg-gray-200 rounded-full dark:bg-gray-600">
            <x-fwb-o-bullhorn class="w-3 h-3 text-gray-500 dark:text-gray-400" />
            <span class="sr-only">Announcement</span>
        </span>
        <span>New brand identity has been launched for the <a href="#" class="inline font-medium text-blue-600 underline dark:text-blue-500 underline-offset-2 decoration-600 dark:decoration-500 decoration-solid hover:no-underline">Flowbite Library</a></span>
    </p>
</x-fwb.banner>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Sticky Banner" />

    {{-- Bottom Banner Position --}}
    @php
    $code = <<<'BLADE'
<x-fwb.banner id="bottom-banner" position="bottom">
    <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
        <span>Get 5% commission per sale <a href="#" class="flex items-center ms-0 text-sm font-medium text-blue-600 md:ms-1 md:inline-flex dark:text-blue-500 hover:underline">Become a partner <x-fwb-o-arrow-right class="w-3 h-3 ms-2 rtl:rotate-180" /></a></span>
    </p>
</x-fwb.banner>
BLADE;
    @endphp
    <x-preview :code="$code" title="Bottom Banner Position" />

    {{-- Marketing CTA Banner --}}
    @php
    $code = <<<'BLADE'
<x-fwb.banner id="cta-banner" color="dark">
    <p class="flex items-center text-sm font-normal text-white">
        <x-fwb-o-info-circle class="w-3 h-3 me-2" />
        <span>Explore the new Flowbite dashboard with 50+ UI components. <a href="#" class="inline font-medium text-blue-400 underline underline-offset-2 hover:no-underline">Check it out</a></span>
    </p>
</x-fwb.banner>
BLADE;
    @endphp
    <x-preview :code="$code" title="Marketing CTA Banner" />

    {{-- Newsletter Sign-up Banner --}}
    @php
    $code = <<<'BLADE'
<x-fwb.banner id="newsletter-banner">
    <form action="#" class="flex flex-col items-center w-full md:flex-row">
        <label for="email" class="flex-shrink-0 mb-2 me-auto text-sm font-medium text-gray-500 md:mb-0 md:me-4 dark:text-gray-400">Sign up for our newsletter</label>
        <input type="email" id="email" placeholder="Enter your email" class="bg-white border border-gray-300 text-gray-900 md:w-64 mb-2 md:mb-0 md:me-2 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subscribe</button>
    </form>
</x-fwb.banner>
BLADE;
    @endphp
    <x-preview :code="$code" title="Newsletter Sign-up Banner" />

    {{-- Informational Banner --}}
    @php
    $code = <<<'BLADE'
<x-fwb.banner id="info-banner" color="info">
    <div class="flex flex-col md:flex-row items-center">
        <p class="text-sm font-medium text-blue-800 dark:text-blue-200 mb-2 md:mb-0 md:me-4">Share important information with your visitors using this informational banner.</p>
        <div class="flex items-center space-x-3">
            <a href="#" class="text-xs bg-blue-700 text-white rounded-lg px-3 py-1.5 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</a>
            <a href="#" class="text-xs text-blue-800 underline hover:no-underline dark:text-blue-200">Learn more</a>
        </div>
    </div>
</x-fwb.banner>
BLADE;
    @endphp
    <x-preview :code="$code" title="Informational Banner" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Banner <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.banner</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the banner. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">position</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">top</code></td>
                        <td class="px-6 py-4">Position of the banner. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">top</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">bottom</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">dismissible</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">true</code></td>
                        <td class="px-6 py-4">Show or hide the close/dismiss button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">color</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Background color style. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">dark</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">info</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">variant</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Layout variant for different banner styles.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
