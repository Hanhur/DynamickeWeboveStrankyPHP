<?php
session_start();

// var_dump($_SESSION["name"]);
// var_dump($_SESSION["type"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($_SESSION["is_logged"] === true): ?>
        <h1>Vítejte v administraci</h1> 
    <?php else: ?>
        <h1>Nemáte oprávnění pro vstup do administrace</h1> 
    <?php endif; ?>
</body>
</html>