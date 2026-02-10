<x-layouts.app title="Reset Password Block - Flowbite Blade Blocks">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Reset Password</h1>
    <p class="mb-8 text-lg text-gray-600 dark:text-gray-400">A reset password page using the auth layout with email, new password, and password confirmation fields.</p>

    @php
    $code = <<<'BLADE'
    <x-fwb.layouts.auth title="Reset password">
        <div class="flex flex-col gap-6">
            <div class="flex w-full flex-col text-center">
                <h1 class="text-xl font-semibold text-gray-900 dark:text-white">Reset password</h1>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Please enter your new password below</p>
            </div>

            <form method="POST" action="#" class="flex flex-col gap-6">
                <x-fwb.input name="email" label="Email" type="email" required />
                <x-fwb.input name="password" label="Password" type="password" required placeholder="Password" />
                <x-fwb.input name="password_confirmation" label="Confirm password" type="password" required placeholder="Confirm password" />
                <x-fwb.button type="submit" class="w-full">Reset password</x-fwb.button>
            </form>
        </div>
    </x-fwb.layouts.auth>
    BLADE;
    @endphp
    <x-preview :code="$code" title="Reset Password Page" />
</x-layouts.app>
