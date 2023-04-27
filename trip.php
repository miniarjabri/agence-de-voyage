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

    <style>
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

<!--Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Voyage en <?php echo $titre; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="header">
    <!-- titre ajouter php -->
    <h1 class="display-3">Découvrez <?php echo $titre; ?></h1>
    <!-- prix ajouter php -->
    <!-- prix aprés remise ajouter php -->
    <!-- prix avant remise ajouter php -->
    <!-- remise % ajouter php -->
    <p class="lead mb-0">à partir de <?php echo $prix_apres; ?> dt au lieu de <?php echo $prix_avant; ?> dt </p>
    <p>-<?php echo $remise; ?> %</p>
    <a href="#" class="btn btn-primary mt-4">Réserver</a>
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

                    <!-- prix aprés remise ajouter php -->
                    <!-- prix avant remise ajouter php -->
                    <!-- remise % ajouter php -->
                    <p class="card-text">A partir de <?php echo $prix_apres; ?> dt /pers</p>
                    <!-- destination ajouter php -->
                    <p class="card-text">DESTINATION : <?php echo $Destination; ?></p>
                    <!-- nombre de jours ajouter php -->
                    <p class="card-text">NOMBRE DE NUIT : <?php echo $Nombre_de_nuits; ?> </p>
                    <p class="card-text">NOMBRE DE JOURS : <?php echo $Nombre_de_nuits + 1; ?> </p>
                    <h3>DU <?php echo $Date_darrivée; ?> </h3>
                    <h3>AU <?php echo $Date_de_sortie; ?> </h3>

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
            <h5>Le prix comprend:</h5>
            <p><?php echo $le_prix_comprend; ?></p>
            <h5>Le prix ne comprend pas:</h5>
            <p><?php echo $Le_prix_ne_comprend_pas; ?></p>


        </div>
    </div>

    <div class="row">
        <p>Réservez dès maintenant pour profiter de cette offre exceptionnelle !</p>
        <a href="#" class="btn btn-primary mt-4">Réserver</a>
    </div>
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Informations sur le voyage</h5>
                    <p class="text-muted">Ce voyage est organisé par notre agence de voyages spécialisée
                        dans les circuits en Italie. Nous offrons des expériences de voyage uniques et inoubliables
                        pour les voyageurs du monde entier.</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Liens utiles</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#">Conditions générales de vente</a>
                        </li>
                        <li>
                            <a href="#">Politique de confidentialité</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">Nous contacter</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Suivez-nous</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#" class="me-4">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="me-4">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="me-4">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="me-4">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            <p class="text-muted mb-0">© 2023 Tous droits réservés | Agence de voyages Italia Tour</p>
        </div>
    </footer>
    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-jDkPXyTThT1+7f1wJcZImmd/LPqoqfaw2aP6hKKpw6Xk41M+v4ew6b4rgCKEzJxU"
            crossorigin="anonymous"></script>

</body>
</html>
