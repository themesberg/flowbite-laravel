<x-layouts.app title="Footer - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Footer</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the footer component to display navigation links, copyright information, social media icons, and sitemaps at the bottom of your pages.</p>

    {{-- Default Footer --}}
    @php
    $code = <<<'BLADE'
<x-fwb.footer>
    <div class="sm:flex sm:items-center sm:justify-between">
        <x-slot:copyright>
            &copy; 2024 <a href="https://flowbite.com/" class="hover:underline">Flowbite&trade;</a>. All Rights Reserved.
        </x-slot:copyright>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li><a href="#" class="hover:underline me-4 md:me-6">About</a></li>
            <li><a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a></li>
            <li><a href="#" class="hover:underline me-4 md:me-6">Licensing</a></li>
            <li><a href="#" class="hover:underline">Contact</a></li>
        </ul>
    </div>
</x-fwb.footer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Footer" />

    {{-- Footer with Logo --}}
    @php
    $code = <<<'BLADE'
<x-fwb.footer>
    <x-slot:brand>
        <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
    </x-slot:brand>
    <x-slot:links>
        <li><a href="#" class="hover:underline me-4 md:me-6">About</a></li>
        <li><a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a></li>
        <li><a href="#" class="hover:underline me-4 md:me-6">Licensing</a></li>
        <li><a href="#" class="hover:underline">Contact</a></li>
    </x-slot:links>
    <x-slot:copyright>
        &copy; 2024 <a href="https://flowbite.com/" class="hover:underline">Flowbite&trade;</a>. All Rights Reserved.
    </x-slot:copyright>
</x-fwb.footer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Footer with Logo" />

    {{-- Social Media Icons --}}
    @php
    $code = <<<'BLADE'
<x-fwb.footer>
    <x-slot:brand>
        <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
    </x-slot:brand>
    <x-slot:links>
        <li><a href="#" class="hover:underline me-4 md:me-6">About</a></li>
        <li><a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a></li>
        <li><a href="#" class="hover:underline me-4 md:me-6">Licensing</a></li>
        <li><a href="#" class="hover:underline">Contact</a></li>
    </x-slot:links>
    <div class="sm:flex sm:items-center sm:justify-between">
        <x-slot:copyright>
            &copy; 2024 <a href="https://flowbite.com/" class="hover:underline">Flowbite&trade;</a>. All Rights Reserved.
        </x-slot:copyright>
        <x-slot:social>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <x-fwb-s-facebook class="w-4 h-4" />
                <span class="sr-only">Facebook</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <x-fwb-s-twitter class="w-4 h-4" />
                <span class="sr-only">Twitter</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <x-fwb-s-github class="w-4 h-4" />
                <span class="sr-only">GitHub</span>
            </a>
        </x-slot:social>
    </div>
</x-fwb.footer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Social Media Icons" />

    {{-- Sitemap Links --}}
    @php
    $code = <<<'BLADE'
<x-fwb.footer variant="sitemap">
    <x-slot:sections>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4"><a href="#" class="hover:underline">About</a></li>
                <li class="mb-4"><a href="#" class="hover:underline">Careers</a></li>
                <li class="mb-4"><a href="#" class="hover:underline">Brand Center</a></li>
                <li><a href="#" class="hover:underline">Blog</a></li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Help Center</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4"><a href="#" class="hover:underline">Discord Server</a></li>
                <li class="mb-4"><a href="#" class="hover:underline">Twitter</a></li>
                <li class="mb-4"><a href="#" class="hover:underline">Facebook</a></li>
                <li><a href="#" class="hover:underline">Contact Us</a></li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4"><a href="#" class="hover:underline">Privacy Policy</a></li>
                <li class="mb-4"><a href="#" class="hover:underline">Licensing</a></li>
                <li><a href="#" class="hover:underline">Terms &amp; Conditions</a></li>
            </ul>
        </div>
        <div>
            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Download</h2>
            <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4"><a href="#" class="hover:underline">iOS</a></li>
                <li class="mb-4"><a href="#" class="hover:underline">Android</a></li>
                <li class="mb-4"><a href="#" class="hover:underline">Windows</a></li>
                <li><a href="#" class="hover:underline">MacOS</a></li>
            </ul>
        </div>
    </x-slot:sections>
    <x-slot:copyright>
        &copy; 2024 <a href="https://flowbite.com/" class="hover:underline">Flowbite&trade;</a>. All Rights Reserved.
    </x-slot:copyright>
</x-fwb.footer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Sitemap Links" />

    {{-- Sticky Footer --}}
    @php
    $code = <<<'BLADE'
<x-fwb.footer :sticky="true">
    <div class="sm:flex sm:items-center sm:justify-between">
        <x-slot:copyright>
            &copy; 2024 <a href="https://flowbite.com/" class="hover:underline">Flowbite&trade;</a>. All Rights Reserved.
        </x-slot:copyright>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
            <li><a href="#" class="hover:underline me-4 md:me-6">About</a></li>
            <li><a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a></li>
            <li><a href="#" class="hover:underline me-4 md:me-6">Licensing</a></li>
            <li><a href="#" class="hover:underline">Contact</a></li>
        </ul>
    </div>
</x-fwb.footer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Sticky Footer" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Footer <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.footer</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">variant</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Footer style variant. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sitemap</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">sticky</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Fix the footer to the bottom of the viewport.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brand</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the brand logo and name section.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">links</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for navigation link items displayed next to the brand.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">sections</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for sitemap grid sections (used with sitemap variant).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">copyright</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for copyright text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">social</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for social media icon links.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
