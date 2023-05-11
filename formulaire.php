<?php
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
// Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "" ;
        $dbname = "account";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get user input from form submission
        $nom = $_POST['nom'] ;
        $prenom = $_POST['prenom'] ;
        $email = $_POST['email'] ;
        $telephone = $_POST['telephone'] ;
        $prefixe = $_POST['prefixe'] ;
        $nombre_adultes = $_POST['nombre_adultes'] ;
        $nombre_enfants = $_POST['nombre_enfants'] ;

        // Insert user information into the database
        $stmt = $conn->prepare("INSERT INTO forum (nom, prenom, email, telephone, prefixe, nombre_adultes, nombre_enfants) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssiii", $nom, $prenom, $email, $telephone, $prefixe, $nombre_adultes, $nombre_enfants);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Account created successfully!";
        } else {
            echo "Error creating account: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Agence de Voyage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body class="bg-light">
<div class="container my-5">
    <h1 class="mb-4">Formulaire de réservation</h1>
    <form action="#" method="POST">
        <div  class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label for="email">Adresse e-mail</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <select class="form-control" id="prefixe" name="prefixe">
                        <option for="prefixe" value="+216">+216</option>
                        <option for="prefixe" value="+33">+33</option>
                        <option for="prefixe" value="+1">+1</option>
                        <!-- Ajoutez ici les autres préfixes que vous voulez -->
                    </select>
                </div>
                <input type="tel" class="form-control" id="telephone" name="telephone" required>
            </div>
        </div>

        <div class="form-group">
            <label for="nombre_adultes">Nombre d'adultes</label>
            <input type="number" class="form-control" id="nombre_adultes" name="nombre_adultes" min="0" required>
        </div>
        <div class="form-group">
            <label for="nombre_enfants">Nombre d'enfants</label>
            <input type="number" class="form-control" id="nombre_enfants" name="nombre_enfants" min="0" required>
        </div>
        <button type="submit" class="btn btn-primary" id="submit-btn" >Envoyer</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
   /* $(document).ready(function() {
        // récupère tous les champs de saisie requis
        var inputs = $("form :input[required]");

        // désactive le bouton Envoyer
        $("#submit-btn").prop("disabled", true);

        // écoute les changements sur les champs de saisie
        inputs.change(function() {
            // vérifie si tous les champs requis ont une valeur
            var allFilled = true;
            inputs.each(function() {
                if ($(this).val() === "") {
                    allFilled = false;
                    return false;
                }
            });

            // active ou désactive le bouton Envoyer en conséquence
            $("#submit-btn").prop("disabled", !allFilled);
        });

        // désactive le bouton Envoyer après l'envoi du formulaire
        $("form").submit(function() {
            $("#submit-btn").prop("disabled", true);
        });

        // vérifie si l'adresse e-mail est valide lorsqu'elle est modifiée
        $("#email").change(function() {
            var email = $(this).val();
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!regex.test(email)) {
                $(this).addClass("is-invalid");
                $(this).next(".invalid-feedback").text("Veuillez entrer une adresse e-mail valide.");
            } else {
                $(this).removeClass("is-invalid");
                $(this).next(".invalid-feedback").text("");
            }
        });

        // vérifie si tous les champs sont remplis avant la soumission du formulaire
        $("form").submit(function(event) {
            var allFilled = true;
            inputs.each(function() {
                if ($(this).val() === "") {
                    allFilled = false;
                    $(this).addClass("is-invalid");
                    $(this).next(".invalid-feedback").text("Ce champ est obligatoire.");
                } else {
                    $(this).removeClass("is-invalid");
                    $(this).next(".invalid-feedback").text("");
                }
            });

            if (!allFilled) {
                event.preventDefault(); // empêche la soumission du formulaire
            }
        });
    });
*/
    $("#submit-btn").click(function() {
        // affiche une fenêtre pop-up
        alert("Le formulaire a été envoyé avec succès ! Vérifiez votre e-mail, on vous contactera le plus tôt possible.");

        // désactive le bouton Envoyer
     /*   $("#submit-btn").prop("disabled", true);
    */});
</script>

</body>
</html>
