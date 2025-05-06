# PHP Sign Up & Login System

This is a simple user registration and login system built using PHP and MySQL.

## 💡 Features

- User registration with form validation
- Password confirmation check
- Check if username or email already exists
- Basic login functionality
- MySQL database integration

## 📁 Files

- `sign_up.php`: Handles user registration.
- `log_in.php`: Handles user login.
- `connect.php`: Connects to the MySQL database.
- `style.css`: Simple styles for the user interface.

## ⚙️ Database Setup

1. Open `phpMyAdmin` or any database tool.
2. Create a new database (e.g. `login_system`).
3. Run the following SQL command:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    email VARCHAR(100) UNIQUE,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    birthday DATE,
    password VARCHAR(255)
);
