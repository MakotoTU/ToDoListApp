# TodoListApp

A simple Todo List application built with Laravel.

## Prerequisites

Before you begin, ensure you have met the following requirements:
*   **PHP** >= 8.2 (via XAMPP/Laragon)
*   **Composer** installed globally
*   **Node.js & NPM** (for compiling assets)

## Installation Guide

Follow these steps to set up the project on your local machine:

### 1. Clone or Download
Clone the repository or extract the downloaded ZIP file to your web server directory (e.g., `htdocs`).

```bash
git clone https://github.com/MakotoTU/ToDoListApp.git
cd ToDoListApp
```

### 2. Install Backend Dependencies
This installs all the PHP libraries required (creates the `vendor` folder).

```bash
composer install
```

### 3. Setup Environment Configuration
Copy the example environment file to create your own `.env` file.

```bash
cp .env.example .env
# Or on Windows Command Prompt: copy .env.example .env
```

Generate the application encryption key:

```bash
php artisan key:generate
```

### 4. Setup Database (just skip this step)
1. Open your database manager (e.g., phpMyAdmin).
2. Create a new empty database (e.g., named `todolist_app`).
3. Open the `.env` file in a text editor and update the database settings:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todolist_app  <-- Change this to your database name
DB_USERNAME=root          <-- Default XAMPP user
DB_PASSWORD=              <-- Default XAMPP password is empty
```

### 5. Run Migrations and Seeders
This will create the tables and add the default test user.

```bash
php artisan migrate --seed
```

### 6. Install Frontend Dependencies (can be skip/Optional)
Install and build the JavaScript/CSS assets.

```bash
npm install
npm run build
```

## Running the Application

To start the local development server:

```bash
php artisan serve
```

Access the application at: `http://localhost:8000`

## Default Login Account

If you ran the seeder in step 5, you can login with:

*   **Email:** `test@example.com`
*   **Password:** `password`
