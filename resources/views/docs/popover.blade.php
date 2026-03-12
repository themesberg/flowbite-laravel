<x-layouts.app title="Popover - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Popover - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the popover component to show detailed information inside a pop-up box relative to the element that is being clicked or hovered over.</p>

    {{-- Default Popover --}}
    @php
    $code = <<<'BLADE'
<x-fwb.popover id="default-popover">
    <x-slot:triggerSlot>
        <x-fwb.button>Default popover</x-fwb.button>
    </x-slot:triggerSlot>
    <p>And here's some amazing content. It's very engaging. Right?</p>
</x-fwb.popover>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Popover" />

    {{-- Popover with Title --}}
    @php
    $code = <<<'BLADE'
<x-fwb.popover id="title-popover">
    <x-slot:triggerSlot>
        <x-fwb.button>Popover with title</x-fwb.button>
    </x-slot:triggerSlot>
    <x-slot:title>Popover title</x-slot:title>
    <p>And here's some amazing content. It's very engaging. Right?</p>
</x-fwb.popover>
BLADE;
    @endphp
    <x-preview :code="$code" title="Popover with Title" />

    {{-- User Profile Popover --}}
    @php
    $code = <<<'BLADE'
<x-fwb.popover id="user-popover" triggerType="hover">
    <x-slot:triggerSlot>
        <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline font-medium">Jese Leos</a>
    </x-slot:triggerSlot>
    <x-slot:title>Jese Leos</x-slot:title>
    <div class="flex items-center space-x-3">
        <div class="shrink-0">
            <img class="w-10 h-10 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" alt="Jese Leos">
        </div>
        <div>
            <p class="text-sm font-semibold text-gray-900 dark:text-white">Jese Leos</p>
            <p class="text-sm text-gray-500 dark:text-gray-400">Full-stack developer</p>
        </div>
    </div>
    <p class="mt-3 text-sm">Open-source contributor. Building things for the web.</p>
    <div class="flex mt-3 space-x-4">
        <div>
            <span class="text-sm font-semibold text-gray-900 dark:text-white">127</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">Following</span>
        </div>
        <div>
            <span class="text-sm font-semibold text-gray-900 dark:text-white">4,852</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">Followers</span>
        </div>
    </div>
</x-fwb.popover>
BLADE;
    @endphp
    <x-preview :code="$code" title="User Profile Popover" />

    {{-- Click Trigger --}}
    @php
    $code = <<<'BLADE'
<x-fwb.popover id="click-popover" triggerType="click">
    <x-slot:triggerSlot>
        <x-fwb.button>Click me</x-fwb.button>
    </x-slot:triggerSlot>
    <x-slot:title>Click Popover</x-slot:title>
    <p>This popover is shown when you click the button and hides when you click again.</p>
</x-fwb.popover>
BLADE;
    @endphp
    <x-preview :code="$code" title="Click Trigger" />

    {{-- Placement --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-4">
    <x-fwb.popover id="popover-top" placement="top">
        <x-slot:triggerSlot>
            <x-fwb.button>Popover top</x-fwb.button>
        </x-slot:triggerSlot>
        <x-slot:title>Popover top</x-slot:title>
        <p>This popover is displayed above the trigger element.</p>
    </x-fwb.popover>

    <x-fwb.popover id="popover-right" placement="right">
        <x-slot:triggerSlot>
            <x-fwb.button>Popover right</x-fwb.button>
        </x-slot:triggerSlot>
        <x-slot:title>Popover right</x-slot:title>
        <p>This popover is displayed to the right of the trigger element.</p>
    </x-fwb.popover>

    <x-fwb.popover id="popover-bottom" placement="bottom">
        <x-slot:triggerSlot>
            <x-fwb.button>Popover bottom</x-fwb.button>
        </x-slot:triggerSlot>
        <x-slot:title>Popover bottom</x-slot:title>
        <p>This popover is displayed below the trigger element.</p>
    </x-fwb.popover>

    <x-fwb.popover id="popover-left" placement="left">
        <x-slot:triggerSlot>
            <x-fwb.button>Popover left</x-fwb.button>
        </x-slot:triggerSlot>
        <x-slot:title>Popover left</x-slot:title>
        <p>This popover is displayed to the left of the trigger element.</p>
    </x-fwb.popover>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Placement" />

    {{-- Description Popover --}}
    @php
    $code = <<<'BLADE'
<p class="text-gray-500 dark:text-gray-400">
    Due to its relatively low cost, <x-fwb.popover id="desc-popover" placement="bottom" triggerType="hover">
        <x-slot:triggerSlot>
            <span class="text-blue-600 dark:text-blue-500 underline cursor-pointer">open-source</span>
        </x-slot:triggerSlot>
        <x-slot:title>What is open source?</x-slot:title>
        <p>Open source software is software with source code that anyone can inspect, modify, or enhance. Programs released under this license can be used at no cost.</p>
    </x-fwb.popover> software enjoys many advantages over its proprietary counterpart.
</p>
BLADE;
    @endphp
    <x-preview :code="$code" title="Description Popover" />

    {{-- No Arrow --}}
    @php
    $code = <<<'BLADE'
<x-fwb.popover id="no-arrow-popover" :arrow="false">
    <x-slot:triggerSlot>
        <x-fwb.button>Popover without arrow</x-fwb.button>
    </x-slot:triggerSlot>
    <x-slot:title>No Arrow</x-slot:title>
    <p>This popover does not have the pointer arrow element.</p>
</x-fwb.popover>
BLADE;
    @endphp
    <x-preview :code="$code" title="Popover without Arrow" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Popover <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.popover</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the popover. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">placement</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">top</code></td>
                        <td class="px-6 py-4">Position of the popover relative to the trigger. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">top</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">right</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">bottom</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">left</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">triggerType</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">hover</code></td>
                        <td class="px-6 py-4">How the popover is triggered. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">hover</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">click</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">arrow</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">true</code></td>
                        <td class="px-6 py-4">Show the pointer arrow on the popover.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">offset</td>
                        <td class="px-6 py-4">int|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Custom offset distance in pixels between the trigger and the popover.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">triggerSlot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the trigger element that activates the popover.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the popover header/title with a distinct background.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
