# 💼 Jobboard: Job Seeking Platform

**Jobboard** is a PHP-based full-stack web application built to bridge the gap between job seekers and employers. The platform supports **user registrations**, **job applications**, **profile management**, and a robust **admin panel** for employers to post and manage job listings.

<p align="center">
  <img src="https://img.shields.io/badge/Built%20With-PHP-blue?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/Database-MySQL-yellow?style=for-the-badge&logo=mysql&logoColor=black">
  <img src="https://img.shields.io/badge/Styling-HTML5%2C%20SCSS%2C%20CSS3-orange?style=for-the-badge&logo=css3&logoColor=white">
  <img src="https://img.shields.io/badge/Version%20Control-Git-black?style=for-the-badge&logo=git&logoColor=white">
</p>

---

## 📌 Features

- 🔐 **User Authentication**: Secure login & registration for both job seekers and employers.
- 📃 **Job Listings**: Explore job postings with detailed info.
- 📤 **Job Application System**: Apply directly through the platform.
- 🧑‍💼 **Admin Panel**: Employers can post/manage jobs & review applications.
- 🔍 **Search Jobs**: Filter based on keywords or categories.
- 💬 **Contact Page**: Direct user support form.
- 📱 **Fully Responsive**: Works flawlessly on desktop, tablet, and mobile.

---

## 🧰 Tech Stack

| Layer       | Tech Used                  |
|-------------|----------------------------|
| Frontend    | HTML5, SCSS, CSS3, JavaScript |
| Backend     | PHP                         |
| Database    | MySQL                       |
| Versioning  | Git                         |

---



| Page                  | Preview                             |
| --------------------- | ----------------------------------- |
| 🏠 Home Page          | ![Home](image/homepage.png)         |
| ℹ️ About Page         | ![About](image/about.png)           |
| 📞 Contact Page       | ![Contact](image/contact.png)       |
| 🔎 Job Search Page    | ![Search](image/search.png)         |
| 🧾 Application Form   | ![Apply](image/apply.png)           |
| 🧑‍💼 Admin Dashboard.  |[Admin](imageadmin-dashboard.png)


---

## 📁 Project Structure

<details>
<summary>Click to view folder layout</summary>

```bash
Jobboard-Job-Seeking-Platform/
├── admin-panel/       # Admin dashboard and tools
├── auth/              # Login, Register, Logout functionality
├── categories/        # Job categories management
├── config/            # Database connection and settings
├── css/               # Compiled CSS
├── fonts/             # Custom fonts
├── general/           # Utility and helper scripts
├── images/            # Images and assets
├── includes/          # Reusable UI components (e.g. header.php)
├── jobs/              # Job-related logic and views
├── js/                # Frontend JS
├── scss/              # Styling sources
├── users/             # User profile handling
├── 404.php            # Custom error page
├── about.php          # About Us page
├── contact.php        # Contact form
├── index.php          # Landing/Home page
├── search.php         # Search result page
└── README.md          # 📘 This file

---

⚙️ Getting Started

✅ Prerequisites

PHP 7.x or above

MySQL Server

Apache/Nginx Web Server (XAMPP/WAMP recommended)

Git (for cloning)


---

🚦 Installation Guide

Clone the Repository

git clone https://github.com/bhaktofmahakal/Jobboard-Job-Seeking-Platform.git
cd Jobboard-Job-Seeking-Platform

Set Up the Database

Create a new MySQL database named jobboard

Import the provided .sql file (if available) located in the config/ folder

Configure DB Credentials

Open the file at: config/config.php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'jobboard');
Run Locally

Place the project folder in the htdocs/ directory of XAMPP or root of your web server

Start Apache & MySQL

Visit in browser:

http://localhost/Jobboard-Job-Seeking-Platform/



---

🤝 Contributing

We love contributions! Follow the steps below:

Fork the repository

Create your feature branch


git checkout -b feature/YourFeature

Commit your changes


git commit -m "Add YourFeature"

Push to your branch

git push origin feature/YourFeature

Open a Pull Request with details and screenshots!


---

📄 License


This project is licensed under the MIT License.
Feel free to use, modify, and distribute.


---
📬 Contact

Developer: Utsav Mishra
📧 Email: utsavmishraa005@gmail.com
🌐 GitHub: github.com/bhaktofmahakal
🔗 LinkedIn: linkedin.com/in/utsav-mishra1