# PHP MySQL Database Website

## Live Website

https://maaliaweb.42web.io

## Project Description

A simple web application that uses HTML, CSS, JavaScript, PHP, and MySQL.

The website allows the user to enter a name and age, save the information in a MySQL database, display the saved data in a table, and change the user's status using a Toggle button without refreshing the page.

## Technologies Used

- HTML
- CSS
- JavaScript
- PHP
- MySQL
- InfinityFree
- GitHub

## Main Features

1. Name and age input form.
2. Save user information to MySQL.
3. Display saved information in a table.
4. Toggle the user's status between 0 and 1.
5. Update the status directly without refreshing the page.
6. PHP handles the connection and database operations.
7. JavaScript handles the dynamic Toggle update.

## Database

A MySQL database was created using InfinityFree.

The database contains a `users` table with the following columns:

| Column | Description |
|---|---|
| id | Unique user ID |
| name | User name |
| age | User age |
| status | User status, 0 or 1 |

## How It Works

### 1. Add User

The user enters a name and age and clicks Submit.

The information is sent to the PHP backend and stored in the MySQL `users` table.

### 2. Display Data

The saved users are retrieved from the database and displayed in a table.

### 3. Toggle Status

Each user has a Toggle button.

When the button is clicked, JavaScript sends a request to PHP to update the user's status from:

`0 → 1`

or:

`1 → 0`

The table is updated immediately without refreshing the page.

## Files

- `index.php` - Main website page and database data display.
- `db.php` - Connects PHP to the MySQL database.
- `add_user.php` - Adds new users to the database.
- `toggle.php` - Changes the user's status.
- `script.js` - Handles the dynamic Toggle update.
- `style.css` - Website styling.

## Deployment

The website was deployed using InfinityFree.

The project files were uploaded to the `htdocs` directory and connected to the MySQL database.

## Testing

The website was tested by:

1. Adding a name and age.
2. Checking that the data appeared in the table.
3. Clicking the Toggle button.
4. Confirming that the status changed from 0 to 1 and from 1 to 0.
5. Confirming that the status changed without refreshing the page.
