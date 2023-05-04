<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "account";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Récupération des données du formulaire
$nom = $_POST['nom'] ?? '';
$prenom = $_POST['prenom'] ?? '';
$email = $_POST['email'] ?? '';
$telephone = $_POST['telephone'] ?? '';
$prefixe = $_POST['prefixe'] ?? '';
$nombre_adultes = $_POST['nombre_adultes'] ?? 0;
$nombre_enfants = $_POST['nombre_enfants'] ?? 0;

// Préparation de la requête d'insertion
$req = $conn->prepare('INSERT INTO forum(nom, prenom, email, prefixe, telephone, nombre_adultes, nombre_enfants) VALUES(?, ?, ?, ?, ?, ?, ?)');

// Exécution de la requête avec les données du formulaire
$req->bind_param('ssssiii', $nom, $prenom, $email, $prefixe, $telephone, $nombre_adultes, $nombre_enfants);
$req->execute();

// Redirection vers la page de confirmation
header('Location: confirmation.php');
?>

