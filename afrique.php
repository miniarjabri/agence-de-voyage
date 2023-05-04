<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
<header class="header">

</header>
<!--Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Découvrez Nos Packets Exceptionelles !!</a>
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
                echo "<a onclick='location.href=\"trip.php? id=$id \"' class='btn btn-primary'>En savoir plus</a>";
                echo "</div>";
                echo "</div>";}
            $id++;
        }
    }

    // Close the database connection
    $conn->close();
    ?>
</div>
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