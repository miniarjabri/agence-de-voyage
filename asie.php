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
            background-image: url('data:image/png;base64,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');
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
                        <option id="europe" value=packages.php?continent=europe>All</option>
                        <option  id="europe" value=europe.php?continent=europe>Europe</option>
                        <option id="africa" value=afrique.php?continent=europe>Afrique</option>
                        <option selected >Asie</option>
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
            $l=[6,14,15,18 ];
            if (in_array($id, $l) ){
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
                echo "</div>";}
            $id++;
        }
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
