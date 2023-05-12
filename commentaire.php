<?php
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
// Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Connect to the database
        $servername = "localhost";
        $username = "root";
        $password = "" ;
        $dbname = "espace_commentaire";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get user input from form submission
        $nom = $_POST['nom'] ;
        $nombre_etoile = $_POST['nombre_etoile'] ;
        $commentaire = $_POST['commentaire'] ;
        $profile_picture = 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png';


        // Insert user information into the database
        $stmt = $conn->prepare("INSERT INTO comments (nom,nombre_etoile , commentaire, profile_picture) VALUES ( ?, ?, ?, ?)");
        $stmt->bind_param("siss", $nom, $nombre_etoile, $commentaire, $profile_picture);
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="javas.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_Home_page.css"/>

    <link rel="shortcut icon" type="image/png" href="343517889_1726399304443518_1615111089597620589_n.png" />

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

<body>
<!--en savoir plus-->
<section class="home-about">
    <div class="image">
        <img src="photo/voyage2.jpg">
    </div>
    <div class="content">
        <h3>A propos De Nous</h3>
        <p>Vous cherchez à voyager ? Nous sommes là pour vous aider ! Notre agence de voyage propose des destinations de rêve, des conseils d'experts et des services personnalisés pour vous aider à planifier le voyage parfait. Nous sommes passionnés par les voyages et nous voulons partager cette passion avec vous. Nous nous efforçons de vous offrir une expérience de voyage inoubliable et nous nous engageons à vous aider à créer des souvenirs qui dureront toute une vie.

            Faites-nous confiance pour votre prochaine aventure et laissez-nous vous aider à réaliser votre rêve de voyage.Cliquez ici dès maintenant pour planifier votre prochaine aventure !</p>
        <a href ="packages.php" class="btn">En savoir plus</a>

    </div>
</section>
<!--review section-->
<section class="review" id="review">
    <h1 class="heading">Review</h1>
    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <?php
            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "espace_commentaire";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve data from the database
            $sql = "SELECT * FROM comments";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $id = 1; // Start ID
                while ($row = $result->fetch_assoc()) {
                    // Extract data from the current row
                    $nom = $row["nom"];
                    $nombre_etoile = $row["nombre_etoile"];
                    $commentaire = $row["commentaire"];
                    $profile_picture = 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png';

                    // Generate HTML code for the review
                    echo '<div class="swiper-slide">
                        <div class="box">
                            <img src="' . $profile_picture . '">
                            <h3>' . $nom . '</h3>
                            <p>' . $commentaire . '</p>
                            <div class="stars">';
                    for ($i = 0; $i < $nombre_etoile; $i++) {
                        echo '<i class="fas fa-star"></i>';
                    }
                    for ($i = $nombre_etoile; $i < 5; $i++) {
                        echo '<i class="far fa-star"></i>';
                    }
                    echo '</div>
                        </div>
                    </div>';

                    $id++; // Increment ID
                }
            } else {
                echo "0 results";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
    </div>
</section>


<div class="commentaires">
    <h2>Ajouter un commentaire</h2>
    <form action="commentaire.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br>
        <div class="rating" for="nombre_etoile">
            <input type="radio" name="nombre_etoile" id="star1" value="1">
            <label for="star1">&#9733;</label>
            <input type="radio" name="nombre_etoile" id="star2" value="2">
            <label for="star2">&#9733;</label>
            <input type="radio" name="nombre_etoile" id="star3" value="3">
            <label for="star3">&#9733;</label>
            <input type="radio" name="nombre_etoile" id="star4" value="4">
            <label for="star4">&#9733;</label>
            <input type="radio" name="nombre_etoile" id="star5" value="5">
            <label for="star5">&#9733;</label>
        </div>
        <label for="commentaire">Commentaire :</label>
        <textarea id="commentaire" name="commentaire"></textarea><br>
        <input type="submit" value="Envoyer">
    </form>
</div>
<section class="local">
    <h1>
        Vous pouvez nous trouvez !
    </h1>
    <p>Nos localisations se trouvent  </p>
    <div class="directoryPresentation">

        <img src="photo\carte.png" alt="Carte" >
    </div>
    <div class="row">

        <div class="local-col">
            <img src="photo\tour-dhorloge.jpg" >
            <div class="layer">
                <h3>Tunis</h3>
            </div>
        </div>
        <div class="local-col">
            <img src="photo\sousse.jpg"  >
            <div class="layer">
                <h3>Sousse</h3>
            </div>
        </div>
        <div class="local-col">
            <img src="photo\sfax.jpg"  >
            <div class="layer">
                <h3>Sfax </h3>
            </div>
        </div>
    </div>
</section>

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

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
