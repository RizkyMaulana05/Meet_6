<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang-Layang</title>
</head>
<body>

    <a href="index.php">Home</a>
    <h1>Layang-Layang</h1>

    <form action="layanglayangaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Diagonal 1:</td>
                <td><input type="number" name="diagonal1" required></td>
            </tr>
            <tr>
                <td>Masukkan Diagonal 2:</td>
                <td><input type="number" name="diagonal2" required></td>
            </tr>
            <tr>
                <td>Masukkan Sisi Pendek:</td>
                <td><input type="number" name="sisipendek" required></td>
            </tr>
            <tr>
                <td>Masukkan Sisi Panjang:</td>
                <td><input type="number" name="sisipanjang" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Hitung Luas dan Keliling"></td>
            </tr>
        </table>
    </form>

</body>
</html>
