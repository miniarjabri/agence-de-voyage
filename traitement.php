<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "account";

  // Connexion à la base de données
  // Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=account;charset=utf8', 'root', '');


  // Récupération des données du formulaire
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $telephone = $_POST['prefixe'].$_POST['telephone'];
  $nombre_adultes = $_POST['nombre_adultes'];
  $nombre_enfants = $_POST['nombre_enfants'];
  
  // Préparation de la requête d'insertion
  $req = $bdd->prepare('INSERT INTO forum(nom, email, telephone, nombre_adultes, nombre_enfants) VALUES(:nom, :email, :telephone, :nombre_adultes, :nombre_enfants)');

  // Exécution de la requête avec les données du formulaire
  $req->execute(array(
    'nom' => $nom,
    'email' => $email,
    'telephone' => $telephone,
    'nombre_adultes' => $nombre_adultes,
    'nombre_enfants' => $nombre_enfants
  ));

  // Redirection vers la page de confirmation
  header('Location: confirmation.php');
?>
