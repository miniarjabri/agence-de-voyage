<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="javas.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style_Home_page.css"/>
    <link rel="shortcut icon" type="image/png" href="343517889_1726399304443518_1615111089597620589_n.png" />

    <style>
        .like-button {
            background-color: white;
            border: none;
            cursor: pointer;
        }
        .like-button .heart-icon {
            color: red;
        }
        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }
         .my-scrollable-section {
             max-height: 400px;
         }

        /* Full height image header */
        .header {
            /* Set background image dynamically from database */
            background-image: url('maps.png');
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
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" onmouseleave="hideDropdown()">
                    <a class="dropdown-item" href="sign_in.php" >Sign In</a>
                    <a class="dropdown-item" href="create_account.php" >Login</a>
                </div>
            </div>
    </nav>
</header>


<header class="header">

</header>

<!-- Filter form -->
<div class="row mb-4">
    <div class="col-md-8">
        <form>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="WHERE">Ou?:</label>
                    <select id="where" name="where" class="form-control">
                        <option selected >All</option>
                        <option id="europe" value=europee.php?continent=europe >Europe</option>
                        <option id="africa" value=afrique.php?continent=europe>Afrique</option>
                        <option id="asia" value=asie.php?continent=europe>Asie</option>
                        <option id="north_america" value=north_america.php?continent=europe >Amérique du nord</option>
                        </select>
                </div>
            </div>
            <button id=filter  class="btn btn-primary">Filter</button>
        </form>
    </div>
</div>

<!-- Posts in three columns -->
<div class="row" id="card-container">
    <?php
    $id = 1;

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "trips";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    for ($j = 0; $j < 6; $j++) {
        echo "<div class='col-md-4'>";
        for ($i = 1; $i <= 3; $i++)
        {

            $sql = "SELECT * FROM trip WHERE id=$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $titre = $row["titre"];
                $Background_image = $row["Background_image"];
                $Nombre_de_nuits = $row["Nombre_de_nuits"];
            } else {
                echo "0 results";
            }

            echo "<div class='card mb-4'>";
            echo "<img src='$Background_image' class='card-img-top' alt='...'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>$titre</h5>";
            echo "<p class='card-text'>$Nombre_de_nuits NUITS</p>";
            echo "<button class='like-button' onclick='likeTrip($id)'>";
            echo "<i class='fas fa-heart heart-icon' style='color: red'></i>";
            echo "</button>";
            echo "<a onclick='location.href=\"trip.php?id=$id\"' class='btn btn-primary' style='background-color: #b64332; color: white; font-weight: bold; border-radius: 5px; padding: 10px 20px;'>En savoir plus</a>";
            echo "</div>";
            echo "</div>";
            $id++;
        }
        echo "</div>";
    }

    // Close the database connection
    $conn->close();
    ?>
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


<!--<script src="packages.js"></script>-->
<script>
    // Get a reference to the select element
    var selectEl = document.getElementById("where");

    // Listen for the change event on the select element
    selectEl.addEventListener("change", function() {
        // Get the selected option value
        var selectedOptionValue = selectEl.value;
        // Navigate to the new page
        window.location.href = selectedOptionValue;
    });
</script>
</body>
</html>
