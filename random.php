<?php

if(isset($_COOKIE['name']) & isset($_COOKIE['email'])){

    setcookie("x", rand(0, 20), time() + 10800, "/");
    setcookie("y", rand(0, 20), time() + 10800, "/");

    echo "<script>window.location.href='mathgame.php'</script>";
}

else{
    echo "<script>window.location.href='index.php'</script>";
}

?>
