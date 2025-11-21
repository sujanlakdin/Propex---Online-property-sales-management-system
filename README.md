# Propex — PHP/MySQL Property Listing Demo

Short description

A simple PHP/MySQL property listings demo with user registration, property management, feedback, and manager login.

Requirements

- PHP (XAMPP recommended on Windows)
- MySQL
- A web browser

Quick setup

1. Install XAMPP (https://www.apachefriends.org/) and start `Apache` and `MySQL`.
2. Copy the project folder into your web root, e.g. `C:\xampp\htdocs\propex`.
3. Create the database `propexnew` and import the schema (see Notes). You can use `phpMyAdmin` at `http://localhost/phpmyadmin`.
4. Ensure database credentials in `connection.php` match your MySQL user (default XAMPP: `root` / empty password).
5. Open the app in your browser: `http://localhost/propex/Home.php` (or `Registerindex.php`, `loginindex.php`).

Database notes

The project expects a MySQL database named `propexnew`. Tables used by the code include:
- `registerusers` (gmail, name, userPassword, repeatPassword)
- `managers` (email, password)
- `logusers` (username, password)
- `property` (id, email, username, password, details, image)
- `feedback` (id, email, username, rate, comment)

Example SQL (create DB + basic tables):

```sql
CREATE DATABASE IF NOT EXISTS propexnew;
USE propexnew;

CREATE TABLE IF NOT EXISTS registerusers (
  gmail VARCHAR(255) NOT NULL PRIMARY KEY,
  name VARCHAR(150),
  userPassword VARCHAR(255),
  repeatPassword VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS managers (
  email VARCHAR(255) NOT NULL PRIMARY KEY,
  password VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS logusers (
  username VARCHAR(150),
  password VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS property (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255),
  username VARCHAR(150),
  password VARCHAR(255),
  details TEXT,
  image VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255),
  username VARCHAR(150),
  rate INT,
  comment TEXT
);
```

Tips & troubleshooting

- Avoid parentheses/spaces in the project folder name (use `propex` rather than `Propex-test-02-main (1)`).
- Enable `display_errors` in `php.ini` for development to see PHP errors.
- Ensure `extension=mysqli` is enabled in PHP.

License

Add your preferred license (e.g., MIT) if you plan to publish the repo.

---

If you want, I can also:
- Add the SQL file (`propexnew.sql`) to the repo.
- Commit a `.gitignore` and the `README.md` to the project for you.
