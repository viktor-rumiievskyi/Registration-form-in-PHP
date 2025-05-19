
# 🧾 Registration Form in PHP

A simple user registration form built with **PHP** and **MySQL**, styled using **HTML/CSS**. This project demonstrates how to capture user input and store it securely in a database.

## 🔍 Features

- 📝 User registration form
- ✅ Input validation (required fields, email format, etc.)
- 🔒 Password hashing for security
- 🗄️ MySQL database integration
- 📄 Clean and responsive form layout

## 💡 Technologies Used

- PHP
- MySQL (or MariaDB)
- HTML5
- CSS3

## 🚀 Getting Started

### 1. Clone the repository

```bash
git clone https://github.com/viktor-rumiievskyi/Registration-form-in-PHP.git
cd Registration-form-in-PHP
```

### 2. Set up the Database

1. Open your MySQL/MariaDB client (e.g., phpMyAdmin or command line).
2. Create a new database:
   ```sql
   CREATE DATABASE registration;
   ```
3. Import the provided SQL script (if available) or manually create a `users` table:
   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       username VARCHAR(50) NOT NULL,
       email VARCHAR(100) NOT NULL,
       password VARCHAR(255) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

### 3. Configure database connection

Edit `db.php` or the equivalent file and add your MySQL credentials:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "registration";
```

### 4. Run the App

Start your local server (e.g., using XAMPP, MAMP, or built-in PHP server):

```bash
php -S localhost:8000
```

Then open [http://localhost:8000](http://localhost:8000) in your browser.

## 📂 Project Structure

```
Registration-form-in-PHP/
│
├── index.html        # Registration form UI
├── register.php      # Handles form submission and DB logic
├── db.php            # Database connection script
├── style.css         # Basic styling
└── README.md         # Project documentation
```



## 👨‍💻 Author

**Viktor Rumiievskyi**  
- GitHub: [@viktor-rumiievskyi](https://github.com/viktor-rumiievskyi)

## 📄 License

This project is licensed under the MIT License.

---

![GitHub repo size](https://img.shields.io/github/repo-size/viktor-rumiievskyi/Registration-form-in-PHP)
![GitHub last commit](https://img.shields.io/github/last-commit/viktor-rumiievskyi/Registration-form-in-PHP)
![GitHub license](https://img.shields.io/github/license/viktor-rumiievskyi/Registration-form-in-PHP)
