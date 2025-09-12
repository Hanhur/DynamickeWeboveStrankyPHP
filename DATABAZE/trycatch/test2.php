<?php 

// phpinfo();

$n1 = 50;
$n2 = 0;

try {
    if ($n2 === 0) {
        throw new Exception("Dělení nulou je zakázané");
    }
    $result = $n1 / $n2;
    echo $result;
} catch (Exception $e) {
    error_log("Chyba dělení nulou\n", 3, "../errors/error.log");
    echo "Typ chyby: " . $e->getMessage();
}
?>