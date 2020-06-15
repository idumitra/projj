<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moviesdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Users (

  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `fname` varchar(80) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `role` varchar(80))";

$sql2 = "CREATE TABLE Movies (

  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `title` varchar(80) NOT NULL,
  `description` varchar(80) NOT NULL,
  `producer` varchar(80) NOT NULL,
  `review` varchar(80) NOT NULL,
  `comments` varchar(80) NOT NULL,
  `rating` varchar(80))";   


if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($sql2) === TRUE) {
    echo "Table Movies created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>