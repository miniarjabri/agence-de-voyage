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

</head>
<body>
<header>
    <div class="principale" >
        <div class="logo">
            <a href="#"><span>E</span>xp<span>l</span>oria</a>
        </div>
    </div>
    <ul>
        <li >
            <a href="#">acceuil</a>
        </li>
        <li>
            <a href="#">service</a>
        </li>
        <li>
            <a href="#">blog</a>
        </li>
        <li class="active">
            <a href="#">a propos de nous</a>
        </li>
        <li>
            <a href="#">contact</a>
        </li>
    </ul></div>
    <div class="titre">
        <h1>A propos de nous </h1>
    </div>
</header>
<!--en savoir plus-->
<section class="home-about">
    <div class="image">
        <img src="photo/voyage2.jpg">
    </div>
    <div class="content">
        <h3>A propos De Nous</h3>
        <p>Vous cherchez à voyager ? Nous sommes là pour vous aider ! Notre agence de voyage propose des destinations de rêve, des conseils d'experts et des services personnalisés pour vous aider à planifier le voyage parfait. Nous sommes passionnés par les voyages et nous voulons partager cette passion avec vous. Nous nous efforçons de vous offrir une expérience de voyage inoubliable et nous nous engageons à vous aider à créer des souvenirs qui dureront toute une vie.

            Faites-nous confiance pour votre prochaine aventure et laissez-nous vous aider à réaliser votre rêve de voyage.Cliquez ici dès maintenant pour planifier votre prochaine aventure !</p>
        <a href ="#" class="btn">En savoir plus</a>

    </div>
</section>


<!--review section-->
<section class="review" id="review">
    <h1 class="heading">Review</h1>
    <div class="swiper review-slider">
        <div class="swiper-wrapper">
            <?php
            $id = 1;

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
            $sql = "SELECT * FROM comments WHERE id=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $counter = 0;
                while (($row = $result->fetch_assoc()) && ($counter < $result->num_rows)) {
                    $nom = $row["nom"];
                    $nombre_etoile = $row["nombre_etoile"];
                    $commentaire = $row["commentaire"];
                    $profile_picture = 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png';

                    echo '<div class="swiper-slide">
                <div class="box">
                    <img src="' . $profile_picture . '">
                    <h3>' . $nom . '</h3>
                    <p>' . $commentaire . '</p>
                    <div class="stars">';
                    for ($i = 0; $i < 5; $i++) {
                        if ($i < $nombre_etoile) {
                            echo '<i class="fas fa-star"></i>';
                        } else {
                            echo '<i class="far fa-star"></i>';
                        }
                    }
                    echo '          </div>
                </div>
            </div>';

                    $counter++;
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

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>
