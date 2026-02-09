<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class DocsPageTest extends TestCase
{
    #[DataProvider('docRoutes')]
    public function test_doc_page_renders_successfully(string $route): void
    {
        $response = $this->get($route);

        $response->assertStatus(200);
    }

    public static function docRoutes(): array
    {
        return [
            'welcome' => ['/'],
            // Phase 1 — Core UI
            'accordion' => ['/docs/accordion'],
            'alert' => ['/docs/alert'],
            'avatar' => ['/docs/avatar'],
            'badge' => ['/docs/badge'],
            'button' => ['/docs/button'],
            'card' => ['/docs/card'],
            'spinner' => ['/docs/spinner'],
            'progress' => ['/docs/progress'],
            'rating' => ['/docs/rating'],
            'indicator' => ['/docs/indicator'],
            // Phase 2 — Navigation
            'breadcrumb' => ['/docs/breadcrumb'],
            'navbar' => ['/docs/navbar'],
            'sidebar' => ['/docs/sidebar'],
            'tabs' => ['/docs/tabs'],
            'pagination' => ['/docs/pagination'],
            'bottom-nav' => ['/docs/bottom-nav'],
            // Phase 3 — Overlays
            'modal' => ['/docs/modal'],
            'drawer' => ['/docs/drawer'],
            'dropdown' => ['/docs/dropdown'],
            'popover' => ['/docs/popover'],
            'tooltip' => ['/docs/tooltip'],
            'toast' => ['/docs/toast'],
            'speed-dial' => ['/docs/speed-dial'],
            // Phase 4 — Data Display
            'table' => ['/docs/table'],
            'list-group' => ['/docs/list-group'],
            'timeline' => ['/docs/timeline'],
            'carousel' => ['/docs/carousel'],
            'gallery' => ['/docs/gallery'],
            'skeleton' => ['/docs/skeleton'],
            'chat-bubble' => ['/docs/chat-bubble'],
            // Phase 5 — Forms
            'input' => ['/docs/input'],
            'textarea' => ['/docs/textarea'],
            'select' => ['/docs/select'],
            'checkbox' => ['/docs/checkbox'],
            'radio' => ['/docs/radio'],
            'toggle' => ['/docs/toggle'],
            'range' => ['/docs/range'],
            'file-input' => ['/docs/file-input'],
            'floating-label' => ['/docs/floating-label'],
            // Phase 6 — Content & Layout
            'footer' => ['/docs/footer'],
            'jumbotron' => ['/docs/jumbotron'],
            'banner' => ['/docs/banner'],
            'kbd' => ['/docs/kbd'],
            'stepper' => ['/docs/stepper'],
            'video' => ['/docs/video'],
        ];
    }
}
