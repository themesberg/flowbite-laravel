<x-layouts.app title="Rating - Flowbite Blade" description="Use the rating component to show reviews and testimonials from your users using stars, with support for half stars, text values, and review counts.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Rating - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the rating component to show reviews and testimonials from your users using stars, with support for half stars, text values, and review counts.</p>

    {{-- Default Rating --}}
    @php
    $code = <<<'BLADE'
<x-fwb.rating :value="4" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Rating" />

    {{-- Rating with Text --}}
    @php
    $code = <<<'BLADE'
<x-fwb.rating :value="4.95" :showValue="true" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Rating with Text" />

    {{-- Rating Count --}}
    @php
    $code = <<<'BLADE'
<x-fwb.rating :value="4" :showValue="true" :count="73" />
BLADE;
    @endphp
    <x-preview :code="$code" title="Rating Count" />

    {{-- Half Star Rating --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.rating :value="3.5" />
    <x-fwb.rating :value="2.5" />
    <x-fwb.rating :value="0.5" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Half Star Rating" />

    {{-- Different Star Counts --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.rating :value="5" />
    <x-fwb.rating :value="4" />
    <x-fwb.rating :value="3" />
    <x-fwb.rating :value="2" />
    <x-fwb.rating :value="1" />
    <x-fwb.rating :value="0" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Star Counts" />

    {{-- Star Sizes --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.rating :value="4" size="sm" />
    <x-fwb.rating :value="4" size="md" />
    <x-fwb.rating :value="4" size="lg" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Star Sizes" />

    {{-- Advanced Rating --}}
    @php
    $code = <<<'BLADE'
<div class="flex items-center mb-2">
    <x-fwb.rating :value="4" :showValue="true" />
    <span class="w-1 h-1 mx-1.5 bg-gray-500 rounded-full dark:bg-gray-400"></span>
    <a href="#" class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">73 reviews</a>
</div>
<div class="gap-8 sm:grid sm:grid-cols-2">
    <div>
        <dl>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Staff</dt>
            <dd class="flex items-center mb-3">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
            </dd>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Comfort</dt>
            <dd class="flex items-center mb-3">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
            </dd>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Free WiFi</dt>
            <dd class="flex items-center mb-3">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 88%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.8</span>
            </dd>
        </dl>
    </div>
    <div>
        <dl>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Facilities</dt>
            <dd class="flex items-center mb-3">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 54%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">5.4</span>
            </dd>
            <dt class="text-sm font-medium text-gray-500 dark:text-gray-400">Value for money</dt>
            <dd class="flex items-center mb-3">
                <div class="w-full bg-gray-200 rounded h-2.5 dark:bg-gray-700 me-2">
                    <div class="bg-blue-600 h-2.5 rounded dark:bg-blue-500" style="width: 89%"></div>
                </div>
                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">8.9</span>
            </dd>
        </dl>
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Advanced Rating" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Rating <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.rating</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">value</td>
                        <td class="px-6 py-4">float</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">0</code></td>
                        <td class="px-6 py-4">Rating value. Supports half values (e.g. 3.5).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">max</td>
                        <td class="px-6 py-4">int</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">5</code></td>
                        <td class="px-6 py-4">Maximum number of stars.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">Star icon size. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">showValue</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Show the numeric rating value and "out of" text next to the stars.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">count</td>
                        <td class="px-6 py-4">int|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Number of reviews to display in parentheses after the stars.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
