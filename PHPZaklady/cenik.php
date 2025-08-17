<?php
$price = 320;
$hour = 22;
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ceník našich služeb</title>
    </head>

   <?php require "./assets/header.php"; ?>

    <body>
        <!-- <h1>Ceník</h1> 
    <p>Cena našich služeb je <?php echo $price; ?> Kč.</p> -->
        <!-- <p>Cena našich služeb je <?= $price; ?> Kč.</p> -->

        <!-- <?php
        if ($hour < 9) {
            echo "<p>Dobré ráno</p>";
        } elseif ($hour < 12) {
            echo "<p>Dobré dopoledne</p>";
        } elseif ($hour === 12) {
            echo "<p>Dobré poledne</p>";
        } elseif ($hour < 18) {
            echo "<p>Dobré odpoledne</p>";
        } else {
            echo "<p>Dobrý večer</p>";
        }
        ?> -->

        <!-- <?php if ($hour < 9): ?>
        <p>Dobré ráno</p> 
    <?php elseif ($hour < 12): ?>
        <p>Dobré dopoledne</p> 
    <?php elseif ($hour === 12): ?>
        <p>Dobré poledne</p> 
    <?php elseif ($hour < 18): ?>
        <p>Dobré odpoledne</p> 
    <?php else: ?>
        <p>Dobrý večer</p> 
    <?php endif; ?> -->

        <?php
        $students = ["Harry", "Ron", "Hermiona"];
        ?>
        <ul>
            <?php foreach ($students as $one_student): ?>
                <li><?php echo $one_student ?></li>
            <?php endforeach; ?>
        </ul>
    </body>

    <?php require "./assets/footer.php"; ?>

</html>