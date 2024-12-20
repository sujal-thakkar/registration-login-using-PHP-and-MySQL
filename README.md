# Secure Registration and Login System
## using PHP and MySQL

*A simple yet robust registration and login system built using PHP and MySQL. This project demonstrates a basic implementation of user authentication, password hashing, and session management.*

### Features

* **User registration** with validation (username, email, password)
* Password hashing using PHP's built-in `password_hash()` function
* **Secure login system** with session management
* Basic error handling and feedback
* MySQL database integration for storing user credentials

### Technologies Used

* PHP 7.x
* MySQL 8.x
* HTML5
* CSS3
* Bootstrap (optional)

### Getting Started

1. Clone this repository to your local machine
2. Create a MySQL database and import the provided `database.sql` file
3. Update the `config.php` file with your database credentials
4. Run the application on your local server (e.g., XAMPP, MAMP, or Apache)

### Security Considerations

* This project uses **prepared statements** to prevent SQL injection attacks
* Passwords are hashed using PHP's `password_hash()` function
* Sessions are used to store user data securely

### Contributing

Feel free to contribute to this project by:

* Reporting bugs or security vulnerabilities
* Suggesting new features or improvements
* Submitting pull requests with your changes

### License

This project is licensed under the MIT License. See [LICENSE](LICENSE) for more information.

---

> **Disclaimer**: This project is for educational purposes only. Use in production environments requires additional security measures and testing.

---

*Made with ❤️ by Sujal-Thakkar*