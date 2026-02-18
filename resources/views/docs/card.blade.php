<x-layouts.app title="Card - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Card</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Get started with a large variety of card components built with Tailwind CSS to show content in a box such as blog posts, user profiles, pricing plans, and more.</p>

    {{-- Default Card --}}
    @php
    $code = <<<'BLADE'
<x-fwb.card class="max-w-sm">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
</x-fwb.card>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Card" />

    {{-- Card with CTA Button --}}
    @php
    $code = <<<'BLADE'
<x-fwb.card class="max-w-sm">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    <x-fwb.button href="#">
        Read more
        <x-fwb-o-arrow-right class="w-3.5 h-3.5 ms-2 rtl:rotate-180" />
    </x-fwb.button>
</x-fwb.card>
BLADE;
    @endphp
    <x-preview :code="$code" title="Card with CTA Button" />

    {{-- Card with Image --}}
    @php
    $code = <<<'BLADE'
<x-fwb.card class="max-w-sm" img="https://flowbite.com/docs/images/blog/image-1.jpg" imgAlt="Blog post image">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    <x-fwb.button href="#">
        Read more
        <x-fwb-o-arrow-right class="w-3.5 h-3.5 ms-2 rtl:rotate-180" />
    </x-fwb.button>
</x-fwb.card>
BLADE;
    @endphp
    <x-preview :code="$code" title="Card with Image" />

    {{-- Horizontal Card --}}
    @php
    $code = <<<'BLADE'
<x-fwb.card :horizontal="true" img="https://flowbite.com/docs/images/blog/image-4.jpg" imgAlt="Blog post image">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
</x-fwb.card>
BLADE;
    @endphp
    <x-preview :code="$code" title="Horizontal Card" />

    {{-- Card as Link --}}
    @php
    $code = <<<'BLADE'
<x-fwb.card class="max-w-sm" href="#">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
</x-fwb.card>
BLADE;
    @endphp
    <x-preview :code="$code" title="Card as Link" />

    {{-- Card with Header and Footer --}}
    @php
    $code = <<<'BLADE'
<x-fwb.card class="max-w-sm">
    <x-slot:header>
        <h5 class="text-xl font-bold text-gray-900 dark:text-white">Card Header</h5>
    </x-slot:header>
    <p class="font-normal text-gray-700 dark:text-gray-400">This card has both a header and footer section using named slots.</p>
    <x-slot:footer>
        <div class="flex items-center gap-2">
            <x-fwb.button size="sm">Accept</x-fwb.button>
            <x-fwb.button size="sm" color="light">Decline</x-fwb.button>
        </div>
    </x-slot:footer>
</x-fwb.card>
BLADE;
    @endphp
    <x-preview :code="$code" title="Card with Header and Footer" />

    {{-- User Profile Card --}}
    @php
    $code = <<<'BLADE'
<x-fwb.card class="max-w-sm">
    <div class="flex flex-col items-center pb-10">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="User profile"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
        <div class="flex mt-4 gap-2">
            <x-fwb.button size="sm">Add friend</x-fwb.button>
            <x-fwb.button size="sm" color="light">Message</x-fwb.button>
        </div>
    </div>
</x-fwb.card>
BLADE;
    @endphp
    <x-preview :code="$code" title="User Profile Card" />

    {{-- Pricing Card --}}
    @php
    $code = <<<'BLADE'
<x-fwb.card class="max-w-sm">
    <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Standard plan</h5>
    <div class="flex items-baseline text-gray-900 dark:text-white">
        <span class="text-3xl font-semibold">$</span>
        <span class="text-5xl font-extrabold tracking-tight">49</span>
        <span class="ms-1 text-xl font-normal text-gray-500 dark:text-gray-400">/month</span>
    </div>
    <ul role="list" class="space-y-5 my-7">
        <li class="flex items-center">
            <x-fwb-s-check-circle class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" />
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">2 team members</span>
        </li>
        <li class="flex items-center">
            <x-fwb-s-check-circle class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" />
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">20GB Cloud storage</span>
        </li>
        <li class="flex items-center">
            <x-fwb-s-check-circle class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" />
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Integration help</span>
        </li>
    </ul>
    <x-fwb.button class="w-full">Choose plan</x-fwb.button>
</x-fwb.card>
BLADE;
    @endphp
    <x-preview :code="$code" title="Pricing Card" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Card <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.card</code></h3>
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
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Make the entire card a clickable link.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">horizontal</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Display card content in a horizontal layout with image on the left.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">img</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Image URL to display on the card.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">imgAlt</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">Alt text for the card image.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">imgPosition</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">top</code></td>
                        <td class="px-6 py-4">Position of the image. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">top</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">bottom</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">header</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the card header with bottom border.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">footer</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the card footer with top border.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
