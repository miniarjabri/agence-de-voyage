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
         <h1 class="heading">
            review
         </h1>
         <div class="swiper review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box">
                        <img src="./photo/blank-profile-picture-g1e9371293_1280.png ">
                        <h3>john deo </h3>
                        <p> le commentaire de john j'ai aime mon voyage qui a ete incroyable jai passe un voyage inoubliable et j'ai profite de chaque moment merci pour votre professionnalisme  </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="./photo/blank-profile-picture-g1e9371293_1280.png ">
                        <h3>yasmine ferchichi</h3>
                        <p> le commentaire de yasmine j'ai aime mon voyage qui a ete incroyable jai passe un voyage inoubliable et j'ai profite de chaque moment merci pour votre professionnalisme </p>
                            
                        <div class="stars">
                           <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="./photo/blank-profile-picture-g1e9371293_1280.png ">
                        <h3>john deo </h3>
                        <p>le commentaire de john j'ai aime mon voyage qui a ete incroyable jai passe un voyage inoubliable et j'ai profite de chaque moment merci pour votre professionnalisme </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="./photo/blank-profile-picture-g1e9371293_1280.png">
                        <h3>john deo </h3>
                        <p>le commentaire de john j'ai aime mon voyage qui a ete incroyable jai passe un voyage inoubliable et j'ai profite de chaque moment merci pour votre professionnalisme</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="./photo/blank-profile-picture-g1e9371293_1280.png ">
                        <h3>john deo </h3>
                        <p> le commentaire de john j'ai aime mon voyage qui a ete incroyable jai passe un voyage inoubliable et j'ai profite de chaque moment merci pour votre professionnalisme </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
   


    <div class="commentaires">
        <h2>Ajouter un commentaire</h2>
        <form action="traitement_commentaire.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom"><br>
            <div class="rating">
                <input type="radio" name="rating" id="star1" value="1">
                <label for="star1">&#9733;</label>
                <input type="radio" name="rating" id="star2" value="2">
                <label for="star2">&#9733;</label>
                <input type="radio" name="rating" id="star3" value="3">
                <label for="star3">&#9733;</label>
                <input type="radio" name="rating" id="star4" value="4">
                <label for="star4">&#9733;</label>
                <input type="radio" name="rating" id="star5" value="5">
                <label for="star5">&#9733;</label>
              </div>
            <label for="commentaire">Commentaire :</label>
            <textarea id="commentaire" name="commentaire"></textarea><br>
            <input type="submit" value="Envoyer">
        </form>
    </div>
    <?php
// Connexion à la base de données
$servername = "localhost";
$username = "yosr";
$password = "mot_de_passe";
$dbname = "espace_commentaire";
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération du commentaire saisi par l'utilisateur
if(isset($_POST['commentaire'])) {
    $commentaire = $_POST['commentaire'];
} else {
    $commentaire = "";
}

// Requête SQL pour ajouter le commentaire dans la table "commentaires"
$sql = "INSERT INTO commentaires (commentaire) VALUES ('$commentaire')";

if ($conn->query($sql) === TRUE) {
    echo "Commentaire ajouté avec succès";
} else {
    echo "Erreur lors de l'ajout du commentaire: " . $conn->error;
}

// Fermeture de la connexion
$conn->close();
?>


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
