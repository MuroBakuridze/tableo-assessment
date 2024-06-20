# Tableo Assessment 1

This project is a small application to manage restaurants, their tables, and their allocated dining areas. It includes functionalities to list restaurants, view their tables, and filter active tables.

## Requirements

- PHP 8
- Composer
- MySQL or any other database supported by Laravel
- Laravel 9

## Installation

### Option 1: Clone the Repository

1. **Clone the repository:**
    ```bash
    git clone https://github.com/MuroBakuridze/tableo-assessment.git
    cd tableo-assessment
    ```

2. **Install Dependencies:**
    ```bash
    composer install
    ```

### Option 2: Run from a Zip File

1. **Download and extract the zip file.**

2. **Navigate to the extracted directory:**
    ```bash
    cd tableo-assessment
    ```

3. **Install Dependencies:**
    ```bash
    composer install
    ```

### Environment Setup

1. **Copy the `.env.example` file to `.env`:**
    ```bash
    cp .env.example .env
    ```

2. **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

3. **Configure Database:**
    Open the `.env` file and update the following lines with your database configuration or just crate db with same name:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=tableo-db
    DB_USERNAME=root
    DB_PASSWORD=
    ```

### Run Migrations and Seeders

1. **Run the migrations to create the necessary tables:**
    ```bash
    php artisan migrate
    ```

2. **Seed the database with initial data:**
    ```bash
    php artisan db:seed
    ```

### Serve the Application

1. **Start the Laravel development server:**
    ```bash
    php artisan serve
    ```

2. **The application will be available at:**
    [http://127.0.0.1:8000](http://127.0.0.1:8000)
