<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naše první stránky</title>
</head>
<body>
    <?php require "./assets/header.php"; ?>
    <main>
        <section>
            <h1>Historie firmy</h1>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing
                elit. Neque sequi, <br> repellendus harum illum, blanditiis
                <strong>Tučné písmo</strong> velit voluptate error reiciendis illo
                beatae possimus numquam fugiat dolore enim accusamus, reprehenderit
                ipsum totam tempora!
            </p>

            <a href="https://www.google.com/" target="_blank">Vyhledávač Google</a><br>
            <a href="https://www.youtube.com/@MagicMusicGroup" target="_blank">YouTube kanál</a>
        </section>
        <section> 
            <ol> 
                <li>Nůžky</li> 
                <li>Rozstříhej papír</li> 
                <li>Slož papír</li> 
            </ol> 
            <ul> 
                <li>Rohlík</li> 
                <li>Housky</li> 
                <li>Kečup</li> 
                <li>Čaj</li> 
            </ul> 
            <ul> 
                <li>
                    <a href="index.php">Úvodní strana</a>
                </li> 
                <li>
                    <a href="sluzby.php">Služby</a>
                </li> 
                <li>
                    <a href="kontakt.php">Kontakt</a>
                </li> 
            </ul> 
        </section>
        <section>
            <h1>Odkazy na další stránky webu</h1>
            <a href="sluzby.php">Naše služby</a><br>
            <a href="cenik.php">Cenik</a><br>
            <a href="kontakt.php">Kontaktujte nás</a><br>
            <img src="./img/styles.png" alt="">
        </section>
    </main>

    <?php require "./assets/footer.php"; ?>
</body>
</html>