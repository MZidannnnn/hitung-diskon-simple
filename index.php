<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Diskon</title>

</head>

<body>
    <?php
    $diskon = 0;
    $total_belanja = 0;
    $total_bayar = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $total_belanja = $_POST['total_belanja'];
        function hitungDiskon($total_belanja)
        {
            if ($total_belanja >= 100000) {
                $diskon = 0.1 * $total_belanja;
                return $diskon;
            } elseif ($total_belanja >= 50000) {
                $diskon = 0.05 * $total_belanja;
                return $diskon;
            }
            return $diskon = 0;
        }
        $diskon = hitungDiskon($total_belanja);
        $total_bayar = $total_belanja - $diskon;
    }
    ?>
    <form action="" method="post">
        <label for="total_belanja">Total Belanja</label><br>
        <input type="number" name="total_belanja" id="total_belanja" value="<?php echo $total_belanja; ?>"><br><br>
        <button type="submit">Hitung</button><br><br>
        <label for="diskon">Diskon</label><br>
        <input type="number" name="diskon" id="diskon" readonly value="<?php echo $diskon; ?>"><br><br>
        <label for="total_bayar">Total Bayar</label><br>
        <input type="number" name="total_bayar" id="total_bayar" readonly value="<?php echo $total_bayar; ?>"><br>
    </form>
</body>

</html>