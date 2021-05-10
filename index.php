<?php
session_start();

if (isset($_POST['submit'])) {
    setcookie("name", $_POST['nama'], time() + 10800, "/");

    setcookie("email", $_POST['email'], time() + 10800, "/");

    echo "<script>window.location.href='index.php'</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>G A M E   A S Y I Q U E</title>
</head>

<body>
    <?php

    if (isset($_COOKIE['name']) & isset($_COOKIE['email'])) {
        $_SESSION['new'] = 0;

        echo "<div class=\"container\"><div class=\"text-white\"><h2>Hallo  " . $_COOKIE['name'] . ", selamat datang kembali di permainan ini!</h2><br>";

        echo "<h3><a href=\"startgame.php\">Start Game</a> | <a href=\"halloffame.php\">Hall of Fame</a></h3><br>";

        echo "<h3>Bukan anda? <a href=\"logout.php\">klik disini</a></h3></div></div>";
    } else {

    ?>
        <div class="container">
            <div class="text-white">
                <h1 class="text-center">Math Game <br>Asyique</h1><br>
                <form action="" method="post">
                    Nama <input type="text" name="nama"><br><br>
                    Email <input type="email" name="email"><br><br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>

</body>

</html>
<?php
    }

?>

</body>

</html>