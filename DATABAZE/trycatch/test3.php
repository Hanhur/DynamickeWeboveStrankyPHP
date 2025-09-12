<?php

// try {
//     echo intdiv(12, 5);
// } catch (DivisionByZeroError $e) {
//     echo "Chyba: " . $e->getMessage();
// }

$n1 = 15;
$n2 = 0;

try {
    // nějaký kód včetně otevření souboru
    if ($n1 <= 10) {
        throw new Exception("Vaše číslo je menší nebo rovno 10");
    }
    return $n1 / $n2;
} catch (DivisionByZeroError $e) {
    echo "Chyba: " . $e->getMessage();
} catch (Exception $e) {
    // exception
    echo "Chyba: " . $e->getMessage();
} finally {
    // uzavři soubor
}
?>