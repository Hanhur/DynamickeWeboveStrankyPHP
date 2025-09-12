<?php
// Chyba
/** 
 * běžná chyba, která se může vyskytnout kdekoli 
 * syntaktické chyby - chybějící středník 
 * program funguje, ale ne tak, jak by měl (např. špatně zadaná podmínka) 
 * přístup k neexistujícímu indexu v poli 
 * bezpečnostní chyby - chybí ochrana proti SQL injection 
 */

// Výjimka = Exception 
/** 
 * neočekávaná nebo vyjímečná situace 
 * Pokus o přístup k neexistujícímu souboru 
 * Neplatné vstupy od uživatele 
 * Problémy při připojení k databázi 
 */

function string_length($str, $min_length)
{
    if (strlen($str) < $min_length) {
        throw new Exception("Váš text je příliš krátký");
    }
    return true;
}
try {
    string_length("sup", 5);
    echo "Váš text je v pořádku";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>