JANINE PERSONAL PORTFOLIO
=========================

This project is based on the visual style of the uploaded portfolio screenshot:
- Light blue gradient hero
- Large "Janine" heading
- Professional photo on the right
- Navigation: Home, About Me, Journey, Skills, Projects, Goals, Contacts
- Skills and project cards
- Responsive mobile navigation

FILES
-----
index.php       Main website page
style.css       Design and responsive layout
script.js       Mobile menu + animations + current year
config.php      MySQL connection
contact.php     Saves contact form messages into MySQL
db.sql          Creates the MySQL database and tables
assets/profile.png  Cropped profile image from the uploaded reference screenshot

HOW TO RUN WITH XAMPP
---------------------
1. Install/start XAMPP.
2. Start Apache and MySQL.
3. Copy the "janine_portfolio" folder into:
   C:\xampp\htdocs\
4. Open phpMyAdmin:
   http://localhost/phpmyadmin
5. Import db.sql, or open it in phpMyAdmin SQL and run it.
6. Open:
   http://localhost/janine_portfolio/

IMPORTANT
---------
- For a real project, do not use production database credentials in public code.
- GitHub Pages can host the HTML/CSS/JavaScript part, but it cannot execute PHP or MySQL.
- If you want the PHP + MySQL contact form online, you need a PHP/MySQL hosting service.
- Replace assets/profile.png with your preferred original profile photo if desired.

HTML / CSS / JAVASCRIPT / PHP / MYSQL
-------------------------------------
HTML: page structure
CSS: design, layout, responsive behavior
JavaScript: mobile navigation, dropdown behavior, scroll animation
PHP: dynamic page and contact form processing
MySQL: stores contact messages and project records
