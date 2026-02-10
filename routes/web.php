<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Phase 1 — Core UI
Route::get('/docs/accordion', fn () => view('docs.accordion'));
Route::get('/docs/alert', fn () => view('docs.alert'));
Route::get('/docs/avatar', fn () => view('docs.avatar'));
Route::get('/docs/badge', fn () => view('docs.badge'));
Route::get('/docs/button', fn () => view('docs.button'));
Route::get('/docs/card', fn () => view('docs.card'));
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
