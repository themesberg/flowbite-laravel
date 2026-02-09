<x-layouts.app title="Navbar - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Navbar</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">The navbar component can be used to show a list of navigation links positioned on the top side of your page with support for responsive mobile menus, branding, CTA buttons, and more.</p>

    {{-- Default Navbar --}}
    @php
    $code = <<<'BLADE'
<x-fwb.navbar id="default-navbar">
    <x-slot:brand>
        <x-fwb.navbar.brand href="/" src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite Logo">
            Flowbite
        </x-fwb.navbar.brand>
    </x-slot:brand>
    <x-fwb.navbar.link href="#" :active="true">Home</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">About</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Services</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Pricing</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Contact</x-fwb.navbar.link>
</x-fwb.navbar>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Navbar" />

    {{-- Navbar with CTA Button --}}
    @php
    $code = <<<'BLADE'
<x-fwb.navbar id="cta-navbar">
    <x-slot:brand>
        <x-fwb.navbar.brand href="/" src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite Logo">
            Flowbite
        </x-fwb.navbar.brand>
    </x-slot:brand>
    <x-slot:actions>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
    </x-slot:actions>
    <x-fwb.navbar.link href="#" :active="true">Home</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">About</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Services</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Pricing</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Contact</x-fwb.navbar.link>
</x-fwb.navbar>
BLADE;
    @endphp
    <x-preview :code="$code" title="Navbar with CTA Button" />

    {{-- Rounded Navbar --}}
    @php
    $code = <<<'BLADE'
<x-fwb.navbar id="rounded-navbar" :rounded="true" :bordered="true">
    <x-slot:brand>
        <x-fwb.navbar.brand href="/" src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite Logo">
            Flowbite
        </x-fwb.navbar.brand>
    </x-slot:brand>
    <x-fwb.navbar.link href="#" :active="true">Home</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">About</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Services</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Pricing</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Contact</x-fwb.navbar.link>
</x-fwb.navbar>
BLADE;
    @endphp
    <x-preview :code="$code" title="Rounded Navbar" />

    {{-- Sticky Navbar --}}
    @php
    $code = <<<'BLADE'
<x-fwb.navbar id="sticky-navbar" :sticky="true" :bordered="true">
    <x-slot:brand>
        <x-fwb.navbar.brand href="/" src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite Logo">
            Flowbite
        </x-fwb.navbar.brand>
    </x-slot:brand>
    <x-slot:actions>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
    </x-slot:actions>
    <x-fwb.navbar.link href="#" :active="true">Home</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">About</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Services</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Pricing</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Contact</x-fwb.navbar.link>
</x-fwb.navbar>
BLADE;
    @endphp
    <x-preview :code="$code" title="Sticky Navbar" />

    {{-- Navbar with Brand Only --}}
    @php
    $code = <<<'BLADE'
<x-fwb.navbar id="brand-navbar">
    <x-slot:brand>
        <x-fwb.navbar.brand href="/">
            Flowbite
        </x-fwb.navbar.brand>
    </x-slot:brand>
    <x-fwb.navbar.link href="#" :active="true">Home</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">About</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Services</x-fwb.navbar.link>
    <x-fwb.navbar.link href="#">Contact</x-fwb.navbar.link>
</x-fwb.navbar>
BLADE;
    @endphp
    <x-preview :code="$code" title="Navbar with Text Brand" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Navbar <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.navbar</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the navbar. Used for mobile toggle. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">fluid</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">true</code></td>
                        <td class="px-6 py-4">Use full-width layout. Set to false for a contained width.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">rounded</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Apply rounded corners to the navbar container.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">bordered</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Add a bottom border to the navbar.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">sticky</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Fix the navbar to the top of the viewport on scroll.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">brand</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the brand/logo area, typically using <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">x-fwb.navbar.brand</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">actions</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for action buttons (CTA, search, user menu) placed to the right.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Navbar Brand <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.navbar.brand</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">href</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">/</code></td>
                        <td class="px-6 py-4">URL the brand links to.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">src</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">URL of the brand logo image.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">alt</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">Alt text for the brand logo image.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Navbar Link <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.navbar.link</code></h3>
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
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">#</code></td>
                        <td class="px-6 py-4">URL for the navigation link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">active</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the link as the current active page.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
