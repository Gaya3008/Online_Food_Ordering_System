---

# 🍽️ Online Food Ordering System

A dynamic web-based **Online Food Ordering System** built using **PHP** and **MySQL**. This system allows customers to browse food items, place orders, and track order status, while the admin can manage menu items, view orders, and handle deliveries.

---

## 🔧 Tech Stack

* **Frontend**: HTML, CSS, Bootstrap
* **Backend**: PHP
* **Database**: MySQL
* **Web Server**: Apache (XAMPP)

---

## 🌟 Features

* 🍔 Browse menu by category
* 🛒 Add items to cart and place orders
* 🔐 User registration & login
* 📦 View order history and status
* 🧑‍💼 Admin dashboard to manage:

  * Menu items
  * Orders
  * Customers
  * Reports

---

## 🛠️ Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/Gaya3008/Online_Food_Ordering_System.git
cd Online_Food_Ordering_System
```

### 2. Import the Database

* Open [phpMyAdmin](http://localhost/phpmyadmin)
* Create a new database (e.g., `food_ordering`)
* Import the `database.sql` file from the `/database` folder

### 3. Configure Database Connection

* Open `/config/db.php`
* Update your DB credentials:

  ```php
  $conn = mysqli_connect('localhost', 'root', '', 'food_ordering');
  ```

### 4. Start the Application

* Open terminal/cmd:

  ```bash
  php -S localhost:8000
  ```
* Visit: [http://localhost:8000](http://localhost:8000)

---

## 📁 Folder Structure

```
Online_Food_Ordering_System/
├── config/
│   └── db.php
├── database/
│   └── database.sql
├── css/
├── js/
├── admin/
│   └── dashboard.php
├── customer/
│   └── index.php
├── includes/
│   └── header.php
├── index.php
└── README.md
```

---

## 🤝 Contributing

Contributions are welcome!
If you'd like to improve this project:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/your-feature`)
3. Commit your changes (`git commit -m 'Add some feature'`)
4. Push to the branch (`git push origin feature/your-feature`)
5. Open a pull request

---

## ⚖️ License

This project is licensed under the [MIT License](LICENSE).

---

## 🙋‍♀️ Contact

**Gayathri Devi Mudapaka**
📧 [gayathridevi.mudapaka@gmail.com](mailto:gayathridevi.mudapaka@gmail.com)
🔗 [LinkedIn](https://www.linkedin.com/in/gayathridevi/)

---



