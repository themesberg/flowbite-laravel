<x-layouts.app title="Stepper - Flowbite Blade">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Stepper</h1>
    <p class="mb-8 text-lg text-gray-500 dark:text-gray-400">Use the stepper component to show a multi-step process indicator with completed, current, and upcoming states for navigation and progress tracking.</p>

    {{-- Default Stepper --}}
    @php
    $code = <<<'BLADE'
<x-fwb.stepper>
    <x-fwb.stepper.item :completed="true" label="Personal Info" />
    <x-fwb.stepper.item :current="true" label="Account Info" />
    <x-fwb.stepper.item label="Confirmation" />
</x-fwb.stepper>
BLADE;
    @endphp
    <x-preview :code="$code" title="Default Stepper" />

    {{-- Progress Stepper --}}
    @php
    $code = <<<'BLADE'
<x-fwb.stepper>
    <x-fwb.stepper.item :completed="true" label="Personal Info">
        <x-slot:icon>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/></svg>
        </x-slot:icon>
    </x-fwb.stepper.item>
    <x-fwb.stepper.item :completed="true" label="Account Info">
        <x-slot:icon>
            <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/></svg>
        </x-slot:icon>
    </x-fwb.stepper.item>
    <x-fwb.stepper.item :current="true" label="Review" />
    <x-fwb.stepper.item label="Confirmation" />
</x-fwb.stepper>
BLADE;
    @endphp
    <x-preview :code="$code" title="Progress Stepper" />

    {{-- Detailed Stepper --}}
    @php
    $code = <<<'BLADE'
<x-fwb.stepper>
    <x-fwb.stepper.item :completed="true">
        <div>
            <h3 class="font-medium leading-tight text-blue-600 dark:text-blue-500">User Info</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Step details here</p>
        </div>
    </x-fwb.stepper.item>
    <x-fwb.stepper.item :current="true">
        <div>
            <h3 class="font-medium leading-tight text-blue-600 dark:text-blue-500">Account Details</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Step details here</p>
        </div>
    </x-fwb.stepper.item>
    <x-fwb.stepper.item>
        <div>
            <h3 class="font-medium leading-tight">Review</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">Step details here</p>
        </div>
    </x-fwb.stepper.item>
</x-fwb.stepper>
BLADE;
    @endphp
    <x-preview :code="$code" title="Detailed Stepper" />

    {{-- Vertical Stepper --}}
    @php
    $code = <<<'BLADE'
<x-fwb.stepper variant="vertical">
    <div class="flex items-center p-4 text-green-700 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:border-green-800 dark:text-green-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/></svg>
        <span class="sr-only">Completed</span>
        <h3 class="text-sm font-medium">Personal information has been completed.</h3>
    </div>
    <div class="flex items-center p-4 text-blue-700 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:border-blue-800 dark:text-blue-400" role="alert">
        <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/></svg>
        <span class="sr-only">Current</span>
        <h3 class="text-sm font-medium">Account information is being reviewed.</h3>
    </div>
    <div class="flex items-center p-4 text-gray-500 border border-gray-300 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400" role="alert">
        <div class="flex-shrink-0 w-4 h-4 me-2 border-2 border-gray-400 rounded-full dark:border-gray-500"></div>
        <span class="sr-only">Upcoming</span>
        <h3 class="text-sm font-medium">Confirmation pending.</h3>
    </div>
</x-fwb.stepper>
BLADE;
    @endphp
    <x-preview :code="$code" title="Vertical Stepper" />

    {{-- Breadcrumb Stepper --}}
    @php
    $code = <<<'BLADE'
<x-fwb.stepper variant="breadcrumb">
    <x-fwb.stepper.item :completed="true" label="Personal Info" />
    <x-fwb.stepper.item :current="true" label="Account Info" />
    <x-fwb.stepper.item label="Review" />
    <x-fwb.stepper.item label="Confirmation" />
</x-fwb.stepper>
BLADE;
    @endphp
    <x-preview :code="$code" title="Breadcrumb Stepper" />

    {{-- Timeline Stepper --}}
    @php
    $code = <<<'BLADE'
<x-fwb.stepper variant="timeline">
    <div class="mb-10 ms-6">
        <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-green-900">
            <svg class="w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/></svg>
        </span>
        <h3 class="font-medium leading-tight text-gray-900 dark:text-white">Personal Info</h3>
        <p class="text-sm text-gray-500 dark:text-gray-400">Step completed successfully.</p>
    </div>
    <div class="mb-10 ms-6">
        <span class="absolute flex items-center justify-center w-8 h-8 bg-blue-200 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-blue-900">
            <svg class="w-3.5 h-3.5 text-blue-600 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16"><path d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM6.5 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5ZM3.014 13.021l.157-.625A3.427 3.427 0 0 1 6.5 9.571a3.426 3.426 0 0 1 3.322 2.805l.159.622-6.967.023ZM16 12h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Zm0-3h-3a1 1 0 0 1 0-2h3a1 1 0 0 1 0 2Z"/></svg>
        </span>
        <h3 class="font-medium leading-tight text-gray-900 dark:text-white">Account Details</h3>
        <p class="text-sm text-gray-500 dark:text-gray-400">Currently in progress.</p>
    </div>
    <div class="ms-6">
        <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -start-4 ring-4 ring-white dark:ring-gray-900 dark:bg-gray-700">
            <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20"><path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v3H7V2Zm5.7 8.289-3.975 3.857a1 1 0 0 1-1.393 0L5.3 12.182a1.002 1.002 0 1 1 1.4-1.436l1.328 1.289 3.28-3.181a1 1 0 1 1 1.392 1.435Z"/></svg>
        </span>
        <h3 class="font-medium leading-tight text-gray-900 dark:text-white">Confirmation</h3>
        <p class="text-sm text-gray-500 dark:text-gray-400">Pending review.</p>
    </div>
</x-fwb.stepper>
BLADE;
    @endphp
    <x-preview :code="$code" title="Timeline Stepper" />

    {{-- Stepper with Form --}}
    @php
    $code = <<<'BLADE'
<div>
    <x-fwb.stepper class="mb-8">
        <x-fwb.stepper.item :completed="true" label="Personal Info" />
        <x-fwb.stepper.item :current="true" label="Account Info" />
        <x-fwb.stepper.item label="Confirmation" />
    </x-fwb.stepper>

    <form class="max-w-sm mx-auto">
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="name@flowbite.com" required />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" required />
        </div>
        <div class="flex items-start mb-5">
            <input id="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600" />
            <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Next Step</button>
    </form>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Stepper with Form" />

    {{-- Properties Table --}}
    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Component Properties</h2>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Stepper <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.stepper</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">variant</td>
                        <td class="px-6 py-4">string</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code></td>
                        <td class="px-6 py-4">Stepper layout variant. Options: <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">default</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">vertical</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">breadcrumb</code>, <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">timeline</code>.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h3 class="mb-3 text-lg font-medium text-gray-900 dark:text-white">Stepper Item <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">x-fwb.stepper.item</code></h3>
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
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">completed</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the step as completed. Shows a checkmark icon.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">current</td>
                        <td class="px-6 py-4">bool</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">false</code></td>
                        <td class="px-6 py-4">Mark the step as the currently active step. Highlights the step with an accent color.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">label</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Text label for the step.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">description</td>
                        <td class="px-6 py-4">string|null</td>
                        <td class="px-6 py-4"><code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">null</code></td>
                        <td class="px-6 py-4">Additional description text displayed below the label.</td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">icon</td>
                        <td class="px-6 py-4">slot</td>
                        <td class="px-6 py-4">-</td>
                        <td class="px-6 py-4">Named slot for a custom icon. Displayed when the step is not completed.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>
