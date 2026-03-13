<x-layouts.app title="Drawer - Flowbite Blade" description="Use the drawer component to show a panel that slides out from the edge of the page for navigation, contact forms, or informational panels.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Drawer - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the drawer component to show a panel that slides out from the edge of the page, which can be used for navigation, contact forms, or informational panels.</p>

    {{-- Default Drawer --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-drawer-target="default-drawer" data-drawer-show="default-drawer" aria-controls="default-drawer">Show drawer</x-fwb.button>

<x-fwb.drawer id="default-drawer">
    <x-slot:header>Menu</x-slot:header>
    <p class="mb-6 text-sm text-gray-500 dark:text-gray-400">Supercharge your hiring by taking advantage of our <a href="#" class="text-blue-600 underline dark:text-blue-500 hover:no-underline">limited-time sale</a> for Flowbite Docs + Desktop for a bundle discount.</p>
    <div class="grid grid-cols-2 gap-4">
        <x-fwb.button href="#">Learn more</x-fwb.button>
        <x-fwb.button color="light" href="#">Get access</x-fwb.button>
    </div>
</x-fwb.drawer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Drawer" />

    {{-- Drawer Navigation --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-drawer-target="nav-drawer" data-drawer-show="nav-drawer" aria-controls="nav-drawer">Show navigation</x-fwb.button>

<x-fwb.drawer id="nav-drawer">
    <x-slot:header>Menu</x-slot:header>
    <ul class="space-y-2 font-medium">
        <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <x-fwb-o-grid class="w-5 h-5 text-gray-500 dark:text-gray-400" />
                <span class="ms-3">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <x-fwb-o-grid class="w-5 h-5 text-gray-500 dark:text-gray-400" />
                <span class="ms-3">Kanban</span>
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <x-fwb-o-inbox class="w-5 h-5 text-gray-500 dark:text-gray-400" />
                <span class="ms-3">Inbox</span>
            </a>
        </li>
    </ul>
</x-fwb.drawer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Drawer Navigation" />

    {{-- Contact Form --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-drawer-target="contact-drawer" data-drawer-show="contact-drawer" aria-controls="contact-drawer">Show contact form</x-fwb.button>

<x-fwb.drawer id="contact-drawer">
    <x-slot:header>Contact Us</x-slot:header>
    <form action="#" class="mb-6">
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
        </div>
        <div class="mb-6">
            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subject</label>
            <input type="text" id="subject" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Let us know how we can help you" required />
        </div>
        <div class="mb-6">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Your message..."></textarea>
        </div>
        <x-fwb.button type="submit" class="w-full">Send message</x-fwb.button>
    </form>
</x-fwb.drawer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Contact Form" />

    {{-- Right Drawer --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-drawer-target="right-drawer" data-drawer-show="right-drawer" data-drawer-placement="right" aria-controls="right-drawer">Show right drawer</x-fwb.button>

<x-fwb.drawer id="right-drawer" position="right">
    <x-slot:header>Right Drawer</x-slot:header>
    <p class="mb-6 text-sm text-gray-500 dark:text-gray-400">This drawer slides in from the right side of the screen.</p>
    <x-fwb.button data-drawer-hide="right-drawer">Close</x-fwb.button>
</x-fwb.drawer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Right Drawer" />

    {{-- Top Drawer --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-drawer-target="top-drawer" data-drawer-show="top-drawer" data-drawer-placement="top" aria-controls="top-drawer">Show top drawer</x-fwb.button>

<x-fwb.drawer id="top-drawer" position="top">
    <x-slot:header>Top Drawer</x-slot:header>
    <p class="max-w-lg mb-6 text-sm text-gray-500 dark:text-gray-400">This drawer slides in from the top of the screen and spans the full width.</p>
    <x-fwb.button data-drawer-hide="top-drawer">Close</x-fwb.button>
</x-fwb.drawer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Top Drawer" />

    {{-- Bottom Drawer --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-drawer-target="bottom-drawer" data-drawer-show="bottom-drawer" data-drawer-placement="bottom" aria-controls="bottom-drawer">Show bottom drawer</x-fwb.button>

<x-fwb.drawer id="bottom-drawer" position="bottom">
    <x-slot:header>Bottom Drawer</x-slot:header>
    <p class="max-w-lg mb-6 text-sm text-gray-500 dark:text-gray-400">This drawer slides in from the bottom of the screen and spans the full width.</p>
    <x-fwb.button data-drawer-hide="bottom-drawer">Close</x-fwb.button>
</x-fwb.drawer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Bottom Drawer" />

    {{-- Body Scrolling --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-drawer-target="scroll-drawer" data-drawer-show="scroll-drawer" aria-controls="scroll-drawer">Show scrollable drawer</x-fwb.button>

<x-fwb.drawer id="scroll-drawer" :bodyScrolling="true">
    <x-slot:header>Body Scrolling</x-slot:header>
    <p class="mb-6 text-sm text-gray-500 dark:text-gray-400">This drawer allows the background page content to remain scrollable while the drawer is open.</p>
    <x-fwb.button data-drawer-hide="scroll-drawer">Close</x-fwb.button>
</x-fwb.drawer>
BLADE;
    @endphp
    <x-preview :code="$code" title="Body Scrolling" />

    {{-- No Backdrop --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-drawer-target="nobackdrop-drawer" data-drawer-show="nobackdrop-drawer" aria-controls="nobackdrop-drawer">Show drawer (no backdrop)</x-fwb.button>

<x-fwb.drawer id="nobackdrop-drawer" :backdrop="false">
    <x-slot:header>No Backdrop</x-slot:header>
    <p class="mb-6 text-sm text-gray-500 dark:text-gray-400">This drawer does not show a dimming overlay behind it when open.</p>
    <x-fwb.button data-drawer-hide="nobackdrop-drawer">Close</x-fwb.button>
</x-fwb.drawer>
BLADE;
    @endphp
    <x-preview :code="$code" title="No Backdrop" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Drawer <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.drawer</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the drawer. Auto-generated if not provided. Must match data-drawer-target and data-drawer-show on the trigger button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">position</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">left</code></td>
                        <td class="px-6 py-4">Side from which the drawer slides in. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">left</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">right</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">top</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">bottom</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">backdrop</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">true</code></td>
                        <td class="px-6 py-4">Show a dimming overlay behind the drawer when open.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">bodyScrolling</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Allow the page body to remain scrollable while the drawer is open.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">header</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the drawer title. When provided, a close button is also rendered.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
