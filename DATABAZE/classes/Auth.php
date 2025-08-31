<?php 
/** 
* 
* Ověřuje, zda je uživatel přihlášený nebo ne 
* 
* @return boolean true pokud je uživatel přihlášený, jinak false 
*/ 
    class Auth
    {
        public static function isLoggedIn()
        {
            return isset($_SESSION["is_logged_in"]) and $_SESSION["is_logged_in"];
        }
    }
?>