<x-layouts.app title="Testimonials - Marketing Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Testimonials</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use testimonial blocks to showcase customer feedback with quote-style single testimonials or card-based grid layouts for multiple reviews.</p>

    {{-- Testimonial Quote Default --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.testimonial-quote />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Testimonial Quote" />

    {{-- Testimonial Quote Custom --}}
    @php
    $code2 = <<<'BLADE'
<x-fwb.blocks.marketing.testimonial-quote
    quote="This component library has dramatically improved our development speed. The quality and consistency of the components is outstanding."
    name="Sarah Johnson"
    role="CTO at TechCorp"
    avatar="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png"
/>
BLADE;
    @endphp
    <x-preview :code="$code2" title="Custom Testimonial Quote" />

    {{-- Testimonial Cards Default --}}
    @php
    $code3 = <<<'BLADE'
<x-fwb.blocks.marketing.testimonial-cards />
BLADE;
    @endphp
    <x-preview :code="$code3" title="Default Testimonial Cards" />

    {{-- Testimonial Cards Custom --}}
    @php
    $code4 = <<<'BLADE'
<x-fwb.blocks.marketing.testimonial-cards title="What our clients say" description="Real feedback from teams who use our product every day.">
    <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e dark:bg-gray-800 dark:border-gray-700">
        <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Incredible developer experience</h3>
            <p class="my-4">The components are well-documented and easy to customize. Saved us weeks of development time.</p>
        </blockquote>
        <figcaption class="flex justify-center items-center space-x-3 rtl:space-x-reverse">
            <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left">
                <div>Karen Nelson</div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">Designer at Apple</div>
            </div>
        </figcaption>
    </figure>
    <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 rounded-b-lg md:rounded-se-lg dark:bg-gray-800 dark:border-gray-700">
        <blockquote class="mx-auto mb-4 max-w-2xl text-gray-500 lg:mb-8 dark:text-gray-400">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Perfect for rapid prototyping</h3>
            <p class="my-4">We went from concept to production-ready UI in record time. Highly recommended for any Laravel team.</p>
        </blockquote>
        <figcaption class="flex justify-center items-center space-x-3 rtl:space-x-reverse">
            <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
            <div class="space-y-0.5 font-medium dark:text-white text-left">
                <div>Joseph McFall</div>
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">CTO at Stripe</div>
            </div>
        </figcaption>
    </figure>
</x-fwb.blocks.marketing.testimonial-cards>
BLADE;
    @endphp
    <x-preview :code="$code4" title="Custom Testimonial Cards" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">TestimonialQuote <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.testimonial-quote</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">quote</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Flowbite is just awesome...'</code></td>
                        <td class="px-6 py-4">The testimonial quote text displayed in the blockquote.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">name</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Micheal Gough'</code></td>
                        <td class="px-6 py-4">Name of the person giving the testimonial.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">role</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'CEO at Google'</code></td>
                        <td class="px-6 py-4">Role or title of the person giving the testimonial.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">avatar</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'https://flowbite.s3...'</code></td>
                        <td class="px-6 py-4">URL to the avatar image of the person.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">TestimonialCards <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.testimonial-cards</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">title</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Testimonials'</code></td>
                        <td class="px-6 py-4">Heading text displayed above the testimonial cards grid.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">'Hear from our customers...'</code></td>
                        <td class="px-6 py-4">Subheading text displayed below the title.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Testimonial card <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">&lt;figure&gt;</code> elements displayed in a two-column grid.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
