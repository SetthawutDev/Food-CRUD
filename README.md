# Food CRUD

A small PHP and MySQL application for managing food names and prices. Built as a learning project to practice CRUD (Create, Read, Update, Delete) operations and Bootstrap styling.

## Features

- View all foods with their IDs, names, and prices.
- Add a food using a simple form.
- Edit an existing food's name and price.
- Delete a food after confirming in the browser.

## Technology

- PHP with the MySQLi extension
- MySQL or MariaDB
- Bootstrap 5.2.3, loaded from jsDelivr
- JavaScript for navigation and delete confirmation

No Composer or npm installation is required. Internet access is needed to load Bootstrap from the CDN.

## Run locally with XAMPP

1. Install XAMPP with PHP and MySQL/MariaDB, then start **Apache** and **MySQL**.
2. Place this project inside XAMPP's `htdocs` directory, for example in a folder named `Food CRUD`.
3. Open phpMyAdmin at `http://localhost/phpmyadmin` and create a database named `se310_quiz`.
4. Select that database and import [`foods_table.sql`](foods_table.sql). The file creates the `foods` table; it does not create the database or insert sample data.
5. Check [`config/conn.php`](config/conn.php) and update the connection settings to match your local database:

   ```php
   $servername = 'localhost';
   $username = 'root';
   $password = '';
   $db = 'se310_quiz';
   ```

6. Open `http://localhost/Food%20CRUD/` in your browser. If the project is inside additional folders under `htdocs`, include those folders in the URL. For this directory layout, use:

   ```text
   http://localhost/payap/se310/Website/PHP/Food%20CRUD/
   ```

The entry point redirects to `pages/food_list.php`. A newly imported database starts with an empty list.

## Usage

1. Click **Add Food**, enter a food name and a whole-number price, and click **Add**.
2. Click **Edit** beside a food, change its details, and click **Update**.
3. Click **Delete** beside a food and accept the confirmation to remove it permanently.

Successful add, update, and delete actions redirect back to the food list.

## Project structure

```text
.
├── index.php             # Redirects to the food list
├── foods_table.sql       # Foods table definition
├── config/
│   └── conn.php          # Database connection settings
├── actions/
│   ├── add.php           # Inserts a food
│   ├── get.php           # Fetches all foods or one food by ID
│   ├── update.php        # Updates a food
│   └── delete.php        # Deletes a food
├── pages/
│   ├── food_list.php     # Food table and action buttons
│   ├── add_page.php      # Add form
│   └── edit_page.php     # Edit form
└── icons/
    ├── pen.svg           # Edit icon
    └── bin.svg           # Delete icon
```

## Database schema

| Column | Type | Purpose |
| --- | --- | --- |
| `f_id` | `INT AUTO_INCREMENT PRIMARY KEY` | Unique food ID |
| `f_name` | `VARCHAR(50) NOT NULL` | Food name |
| `f_price` | `INT(50) NOT NULL` | Whole-number price |

`INT(50)` is the declaration in the supplied SQL file; it does not support fractional prices. No currency is specified by the application.

## Troubleshooting

- **Database connection fails:** Make sure MySQL is running, the `se310_quiz` database exists, and the credentials in `config/conn.php` are correct.
- **The `foods` table is missing:** Import `foods_table.sql` into the database selected in `config/conn.php`.
- **The page has no Bootstrap styling:** Check your internet connection and whether jsDelivr is accessible.
- **PHP source is displayed or the page does not run:** Access the project through the local web server rather than opening a PHP file directly.

## Current limitations

This is a local learning project. It has no authentication, uses SQL queries with interpolated IDs, renders food names without HTML escaping, and deletes records through GET requests without CSRF protection. Prepared statements, server-side validation, escaped output, and protected write actions should be added before public deployment.

## Credits

- Author: Setthawut Srichanklad
- UI styling: Bootstrap
- Quote template used on the food list: [MDBootstrap Quotes](https://mdbootstrap.com/docs/standard/extended/quotes/)
# Food-CRUD
