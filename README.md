# Flowbite Blade Docs

The official documentation site for [Flowbite Blade](https://flowbite-laravel.com) — Laravel Blade components for [Flowbite](https://flowbite.com).

Live at **[flowbite-laravel.com](https://flowbite-laravel.com)**

## Overview

Interactive documentation with live previews and copy-paste Blade code for 60+ components and 80+ pre-built blocks.

### What's documented

- **46 component pages** — Accordion, Alert, Avatar, Badge, Button, Card, Modal, Table, Forms, and more
- **37 block pages** — Marketing, Application UI, E-commerce, and Publisher sections
- **3 layout pages** — Admin, Auth, and Settings layouts
- **Properties tables** — Props, types, defaults, and descriptions for every component

## Requirements

- PHP 8.2+
- Node.js 18+
- Composer

## Installation

```bash
git clone <repository-url> flowbite-blade-docs
cd flowbite-blade-docs
composer run setup
```

The `setup` script handles: Composer install, environment configuration, key generation, database migration, npm install, and asset build.

## Development

```bash
composer run dev
```

Runs concurrently:
- `php artisan serve` — Laravel development server
- `php artisan queue:listen` — Queue worker
- `php artisan pail` — Real-time log viewer
- `npm run dev` — Vite HMR

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Framework | Laravel 12 |
| Frontend | Tailwind CSS v4, Flowbite 4 |
| Components | Flowbite Blade |
| Icons | Flowbite Blade Icons |
| Bundler | Vite 7 |
| Database | SQLite |

## Project Structure

```
resources/views/
├── welcome.blade.php              # Home page
├── components/
│   ├── layouts/
│   │   └── app.blade.php          # Main layout (header, sidebar, content)
│   └── preview.blade.php          # Live preview + code display component
├── docs/                          # Component documentation (46 pages)
│   ├── accordion.blade.php
│   ├── alert.blade.php
│   ├── button.blade.php
│   ├── card.blade.php
│   ├── modal.blade.php
│   ├── table.blade.php
│   └── ...
└── blocks/                        # Block documentation (37 pages)
    ├── admin-layout.blade.php
    ├── login.blade.php
    ├── marketing/                  # Hero, CTA, pricing, features, FAQ, etc.
    ├── application/                # CRUD, tables, filters, navigation
    ├── ecommerce/                  # Storefront, cart, checkout, orders
    └── publisher/                  # Blog template, comments
```

## Documentation Pages

### Components

| Category | Pages |
|----------|-------|
| Core UI | Accordion, Alert, Avatar, Badge, Button, Card, Pricing Card, Spinner, Progress, Rating, Indicator |
| Navigation | Breadcrumb, Navbar, Sidebar, Tabs, Pagination, Bottom Nav |
| Overlays | Modal, Drawer, Dropdown, Popover, Tooltip, Toast, Speed Dial |
| Data Display | Table, List Group, Timeline, Carousel, Gallery, Skeleton, Chat Bubble |
| Forms | Input, Textarea, Select, Checkbox, Radio, Toggle, Range, File Input, Floating Label |
| Content | Footer, Jumbotron, Banner, Kbd, Stepper, Video |

### Blocks

| Category | Pages |
|----------|-------|
| Marketing | Hero, Features, CTA, Pricing, Header, Footer, Social Proof, Testimonials, FAQ, Contact Form, Newsletter, Blog, Team, Error Pages, and more |
| Application | Table Headers, Navigation, Filters, CRUD Modals, CRUD Drawers, CRUD Forms, CRUD Tables |
| E-commerce | Storefront, Products, Cart, Checkout, Orders, Account, Services |
| Publisher | Blog Template, Comments |

## Page Structure

Each documentation page follows a consistent pattern:

```blade
<x-layouts.app title="Component - Flowbite Blade">
    <h1>Component Name</h1>
    <p>Description</p>

    @php
    $code = <<<'BLADE'
    <x-fwb.component prop="value" />
    BLADE;
    @endphp
    <x-preview :code="$code" title="Example" />

    {{-- Properties table --}}
</x-layouts.app>
```

The `<x-preview>` component renders a live preview of the Blade code alongside the source.

## Adding a Documentation Page

1. Create the view in `resources/views/docs/` or `resources/views/blocks/`
2. Add the route in `routes/web.php`
3. Add the navigation link in the sidebar layout
4. Follow the existing page structure with `<x-preview>` components

## License

MIT
