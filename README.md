# Magebit_Test_Adrija_Ikauniece
Web Developer Test

To open this project you need to install XAMPP and create folder Magebit_Test_Adrija_Ikauniece in xampp/htdocs folder 
so that you can use localhost to test this application.

Then you need to add these files to Magebit_Test_Adrija_Ikauniece folder.

Start Mysql and Apache server.

Create database called emails_db in localhost/phpmyadmin and write this sql statement to create table.

CREATE TABLE emails ( <br>
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT, <br>
    name TEXT NOT NULL UNIQUE, <br>
    provider TEXT NOT NULL, <br>
    date DATE NOT NULL <br>
);

To open subscribe page run Magebit_Test_Adrija_Ikauniece/index.php in localhost.

To view data from database run Magebit_Test_Adrija_Ikauniece/assets/db/index.php in localhost.
