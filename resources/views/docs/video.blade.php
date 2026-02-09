<x-layouts.app title="Video - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Video</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the video component to embed native HTML5 video players with controls, autoplay, muted options, and various sizing configurations.</p>

    {{-- Video Player --}}
    @php
    $code = <<<'BLADE'
<x-fwb.video src="https://flowbite.com/docs/videos/flowbite.mp4" :controls="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Video Player" />

    {{-- Autoplay --}}
    @php
    $code = <<<'BLADE'
<x-fwb.video src="https://flowbite.com/docs/videos/flowbite.mp4" :autoplay="true" :controls="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Autoplay" />

    {{-- Muted --}}
    @php
    $code = <<<'BLADE'
<x-fwb.video src="https://flowbite.com/docs/videos/flowbite.mp4" :autoplay="true" :muted="true" :controls="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Muted" />

    {{-- Width Sizing --}}
    @php
    $code = <<<'BLADE'
<x-fwb.video src="https://flowbite.com/docs/videos/flowbite.mp4" size="w-96" :controls="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Width Sizing" />

    {{-- Height Sizing --}}
    @php
    $code = <<<'BLADE'
<x-fwb.video src="https://flowbite.com/docs/videos/flowbite.mp4" size="h-80" :controls="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Height Sizing" />

    {{-- Responsive --}}
    @php
    $code = <<<'BLADE'
<x-fwb.video src="https://flowbite.com/docs/videos/flowbite.mp4" size="responsive" :controls="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Responsive" />

    {{-- Custom Styles --}}
    @php
    $code = <<<'BLADE'
<x-fwb.video src="https://flowbite.com/docs/videos/flowbite.mp4" size="responsive" :controls="true" class="border border-gray-200 rounded-lg dark:border-gray-700 shadow-lg" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Styles" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Video <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.video</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">src</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">The URL of the video file to embed.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">autoplay</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Automatically start playing the video when the page loads.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">muted</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Start the video with the sound muted.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">controls</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">true</code></td>
                        <td class="px-6 py-4">Show native video player controls (play, pause, volume, etc.).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">full</code></td>
                        <td class="px-6 py-4">Size preset for the video player. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">full</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xl</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">w-96</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">h-80</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">responsive</code>.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
