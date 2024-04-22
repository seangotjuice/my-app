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



## Features
The product management system includes the following features:

- View Products
    - Route: `GET /product`
    - Description: Displays a list of all products.
- Create Product
    - Route: `GET /product/create`
    - Description: Shows a form to create a new product.
- Store Product
    - Route: `POST /product`
    - Description: Saves the new product to the database.
- Edit Product
    - Route: `GET /product/{product}/edit`
    - Description: Shows a form to edit an existing product.
- Update Product
    - Route: `PUT /product/{product}`
    - Description: Updates the specified product in the database.
- Delete Product
    - Route: `DELETE /product/{product}`
    - Description: Deletes the specified product from the database.

## Testing
### Running Tests
To run the tests for this application, use the following command:
```
./vendor/bin/phpunit
```
### Test Cases
Here are the descriptions of the test cases included in the ProductTest class:
- testCreateProduct: Confirms that a product can be created through the web interface and is stored in the database.
- testUpdateProduct: Checks that an existing product can be updated with new information through the web interface.
- testDeleteProduct: Ensures that a product can be deleted through the web interface and is removed from the database.
These tests cover all CRUD operations and ensure that the application behaves as expected when interacting with the database.

