<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>
<body>
    <!-- <?php
        $name = "Daviduv blog!";
    ?>
    <h1><?php echo $name ?></h1> -->
    <header>
        <h1>Uvodni strana</h1>
    </header>
    <main>
        <h2>Nadpis</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Cum dolor itaque ullam reprehenderit libero ratione corrupti deserunt quidem quaerat alias labore minima, 
            fuga voluptate quia omnis inventore est, eligendi eius?
        </p>
    </main>
    <?php include "footer.php"; ?>
    <?php 
        // Promene
        $jmeno = "Mango";
        $rokNarozeni = 1990;

        // datove typy
        $jop = "hacker"; // string
        $mzda = 100000; // number
        $vyska = 185.5; // float

        // concatenation
        echo $jmeno. " " .$rokNarozeni;

        // ukladani HTML tagu
        $nadpis = "<h1>Nadpis</h1>";
        echo $nadpis;
        
        // pole
        $zamestnanci = ["David", "Anna", "Marek", "Jana"];
        $mzdy = [20000, 30000, 15000, 30000];
        $max = [20, "David", "<h1>Nadpis</h1>"];

        echo $zamestnanci[0];
        echo "<br>";
        print_r($zamestnanci);
        echo "<br>";

        // Asociativni pole
        $jmena = ["David", "Anna", "Marek", "Jana"];
        echo $jmena[0];
        echo "<br>";

        $simpsonovi = [
            "Bart" => "rostak", 
            "Marge" => "modre vlasy", 
            "Homer" => "kobliha",
        ];

        echo $simpsonovi["Bart"];
        echo "<br>";
        echo $simpsonovi["Marge"];
        echo "<br>";
        echo $simpsonovi["Homer"];
        echo "<br>";
        print_r($simpsonovi);
    ?>
</body>
</html>