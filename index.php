<?php
echo "David Šetek";
echo "<br>";
echo 100;
echo "<br>";
echo "České Budějovice";
echo "<br>";
echo 666;
echo "<br>";

var_dump("Harry Potter");
echo "<br>";
var_dump(100);
echo "<br>";
var_dump(58.9);
echo "<br>";

$school_name = "Bradavice";
$students_number = 100;
echo ($school_name);
echo "<br>";
echo ($school_name);
echo "<br>";
echo ($school_name);

echo "<br>";

// Základní datové typy
$school_name = "Bradavice"; // text - string
var_dump($school_name);
echo "<br>";

$number_of_students = 980; // celé číslo - integer
var_dump($number_of_students);
echo "<br>";

$average_of_school = 2.3; // desetinné číslo - float
var_dump($average_of_school);

echo "<br>";

// Proměnné a HTML
$school_name = "Bradavice";
echo "<h1>$school_name</h1>";

$sub_heading = "Škola čar a kouzel";
echo "<h2>$sub_heading</h2>";

$about_us_paragraph = "Lorem ipsum dolor sit amet consectetur,
    adipisicing elit. Aliquam illo dolore sunt distinctio rem
    reprehenderit? Voluptatibus iste laboriosam ducimus veritatis atque
    accusamus optio ipsam quam, impedit at vitae exercitationem omnis!";
echo "<p>$about_us_paragraph</p>";

// Odkazy
$link_text = "Můj YouTube kanál";
echo "<a href=\"https://www.youtube.com/channel/UCpUD5k7SOjsiPjlVV77TB7g\">$link_text</a>";

echo "<br>";

echo '<a href="./stranky/kontakt.php">Kontaktujne nas</a>';

echo "<br>";
// Pravda, nepravda = true, false, boolean
$kolej = false;
$adult = false;

$is_logged = true;
$database_connection = true;

echo "Přihlášení uživatele: $is_logged";
echo "<br>";
echo "Napojení do databáze: $database_connection";

echo "<br>";
// Null
$kolej = null;
echo $kolej;
$kolej = "Nebelvír";
echo $kolej;

echo "<br>";

// Matematické operace
$students_2022 = 100;
$students_2023 = 50;
$result1 = ($students_2023 - $students_2022) * 5;
$result2 = $students_2023 + $students_2022;
$result3 = $students_2023 * $students_2022;
$result4 = $students_2023 / $students_2022;
echo "Výsledek: $result1";
echo "<br>";
echo "Výsledek: $result2";
echo "<br>";
echo "Výsledek: $result3";
echo "<br>";
echo "Výsledek: $result4";

echo "<br>";

// Spojování proměnných
$first_name = "Harry";
$second_name = "Potter";
$friend_first_name = "Ron";
echo $first_name . " " . $second_name;
echo "<br>";
echo $first_name . " a jeho kamarád " . $friend_first_name;

echo "<br>";

// Type conversion
$year_price = "1500";
$year_count = "7";
$result_price = $year_price * $year_count;
echo $result_price;
echo "<br>";
var_dump($result_price);
echo "<br>";
var_dump($year_price);
echo "<br>";
var_dump($year_count);

echo "<br>";

// Negace
$database_connection = true;
var_dump(!$database_connection);

echo "<br>";

// Výpis textu a proměnné
$first_name = "Harry";
echo "Ahoj " . $first_name;
echo "<br>";
echo "Ahoj $first_name";
echo "<br>";
echo "Ahoj {$first_name}";

echo "<br>";

// Datové typy
$main_name = "Bradavice"; // text = string
$students_count = 780; // celé číslo = integer
$grade_point_average = 3.4; // desetinné číslo = float
$adult = true; // pravdivostní hodnota = boolean

echo "<br>";

// Pole (array)
$student_1 = "Harry";
$student_2 = "Hermiona";
$student_3 = "Ron";
$students = ["Harry", "Ron", "Hermiona"];
var_dump($students);
echo "<br>";
echo $students[0];
echo "<br>";
echo $students[1];
echo "<br>";
echo $students[2];

echo "<br>";

// Pole (array)
$students = [
    1 => "Harry",
    4 => "Ron",
    "Hermiona"
];
var_dump($students);
echo "<br>";
echo $students[1];
echo "<br>";
echo $students[4];
echo "<br>";
echo $students[5];

echo "<br>";

// Asociativní pole (array)
$students = [
    "jedna" => "Harry",
    "ctyri" => "Ron",
    "pet" => "Hermiona"
];
var_dump($students);
echo "<br>";
echo $students["jedna"];
echo "<br>";
echo $students["ctyri"];
echo "<br>";
echo $students["pet"];
echo "<br>";
$student1 = [
    "first_name" => "Harry",
    "second_name" => "Potter",
    "college" => "Nebelvír",
    "age" => 15
];
echo $student1["second_name"];

echo "<br>";

// Asociativní pole (array)
$name = "Harry";
$second_name = "Potter";
$student1 = [
    "first_name" => $name,
    "second_name" => $second_name,
    "college" => "Nebelvír",
    "age" => 15,
    "result" => null
];
echo $student1["first_name"];
$student2 = [$name, $second_name];

echo "<br>";

// Dvoudimenzionální pole
$students = [
    [
        "first_name" => "Harry",
        "second_name" => "Potter",
        "age" => 15
    ],
    [
        "first_name" => "Hermiona",
        "second_name" => "Grangerová",
        "age" => 14
    ],
    [
        "first_name" => "Ron",
        "second_name" => "Weasley",
        "age" => 15
    ]
];
echo $students[0]["first_name"];
echo "<br>";
echo $students[2]["second_name"];
echo "<br>";
echo $students[1]["age"];

echo "<br>";

// Foreach cyklus
$students = ["Harry", "Ron", "Hermiona", "David", "Malfoy"];
foreach ($students as $one_student) {
    echo "<p>$one_student</p>";
    // echo "<br>";
}
// echo $students[0];
// echo "<br>";
// echo $students[1];
// echo "<br>";
// echo $students[2];

echo "<br>";

// Foreach cyklus
$students = ["Harry", "Ron", "Hermiona", "David", "Malfoy"];
foreach ($students as $index => $one_student) {
    // $index = $index + 1;
    // $index += 1;
    $index++;
    echo $index . ". " . $one_student;
    echo "<br>";
}

echo "<br>";

// Foreach cyklus
$student1 = [
    "jmeno" => "Harry",
    "příjmení" => "Potter",
    "věk" => 15
];
foreach ($student1 as $index => $one_information) {
    echo $index . ": " . $one_information;
    echo "<br>";
}

echo "<br>";

// Cyklus foreach - na práci s polem
// Cyklus for - kolikrát se má cyklus provést
for ($i = 20; $i >= 1; $i = $i - 1) {
    echo $i . ". Harry";
    echo "<br>";
}

echo "<br>";

// 10x vypiš odstavec s textem Harry Potter
$first_name = "Harry Potter";
for ($i = 1; $i <= 10; $i = $i + 1) {
    echo "<p>$first_name</p>";
}

echo "<br>";

// Cyklus foreach - na práci s polem
// Cyklus for - kolikrát se má cyklus provést
for ($i = 1; $i <= 5; $i++) {
    echo "<a href='stranka$i.php'>Další stránka</a>";
    echo "<br>";
}

echo "<br>";

// Cyklus foreach - na práci s polem
// Cyklus for - kolikrát se má cyklus provést
// Cyklus while - nevíme kolikrát
$month = 1;
while ($month <= 12) {
    echo $month;
    echo "<br>";
    $month = $month + 1;
}

echo "<br>";

// Cyklus foreach - na práci s polem
// Cyklus for - kolikrát se má cyklus provést
// Cyklus while - nevíme kolikrát
$test_questions = [
    "1. otázka",
    "2. otázka",
    "3. otázka",
    "4. otázka",
    "5. otázka"
];
$maximum = 5;
$counter = 0;
while ($counter < $maximum) {
    echo $test_questions[$counter];
    echo "<br>";
    $counter++;
}

echo "<br>";

// Podmínky
if (5 === "5") {
    echo "Ano, je to pravda";
} else {
    echo "Není to pravda";
}
$name = "Harry";
// ==
// ===
// !=
// >, <
// >=, <=

echo "<br>";

// Podmínky a proměnné
$college = "Nebelvír";
if ($college === "Nebelvír") {
    echo "Vstupte";
} else {
    echo "Nemáte oprávnění vstoupit";
}

echo "<br>";

// Podmínky a empty
$articles = ["Článek 1"];
// var_dump(empty($articles));
if (empty($articles)) {
    echo "Neexistují žádné články";
    exit();
}
// Vypsání článků z databáze
echo "<br>";
echo "Další kód na stránce";

echo "<br>";

// Podmínky a elseif
$hour = 0;
$message = null;
if ($hour < 9) {
    $message = "Dobré ráno";
} elseif ($hour < 12) {
    $message = "Dobré dopoledne";
} elseif ($hour == 12) {
    $message = "Dobré poledne";
} elseif ($hour < 18) {
    $message = "Dobré odpoledne";
} else {
    $message = "Dobrý večer";
}
echo $message;

echo "<br>";

// Podmínky a logické operátory - and, or
$age = 80;
if ($age >= 18 and $age < 65) {
    echo "Dospělý, není v důchodovém věku";
} elseif ($age < 18) {
    echo "Dospívající";
} else {
    echo "Člověk v důchodovém věku";
}
// and - a zároveň
// true, true = true
// true, false = false
// false, true = false
// false, false = false

echo "<br>";

// Podmínky a logické operátory - and, or
// 12345, 66778
$password = "12345";
if ($password === "12345" or $password === "66778") {
    echo "Dveře se otevírají. Můžete vstoupit.";
} else {
    echo "Neplatný kód. Zkuste to prosím znovu.";
}
// or - nebo
// true, true = true
// true, false = true
// false, true = true
// false, false = false

echo "<br>";

// Switch statement
$day = "so";
switch ($day) {
    case "po":
        echo "Pondělí";
        break;
    case "ut":
        echo "Úterý";
        break;
    case "st":
        echo "Středa";
        break;
    case "ct":
        echo "Čtvrtek";
        break;
    case "pa":
        echo "Pátek";
        break;
    case "so":
        echo "Sobota";
        break;
    case "ne":
        echo "Neděle";
        break;
    default:
        echo "Špatně zadaná zkratka dne.";
        break;
}

echo "<br>";
?>