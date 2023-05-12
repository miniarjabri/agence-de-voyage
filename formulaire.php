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
    <script src="javas.js"></script>
    <style>
        body {
            background-image: url('https://i.pinimg.com/736x/a6/21/6e/a6216eb07f5871a10dc696e7494c80c6.jpg');
            background-size: cover;
        }

        .container {
            border: 2px solid darkgray;
            padding: 20px;
            color: white;
        }

        .form-control {
            background-color: white;
            color: black;
        }

        .btn-primary {
            background-color: darkred;
            border-color: darkred;
            color: white;
        }

        h1, label {
            color: black;
        }
        nav {
            display: flex;/*horizontal*/
            justify-content: center;/*au centre*/
            background-color:#444;
            height: 70px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            transition: background-color 0.3s ease-in-out;

        }
        nav a {
            display: block;
            padding: 20px 20px;/*distance between*/
            color:#ffffffff;
            font-weight: bolder;
            text-decoration:dotted;
            font-size: 19px;
            border-bottom: 2px solid transparent;
            transition: all 0.2s ease
        }
        nav a:hover,
        nav a:focus {
            background-color: #ddd;
            color:#444;
            transform: scale(1.07);
        }
        ead > link[rel="shortcut icon"] {
            width: 100px;
            height: 100px;
        }
        .logo a{
            color: white;
            padding:0px 20px;
            border:1px solid #fff;
            position: absolute;
            top:10px;
            left:10px;
            text-transform:uppercase ;
            text-decoration: none;
            font-weight:900 ;
            text-shadow: rgba(0  ,0 ,0, 0.7);
        }
        .logo span {
            color:#b64332;
            font-weight: bold;
            font-size:2rem;
        }
        div.container {
            margin-top: 80px; /* Ajustez cette valeur selon vos besoins */
        }

    </style>
</head>
<header>
    <nav>
        <div class="principale" >
            <div class="logo">
                <a href="#"><span>E</span>xp<span>l</span>oria</a>
            </div>
        </div>
        <a href="index1.html">Home</a>
        <a href="packages.php">Packages</a>
        <a href="commentaire.php">About us</a>
        <div class="d-flex"  >
            <div class="avatar" onmouseover="showDropdown()" onclick="toggleDropdown()">
            </div>
            <div class="dropdown" id="dropdownMenu">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" onmouseleave="hideDropdown()">
                    <a class="dropdown-item" href="sign_in.php" >Sign In</a>
                    <a class="dropdown-item" href="create_account.php" >Login</a>
                </div>
            </div>
    </nav>
</header>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
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
    });
    $("#submit-btn").click(function() {
        // affiche une fenêtre pop-up
        alert("Le formulaire a été envoyé avec succès ! Vérifiez votre e-mail, on vous contactera le plus tôt possible.");

        // désactive le bouton Envoyer
        /*   $("#submit-btn").prop("disabled", true);
       */});
</script>
<!--
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
-->
</body>
</html>

