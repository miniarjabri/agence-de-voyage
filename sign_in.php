<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <?php if(isset($error)) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>
    <?php } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Sign In</h1>
    <form action="signin.php" method="POST">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="mot_de_passe" required>
        </div>


        <button type="submit" class="btn btn-primary">Sign In</button>
        <?php if(isset($error)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php } ?>
    </form>
</div>
</body>
</html>

<?php
// Start a session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "account";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get user input from form submission
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];

    // Query the database to see if the email and password match
    $stmt = $conn->prepare("SELECT * FROM info WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // Verify the password using password_verify()

        if (password_verify($mot_de_passe, $user["mot_de_passe"])) {

            // Set the session variables
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_email"] = $user["email"];

            // Redirect to the home page or another page indicating that the user has signed in successfully
            header("Location: packages.php");
            exit();

        } else {
            // Display an error message and allow the user to try again
            $error = "Incorrect email or password. Please try again.";
        }
    } else {
        // Display an error message and allow the user to try again
        $error = "Incorrect email or password. Please try again.";
    }

    $stmt->close();
    $conn->close();
}
?>
