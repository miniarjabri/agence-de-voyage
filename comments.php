<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espace_commentaire";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from form submission
if (isset($_POST["nom"])) {
    $nom = $_POST["nom"];
} else {
    $nom = "";
}
if (isset($_POST["nombre_etoile"])) {
    $nombre_etoile = $_POST["nombre_etoile"];
} else {
    $nombre_etoile = "";
}
if (isset($_POST["commentaire"])) {
    $commentaire = $_POST["commentaire"];
} else {
    $commentaire = "";
}
if (isset($_POST["profile_picture"])) {
    $profile_picture = $_POST["profile_picture"];
} else {
    $profile_picture = "";
}
// Insert user information into the database
$sql = "INSERT INTO comments (nom, nombre_etoile, commentaire,profile_picture)
VALUES ('$nom', '$nombre_etoile', '$commentaire','$profile_picture')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
