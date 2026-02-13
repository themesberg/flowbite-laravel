<x-layouts.app title="Login Block - Flowbite Blade Blocks">
    <h1 class="mb-4 text-3xl font-bold text-gray-900 dark:text-white">Login</h1>
    <p class="mb-8 text-lg text-gray-600 dark:text-gray-400">A login page with email, password, remember me checkbox, and links to forgot password and registration. Designed to be used inside <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">x-fwb.layouts.auth</code>.</p>

    @php
    $code = <<<'BLADE'
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
BLADE;
    @endphp
    <x-preview :code="$code" title="Login Page" />

    <div class="mb-12">
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">Usage</h2>
        <p class="mb-4 text-gray-500 dark:text-gray-400">Wrap this content inside the auth layout:</p>
        <pre class="p-4 bg-gray-50 dark:bg-gray-900 rounded-lg text-sm overflow-x-auto text-gray-800 dark:text-gray-200"><code>&lt;x-fwb.layouts.auth title="Log in"&gt;
    {{-- Login form content here --}}
&lt;/x-fwb.layouts.auth&gt;</code></pre>
    </div>
</x-layouts.app>
