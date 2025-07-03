# Law Firm Management System

A Laravel 12-based web application with RTL/LTR support, multi-language, and a modern frontend using Bootstrap 5.3
## Features

- Laravel 12 backend (PHP 8.2+)
- Blade layout system with components and partials
- RTL/LTR support via language files (Arabic/English)
- CSRF protection and validation
- User authentication
- Contact, business, document, translation, and lawyer management modules
- Responsive UI with Bootstrap
- Asset bundling with Vite
- Queue, cache, and session support (database/redis/file)
- Ready for deployment

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js (v18+ recommended) & npm
-  MySQL or SQL Server for database

## Setup Instructions

### 1. Clone the repository

```bash
git clone <your-repo-url>
cd law-firm
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install Node.js dependencies

```bash
npm install
```

### 4. Environment Configuration

- Copy `.env.example` to `.env` (if `.env.example` is missing, create `.env` manually).
- Set your environment variables, e.g.:

  ```
  APP_NAME=Law Firm
  APP_ENV=local
  APP_KEY=  # Run `php artisan key:generate` to set this
  APP_DEBUG=true
  APP_URL=http://localhost

  DB_CONNECTION=sqlite
  # For SQLite (default)
  DB_DATABASE=/absolute/path/to/database/database.sqlite

  # For MySQL/Postgres, set DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD

  # Mail, Redis, and other service credentials as needed
  ```

- Generate application key:

  ```bash
  php artisan key:generate
  ```

### 5. Database Setup

- For MySQL:
- Update your .env file with your MySQL database credentials:

```aiignore
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Then create the database in MySQL (via CLI or a tool like phpMyAdmin):

```bash
CREATE DATABASE your_database_name;
```

- Run migrations:

  ```bash
  php artisan migrate
  ```

### 6. Build Frontend Assets

- For development (with hot reload):

### 7. Run the Application

```bash
php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000)

## Project Structure

- `app/Http/Controllers/` — Laravel controllers
- `app/Models/` — Eloquent models
- `resources/views/` — Blade templates (layouts, pages, components)
- `resources/lang/` — Language files (ar/en)
- `public/assets/` — CSS, JS, images, fonts
- `routes/web.php` — Web routes
- `database/migrations/` — Database migrations
- `config/` — Laravel configuration files

## Customization

- **Languages:** Add/modify translation files in `resources/lang/ar` and `resources/lang/en`.
- **Styling:** Edit SCSS/CSS in `public/assets/css/`
- **JS:** Place custom scripts in `public/assets/js/`.
