<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>G A M E   A S Y I Q U E</title>
</head>

<body>
    <div class="container text-white">
        <div>
            <h1 class="text-center">Hall of Fame "Math Game Asyique"</h1><br>
            <table width="100%" border="1">
                <tr>
                    <th>Rank</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Skor</th>
                </tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "halloffame");

                $result = mysqli_query($conn, "SELECT nama, email, skor FROM leaderboard ORDER BY skor DESC LIMIT 10");

                $rank = 1;

                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>" . $rank . "</td>";
                        echo "<td>" . $row['nama'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['skor'] . "</td>";
                        echo "</tr>";
                        $rank++;
                    }
                }
                ?>
            </table><br>
            <p><a href="logout.php">Main lagi</a></p>
        </div>
    </div>

</body>

</html>