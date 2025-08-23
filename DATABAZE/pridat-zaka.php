<?php
// XSS - Cross-site scripting

require "./assets/database.php";
require "./assets/zak.php";

$first_name = null;
$second_name = null;
$age = null;
$life = null;
$college = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST["first_name"];
    $second_name = $_POST["second_name"];
    $age = $_POST["age"];
    $life = $_POST["life"];
    $college = $_POST["college"];

    $connection = connectionDB();

    createStudent($connection, $first_name, $second_name, $age, $life, $college);
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./query/header-query.css">
        <script src="https://kit.fontawesome.com/0fe423447.js" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>

    <body>
        <?php require "assets/header.php"; ?>
        <main>
            <section class="add-form">
                <?php require "assets/formular-zak.php"; ?>
            </section>
        </main>
        <?php require "assets/footer.php"; ?>
        <script type="module" src="./js/header.js"></script>
    </body>

</html>