<x-layouts.app title="Alert - Flowbite Blade" description="Show contextual information to your users using alert elements based on Tailwind CSS, available in multiple colors, styles, and dismissible options.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Alert - Laravel Blade</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Show contextual information to your users using alert elements based on Tailwind CSS, available in multiple colors, styles, and dismissible options.</p>

    {{-- Default Alerts --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.alert color="blue">
        <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
    <x-fwb.alert color="red">
        <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
    <x-fwb.alert color="green">
        <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
    <x-fwb.alert color="yellow">
        <span class="font-medium">Warning alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
    <x-fwb.alert color="gray">
        <span class="font-medium">Dark alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Alerts" />

    {{-- Alerts with Icon --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.alert color="blue" fwb-icon="o-info-circle">
        <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
    <x-fwb.alert color="red" fwb-icon="o-info-circle">
        <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Alerts with Icon" />

    {{-- Dismissible Alerts --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.alert color="blue" :dismissible="true">
        <span class="font-medium">Info alert!</span> Click the close button to dismiss.
    </x-fwb.alert>
    <x-fwb.alert color="red" :dismissible="true">
        <span class="font-medium">Danger alert!</span> Click the close button to dismiss.
    </x-fwb.alert>
    <x-fwb.alert color="green" :dismissible="true">
        <span class="font-medium">Success alert!</span> Click the close button to dismiss.
    </x-fwb.alert>
    <x-fwb.alert color="yellow" :dismissible="true">
        <span class="font-medium">Warning alert!</span> Click the close button to dismiss.
    </x-fwb.alert>
    <x-fwb.alert color="gray" :dismissible="true">
        <span class="font-medium">Dark alert!</span> Click the close button to dismiss.
    </x-fwb.alert>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Dismissible Alerts" />

    {{-- Border Accent Alerts --}}
    @php
    $code = <<<'BLADE'
<div class="space-y-4">
    <x-fwb.alert color="blue" :bordered="true">
        <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
    <x-fwb.alert color="red" :bordered="true">
        <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
    <x-fwb.alert color="green" :bordered="true">
        <span class="font-medium">Success alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
    <x-fwb.alert color="yellow" :bordered="true">
        <span class="font-medium">Warning alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
    <x-fwb.alert color="gray" :bordered="true">
        <span class="font-medium">Dark alert!</span> Change a few things up and try submitting again.
    </x-fwb.alert>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Border Accent Alerts" />

    {{-- Additional Content --}}
    @php
    $code = <<<'BLADE'
<x-fwb.alert color="blue" :dismissible="true" fwb-icon="o-info-circle">
    <div>
        <span class="text-lg font-medium">This is an info alert</span>
        <div class="mt-2 mb-4 text-sm">More info about this info alert goes here. This example text provides additional context.</div>
        <div class="flex gap-2">
            <button type="button" class="text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-blue-200 dark:text-gray-800 dark:hover:bg-blue-300">View more</button>
            <button type="button" class="text-blue-800 bg-transparent border border-blue-800 hover:bg-blue-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-200 font-medium rounded-lg text-xs px-3 py-1.5 dark:hover:bg-blue-300 dark:border-blue-200 dark:text-blue-200 dark:hover:text-gray-800">Dismiss</button>
        </div>
    </div>
</x-fwb.alert>
BLADE;
    @endphp
    <x-preview :code="$code" title="Additional Content" />

    {{-- Alert with List --}}
    @php
    $code = <<<'BLADE'
<x-fwb.alert color="red" fwb-icon="o-info-circle">
    <div>
        <span class="font-medium">Ensure that these requirements are met:</span>
        <ul class="mt-1.5 list-disc list-inside">
            <li>At least 10 characters (and up to 100 characters)</li>
            <li>At least one lowercase character</li>
            <li>Inclusion of at least one special character, e.g., ! @ # ?</li>
        </ul>
    </div>
</x-fwb.alert>
BLADE;
    @endphp
    <x-preview :code="$code" title="Alert with List" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Alert <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.alert</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">color</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code></td>
                        <td class="px-6 py-4">Alert color theme. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">blue</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">red</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">green</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">yellow</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">gray</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">dismissible</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Show a close button that allows the user to dismiss the alert.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">bordered</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Add a top border accent to the alert.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">fwb-icon</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Shorthand icon name from <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">flowbite-blade-icons</code> (e.g. <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">o-info-circle</code>). Renders with default <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">shrink-0 w-4 h-4</code> classes.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">icon</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">—</code></td>
                        <td class="px-6 py-4">Named slot for full icon control. Takes priority over <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">fwb-icon</code> prop.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">id</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">auto</code></td>
                        <td class="px-6 py-4">Unique identifier for the alert. Auto-generated if not provided. Used for dismiss targeting.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
