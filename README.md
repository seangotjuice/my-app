# Laravel Product Management System

This is a simple web application for managing products using the Laravel framework. The system allows users to create, update, view, and delete products.

## Installation Instructions

Follow these steps to set up the project locally.

### Requirements

- PHP >= 8.0
- Composer
- MySQL or any SQL database server

### Steps

1. **Clone the Repository**

```bash
git clone https://github.com/yourusername/laravel-product-management.git
cd laravel-product-management
```

2. **Install Dependencies**

```bash
composer install
```
3. **Setup Environment file**

Copy the example env file and make the necessary configuration adjustments.
```
cp .env.example .env
```
4. **Edit the .env file and set the database connection details:**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_products
DB_USERNAME=root
DB_PASSWORD=
```
5. **Generate Application key**
```
php artisan key:generate
```

6. **Run Migrations**

```
php artisan migrate
```
7. **Start the Server**

```
php artisan serve
```
This will start the local development server at http://localhost:8000.

