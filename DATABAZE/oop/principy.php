<?php
// Abstrakce 
// bankovní účet, spořící účet, podnikatelský účet 
// Dědičnost (inheritance)
// Polymorfismus (polymorphism)
/* 
Abstrakce umožňuje definovat a vytvářet objekty, které reprezentují reálné entity, 
jejichž vlastnosti a chování jsou podstatné pro daný problém. Abstrakce umožňuje vynechání 
nepodstatných detailů a soustředění se na hlavní aspekty. 

Dědičnost umožňuje definovat nové třídy na základě již existujících tříd. 
Třídy odvozené (potomkovské) zdědí vlastnosti a chování tříd rodičovských (nadtříd).

Polymorfismus umožňuje objektům stejného datového typu vykazovat různé chování na základě kontextu. 
To znamená, že můžeme mít více funkcí nebo metod se stejným názvem.
*/

// Logika
class Ucet
{
    private $pin;

    function __construct($first_name, $second_name, $pin)
    {
        $this->first_name = $first_name;
        $this->second_name = $second_name;
        $this->pin = $pin;
    }
    function createIncome()
    {
    }
    function createExpense()
    {
    }

    function description()
    {
        echo "Na vašem účtu je zůstatek XY Kč";
    }
}

class Bankaccount extends Ucet
{
}
class Saveaccount extends Ucet
{
}
class Businessaccount extends Ucet
{
    function description()
    {
        echo parent::description() . " Podnikatelé u nás mají vždy dveře otevřené";
    }
}

// použití
$account1 = new Bankaccount("David", "Šetek", 1234);
$account1->description();

echo "<br>";

$account2 = new Businessaccount("Harry", "Potter", 9875);
$account2->description();
?>