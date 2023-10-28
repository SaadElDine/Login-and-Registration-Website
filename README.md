# Registration and Login System

## Overview
This project is a simple web-based registration and login system built using HTML, JavaScript, and PHP. It allows users to register for an account and log in using their email and password. The system checks for email uniqueness during registration and verifies user passwords during login.

![image](https://github.com/SaadElDine/Login-and-Registration-Website/assets/113860522/dce9b9be-28b9-403a-96a5-2035690b54b8)

![image](https://github.com/SaadElDine/Login-and-Registration-Website/assets/113860522/ab60eeaf-dbfd-492d-aa79-7b76d8e58364)



## Features
1. **User Registration:**
   - Users can create an account by providing a username, email, and password.
   - Passwords are securely hashed before storage in the database.
   - The system checks for the uniqueness of the email address.

2. **User Login:**
   - Registered users can log in using their email and password.
   - Passwords are verified by comparing the hashed password from the database.

3. **Password Visibility Toggle:**
   - Users can toggle the visibility of their password using the "Show Password" checkbox.

4. **Username Suggestions:**
   - As users type their username during registration, a list of suggestions is displayed based on existing usernames using Ajax.

5. **Stylish User Interface:**
   - The registration and login forms have a modern and responsive design.
   - Background images and styling make the user experience visually appealing (CSS).

## Usage
### Prerequisites
- You need a web server with PHP support (e.g., Apache) to run this project locally.
- Set up a MySQL database with the name "users" and create a table named "users" with fields: `Username`, `Password`, and `Email`.

### Installation
1. Clone this repository to your local environment.

2. Place the project files in your web server's document root directory (e.g., `htdocs` for XAMPP).

3. Import the SQL script provided in the "database.sql" file to set up the database.

4. Ensure that your web server and database server are running.

5. Access the registration form by opening `Home.html` in a web browser.
   - Registration: http://localhost/your-project-folder/Home.html

6. Access the login form by opening `login.html` in a web browser.
   - Login: http://localhost/your-project-folder/login.html
