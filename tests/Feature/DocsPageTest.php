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
            // Blocks — Existing
            'blocks-admin-layout' => ['/blocks/admin-layout'],
            'blocks-login' => ['/blocks/login'],
            'blocks-register' => ['/blocks/register'],
            'blocks-forgot-password' => ['/blocks/forgot-password'],
            'blocks-reset-password' => ['/blocks/reset-password'],
            // Blocks — Marketing UI
            'blocks-marketing-hero' => ['/blocks/marketing/hero'],
            'blocks-marketing-feature' => ['/blocks/marketing/feature'],
            'blocks-marketing-cta' => ['/blocks/marketing/cta'],
            'blocks-marketing-content' => ['/blocks/marketing/content'],
            'blocks-marketing-header' => ['/blocks/marketing/header'],
            'blocks-marketing-team' => ['/blocks/marketing/team'],
            'blocks-marketing-pricing' => ['/blocks/marketing/pricing'],
            'blocks-marketing-footer' => ['/blocks/marketing/footer'],
            'blocks-marketing-social-proof' => ['/blocks/marketing/social-proof'],
            'blocks-marketing-contact-form' => ['/blocks/marketing/contact-form'],
            'blocks-marketing-auth-forms' => ['/blocks/marketing/auth-forms'],
            'blocks-marketing-faq' => ['/blocks/marketing/faq'],
            'blocks-marketing-testimonial' => ['/blocks/marketing/testimonial'],
            'blocks-marketing-newsletter' => ['/blocks/marketing/newsletter'],
            'blocks-marketing-blog' => ['/blocks/marketing/blog'],
            'blocks-marketing-error-pages' => ['/blocks/marketing/error-pages'],
            // Blocks — Application UI
            'blocks-application-table-header' => ['/blocks/application/table-header'],
            'blocks-application-navigation' => ['/blocks/application/navigation'],
            'blocks-application-filter' => ['/blocks/application/filter'],
            'blocks-application-crud-modals' => ['/blocks/application/crud-modals'],
            'blocks-application-crud-drawers' => ['/blocks/application/crud-drawers'],
            'blocks-application-crud-forms' => ['/blocks/application/crud-forms'],
            'blocks-application-crud-tables' => ['/blocks/application/crud-tables'],
            // Blocks — E-commerce UI
            'blocks-ecommerce-storefront' => ['/blocks/ecommerce/storefront'],
            'blocks-ecommerce-products' => ['/blocks/ecommerce/products'],
            'blocks-ecommerce-cart' => ['/blocks/ecommerce/cart'],
            'blocks-ecommerce-checkout' => ['/blocks/ecommerce/checkout'],
            'blocks-ecommerce-orders' => ['/blocks/ecommerce/orders'],
            'blocks-ecommerce-account' => ['/blocks/ecommerce/account'],
            'blocks-ecommerce-services' => ['/blocks/ecommerce/services'],
            // Blocks — Publisher UI
            'blocks-publisher-blog-template' => ['/blocks/publisher/blog-template'],
            'blocks-publisher-comments' => ['/blocks/publisher/comments'],
        ];
    }
}
