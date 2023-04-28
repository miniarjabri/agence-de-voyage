<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "account";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from form submission
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$date_de_naissance = $_POST["date_de_naissance"];
$email = $_POST["email"];
$mot_de_passe = $_POST["mot_de_passe"];

// Hash the password before storing it in the database
$hashed_password = password_hash($mot_de_passe, PASSWORD_DEFAULT);

// Insert user information into the database
$sql = "INSERT INTO info (nom, prenom, date_de_naissance, email, mot_de_passe)
VALUES ('$nom', '$prenom', '$date_de_naissance', '$email', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
