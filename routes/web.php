<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sitemap.xml', function () {
    $urls = collect(Route::getRoutes())
        ->filter(fn ($route) => in_array('GET', $route->methods()) && $route->uri() !== 'sitemap.xml' && !str_starts_with($route->uri(), '_'))
        ->map(fn ($route) => url($route->uri()));

    return response()->view('sitemap', ['urls' => $urls])->header('Content-Type', 'application/xml');
});

// Phase 1 — Core UI
Route::get('/docs/accordion', fn () => view('docs.accordion'));
Route::get('/docs/alert', fn () => view('docs.alert'));
Route::get('/docs/avatar', fn () => view('docs.avatar'));
Route::get('/docs/badge', fn () => view('docs.badge'));
Route::get('/docs/button', fn () => view('docs.button'));
Route::get('/docs/card', fn () => view('docs.card'));
Route::get('/docs/pricing-card', fn () => view('docs.pricing-card'));
Route::get('/docs/spinner', fn () => view('docs.spinner'));
Route::get('/docs/progress', fn () => view('docs.progress'));
Route::get('/docs/rating', fn () => view('docs.rating'));
Route::get('/docs/indicator', fn () => view('docs.indicator'));

// Phase 2 — Navigation
Route::get('/docs/breadcrumb', fn () => view('docs.breadcrumb'));
Route::get('/docs/navbar', fn () => view('docs.navbar'));
Route::get('/docs/sidebar', fn () => view('docs.sidebar'));
Route::get('/docs/tabs', fn () => view('docs.tabs'));
Route::get('/docs/pagination', function () {
    $users = new \Illuminate\Pagination\LengthAwarePaginator(
        collect(range(1, 10)),
        100, 10, 1,
        ['path' => request()->url()]
    );
    return view('docs.pagination', compact('users'));
});
Route::get('/docs/bottom-nav', fn () => view('docs.bottom-nav'));

// Phase 3 — Overlays & Interactive
Route::get('/docs/modal', fn () => view('docs.modal'));
Route::get('/docs/drawer', fn () => view('docs.drawer'));
Route::get('/docs/dropdown', fn () => view('docs.dropdown'));
Route::get('/docs/popover', fn () => view('docs.popover'));
Route::get('/docs/tooltip', fn () => view('docs.tooltip'));
Route::get('/docs/toast', fn () => view('docs.toast'));
Route::get('/docs/speed-dial', fn () => view('docs.speed-dial'));

// Phase 4 — Data Display
Route::get('/docs/table', fn () => view('docs.table'));
Route::get('/docs/list-group', fn () => view('docs.list-group'));
Route::get('/docs/timeline', fn () => view('docs.timeline'));
Route::get('/docs/carousel', fn () => view('docs.carousel'));
Route::get('/docs/gallery', fn () => view('docs.gallery'));
Route::get('/docs/skeleton', fn () => view('docs.skeleton'));
Route::get('/docs/chat-bubble', fn () => view('docs.chat-bubble'));

// Phase 5 — Forms
Route::get('/docs/input', fn () => view('docs.input'));
Route::get('/docs/textarea', fn () => view('docs.textarea'));
Route::get('/docs/select', fn () => view('docs.select'));
Route::get('/docs/checkbox', fn () => view('docs.checkbox'));
Route::get('/docs/radio', fn () => view('docs.radio'));
Route::get('/docs/toggle', fn () => view('docs.toggle'));
Route::get('/docs/range', fn () => view('docs.range'));
Route::get('/docs/file-input', fn () => view('docs.file-input'));
Route::get('/docs/floating-label', fn () => view('docs.floating-label'));

// Phase 6 — Content & Layout
Route::get('/docs/footer', fn () => view('docs.footer'));
Route::get('/docs/jumbotron', fn () => view('docs.jumbotron'));
Route::get('/docs/banner', fn () => view('docs.banner'));
Route::get('/docs/kbd', fn () => view('docs.kbd'));
Route::get('/docs/stepper', fn () => view('docs.stepper'));
Route::get('/docs/video', fn () => view('docs.video'));

// Blocks
Route::get('/blocks/admin-layout', fn () => view('blocks.admin-layout'));
Route::get('/blocks/login', fn () => view('blocks.login'));
Route::get('/blocks/register', fn () => view('blocks.register'));
Route::get('/blocks/forgot-password', fn () => view('blocks.forgot-password'));
Route::get('/blocks/reset-password', fn () => view('blocks.reset-password'));

// Blocks — Marketing UI
Route::get('/blocks/marketing/hero', fn () => view('blocks.marketing.hero'));
Route::get('/blocks/marketing/feature', fn () => view('blocks.marketing.feature'));
Route::get('/blocks/marketing/cta', fn () => view('blocks.marketing.cta'));
Route::get('/blocks/marketing/content', fn () => view('blocks.marketing.content'));
Route::get('/blocks/marketing/header', fn () => view('blocks.marketing.header'));
Route::get('/blocks/marketing/team', fn () => view('blocks.marketing.team'));
Route::get('/blocks/marketing/pricing', fn () => view('blocks.marketing.pricing'));
Route::get('/blocks/marketing/footer', fn () => view('blocks.marketing.footer'));
Route::get('/blocks/marketing/social-proof', fn () => view('blocks.marketing.social-proof'));
Route::get('/blocks/marketing/contact-form', fn () => view('blocks.marketing.contact-form'));
Route::get('/blocks/marketing/auth-forms', fn () => view('blocks.marketing.auth-forms'));
Route::get('/blocks/marketing/faq', fn () => view('blocks.marketing.faq'));
Route::get('/blocks/marketing/testimonial', fn () => view('blocks.marketing.testimonial'));
Route::get('/blocks/marketing/newsletter', fn () => view('blocks.marketing.newsletter'));
Route::get('/blocks/marketing/blog', fn () => view('blocks.marketing.blog'));
Route::get('/blocks/marketing/error-pages', fn () => view('blocks.marketing.error-pages'));

// Blocks — Application UI
Route::get('/blocks/application/table-header', fn () => view('blocks.application.table-header'));
Route::get('/blocks/application/navigation', fn () => view('blocks.application.navigation'));
Route::get('/blocks/application/filter', fn () => view('blocks.application.filter'));
Route::get('/blocks/application/crud-modals', fn () => view('blocks.application.crud-modals'));
Route::get('/blocks/application/crud-drawers', fn () => view('blocks.application.crud-drawers'));
Route::get('/blocks/application/crud-forms', fn () => view('blocks.application.crud-forms'));
Route::get('/blocks/application/crud-tables', fn () => view('blocks.application.crud-tables'));

// Blocks — E-commerce UI
Route::get('/blocks/ecommerce/storefront', fn () => view('blocks.ecommerce.storefront'));
Route::get('/blocks/ecommerce/products', fn () => view('blocks.ecommerce.products'));
Route::get('/blocks/ecommerce/cart', fn () => view('blocks.ecommerce.cart'));
Route::get('/blocks/ecommerce/checkout', fn () => view('blocks.ecommerce.checkout'));
Route::get('/blocks/ecommerce/orders', fn () => view('blocks.ecommerce.orders'));
Route::get('/blocks/ecommerce/account', fn () => view('blocks.ecommerce.account'));
Route::get('/blocks/ecommerce/services', fn () => view('blocks.ecommerce.services'));

// Blocks — Publisher UI
Route::get('/blocks/publisher/blog-template', fn () => view('blocks.publisher.blog-template'));
Route::get('/blocks/publisher/comments', fn () => view('blocks.publisher.comments'));
