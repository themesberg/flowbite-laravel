<x-layouts.app title="Forgot Password Block - Flowbite Blade Blocks">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Forgot Password</h1>
    <p class="mb-8 text-lg text-gray-600 dark:text-gray-400">A forgot password page using the auth layout with an email field and a link back to login.</p>

    @php
    $code = <<<'BLADE'
    <x-fwb.layouts.auth title="Forgot password">
        <div class="flex flex-col gap-6">
            <div class="flex w-full flex-col text-center">
                <h1 class="text-xl font-semibold text-gray-900 dark:text-white">Forgot password</h1>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Enter your email to receive a password reset link</p>
            </div>

            <form method="POST" action="#" class="flex flex-col gap-6">
                <x-fwb.input name="email" label="Email Address" type="email" required placeholder="email@example.com" />
                <x-fwb.button type="submit" class="w-full">Email password reset link</x-fwb.button>
            </form>

            <div class="text-sm text-center text-gray-500 dark:text-gray-400">
                Or, return to
                <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">log in</a>
            </div>
        </div>
    </x-fwb.layouts.auth>
    BLADE;
    @endphp
    <x-preview :code="$code" title="Forgot Password Page" />
</x-layouts.app>
