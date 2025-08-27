<?php
// Objektově orientované programování = OOP 
// kratší, přehlednější, srozumitelnější
// procedurální programování

$person = [
    "first_name" => "David",
    "second_name" => "Šetek",
    "age" => 35
];

echo $person["first_name"];
echo "<br>";
echo $person["second_name"];
echo "<br>";
echo $person["age"];

// =========================================================================

$book1 = [
    "title" => "Harry Potter a Kámen mudrců",
    "author" => "J. K. Rowling",
    "year" => 1997
];

$book2 = [
    "title" => "Harry Potter a Tajemná komnata",
    "author" => "J. K. Rowling",
    "year" => 1998
];

echo "<br>";
echo $book2["year"];

// =========================================================================

// logika 
// class Book
// {
//     public $title;
//     public $author;
//     public $year;
// }

// class Book
// {
//     public $title = "Není zadaný název knihy";
//     public $author = "Není zadaný autor";
//     public $year = 0;
// }

// // použití 
// $book_1 = new Book();
// $book_2 = new Book();

// $book_1->title = "Harry Potter a Kámen mudrců";
// $book_1->author = "J. K. Rowling";
// $book_1->year = 1997;
// $book_1->price = 899;

// $book_2->title = "Harry Potter a Tajmená komnata";
// $book_2->author = "J. K. Rowling";
// $book_2->year = 1998;

// echo "<br>";
// echo $book_1->author;
// echo "<br>";
// echo $book_1->title;
// echo "<br>";
// echo $book_2->year;
// echo "<br>";
// echo $book_1->price;

// ==========================================================================

// logika 
class Book
{
    function __construct($title, $author, $year, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->price = $price;
    }

    function bookDescription()
    {
        return "Název knihy: " . $this->title . "<br>Autorka: " . $this->author . "<br>Rok vydání: " . $this->year;
    }

    function changePriceAmount($amount)
    {
        $this->price = $this->price + $amount;
    }

    function changePricePercentage($percentage)
    {
        $this->price = $this->price + ($this->price * $percentage / 100);
    }
}
// použití 
$book_1 = new Book("Harry Potter a Kámen mudrců", "J. K. Rowling", 1997, 500);
$book_2 = new Book("Harry Potter a Tajmená komnata", "J. K. Rowling", 1998, 800);
$book_3 = new Book("Harry Potter a vezeň z Azkabanu", "J. K. Rowling", 1999, 1000);

echo "<br>";
echo $book_1->bookDescription();
echo $book_1->bookDescription();
echo $book_1->bookDescription();

echo "<br>";
echo $book_2->bookDescription();
echo $book_2->bookDescription();
echo $book_2->bookDescription();

echo "<br>";
echo $book_1->price;
echo "<br>";
echo $book_1->changePriceAmount(-50);
echo "<br>";
echo $book_1->price;

echo "<br>";
echo $book_1->price;
echo "<br>";
$book_1->changePricePercentage(-10);
echo "<br>";
echo $book_1->price;
echo "<br>";
$book_1->changePricePercentage(30);
echo "<br>";
echo $book_1->price;

/* 
ZADANI 
Vytvoř classu pro auto (class Car), které má zadanou barvu, 
počet sedadel, značku (color, seats, brand). Hodnoty těchto tří atributů si vymysli. 
Podle této classy vytvoř 3 auta. Tři libovolné vlastnosti vypiš do stránky. 
*/

// logika 
class Car
{
    function __construct($color, $seats, $brand)
    {
        $this->color = $color;
        $this->seats = $seats;
        $this->brand = $brand;
    }
}

// použití 
$car1 = new Car("hnědá", 4, "Nissan");
$car2 = new Car("černá", 5, "Ferrari");
$car3 = new Car("červená", 4, "BMW");

echo "<br>";
echo $car1->color;
echo "<br>";
echo $car2->seats;
echo "<br>";
echo $car3->brand;

// =================================================================================

//--- 4 principy OOP --- 
// Zapouzdření (encapsulation) 
// -private = atributy a metody jsou přístupné pouze uvnitř classy, nejsou k dispozici v classe, která dědí
// -protected = atributy a metody jsou přístupné v hlavní classe i v classach, které z hlavní dědí
// -public = atributy a metody jsou přístupné i mimo classu (zvenčí)
// Abstrakce (abstraction) 
// Dědičnost (inheritance) 
// Polymorfismus (polymorphism) 

// logika 
class Bankaccount
{
    private $pin;
    public $first_name;
    public $second_name;
    public $income;
    public $expense;
    public $movements;

    function __construct($first_name, $second_name, $pin)
    {
        $this->first_name = $first_name;
        $this->second_name = $second_name;
        $this->pin = $pin;
        $this->income = 0;
        $this->expense = 0;
        $this->movements = [];
    }

    function pin_checker($user_pin)
    {
        if ($user_pin !== $this->pin) {
            header("Location: http://localhost/DATABAZE/oop/wrongpin.php");
            exit();
        }
    }

    function create_income($amount)
    {
        $this->income = $this->income + $amount;
        $this->add_movement($amount);
    }

    function create_expense($amount)
    {
        $this->expense = $this->expense + $amount;
        $this->add_movement($amount);
    }

    private function add_movement($money)
    {
        $this->movements[] = $money;
    }
}

// použití 
$account1 = new Bankaccount("David", "Šetek", 1234);

echo $account1->expense;
$account1->create_expense(-500);
$account1->create_expense(-300);
$account1->create_expense(-200);
echo "<br>";
echo $account1->expense;

$account1->create_income(500); 
$account1->create_expense(-300); 
$account1->create_income(200);
echo "<br>"; 
var_dump($account1->movements);

echo "<br>";
echo $account1->first_name;
echo "<br>";
echo $account1->second_name;
echo "<br>";

// $account1->pin_checker(1234);

echo $account1->income;
echo "<br>";
echo $account1->expense


?>