<x-layouts.app title="Avatar - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Avatar</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the avatar component to show a visual representation of a user profile using an image, initials, or a placeholder icon.</p>

    {{-- Default Avatar --}}
    @php
    $code = <<<'BLADE'
<div class="flex items-center gap-4">
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="User avatar" />
    <x-fwb.avatar />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Avatar" />

    {{-- Rounded vs Square --}}
    @php
    $code = <<<'BLADE'
<div class="flex items-center gap-4">
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" :rounded="true" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" :rounded="false" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Rounded and Square" />

    {{-- Bordered --}}
    @php
    $code = <<<'BLADE'
<div class="flex items-center gap-4">
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" :bordered="true" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" :bordered="true" :rounded="false" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Bordered Avatar" />

    {{-- Placeholder Icon --}}
    @php
    $code = <<<'BLADE'
<div class="flex items-center gap-4">
    <x-fwb.avatar />
    <x-fwb.avatar :rounded="false" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Placeholder Icon" />

    {{-- Placeholder Initials --}}
    @php
    $code = <<<'BLADE'
<div class="flex items-center gap-4">
    <x-fwb.avatar initials="JD" />
    <x-fwb.avatar initials="AB" size="lg" />
    <x-fwb.avatar initials="CK" :rounded="false" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Placeholder Initials" />

    {{-- Dot Indicator --}}
    @php
    $code = <<<'BLADE'
<div class="flex items-center gap-4">
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" status="online" statusPosition="top-right" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" status="busy" statusPosition="top-right" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" status="offline" statusPosition="bottom-right" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" status="away" statusPosition="bottom-left" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Dot Indicator" />

    {{-- Sizes --}}
    @php
    $code = <<<'BLADE'
<div class="flex items-center gap-4">
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" size="xs" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" size="sm" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" size="md" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" size="lg" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" size="xl" />
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Avatar Sizes" />

    {{-- Stacked Avatars --}}
    @php
    $code = <<<'BLADE'
<x-fwb.avatar.group :stacked="true">
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-4.jpg" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" />
</x-fwb.avatar.group>
BLADE;
    @endphp
    <x-preview :code="$code" title="Stacked Avatars" />

    {{-- Non-stacked Group --}}
    @php
    $code = <<<'BLADE'
<x-fwb.avatar.group>
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-1.jpg" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" />
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" />
</x-fwb.avatar.group>
BLADE;
    @endphp
    <x-preview :code="$code" title="Avatar Group" />

    {{-- Avatar with Text --}}
    @php
    $code = <<<'BLADE'
<div class="flex items-center gap-4">
    <x-fwb.avatar src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" />
    <div class="font-medium dark:text-white">
        <div>Jese Leos</div>
        <div class="text-sm text-gray-500 dark:text-gray-400">Joined in August 2014</div>
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Avatar with Text" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Avatar <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.avatar</code></h3>
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
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Image URL for the avatar. Shows a placeholder icon if not provided.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">alt</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">''</code></td>
                        <td class="px-6 py-4">Alt text for the avatar image.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">Avatar size. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xs</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xl</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">rounded</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">true</code></td>
                        <td class="px-6 py-4">Use fully rounded (circle) shape. Set to false for rounded square.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">bordered</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Add a ring border around the avatar.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">status</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Status indicator dot. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">online</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">offline</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">busy</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">away</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">statusPosition</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">top-right</code></td>
                        <td class="px-6 py-4">Position of the status dot. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">top-left</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">top-right</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">bottom-left</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">bottom-right</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">initials</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Display initials instead of an image. Shown when no src is provided.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Avatar Group <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.avatar.group</code></h3>
        <div class="overflow-x-auto">
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">stacked</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Overlap avatars with negative spacing to create a stacked effect.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
