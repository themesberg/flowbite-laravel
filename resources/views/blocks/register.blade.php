<x-layouts.app title="Register Block - Flowbite Blade Blocks" description="A registration page with name, email, password, and password confirmation fields.">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Register</h1>
    <p class="mb-8 text-lg text-gray-600 dark:text-gray-400">A registration page with name, email, password, and password confirmation fields. Designed to be used inside <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">x-fwb.layouts.auth</code>.</p>

    @php
    $code = <<<'BLADE'
<div class="flex flex-col gap-6">
    <div class="flex w-full flex-col text-center">
        <h1 class="text-xl font-semibold text-gray-900 dark:text-white">Create an account</h1>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Enter your details below to create your account</p>
    </div>

    <form method="POST" action="#" class="flex flex-col gap-6">
        <x-fwb.input name="name" label="Name" type="text" required placeholder="Full name" />
        <x-fwb.input name="email" label="Email address" type="email" required placeholder="email@example.com" />
        <x-fwb.input name="password" label="Password" type="password" required placeholder="Password" />
        <x-fwb.input name="password_confirmation" label="Confirm password" type="password" required placeholder="Confirm password" />
        <x-fwb.button type="submit" class="w-full">Create account</x-fwb.button>
    </form>

    <div class="text-sm text-center text-gray-500 dark:text-gray-400">
        Already have an account?
        <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Log in</a>
    </div>
</div>
BLADE;
    @endphp
    <x-preview :code="$code" title="Register Page" />
</x-layouts.app>
