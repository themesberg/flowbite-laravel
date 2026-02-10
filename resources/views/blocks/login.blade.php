<x-layouts.app title="Login Block - Flowbite Blade Blocks">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Login</h1>
    <p class="mb-8 text-lg text-gray-600 dark:text-gray-400">A login page using the auth layout with email, password, remember me checkbox, and links to forgot password and registration.</p>

    @php
    $code = <<<'BLADE'
    <x-fwb.layouts.auth title="Log in">
        <div class="flex flex-col gap-6">
            <div class="flex w-full flex-col text-center">
                <h1 class="text-xl font-semibold text-gray-900 dark:text-white">Log in to your account</h1>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Enter your email and password below to log in</p>
            </div>

            <form method="POST" action="#" class="flex flex-col gap-6">
                <x-fwb.input name="email" label="Email address" type="email" required placeholder="email@example.com" />
                <x-fwb.input name="password" label="Password" type="password" required placeholder="Password" />
                <x-fwb.checkbox name="remember" label="Remember me" />
                <x-fwb.button type="submit" class="w-full">Log in</x-fwb.button>
            </form>

            <div class="text-sm text-center text-gray-500 dark:text-gray-400">
                Don't have an account?
                <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Sign up</a>
            </div>
        </div>
    </x-fwb.layouts.auth>
    BLADE;
    @endphp
    <x-preview :code="$code" title="Login Page" />

    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Auth Layout Properties</h2>
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
                    <td class="px-6 py-4 font-medium">title</td>
                    <td class="px-6 py-4">?string</td>
                    <td class="px-6 py-4">null</td>
                    <td class="px-6 py-4">Page title for the document &lt;title&gt; tag</td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layouts.app>
