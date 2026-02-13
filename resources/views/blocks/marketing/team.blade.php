<x-layouts.app title="Team Sections - Marketing Blocks - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Team Sections</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Team block components for displaying team members in a horizontal card layout with images and social links, or a centered grid layout with rounded avatars.</p>

    {{-- Default Team Cards --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.team-cards />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Team Cards" />

    {{-- Custom Team Cards --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.team-cards
    title="Meet Our Leadership"
    description="The people behind the product who make everything possible."
>
    <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
        </a>
        <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                <a href="#">Jane Smith</a>
            </h3>
            <span class="text-gray-500 dark:text-gray-400">CEO & Founder</span>
            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">Jane leads the company vision and strategy.</p>
        </div>
    </div>
    <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="John Avatar">
        </a>
        <div class="p-5">
            <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                <a href="#">John Doe</a>
            </h3>
            <span class="text-gray-500 dark:text-gray-400">CTO</span>
            <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">John drives the technical direction of the platform.</p>
        </div>
    </div>
</x-fwb.blocks.marketing.team-cards>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Team Cards with Slot Content" />

    {{-- Default Team Grid --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.team-grid />
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Team Grid" />

    {{-- Custom Team Grid --}}
    @php
    $code = <<<'BLADE'
<x-fwb.blocks.marketing.team-grid
    title="Our Engineers"
    description="Meet the talented engineers who build and maintain our platform every day."
>
    <div class="text-center text-gray-500 dark:text-gray-400">
        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Alice Avatar">
        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            <a href="#">Alice Johnson</a>
        </h3>
        <p>Lead Engineer</p>
    </div>
    <div class="text-center text-gray-500 dark:text-gray-400">
        <img class="mx-auto mb-4 w-36 h-36 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Bob Avatar">
        <h3 class="mb-1 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            <a href="#">Bob Williams</a>
        </h3>
        <p>Senior Developer</p>
    </div>
</x-fwb.blocks.marketing.team-grid>
BLADE;
    @endphp
    <x-preview :code="$code" title="Custom Team Grid with Slot Content" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Team Cards <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.team-cards</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Our Team</code></td>
                        <td class="px-6 py-4">The section heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Explore the whole collection of...</code></td>
                        <td class="px-6 py-4">The paragraph text below the heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for custom team member cards. When empty, four default team members are displayed in a horizontal card layout with image, name, role, bio, and social links.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Team Grid <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.blocks.marketing.team-grid</code></h3>
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
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Our team</code></td>
                        <td class="px-6 py-4">The section heading text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">Explore the whole collection of...</code></td>
                        <td class="px-6 py-4">The paragraph text below the heading.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">slot</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Default slot for custom team member entries. When empty, four default members are displayed in a centered grid with rounded avatars, names, roles, and social links.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
