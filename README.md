# Laravel E-Commerce Platform (TALL Stack + Filament v4)

A full-stack, production-ready e-commerce platform built with **Laravel**, featuring a beautiful customer-facing storefront and a powerful **Filament PHP v4** admin dashboard. Built using the **TALL Stack** (Tailwind CSS, Alpine.js, Laravel, Livewire).

## 🎥 About This Project

Learn how to build a fully functional online store with features you actually need in the real world — from multi-guard authentication and a shopping cart, to Stripe payments and an advanced admin panel.

## ✨ Features

### Storefront
- **Multi Guard Authentication** — separate auth guards for customers and admins
- **Front-end Storefront** — Blade + Livewire + Alpine.js powered UI
- **Shopping Cart** — add, update, and remove items with a smooth Livewire experience
- **Checkout Page** — clean, guided checkout flow
- **Stripe Payment Integration** — secure, PCI-friendly checkout
- **Order Creation via Laravel Transactions** — atomic, reliable order writes
- **Stripe Webhook Handling** — reliable payment confirmation callbacks
- **Coupons & Discounts** — dynamic discount code system
- **Lazy Loading** — optimized for fast page speeds

### Admin Panel (Filament v4)
- **Modern Dashboard** — built with the latest Filament PHP v4 features
- **Advanced Product Management** — product variants (size, color) and inventory tracking
- **Order Management** — view, manage, and track customer orders
- **Import & Export** — bulk data import/export via CSV/Excel
- **Coupon Management** — create and manage discount codes

## 🛠️ Tech Stack

| Layer | Technology |
|---|---|
| Framework | Laravel |
| Admin Panel | Filament PHP v4 |
| Frontend | Blade, Livewire, Alpine.js, Tailwind CSS (TALL Stack) |
| Payments | Stripe |
| Database | MySQL / SQLite |

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL or SQLite
- A Stripe account (test mode keys are fine for development)

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/dhekeiris-beep/laravel-ecommerce.git
   cd laravel-ecommerce
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JS dependencies**
   ```bash
   npm install
   ```

4. **Set up environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your database** in `.env` (MySQL or SQLite), then run migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

6. **Add your Stripe keys** to `.env`:
   ```env
   STRIPE_KEY=your_stripe_public_key
   STRIPE_SECRET=your_stripe_secret_key
   STRIPE_WEBHOOK_SECRET=your_stripe_webhook_secret
   ```

7. **Build front-end assets**
   ```bash
   npm run dev
   # or for production
   npm run build
   ```

8. **Serve the application**
   ```bash
   php artisan serve
   ```

9. **Access the Filament admin panel** at `/admin` using your seeded admin credentials.

## 🔔 Stripe Webhooks (Local Development)

To test Stripe callbacks locally, use the [Stripe CLI](https://stripe.com/docs/stripe-cli):

```bash
stripe listen --forward-to localhost:8000/stripe/webhook
```

Copy the webhook signing secret it outputs into your `.env` as `STRIPE_WEBHOOK_SECRET`.

## 🧪 Running Tests

```bash
php artisan test
```

## 📄 License

This project is open-sourced software. Feel free to use it for learning purposes.

## 🙌 Acknowledgements

Built as part of my internship, where I got hands-on experience developing a full-stack e-commerce application using Laravel, Livewire, Alpine.js, Tailwind CSS, and Filament PHP v4. This project helped me strengthen my skills in real-world Laravel development, payment integrations, and admin panel design.
