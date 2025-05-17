# Emergency Ambulance Hiring Portal

## 🩺 Project Overview
The **Emergency Ambulance Hiring Portal** is a web-based system developed using PHP and MySQL to provide quick and efficient ambulance booking services during emergencies. This platform connects users with available ambulances in their locality to ensure timely medical assistance.

## 🚀 Key Features
- User registration and secure login
- Booking ambulances with location and emergency details
- Admin dashboard to manage users, bookings, and ambulance availability
- Booking history and real-time status updates
- Contact and emergency support integration

## 🛠️ Technologies Used
- **Frontend:** HTML, CSS, Bootstrap
- **Backend:** PHP
- **Database:** MySQL
- **Local Server:** Laragon / XAMPP / WAMP

## ⚙️ Installation Guide

### Step 1: Clone the Repository
```bash
git clone https://github.com/abhibadadhe/eahp.git

Step 2: Import the Database
Open phpMyAdmin

Create a database named eahp

Import the eahp.sql file (if available)

Step 3: Configure the Database Connection
Update the config.php or db.php file (based on your structure):
$servername = "localhost";
$username = "root";
$password = "";
$database = "eahp";

Step 4: Start the Server
Place the project folder inside C:\laragon\www\ (or htdocs for XAMPP)
Start Apache and MySQL
Open your browser and visit:
http://localhost/eahp/

👤 User Roles
User: Can register, log in, book an ambulance, and check booking status.

Admin: Can view/manage users, ambulance listings, and all bookings.

🙋‍♂️ Author
Abhishek Badadhe
GitHub: github.com/abhibadadhe
