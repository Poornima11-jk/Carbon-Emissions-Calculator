# 🌱 Carbon Emissions Calculator

A web-based application developed using **PHP, MySQL, HTML, CSS, Bootstrap, and Chart.js** to calculate, monitor, and manage individual carbon emissions.

## 📌 Project Overview

The Carbon Emissions Calculator helps users estimate their carbon footprint based on daily transportation, electricity consumption, and fuel usage.

The application provides a user-friendly dashboard where users can calculate their emissions, view previous records, monitor their environmental impact, and receive suggestions to reduce their carbon footprint.

## 🎯 Project Objectives

- To calculate individual carbon emissions.
- To monitor carbon footprint from different daily activities.
- To store emission records securely in a MySQL database.
- To provide a graphical representation of carbon emissions.
- To encourage environmentally friendly habits.
- To help users understand and reduce their environmental impact.

## 🛠️ Technologies Used

| Technology | Purpose |
|---|---|
| HTML | Web page structure |
| CSS | Styling and design |
| Bootstrap | Responsive user interface |
| PHP | Backend development |
| MySQL | Database management |
| Chart.js | Data visualization |
| XAMPP | Local development environment |

## ✨ Key Features

### 1. User Registration
- New users can create an account.
- User details are stored in the database.
- Passwords are hashed before storage.

### 2. User Login
- Registered users can log in.
- User authentication is performed using PHP.

### 3. Carbon Emission Calculator
- Users can enter transportation details.
- Users can enter electricity consumption.
- Users can enter fuel usage.
- The application calculates estimated carbon emissions.

### 4. Interactive Dashboard
- Displays calculated carbon emissions.
- Provides an overview of user emission records.
- Presents emission information visually.

### 5. Emission History
- Stores previous emission calculations.
- Allows users to view their historical records.
- Displays emission trends using charts.

### 6. Environmental Tips
- Provides suggestions to reduce carbon emissions.
- Encourages sustainable lifestyle practices.

### 7. Logout
- Allows users to securely end their sessions.

## 🧮 Carbon Emission Calculation

The application uses the following calculation formula:

**Total Carbon Emission = Transportation Emission + Electricity Emission + Fuel Emission**

The implemented calculation is:

- Transportation Emission = Transportation Value × 0.21
- Electricity Emission = Electricity Value × 0.5
- Fuel Emission = Fuel Value × 2.3

**Note:** These are the emission factors implemented in this academic project. Actual emission factors depend on the units, fuel type, location, and applicable standards.

## 🗄️ Database Details

**Database Name:** `carbon_emission_db`

The application uses MySQL to store user and emission information.

Main database tables:

- `users` – Stores registered user information.
- `emissions` – Stores calculated carbon emission records.

## 📂 Project Structure

```text
Carbon-Emissions-Calculator/
│
├── index.html
├── login.php
├── register.php
├── dashboard.php
├── calculate.php
├── history.php
├── logout.php
├── db.php
├── tips.php
├── style.css
│
├── database/
│   └── carbon_emission_db.sql
│
├── screenshots/
│   ├── home.png
│   ├── login.png
│   ├── register.png
│   ├── dashboard.png
│   └── history.png
│
└── README.md
```

## ⚙️ Installation and Setup

Follow these steps to run the project on your local computer.

### Step 1: Install XAMPP

Download and install XAMPP.

Start the following services from the XAMPP Control Panel:

- Apache
- MySQL

### Step 2: Download the Project

Clone the GitHub repository:

```bash
git clone https://github.com/YOUR-USERNAME/Carbon-Emissions-Calculator.git
```

Alternatively, download the repository as a ZIP file and extract it.

### Step 3: Move the Project Folder

Copy the project folder into the XAMPP `htdocs` directory.

Example:

```text
C:\xampp\htdocs\Carbon-Emissions-Calculator
```

### Step 4: Create the Database

1. Open your browser.
2. Visit `http://localhost/phpmyadmin`.
3. Create a database named `carbon_emission_db`.
4. Select the newly created database.
5. Click the Import option.
6. Choose `carbon_emission_db.sql` from the project's `database` folder.
7. Click Import.

### Step 5: Configure Database Connection

Open `db.php` and verify the database connection settings.

Example local XAMPP configuration:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "carbon_emission_db";
```

Update these values if your MySQL configuration is different.

### Step 6: Run the Application

Open your browser and visit:

```text
http://localhost/Carbon-Emissions-Calculator/index.html
```

The application should now open locally.

## 📸 Screenshots

Add your actual application screenshots in the `screenshots` folder and use the following section.

### Home Page

![Home Page](screenshots/home.png)

### Login Page

![Login Page](screenshots/login.png)

### Registration Page

![Registration Page](screenshots/register.png)

### Dashboard

![Dashboard](screenshots/dashboard.png)

### Emission History

![Emission History](screenshots/history.png)

## 🔐 Security Considerations

- User passwords are stored using password hashing.
- User authentication is managed through PHP sessions.
- Database credentials should be configured securely.
- Do not upload real user information or private credentials to a public repository.
- Use test data when sharing the SQL database export publicly.

## 🚀 Future Enhancements

- Generate downloadable carbon emission reports.
- Add monthly and yearly emission comparisons.
- Provide personalized recommendations.
- Add more emission categories.
- Improve dashboard analytics and visualization.
- Deploy the application to a public hosting platform.

## 🎓 Project Information

**Project Name:** Carbon Emissions Calculator

**Project Type:** Web Development / DBMS Project

**Backend:** PHP

**Database:** MySQL

**Frontend:** HTML, CSS, Bootstrap

**Data Visualization:** Chart.js

## 👩‍💻 Author

Developed as an academic project to promote carbon footprint awareness and environmental sustainability.

---

⭐ If you find this project useful, consider giving the repository a star!
