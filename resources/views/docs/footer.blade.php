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
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19"><path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/></svg>
                <span class="sr-only">Facebook</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 17"><path fill-rule="evenodd" d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z" clip-rule="evenodd"/></svg>
                <span class="sr-only">Twitter</span>
            </a>
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/></svg>
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
