<div class="mb-12">
    @if($title)
        <h2 class="mb-4 text-2xl font-semibold text-gray-900 dark:text-white">{{ $title }}</h2>
    @endif
    <div class="p-6 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700">
        {!! $renderedCode() !!}
    </div>
    <div class="mt-4">
        <h3 class="mb-2 text-lg font-medium text-gray-900 dark:text-white">Blade code</h3>
        <pre class="p-4 bg-gray-50 dark:bg-gray-900 rounded-lg text-sm overflow-x-auto text-gray-800 dark:text-gray-200"><code>{{ $code }}</code></pre>
    </div>
</div>
