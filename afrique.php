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
                        <option selected>Afrique</option>
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
            $l=[8,9 ];
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
