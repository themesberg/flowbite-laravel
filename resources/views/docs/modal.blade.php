<x-layouts.app title="Modal - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Modal</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the modal component to show interactive dialogs and notifications to your users as an overlay on top of the main content area of the page.</p>

    {{-- Default Modal --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-modal-target="default-modal" data-modal-toggle="default-modal">Toggle modal</x-fwb.button>

<x-fwb.modal id="default-modal">
    <x-slot:header>Terms of Service</x-slot:header>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.</p>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">The European Union's General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union.</p>
    <x-slot:footer>
        <x-fwb.button data-modal-hide="default-modal">I accept</x-fwb.button>
        <x-fwb.button color="light" data-modal-hide="default-modal">Decline</x-fwb.button>
    </x-slot:footer>
</x-fwb.modal>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Modal" />

    {{-- Static Backdrop --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-modal-target="static-modal" data-modal-toggle="static-modal">Toggle static modal</x-fwb.button>

<x-fwb.modal id="static-modal" :static="true">
    <x-slot:header>Static Modal</x-slot:header>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">This modal cannot be dismissed by clicking outside of it. You must use the buttons to close it.</p>
    <x-slot:footer>
        <x-fwb.button data-modal-hide="static-modal">Accept</x-fwb.button>
        <x-fwb.button color="light" data-modal-hide="static-modal">Cancel</x-fwb.button>
    </x-slot:footer>
</x-fwb.modal>
BLADE;
    @endphp
    <x-preview :code="$code" title="Static Backdrop" />

    {{-- Pop-up Modal --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-modal-target="popup-modal" data-modal-toggle="popup-modal">Toggle confirmation</x-fwb.button>

<x-fwb.modal id="popup-modal" size="sm" :popup="true">
    <x-fwb-o-exclamation-circle class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" />
    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
    <x-fwb.button color="red" data-modal-hide="popup-modal">Yes, I'm sure</x-fwb.button>
    <x-fwb.button color="light" data-modal-hide="popup-modal">No, cancel</x-fwb.button>
</x-fwb.modal>
BLADE;
    @endphp
    <x-preview :code="$code" title="Pop-up Confirmation Modal" />

    {{-- Form Modal --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-modal-target="form-modal" data-modal-toggle="form-modal">Toggle form modal</x-fwb.button>

<x-fwb.modal id="form-modal">
    <x-slot:header>Sign in to our platform</x-slot:header>
    <form class="space-y-6" action="#">
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
        </div>
        <div class="flex justify-between">
            <div class="flex items-start">
                <input id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600" />
                <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
            </div>
            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
        </div>
        <x-fwb.button type="submit" class="w-full">Login to your account</x-fwb.button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
        </div>
    </form>
</x-fwb.modal>
BLADE;
    @endphp
    <x-preview :code="$code" title="Form Modal" />

    {{-- Modal Sizes --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-4">
    <x-fwb.button data-modal-target="small-modal" data-modal-toggle="small-modal">Small modal</x-fwb.button>
    <x-fwb.button data-modal-target="medium-modal" data-modal-toggle="medium-modal">Default modal</x-fwb.button>
    <x-fwb.button data-modal-target="large-modal" data-modal-toggle="large-modal">Large modal</x-fwb.button>
    <x-fwb.button data-modal-target="xl-modal" data-modal-toggle="xl-modal">Extra large modal</x-fwb.button>
</div>

<x-fwb.modal id="small-modal" size="sm">
    <x-slot:header>Small modal</x-slot:header>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">This is a small modal with max-width of md.</p>
    <x-slot:footer>
        <x-fwb.button data-modal-hide="small-modal">OK</x-fwb.button>
    </x-slot:footer>
</x-fwb.modal>

<x-fwb.modal id="medium-modal" size="md">
    <x-slot:header>Default modal</x-slot:header>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">This is the default modal size with max-width of lg.</p>
    <x-slot:footer>
        <x-fwb.button data-modal-hide="medium-modal">OK</x-fwb.button>
    </x-slot:footer>
</x-fwb.modal>

<x-fwb.modal id="large-modal" size="lg">
    <x-slot:header>Large modal</x-slot:header>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">This is a large modal with max-width of 4xl.</p>
    <x-slot:footer>
        <x-fwb.button data-modal-hide="large-modal">OK</x-fwb.button>
    </x-slot:footer>
</x-fwb.modal>

<x-fwb.modal id="xl-modal" size="xl">
    <x-slot:header>Extra large modal</x-slot:header>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">This is an extra large modal with max-width of 7xl.</p>
    <x-slot:footer>
        <x-fwb.button data-modal-hide="xl-modal">OK</x-fwb.button>
    </x-slot:footer>
</x-fwb.modal>
BLADE;
    @endphp
    <x-preview :code="$code" title="Modal Sizes" />

    {{-- Placement --}}
    @php
    $code = <<<'BLADE'
<div class="flex flex-wrap gap-4">
    <x-fwb.button data-modal-target="tl-modal" data-modal-toggle="tl-modal" data-modal-placement="top-left">Top left</x-fwb.button>
    <x-fwb.button data-modal-target="tr-modal" data-modal-toggle="tr-modal" data-modal-placement="top-right">Top right</x-fwb.button>
    <x-fwb.button data-modal-target="bl-modal" data-modal-toggle="bl-modal" data-modal-placement="bottom-left">Bottom left</x-fwb.button>
    <x-fwb.button data-modal-target="br-modal" data-modal-toggle="br-modal" data-modal-placement="bottom-right">Bottom right</x-fwb.button>
</div>

<x-fwb.modal id="tl-modal">
    <x-slot:header>Top left modal</x-slot:header>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">This modal is positioned at the top left of the page.</p>
    <x-slot:footer>
        <x-fwb.button data-modal-hide="tl-modal">Close</x-fwb.button>
    </x-slot:footer>
</x-fwb.modal>

<x-fwb.modal id="tr-modal">
    <x-slot:header>Top right modal</x-slot:header>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">This modal is positioned at the top right of the page.</p>
    <x-slot:footer>
        <x-fwb.button data-modal-hide="tr-modal">Close</x-fwb.button>
    </x-slot:footer>
</x-fwb.modal>

<x-fwb.modal id="bl-modal">
    <x-slot:header>Bottom left modal</x-slot:header>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">This modal is positioned at the bottom left of the page.</p>
    <x-slot:footer>
        <x-fwb.button data-modal-hide="bl-modal">Close</x-fwb.button>
    </x-slot:footer>
</x-fwb.modal>

<x-fwb.modal id="br-modal">
    <x-slot:header>Bottom right modal</x-slot:header>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">This modal is positioned at the bottom right of the page.</p>
    <x-slot:footer>
        <x-fwb.button data-modal-hide="br-modal">Close</x-fwb.button>
    </x-slot:footer>
</x-fwb.modal>
BLADE;
    @endphp
    <x-preview :code="$code" title="Placement" />

    {{-- Non-dismissible --}}
    @php
    $code = <<<'BLADE'
<x-fwb.button data-modal-target="nodismiss-modal" data-modal-toggle="nodismiss-modal">Open modal</x-fwb.button>

<x-fwb.modal id="nodismiss-modal" :dismissible="false" :static="true">
    <x-slot:header>Required Action</x-slot:header>
    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">This modal has no close button and a static backdrop. The user must interact with the footer buttons to close it.</p>
    <x-slot:footer>
        <x-fwb.button data-modal-hide="nodismiss-modal">Confirm</x-fwb.button>
    </x-slot:footer>
</x-fwb.modal>
BLADE;
    @endphp
    <x-preview :code="$code" title="Non-dismissible Modal" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Modal <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.modal</code></h3>
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
                        <td class="px-6 py-4">Unique identifier for the modal. Auto-generated if not provided. Must match the data-modal-target on the trigger button.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">size</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code></td>
                        <td class="px-6 py-4">Size of the modal. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">sm</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">md</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">lg</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">xl</code>.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">position</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">center</code></td>
                        <td class="px-6 py-4">Position of the modal. Use data-modal-placement on the trigger button for placement control.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">dismissible</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">true</code></td>
                        <td class="px-6 py-4">Show the close (X) button in the header.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">popup</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Center the body content text, useful for confirmation dialogs.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">static</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Prevent closing the modal by clicking outside of it (static backdrop).</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">header</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the modal header/title text.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">footer</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for the modal footer area, typically used for action buttons.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
