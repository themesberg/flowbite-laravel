<x-layouts.app title="Gallery - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Gallery - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the gallery component to show multiple images in a responsive grid layout with support for different column counts and masonry layouts.</p>

    {{-- Default Gallery --}}
    @php
    $code = <<<'BLADE'
<x-fwb.gallery :grid="3">
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="" />
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="" />
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="" />
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="" />
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="" />
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="" />
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="" />
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-9.jpg" alt="" />
</x-fwb.gallery>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Gallery" />

    {{-- Masonry Grid --}}
    @php
    $code = <<<'BLADE'
<x-fwb.gallery :grid="4" :masonry="true">
    <div class="grid gap-4">
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="" /></div>
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="" /></div>
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="" /></div>
    </div>
    <div class="grid gap-4">
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="" /></div>
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="" /></div>
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="" /></div>
    </div>
    <div class="grid gap-4">
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="" /></div>
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="" /></div>
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="" /></div>
    </div>
    <div class="grid gap-4">
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="" /></div>
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="" /></div>
        <div><x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-12.jpg" alt="" /></div>
    </div>
</x-fwb.gallery>
BLADE;
    @endphp
    <x-preview :code="$code" title="Masonry Grid" />

    {{-- Featured Image --}}
    @php
    $code = <<<'BLADE'
<div class="grid gap-4">
    <div>
        <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
    </div>
    <x-fwb.gallery :grid="5">
        <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="" />
        <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="" />
        <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="" />
        <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="" />
        <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="" />
    </x-fwb.gallery>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Featured Image" />

    {{-- Quad Gallery --}}
    @php
    $code = <<<'BLADE'
<x-fwb.gallery :grid="2" gap="gap-2">
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" />
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="" />
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="" />
    <x-fwb.gallery.image src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="" />
</x-fwb.gallery>
BLADE;
    @endphp
    <x-preview :code="$code" title="Quad Gallery" />

    {{-- Gallery with Carousel --}}
    @php
    $code = <<<'BLADE'
<x-fwb.carousel id="gallery-carousel" :slide="true">
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Gallery Slide 1">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Gallery Slide 2">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Gallery Slide 3">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Gallery Slide 4">
    </div>
    <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Gallery Slide 5">
    </div>
</x-fwb.carousel>
BLADE;
    @endphp
    <x-preview :code="$code" title="Gallery with Slider" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Gallery <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.gallery</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">grid</td>
                        <td class="px-6 py-4">int</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">3</code></td>
                        <td class="px-6 py-4">Number of columns in the grid layout (applies at md breakpoint and above).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">gap</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">gap-4</code></td>
                        <td class="px-6 py-4">Tailwind CSS gap class for spacing between grid items.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">masonry</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Enable masonry-style layout (requires nested column divs in slot content).</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Gallery Image <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.gallery.image</code></h3>
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
                        <td class="px-6 py-4">The image source URL.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">alt</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">The image alt text.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
