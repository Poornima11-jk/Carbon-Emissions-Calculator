# Carbon Emissions Calculator

## Project Overview
The Carbon Emissions Calculator is a web-based application developed using PHP and MySQL. It helps users calculate and monitor their carbon emissions based on transportation, electricity consumption, and fuel usage.

## Technologies Used
- HTML
- CSS
- PHP
- MySQL
- Bootstrap
- Chart.js
- XAMPP

## Features
- User Registration and Login
- Carbon Emission Calculation
- Personal Emission Dashboard
- Emission History Tracking
- Graphical Representation of Emissions
- Tips to Reduce Carbon Footprint

## Emission Calculation
The application calculates emissions using the following formula:

- Transportation: Distance × 0.21
- Electricity: Consumption × 0.5
- Fuel: Consumption × 2.3

Total emissions are calculated by adding the three values.

## Installation and Setup

1. Install XAMPP.
2. Copy the project folder into the `htdocs` directory.
3. Start Apache and MySQL from the XAMPP Control Panel.
4. Open phpMyAdmin.
5. Create a database named `carbon_emission_db`.
6. Import the SQL file from the `database` folder.
7. Check the database connection settings in `db.php`.
8. Open the application in your browser:

   `http://localhost/Carbon-Emissions-Calculator/`

## Project Structure
- `index.html` – Home page
- `login.php` – User login
- `register.php` – User registration
- `dashboard.php` – User dashboard
- `calculate.php` – Emission calculation
- `history.php` – Emission history
- `tips.php` – Emission reduction tips
- `logout.php` – Logout
- `db.php` – Database connection
- `style.css` – Styling
- `database/` – SQL database export

## Future Enhancements
- Downloadable emission reports
- Monthly emission comparison
- More detailed environmental recommendations

## Author
Developed as an academic project.
