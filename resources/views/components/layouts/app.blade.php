<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Flowbite Blade Components' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-white dark:bg-gray-900">

{{-- Top Navbar --}}
<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <a href="/" class="flex ms-2 md:me-24">
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite Blade</span>
                </a>
            </div>
            <div class="flex items-center">
                <a href="https://github.com/themesberg/flowbite-blade" target="_blank" class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- Sidebar --}}
<aside class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-1 font-medium">
            {{-- Phase 1: Core UI --}}
            <li class="pt-2">
                <span class="px-3 text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Core UI</span>
            </li>
            <li><a href="/docs/accordion" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Accordion</a></li>
            <li><a href="/docs/alert" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Alert</a></li>
            <li><a href="/docs/avatar" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Avatar</a></li>
            <li><a href="/docs/badge" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Badge</a></li>
            <li><a href="/docs/button" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Button</a></li>
            <li><a href="/docs/card" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Card</a></li>
            <li><a href="/docs/spinner" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Spinner</a></li>
            <li><a href="/docs/progress" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Progress</a></li>
            <li><a href="/docs/rating" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Rating</a></li>
            <li><a href="/docs/indicator" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Indicator</a></li>

            {{-- Phase 2: Navigation --}}
            <li class="pt-4">
                <span class="px-3 text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Navigation</span>
            </li>
            <li><a href="/docs/breadcrumb" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Breadcrumb</a></li>
            <li><a href="/docs/navbar" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Navbar</a></li>
            <li><a href="/docs/sidebar" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Sidebar</a></li>
            <li><a href="/docs/tabs" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Tabs</a></li>
            <li><a href="/docs/pagination" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Pagination</a></li>
            <li><a href="/docs/bottom-nav" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Bottom Navigation</a></li>

            {{-- Phase 3: Overlays --}}
            <li class="pt-4">
                <span class="px-3 text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Overlays</span>
            </li>
            <li><a href="/docs/modal" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Modal</a></li>
            <li><a href="/docs/drawer" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Drawer</a></li>
            <li><a href="/docs/dropdown" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Dropdown</a></li>
            <li><a href="/docs/popover" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Popover</a></li>
            <li><a href="/docs/tooltip" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Tooltip</a></li>
            <li><a href="/docs/toast" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Toast</a></li>
            <li><a href="/docs/speed-dial" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Speed Dial</a></li>

            {{-- Phase 4: Data Display --}}
            <li class="pt-4">
                <span class="px-3 text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Data Display</span>
            </li>
            <li><a href="/docs/table" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Table</a></li>
            <li><a href="/docs/list-group" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">List Group</a></li>
            <li><a href="/docs/timeline" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Timeline</a></li>
            <li><a href="/docs/carousel" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Carousel</a></li>
            <li><a href="/docs/gallery" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Gallery</a></li>
            <li><a href="/docs/skeleton" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Skeleton</a></li>
            <li><a href="/docs/chat-bubble" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Chat Bubble</a></li>

            {{-- Phase 5: Forms --}}
            <li class="pt-4">
                <span class="px-3 text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Forms</span>
            </li>
            <li><a href="/docs/input" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Input</a></li>
            <li><a href="/docs/textarea" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Textarea</a></li>
            <li><a href="/docs/select" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Select</a></li>
            <li><a href="/docs/checkbox" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Checkbox</a></li>
            <li><a href="/docs/radio" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Radio</a></li>
            <li><a href="/docs/toggle" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Toggle</a></li>
            <li><a href="/docs/range" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Range</a></li>
            <li><a href="/docs/file-input" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">File Input</a></li>
            <li><a href="/docs/floating-label" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Floating Label</a></li>

            {{-- Phase 6: Content & Layout --}}
            <li class="pt-4">
                <span class="px-3 text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Content & Layout</span>
            </li>
            <li><a href="/docs/footer" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Footer</a></li>
            <li><a href="/docs/jumbotron" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Jumbotron</a></li>
            <li><a href="/docs/banner" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Banner</a></li>
            <li><a href="/docs/kbd" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">KBD</a></li>
            <li><a href="/docs/stepper" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Stepper</a></li>
            <li><a href="/docs/video" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Video</a></li>
        </ul>
    </div>
</aside>

{{-- Main Content --}}
<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        {{ $slot }}
    </div>
</div>

</body>
</html>
