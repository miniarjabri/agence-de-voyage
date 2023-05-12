<?php
$id = isset($_GET['id']) ? $_GET['id'] : 1;
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trips";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM trip WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $titre = $row["titre"];
        $prix_avant = $row["prix_avant"];
        $prix_apres = $row["prix_apres"];
        $remise = $row["remise"];
        $Destination = $row["Destination"];
        $Nombre_de_nuits = $row["Nombre_de_nuits"];
        $Date_darrivée = $row["Date_darrivée"];
        $Date_de_sortie = $row["Date_de_sortie"];
        $Description_brève_du_voyage = $row["Description_brève_du_voyage"];
        $Description_du_voyage = $row["Description_du_voyage"];
        $le_prix_comprend = $row["le_prix_comprend"];
        $Le_prix_ne_comprend_pas = $row["Le_prix_ne_comprend_pas"];
        $Background_image = $row["Background_image"];
        $Image1 = $row["Image1"];
        $Image2 = $row["Image2"];
        $Image3 = $row["Image3"];
    } else {
        echo "0 results";
    }
    $conn->close();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $titre; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_Home_page.css"/>
    <link rel="shortcut icon" type="image/png" href="343517889_1726399304443518_1615111089597620589_n.png" />
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


        .my-scrollable-section {
            max-height: 400px;
        }

        /* Full height image header */
        .header {
            /* Set background image dynamically from database */
            background-image: url('<?php echo $Background_image; ?>');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>

<body>

<header>
    <nav>
        <div class="principale" >

            <div class="logo">
                <a href="index1.html"><span>E</span>xp<span>l</span>oria</a>
            </div>

        </div>
        <a href="index1.html">Home</a>
        <a href="packages.php">Packages</a>
        <a href="commentaire.php">About us</a>
        <div class="d-flex"  >
            <div class="avatar" onmouseover="showDropdown()" onclick="toggleDropdown()">
            </div>
            <div class="dropdown" id="dropdownMenu">

                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" >
                    <a class="dropdown-item" href="sign_in.php" >Sign In</a>
                    <a class="dropdown-item" href="create_account.php" >Login</a>
                </div>

            </div>
    </nav>
</header>

<!-- Header -->

<header class="header" style="background-color: black">
    <h1 class="display-3 text-red" style="background-color: black; color: #b64332; padding: 10px; border-radius: 5px; font-weight: bold;">Découvrez <?php echo $titre; ?></h1>
    <h4 class="lead mb-0 text-red" style="background-color: black; color: #b64332; padding: 5px; border-radius: 3px; font-weight: bold;">à partir de <?php echo $prix_apres; ?> dt au lieu de <?php echo $prix_avant; ?> dt</h4>
    <p class="text-red" style="background-color: black; color: #b64332; padding: 3px; border-radius: 3px; font-weight: bold;">-<?php echo $remise; ?> %</p>
    <a href="formulaire.php" class="btn btn-primary mt-4" style="background-color: #b64332; color: white; font-weight: bold; border-radius: 5px; padding: 10px 20px;">Réserver</a>
</header>

<div class="container my-5">
    <h2 class="mb-4">Description du voyage</h2>
    <div class="row">

        <div class="col-md-9">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- image 1 ajouter php -->
                        <img src="<?php echo $Image1; ?>" class="d-block w-100" alt="...">
                    </div>
                    <!-- image 2 ajouter php -->
                    <div class="carousel-item">
                        <img src="<?php echo $Image2; ?>"
                             class="d-block w-100" alt="...">
                    </div>
                    <!-- image 3 ajouter php -->
                    <div class="carousel-item">
                        <img src="<?php echo $Image3; ?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Détails du voyage</h5>
                    <p class="card-text price">A partir de <?php echo $prix_apres; ?> dt /pers</p>
                    <p class="card-text">DESTINATION: <?php echo $Destination; ?></p>
                    <p class="card-text">NOMBRE DE NUIT: <?php echo $Nombre_de_nuits; ?></p>
                    <p class="card-text">NOMBRE DE JOURS: <?php echo $Nombre_de_nuits + 1; ?></p>
                    <h3 class="date">DU <?php echo $Date_darrivée; ?></h3>
                    <h3 class="date">AU <?php echo $Date_de_sortie; ?></h3>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <!-- destination ajouter php -->
        <h3> <?php echo $Destination; ?></h3>
        <!-- brief desciption du voyage ajouter php -->
        <p> <?php echo $Description_brève_du_voyage; ?></p>

    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="my-scrollable-section overflow-auto">
                <!-- desciption du voyage ajouter php -->
                <p><?php echo $Description_du_voyage; ?></p>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Détails sur le pix</h3>
            <!-- details sur le prix ajouter php -->
            <h5 style="font-weight: bold; color: black;">Le prix comprend:</h5>
            <p  ><?php echo $le_prix_comprend; ?></p>
            <h5 style="font-weight: bold; color: black;">Le prix ne comprend pas:</h5>
            <p  ><?php echo $Le_prix_ne_comprend_pas; ?></p>


        </div>
    </div>

    <div class="row">
        <h1>Réservez dès maintenant pour profiter de cette offre exceptionnelle !</h1>
        <a href="formulaire.php" class="btn btn-primary mt-4" style="background-color: #b64332; color: white; font-weight: bold; border-radius: 5px; padding: 10px 20px;" class="btn btn-primary mt-4">Réserver</a>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h4>À propos</h4>
                    <ul>
                        <li><a href="#">Notre agence</a></li>
                        <li><a href="#">Notre équipe</a></li>
                        <li><a href="#">Témoignages clients</a></li>
                        <li><a href="#">Nos partenaires</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Nos services</h4>
                    <ul>
                        <li><a href="#">Réservation d'hôtels</a></li>
                        <li><a href="#">Réservation de vols</a></li>
                        <li><a href="#">Location de voitures</a></li>
                        <li><a href="#">Activités touristiques</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Contactez-nous</h4>
                    <ul>
                        <li><a href="#">Nous contacter</a></li>
                        <li><a href="#">Demande de devis</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h4>Restez informés!</h4>
                    <div class="social-media">
                        <div>
                            <di id="ab"><a href="https://www.instagram.com/votre_nom_dutilisateur/"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" width="25px" height="25px"></a>
                            </di>
                            <a href="https://www.facebook.com/votre_nom_dutilisateur/"> <img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-facebook-social-media-icon-png-image_6315968.png" alt="Facebook" width="27px" height="27px" ></a>
                            <a href="https://www.twitter.com/votre_nom_dutilisateur/"> <img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-twitter-social-media-round-icon-png-image_6315985.png" alt="Twitter" width="27px" height="27px" ></a>
                        </div>
                    </div>
                </div>
            </div>
            <hr >
            <div class="copyright"> Copyright © Tous droits réservés.</div>
        </div>
    </footer>

    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-jDkPXyTThT1+7f1wJcZImmd/LPqoqfaw2aP6hKKpw6Xk41M+v4ew6b4rgCKEzJxU"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
