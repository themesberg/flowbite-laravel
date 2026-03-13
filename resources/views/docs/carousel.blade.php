<x-layouts.app title="Carousel - Flowbite Blade" description="Use the carousel component to slide through multiple elements and images using custom controls, indicators, and animations powered by Flowbite JS.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Carousel - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the carousel component to slide through multiple elements and images using custom controls, indicators, and animations powered by Flowbite JS.</p>

    {{-- Default Slider --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="default-carousel" :slide="true" :items="[
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-1.svg', 'alt' => 'Slide 1'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-2.svg', 'alt' => 'Slide 2'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-3.svg', 'alt' => 'Slide 3'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-4.svg', 'alt' => 'Slide 4'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-5.svg', 'alt' => 'Slide 5'],
]" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Slider" />

    {{-- Static Carousel (Controls Only) --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="static-carousel" :indicators="false" :items="[
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-1.svg', 'alt' => 'Slide 1'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-2.svg', 'alt' => 'Slide 2'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-3.svg', 'alt' => 'Slide 3'],
]" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Static Carousel (Controls Only)" />

    {{-- With Links --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="links-carousel" :items="[
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-1.svg', 'alt' => 'Slide 1', 'href' => '#slide-1'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-2.svg', 'alt' => 'Slide 2', 'href' => '#slide-2'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-3.svg', 'alt' => 'Slide 3', 'href' => '#slide-3'],
]" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Carousel with Links" />

    {{-- Custom Animation --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="animation-carousel" duration="duration-200" easing="ease-linear" :items="[
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-1.svg', 'alt' => 'Slide 1'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-2.svg', 'alt' => 'Slide 2'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-3.svg', 'alt' => 'Slide 3'],
]" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Animation" />

    {{-- No Controls --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="no-controls-carousel" :slide="true" :controls="false" :items="[
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-1.svg', 'alt' => 'Slide 1'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-2.svg', 'alt' => 'Slide 2'],
    ['img' => 'https://flowbite.com/docs/images/carousel/carousel-3.svg', 'alt' => 'Slide 3'],
]" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Slide without Controls" />

    {{-- Custom Slot Content --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="custom-carousel">
    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <div class="absolute inset-0 flex items-center justify-center bg-gray-300 dark:bg-gray-700">
            <span class="text-2xl font-bold text-heading">Custom Slide 1</span>
        </div>
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <div class="absolute inset-0 flex items-center justify-center bg-gray-400 dark:bg-gray-600">
            <span class="text-2xl font-bold text-heading">Custom Slide 2</span>
        </div>
    </div>
</x-fwb.carousel>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Slot Content" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Carousel <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.carousel</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">items</td>
                        <td class="px-6 py-4">array</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">[]</code></td>
                        <td class="px-6 py-4">Array of slide items. Each item: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">['img' => '...', 'alt' => '...', 'href' => '...']</code>. Only <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">img</code> is required. When provided, slides are auto-generated. When empty, uses the default slot.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">auto</code></td>
                        <td class="px-6 py-4">Unique identifier for the carousel. Auto-generated if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">indicators</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">true</code></td>
                        <td class="px-6 py-4">Show dot indicators at the bottom of the carousel.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">controls</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">true</code></td>
                        <td class="px-6 py-4">Show previous/next navigation buttons.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slide</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Enable auto-sliding behavior. When false, carousel is static (manual navigation only).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">duration</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">duration-700</code></td>
                        <td class="px-6 py-4">Tailwind CSS duration class for slide transitions.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">easing</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">ease-in-out</code></td>
                        <td class="px-6 py-4">Tailwind CSS easing class for slide transitions.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
