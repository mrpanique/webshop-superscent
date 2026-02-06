# Superscent - Arabian Perfume Web Store (Legacy Project)

⚠️ **DISCLAIMER**
> This project was developed in 2023-2024 as my high school vocational thesis. It represents my early steps in web development.
>
> Please note that this is a "legacy codebase". It contains questionable architectural decisions and implementation shortcuts that reflect my knowledge level at the time.
>
> **Today, I would of course implement most things differently**. 
>
> I decided to make this repository public to demonstrate my learning curve.


**Superscent** is an e-commerce web-application prototype designed to sell (Middle Eastern) perfume samples. The project focuses on the PHP backend logic, database connection and a stylish & responsive frontend.

## 🚀 Features & Scope

### Implemented Functionalities
* **User Authentication:** Registration and Login system with basic session handling and essential security measures.
* **Product Discovery:** Client-side JavaScript implementation to filter and search products
* **Shopping Cart Logic:**  Managing cart items before checkout is implemented on the server-side with PHP sessions.
* **Order Processing (Backend):** PHP logic handles the checkout process, capturing cart data and saving orders into the MySQL database.
* **Contact & Inquiry:** Interface for sending messages, which are stored and accessible via the Admin Dashboard.
* **Admin Dashboard:** A restricted interface allowing administrators to review submitted orders and read customer inquiries.
* **Frontend Design:** Responsive UI built with Bootstrap and some basic custom CSS.


### Limitations
* **Static Data:** Products are currently hardcoded in HTML for demonstration purposes, rather than being dynamically served from a database.
* **Cart State Persistence:** Quantity adjustments in the shopping cart are currently handled client-side and they don't persist across page reloads (resets to default).
* **Missing Features:** The project was submitted before implementing a **"My Orders"** history page for users and **Pagination** ("Load More") for the product list, which would be essential for scalability.
* **Security:** The security measures are (almost, but) not production-ready by modern standards.

## 🛠️ Tech Stack

* **Language:** Vanilla PHP & JavaScript
* **Structure:** Custom MVC implementation
* **Frontend:** HTML5, CSS3, Bootstrap framework
* **Database:** MySQL (User management focus)


## 🔧 Installation & Setup

### 1. Environment Setup
* Ensure you have a running web server with **Apache** and **MySQL**.
* Clone or download the repository into your server's public root directory (e.g., `htdocs`, `www`, or `public_html`).

### 2. Database Configuration
* Access your database management tool (e.g., phpMyAdmin or command line).
* Create a new database.
* Import the provided SQL dump file (`superscent/db/superscent_db.sql`) to initialize the table structure and sample data.
* *Note: Ensure your database connection settings (host, user, password) match your local environment.*

### 3. Optional: Custom 404 Error Handling
* The project includes a custom "Page Not Found" design.
* To enable this (instead of the server's default error page), move the provided `.htaccess` file from the project folder to the server's root directory.

### 4. Launch
* Open your browser and navigate to the project URL (e.g., `http://localhost/superscent`).
