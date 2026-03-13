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
                    <x-fwb-s-github class="w-5 h-5" />
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
            <li><a href="/docs/pricing-card" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Pricing Card</a></li>
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

            {{-- Blocks --}}
            <li class="pt-4">
                <span class="px-3 text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Blocks</span>
            </li>
            <li><a href="/blocks/admin-layout" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Admin Layout</a></li>
            <li><a href="/blocks/login" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Login</a></li>
            <li><a href="/blocks/register" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Register</a></li>
            <li><a href="/blocks/forgot-password" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Forgot Password</a></li>
            <li><a href="/blocks/reset-password" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Reset Password</a></li>

            {{-- Marketing UI Blocks --}}
            <li class="pt-2">
                <button type="button" class="flex items-center w-full p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm" aria-controls="sidebar-marketing" data-collapse-toggle="sidebar-marketing">
                    <span class="flex-1 text-left text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Marketing UI</span>
                    <x-fwb-o-chevron-down class="w-3 h-3 text-gray-500 dark:text-gray-400" />
                </button>
                <ul id="sidebar-marketing" class="hidden space-y-1 py-1">
                    <li><a href="/blocks/marketing/hero" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Hero Sections</a></li>
                    <li><a href="/blocks/marketing/feature" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Feature</a></li>
                    <li><a href="/blocks/marketing/cta" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">CTA Sections</a></li>
                    <li><a href="/blocks/marketing/content" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Content</a></li>
                    <li><a href="/blocks/marketing/header" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Header</a></li>
                    <li><a href="/blocks/marketing/team" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Team</a></li>
                    <li><a href="/blocks/marketing/pricing" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Pricing</a></li>
                    <li><a href="/blocks/marketing/footer" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Footer</a></li>
                    <li><a href="/blocks/marketing/social-proof" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Social Proof</a></li>
                    <li><a href="/blocks/marketing/contact-form" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Contact Form</a></li>
                    <li><a href="/blocks/marketing/auth-forms" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Auth Forms</a></li>
                    <li><a href="/blocks/marketing/faq" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">FAQ</a></li>
                    <li><a href="/blocks/marketing/testimonial" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Testimonial</a></li>
                    <li><a href="/blocks/marketing/newsletter" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Newsletter & Banner</a></li>
                    <li><a href="/blocks/marketing/blog" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Blog & Portfolio</a></li>
                    <li><a href="/blocks/marketing/error-pages" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Error Pages</a></li>
                </ul>
            </li>

            {{-- Application UI Blocks --}}
            <li class="pt-2">
                <button type="button" class="flex items-center w-full p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm" aria-controls="sidebar-application" data-collapse-toggle="sidebar-application">
                    <span class="flex-1 text-left text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Application UI</span>
                    <x-fwb-o-chevron-down class="w-3 h-3 text-gray-500 dark:text-gray-400" />
                </button>
                <ul id="sidebar-application" class="hidden space-y-1 py-1">
                    <li><a href="/blocks/application/table-header" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Table Headers</a></li>
                    <li><a href="/blocks/application/navigation" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Navigation</a></li>
                    <li><a href="/blocks/application/filter" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Filters</a></li>
                    <li><a href="/blocks/application/crud-modals" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">CRUD Modals</a></li>
                    <li><a href="/blocks/application/crud-drawers" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">CRUD Drawers</a></li>
                    <li><a href="/blocks/application/crud-forms" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">CRUD Forms</a></li>
                    <li><a href="/blocks/application/crud-tables" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">CRUD Tables</a></li>
                </ul>
            </li>

            {{-- E-commerce UI Blocks --}}
            <li class="pt-2">
                <button type="button" class="flex items-center w-full p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm" aria-controls="sidebar-ecommerce" data-collapse-toggle="sidebar-ecommerce">
                    <span class="flex-1 text-left text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">E-commerce UI</span>
                    <x-fwb-o-chevron-down class="w-3 h-3 text-gray-500 dark:text-gray-400" />
                </button>
                <ul id="sidebar-ecommerce" class="hidden space-y-1 py-1">
                    <li><a href="/blocks/ecommerce/storefront" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Storefront</a></li>
                    <li><a href="/blocks/ecommerce/products" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Products</a></li>
                    <li><a href="/blocks/ecommerce/cart" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Cart & Summary</a></li>
                    <li><a href="/blocks/ecommerce/checkout" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Checkout & Payment</a></li>
                    <li><a href="/blocks/ecommerce/orders" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Orders</a></li>
                    <li><a href="/blocks/ecommerce/account" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Account</a></li>
                    <li><a href="/blocks/ecommerce/services" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Services & Refunds</a></li>
                </ul>
            </li>

            {{-- Publisher UI Blocks --}}
            <li class="pt-2">
                <button type="button" class="flex items-center w-full p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm" aria-controls="sidebar-publisher" data-collapse-toggle="sidebar-publisher">
                    <span class="flex-1 text-left text-xs font-semibold text-gray-500 uppercase dark:text-gray-400">Publisher UI</span>
                    <x-fwb-o-chevron-down class="w-3 h-3 text-gray-500 dark:text-gray-400" />
                </button>
                <ul id="sidebar-publisher" class="hidden space-y-1 py-1">
                    <li><a href="/blocks/publisher/blog-template" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Blog Template</a></li>
                    <li><a href="/blocks/publisher/comments" class="flex items-center p-2 pl-6 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 text-sm">Comments</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>

{{-- Main Content --}}
<div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        {{ $slot }}
    </div>
</div>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-HQVDNXBR6C"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HQVDNXBR6C');
</script>
</body>
</html>
