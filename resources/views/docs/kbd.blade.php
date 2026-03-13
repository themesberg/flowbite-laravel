<x-layouts.app title="KBD - Flowbite Blade" description="Use the KBD component to indicate keyboard inputs and shortcuts in your documentation and tutorials.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">KBD (Keyboard) - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the KBD component to indicate keyboard inputs and shortcuts in your documentation and tutorials.</p>

    {{-- Default KBD --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-1">
    <x-fwb.kbd>Shift</x-fwb.kbd>
    <x-fwb.kbd>Ctrl</x-fwb.kbd>
    <x-fwb.kbd>Tab</x-fwb.kbd>
    <x-fwb.kbd>Caps Lock</x-fwb.kbd>
    <x-fwb.kbd>Esc</x-fwb.kbd>
    <x-fwb.kbd>Spacebar</x-fwb.kbd>
    <x-fwb.kbd>Enter</x-fwb.kbd>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default KBD" />

    {{-- KBD Inside Text --}}
    @php
    $code = <<<'BLADE'
<p class="text-gray-500 dark:text-gray-400">
    Please press <x-fwb.kbd>Ctrl</x-fwb.kbd> + <x-fwb.kbd>Shift</x-fwb.kbd> + <x-fwb.kbd>R</x-fwb.kbd> to re-render the page.
</p>
BLADE;
    @endphp
    <x-preview :code="$code" title="KBD Inside Text" />

    {{-- KBD Inside Table --}}
    @php
    $code = <<<'BLADE'
<div class="overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">Key</th>
                <th class="px-6 py-3">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4"><x-fwb.kbd>Shift</x-fwb.kbd> or <x-fwb.kbd>Tab</x-fwb.kbd></td>
                <td class="px-6 py-4">Navigate to interactive elements</td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4"><x-fwb.kbd>Enter</x-fwb.kbd> or <x-fwb.kbd>Spacebar</x-fwb.kbd></td>
                <td class="px-6 py-4">Ensure elements with ARIA role are reachable</td>
            </tr>
        </tbody>
    </table>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="KBD Inside Table" />

    {{-- Arrow Keys --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-1">
    <x-fwb.kbd :arrow="true">
        <x-fwb-o-chevron-down class="w-2.5 h-2.5" />
        <span class="sr-only">Arrow down</span>
    </x-fwb.kbd>
    <x-fwb.kbd :arrow="true">
        <x-fwb-o-chevron-down class="w-2.5 h-2.5 rotate-180" />
        <span class="sr-only">Arrow up</span>
    </x-fwb.kbd>
    <x-fwb.kbd :arrow="true">
        <x-fwb-o-chevron-down class="w-2.5 h-2.5 rotate-90" />
        <span class="sr-only">Arrow left</span>
    </x-fwb.kbd>
    <x-fwb.kbd :arrow="true">
        <x-fwb-o-chevron-down class="w-2.5 h-2.5 -rotate-90" />
        <span class="sr-only">Arrow right</span>
    </x-fwb.kbd>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Arrow Keys" />

    {{-- Letter Keys --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-1">
    <x-fwb.kbd>Q</x-fwb.kbd>
    <x-fwb.kbd>W</x-fwb.kbd>
    <x-fwb.kbd>E</x-fwb.kbd>
    <x-fwb.kbd>R</x-fwb.kbd>
    <x-fwb.kbd>T</x-fwb.kbd>
    <x-fwb.kbd>Y</x-fwb.kbd>
    <x-fwb.kbd>U</x-fwb.kbd>
    <x-fwb.kbd>I</x-fwb.kbd>
    <x-fwb.kbd>O</x-fwb.kbd>
    <x-fwb.kbd>P</x-fwb.kbd>
    <x-fwb.kbd>A</x-fwb.kbd>
    <x-fwb.kbd>S</x-fwb.kbd>
    <x-fwb.kbd>D</x-fwb.kbd>
    <x-fwb.kbd>F</x-fwb.kbd>
    <x-fwb.kbd>G</x-fwb.kbd>
    <x-fwb.kbd>H</x-fwb.kbd>
    <x-fwb.kbd>J</x-fwb.kbd>
    <x-fwb.kbd>K</x-fwb.kbd>
    <x-fwb.kbd>L</x-fwb.kbd>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Letter Keys" />

    {{-- Number Keys --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-1">
    <x-fwb.kbd>1</x-fwb.kbd>
    <x-fwb.kbd>2</x-fwb.kbd>
    <x-fwb.kbd>3</x-fwb.kbd>
    <x-fwb.kbd>4</x-fwb.kbd>
    <x-fwb.kbd>5</x-fwb.kbd>
    <x-fwb.kbd>6</x-fwb.kbd>
    <x-fwb.kbd>7</x-fwb.kbd>
    <x-fwb.kbd>8</x-fwb.kbd>
    <x-fwb.kbd>9</x-fwb.kbd>
    <x-fwb.kbd>0</x-fwb.kbd>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Number Keys" />

    {{-- Function Keys --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-1">
    <x-fwb.kbd>F1</x-fwb.kbd>
    <x-fwb.kbd>F2</x-fwb.kbd>
    <x-fwb.kbd>F3</x-fwb.kbd>
    <x-fwb.kbd>F4</x-fwb.kbd>
    <x-fwb.kbd>F5</x-fwb.kbd>
    <x-fwb.kbd>F6</x-fwb.kbd>
    <x-fwb.kbd>F7</x-fwb.kbd>
    <x-fwb.kbd>F8</x-fwb.kbd>
    <x-fwb.kbd>F9</x-fwb.kbd>
    <x-fwb.kbd>F10</x-fwb.kbd>
    <x-fwb.kbd>F11</x-fwb.kbd>
    <x-fwb.kbd>F12</x-fwb.kbd>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Function Keys" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">KBD <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.kbd</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Size of the KBD element. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">arrow</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Enable inline-flex layout for arrow key icons with SVG content.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
