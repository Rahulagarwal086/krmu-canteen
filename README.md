# 🍽️ Canteen Management System

This project is a **Canteen Management System** developed using **PHP**, **MySQL**, and **XAMPP Server**.  
It is also deployed live on **InfinityFree** for demonstration purposes.

---

## 🚀 Features

- User-friendly Interface
- Manage Food Items (Add, Edit, Delete)
- Manage Orders
- Generate Reports
- Secure Login System (Admin and User)
- Real-time Order Status
- Responsive Design (Mobile Friendly)

---

## 🛠️ Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server**: XAMPP (Local Development)
- **Hosting**: InfinityFree

---

## 📦 Installation (Local Setup)

1. **Clone this Repository**
   ```bash
   git clone https://github.com/Rahulagarwal086/krmu-canteen.git
   ```

2. **Setup XAMPP Server**
   - Download and install [XAMPP](https://www.apachefriends.org/index.html).
   - Open XAMPP Control Panel and start **Apache** and **MySQL**.

3. **Import the Database**
   - Open [phpMyAdmin](http://localhost/phpmyadmin/).
   - Create a new database (e.g., `canteen_db`).
   - Import the provided `foodcave.sql` file into your database.

4. **Configure Database Connection**
   - Open the project folder.
   - Go to `conn_db.php` or similar file.
   - Update the database credentials:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "canteen_db";
     ```

5. **Run the Project**
   - Place the project folder inside `htdocs` (e.g., `C:/xampp/htdocs/canteen-management-system/`).
   - Visit `http://localhost/canteen-management-system/` on your browser.

---

## 📁 Project Structure

```
canteen-management-system/
│
├── admin/
│   └── admin dashboard files
├── css/
│   └── dashboard css files
├── img/
│   └── dashboard images
├── js/
│    └── js files
├── index.php
├── logout.php
├── other user dashboard files
└── README.md
```

---

## 🧑‍💻 Admin Login

- **Username**: Admin
- **Password**: krmu@canteen
