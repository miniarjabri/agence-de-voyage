<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .card-img-top {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- Filter form -->
    <div class="row mb-4">
        <div class="col-md-4">
            <form>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select id="category" name="category" class="form-control">
                        <option value="">All</option>
                        <option value="tech">Technology</option>
                        <option value="lifestyle">Lifestyle</option>
                        <option value="travel">Travel</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>
        </div>
    </div>

    <!-- Posts in three columns -->
    <div class="row">
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
                echo "<a onclick='location.href=\"trip.php? id=$id \"' class='btn btn-primary'>En savoir plus</a>";
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

</div>

</div>
</body>
</html>
