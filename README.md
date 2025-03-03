📌 Task Management System
A simple Task Management System built with HTML, CSS, Bootstrap, PHP, and MySQL. This system allows users to add, view, update, and delete tasks, categorized into three statuses: Pending, In Progress, and Completed.


📂 Project Features
✅ CRUD Operations – Create, Read, Update, and Delete tasks.
✅ Status Management – Tasks can be marked as Pending, In Progress, or Completed.
✅ Responsive UI – Styled using Bootstrap for mobile-friendliness.
✅ MySQL Database Integration – Stores and retrieves tasks dynamically.
✅ Color-coded Status – Different colors for task statuses:

🟠 Pending – Orange
🔵 In Progress – Blue
✅ Completed – Green
🛠️ Technologies Used
Frontend: HTML, CSS, Bootstrap
Backend: PHP
Database: MySQL
Version Control: Git & GitHub
⚙️ Installation Guide
1️⃣ Clone the Repository
sh
Copy
Edit
git clone https://github.com/your-username/task-management-system.git
cd task-management-system
2️⃣ Setup the Database
Open phpMyAdmin and create a new database:
sql
Copy
Edit
CREATE DATABASE task_management;
Switch to the new database and create the tasks table:
sql
Copy
Edit
CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_title VARCHAR(255) NOT NULL,
    task_description TEXT,
    status VARCHAR(255) NOT NULL DEFAULT 'Pending',
    due_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
3️⃣ Configure Database Connection
Open db.php and update your database credentials:
php
Copy
Edit
<?php
$conn = new mysqli("localhost", "root", "", "task_management");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
4️⃣ Run the Project
Start your local server using XAMPP or WAMP.
Place the project in the htdocs folder (C:\xampp\htdocs\task-management).
Open your browser and visit:
arduino
Copy
Edit
http://localhost/task-management/
📌 Folder Structure
perl
Copy
Edit
📁 task-management-system/
│── 📄 index.php          # Main dashboard
│── 📄 add_task.php       # Insert new tasks
│── 📄 update_task.php    # Update task status
│── 📄 delete_task.php    # Delete tasks
│── 📄 db.php             # Database connection
│── 📄 styles.css         # Custom styling
│── 📄 README.md          # Project documentation
└── 📁 assets/            # Images & other resources
💡 Future Enhancements
🔹 User Authentication – Login system to manage personal tasks.
🔹 Task Prioritization – High, Medium, and Low priority levels.
🔹 Task Filtering & Search – Easy navigation through tasks.

🙌 Contributing
💡 Contributions are welcome! Feel free to fork this repository and submit a pull request.
