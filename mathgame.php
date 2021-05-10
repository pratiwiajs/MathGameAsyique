<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>G A M E   A S Y I Q U E</title>
</head>

<body>
    <?php

    if (!isset($_COOKIE['name']) & isset($_COOKIE['email'])) {
        echo "<script>window.location.href='index.php'</script>";
    }

    if ($_SESSION['lives'] > 0) {

    ?>
        <div class="container text-white">
            <form action="process.php" method="post">
                <h4><?php echo "Lives: " . $_SESSION['lives'] . " | Scores: " . $_SESSION['scores']; ?></h4><br>
                <h2><?php echo $_SESSION['welc']; ?></h2><br>
                <h3><?php echo "Berapakah " . $_COOKIE['x'] . " + " . $_COOKIE['y'] . " = "; ?></h3>
                <input type="text" name="jawaban">
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>

    <?php
    } else {
        $conn = mysqli_connect("localhost", "root", "", "halloffame");

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO leaderboard(nama, email, skor) VALUES('" . $_COOKIE['name'] . "', '" . $_COOKIE['email'] . "', '" . $_SESSION['scores'] . "')";

        mysqli_query($conn, $sql);
        mysqli_close($conn);

        echo "<div class=\"container text-white\"><h3>Hello " . $_COOKIE['name'] . "... Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik.</h3>";
        echo "<p>Score anda: " . $_SESSION['scores'] . "</p>";
        echo "<p ><a href=\"reinput.php\">Main Lagi</a>  <a href=\"halloffame.php\">Hall of Fame</a></p></div>";

        session_destroy();
    }
    ?>

</body>

</html>