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
    echo $jmeno . " " . $rokNarozeni;

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
    echo "<br>";
    // programátor, designer, hacker
    $pozice = "programator";
    if ($pozice == "programator") {
        echo "Jaké znáš programovací jazyky";
    } elseif ($pozice == "designer") {
        echo "Jaké znáš nástroje pro práci s designem";
    } elseif ($pozice == "hacker") {
        echo "Jaké znáš typy útoků";
    } else {
        echo "Chyba, tuto pozici neznám";
    }
    echo "<br>";

    /* operátory*/
    // rovná se ==
    // identická shoda ===
    // porovnání <, >, <=, >=, <>
    // nerovná se !=
    // nejsou identické !==
    if (5 !== "5") {
        echo "Je to pravda";
    }

    /* logické operátory */
    // // And (&&)
    // // Jmenuji se David a zároveň bydlím v ČB
    // // true = jmenuji se David a jsem z ČB
    // // false = jmenuji se David a jsem z Prahy
    // // false = jmenuji se Petr a jsem z ČB
    // // false = jmenuji se Petr a jsem z Prahy
    // // && - a zároveň
    // // Je mi více jak 18 a zároveň méně než 30
    // if (ageDavid > 18 && ageDavid < 30){
    // // když obě dvě jsou pravdivé
    // } else {
    // // když je jedna z nich nepravdivá,
    // // obě jsou nepravdivé
    // }// Or (||)
    // // Jmenuji se David nebo bydlím v ČB
    // // true = jmenuji se David a jsem z ČB
    // // true = jmenuji se David a jsem z Prahy
    // // true = jmenuji se Petr a jsem z ČB
    // // false = jmenuji se Petr a jsem z Prahy
    // //|| - nebo
    // // Jmenuji se David nebo jsem starší 18 let
    // if(nameDavid == "David" || ageDavid > 18){
    // // když jsou obě pravda
    // // když je alespoň jedna z nich pravda
    // } else {
    // // když jsou obě nepravda
    // }
    
    /* logické operátory */
    // And (&&) - a zároveň
    // true = true true
    // false = true false
    // false = false true
    // false = false false
    // Je mi více jak 18 a zároveň méně než 30
    $age = 15;
    if ($age > 18 && $age < 30) {
        echo "Je to true";
    } else {
        echo "Je to false";
    }
    echo "<br>";// Or (||)
    // true = true true
    // true = true false
    // true = false true
    // false = false false
    // Jmenuji se David nebo jsem starší 18 let
    $name = "Markus";
    if ($name === "David" || $age > 18) {
        echo "Je to pravda = true";
    } else {
        echo "Je to nepravda = false";
    }
    echo "<br>";
    // Switch
    $job = "ucetni";
    switch ($job) {
        case "hacker":
            echo "Jaké znáte typy útoků?";
            break;
        case "programator":
            echo "Jaké znáte programovací jazyky?";
            break;
        case "sekretarka":
            echo "Jaké funkce v excelu znáte?";
            break;
        default:
            echo "Pro tuto pozici nemám žádnou otázku";
    }
    echo "<br>";
    echo "pokračuji za switchem";

    // Cyklus while
    $pocitadlo = 0;
    while ($pocitadlo < 10) {
        echo "Ahoj";
        echo "<br>";
        $pocitadlo = $pocitadlo + 1;
    }

    // Cyklus for
    for ($i = 0; $i <= 10; $i++) {
        echo $i;
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    for ($j = 10; $j > 0; $j--) {
        echo $j;
        echo "<br>";
    }

    // Cyklus foreach
    $jmena = ["David", "Jane", "Markus", "Anna"];
    foreach ($jmena as $a) {
        echo $a;
        echo "<br>";
    }

    // 1. vytvořte podmínku s if, else a ifelse tak, aby výsledkem byl text "Učím se PHP".Podmínka může vypadat jakkoliv
    // $mujJazyk = "PHP";
    // if ($mujJazyk == "PHP") {
    //     echo "Učím se " . $mujJazyk;
    // } elseif ($mujJazyk == "JS") {
    //     echo "Učím se " . $mujJazyk;
    // } else {
    //     echo "Učím se jazyk, ale nevím, jak se jmenuje.";
    // }
    // echo "<br>";
    // // 2. vypište pomocí cyklu for čísla od 0 do 10
    // for ($i = 0; $i <= 10; $i++) {
    //     echo $i;
    //     echo "<br>";
    // } //3. uložte do proměnné $jazyk jeden z jazyků PHP, JS, HTML. Použijte switch, abyste vypsali větu "Mám rád + doplnění příslušného jazyka, který je v proměnné $jazyk".$jazyk = "PHP";
    // switch ($jazyk) {
    //     case "PHP":
    //         echo "Máme rádi " . $jazyk;
    //         break;
    //     case "JS":
    //         echo "Máme rádi " . $jazyk;
    //         break;
    //     case "HTML":
    //         echo "Máme rádi " . $jazyk;
    //         break;
    //     default:
    //         echo "Nevíme, jaký jazyk máme rádi";
    // }
    
    //1. část
    // function pozdrav()
    // {
    //     echo "Ahoj hráči";
    //     echo "<br>";
    // }
    // ;
    // pozdrav();
    // echo "nějaký kód";
    // pozdrav();
    // pozdrav();
    // echo "nějaký další kód";
    // pozdrav();
    // //2. část
    // // function pozdrav()
    // // {
    // //     echo "Ahoj, hráči";
    // //     echo "<br>";
    // // }
    // function score()
    // {
    //     echo "Tvoje skóre je " . (20 + 30);
    // }
    // function init()
    // {
    //     pozdrav();
    //     score();
    // }
    // init();

    function pozdrav($jmeno)
    {
        echo "Ahoj " . $jmeno;
        echo "<br>";
    }
    pozdrav("David");
    pozdrav("Petr");
    pozdrav("Anna");
    pozdrav("Jana");
    pozdrav("Markus");
    function calculator($n1, $n2)
    {
        $vysledek = $n1 + $n2;
        echo $vysledek;
        echo "<br>";
    }
    calculator(10, 30);
    calculator(100, 40);
    calculator(500, 80);
    ?>
</body>

</html>