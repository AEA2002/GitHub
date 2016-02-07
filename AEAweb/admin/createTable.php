<?php
 // sql to create table
 $mysql = new mysqli("localhost", "root", "root", "aeaDB", 8889);
 
 $sql = "INSERT INTO attendees (firstname, lastname, email, phonenumber)
VALUES ('John', 'Dome', 'john@example.com', '917-123-4567'),
 ('Maria', 'Moe', 'marie@example.com', '212-123-7654'), ('Julie', 'Doyle', 'julie@example.com', '213-124-4567')";

/* $sql = "CREATE TABLE attendees (
id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
phonenumber VARCHAR(14)
)";

if ($mysql->query($sql) === TRUE) {
    echo "Table attendees created successfully";
} else {
    echo "Error creating table: " . $mysql->error;
}*/


if ($mysql->query($sql) === TRUE) {
    echo ["firstname"]. "entered successfully";
} else {
    echo "Error entering data: " . $mysql->error;
}

 $mysql->close();
 ?> 
