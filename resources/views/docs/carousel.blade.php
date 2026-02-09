<x-layouts.app title="Carousel - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Carousel</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the carousel component to slide through multiple elements and images using custom controls, indicators, and animations powered by Flowbite JS.</p>

    {{-- Default Slider --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="default-carousel" :slide="true">
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 3">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 4">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 5">
    </div>
</x-fwb.carousel>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Slider" />

    {{-- Static Carousel (Controls Only) --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="static-carousel" :indicators="false">
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 3">
    </div>
</x-fwb.carousel>
BLADE;
    @endphp
    <x-preview :code="$code" title="Static Carousel (Controls Only)" />

    {{-- With Indicators --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="indicators-carousel" :indicators="true" :controls="true">
    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 3">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 4">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 5">
    </div>
</x-fwb.carousel>
BLADE;
    @endphp
    <x-preview :code="$code" title="With Indicators" />

    {{-- Custom Animation --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="animation-carousel">
    <div class="hidden duration-200 ease-linear" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </div>
    <div class="hidden duration-200 ease-linear" data-carousel-item="active">
        <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </div>
    <div class="hidden duration-200 ease-linear" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 3">
    </div>
</x-fwb.carousel>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Animation" />

    {{-- No Controls --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="no-controls-carousel" :slide="true" :controls="false">
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 1">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <img src="https://flowbite.com/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 2">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.com/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Slide 3">
    </div>
</x-fwb.carousel>
BLADE;
    @endphp
    <x-preview :code="$code" title="Slide without Controls" />

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
                        <td class="px-6 py-4">Tailwind CSS duration class for transitions.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">easing</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">ease-in-out</code></td>
                        <td class="px-6 py-4">Tailwind CSS easing class for transitions.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
