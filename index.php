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
    echo($school_name);
    echo "<br>";
    echo($school_name);
    echo "<br>";
    echo($school_name);

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
?>