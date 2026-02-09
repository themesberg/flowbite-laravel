<x-layouts.app title="Flowbite Blade Components">
    <div class="max-w-3xl">
        <h1 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">Flowbite Blade Components</h1>
        <p class="mb-8 text-xl text-gray-500 dark:text-gray-400">
            A Laravel Blade component library for Flowbite. Reusable, configurable UI components powered by Tailwind CSS and Flowbite.
        </p>

        <div class="mb-8">
            <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">Installation</h2>
            <pre class="p-4 bg-gray-50 dark:bg-gray-900 rounded-lg text-sm overflow-x-auto"><code>composer require themesberg/flowbite-blade</code></pre>
            <p class="mt-4 text-gray-500 dark:text-gray-400">Then install Flowbite via npm in your Laravel project:</p>
            <pre class="p-4 mt-2 bg-gray-50 dark:bg-gray-900 rounded-lg text-sm overflow-x-auto"><code>npm install flowbite</code></pre>
        </div>

        <div class="mb-8">
            <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">Usage</h2>
            <p class="mb-4 text-gray-500 dark:text-gray-400">All components use the <code class="text-sm bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">fwb</code> prefix (configurable):</p>
            <pre class="p-4 bg-gray-50 dark:bg-gray-900 rounded-lg text-sm overflow-x-auto"><code>&lt;x-fwb.button color="blue"&gt;Click me&lt;/x-fwb.button&gt;

&lt;x-fwb.alert color="green" :dismissible="true"&gt;
    Success! Your changes have been saved.
&lt;/x-fwb.alert&gt;

&lt;x-fwb.card&gt;
    &lt;h5&gt;Card title&lt;/h5&gt;
    &lt;p&gt;Card content here.&lt;/p&gt;
&lt;/x-fwb.card&gt;</code></pre>
        </div>

        <div class="mb-8">
            <h2 class="mb-4 text-2xl font-bold text-gray-900 dark:text-white">Components</h2>
            <p class="text-gray-500 dark:text-gray-400">Browse the sidebar to see all available components with live examples and usage code.</p>
        </div>
    </div>
</x-layouts.app>
