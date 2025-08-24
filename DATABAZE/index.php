<!-- <?php
$students = [
    [
        "first_name" => "Harry",
        "second_name" => "Potter",
        "age" => 11,
        "life" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae temporibus ullam harum, nostrum nobis inventore, quaerat sit porro consequuntur, delectus eos.",
        "college" => "Nebelvír",
    ],
    [
        "first_name" => "Hermiona",
        "second_name" => "Grangerová",
        "age" => 12,
        "life" => "Repudiandae temporibus ullam harum, nostrum nobis inventore, quaerat sit porro consequuntur, delectus eos. Ducimus facere doloribus fuga error? Consectetur dolorem praesentium recusandae!",
        "college" => "Nebelvír",
    ],
    [
        "first_name" => "Ron",
        "second_name" => "Weasley",
        "age" => 11,
        "life" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae temporibus ullam harum, nostrum nobis inventore, quaerat sit porro consequuntur, delectus eos.",
        "college" => "Nebelvír",
    ],
    [
        "first_name" => "Draco",
        "second_name" => "Malfoy",
        "age" => 12,
        "life" => "Amet consectetur adipisicing elit. Repudiandae temporibus ullam harum, nostrum nobis inventore, quaerat sit porro consequuntur, delectus eos. ",
        "college" => "Zmijozel",
    ],
];
?> -->
<!-- 
C - create - vytvořit záznam 
R - read - přečíst záznam
U - update - změnit existující záznam 
D - delete - vymazat záznam
 -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="./css/general.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./query/header-query.css">
        <link rel="stylesheet" href="./css/footer.css">

        <link rel="stylesheet" href="./css/index.css">
        <link rel="stylesheet" href="./query/index-query.css">

        <script src="https://kit.fontawesome.com/0fe423447.js" crossorigin="anonymous"></script>

        <title>Document</title>
    </head>

    <body>
        <?php require "./assets/header.php"; ?>

        <main>
            <section class="main-heading"> 
                <img src="./img/hogwarts-logo.png" alt="Bradavice logo">
                <h1>Škola čar a&nbsp;kouzel</h1>
                <h2>Bradavice</h2>
            </section>
        </main>

        <?php require "./assets/footer.php"; ?>
        <script type="module" src="./js/header.js"></script>
    </body>

</html>

<!-- Lesson 171 / 218 -->