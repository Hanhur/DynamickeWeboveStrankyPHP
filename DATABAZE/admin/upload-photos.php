<?php

require "../classes/Database.php";
require "../classes/Auth.php";
require "../classes/Url.php";

session_start();

// Ověření, zda je uživatel přihlášený 
if (!Auth::isLoggedIn()) {
    die("Nepovolený přístup");
}

$user_id = $_SESSION["logged_in_user_id"]; // 2 

if (isset($_POST["submit"]) && isset($_FILES["image"])) {
    $db = new Database();
    $connection = $db->connectionDB();

    var_dump($_FILES["image"]);

    $image_name = $_FILES["image"]["name"];
    $image_size = $_FILES["image"]["size"];
    $image_tmp_name = $_FILES["image"]["tmp_name"];
    $error = $_FILES["image"]["error"];

    if ($error === 0) {
        if ($image_size > 9000000) {
            $error_message = "Váš soubor je příliš veliký";
            echo $error_message;
        } else {
            $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
            $image_extension_lower_case = strtolower($image_extension);
            $allowed_extensions = ["jpg", "jpeg", "png"];

            if (in_array($image_extension_lower_case, $allowed_extensions)) {
                //sestavujeme unikátní název obrázku 
                $new_image_name = uniqid("IMG-", true) . "." . $image_extension;
            } else {
                Url::redirectUrl("/DATABAZE/admin/photos.php");
            }
        }
    } else {
        Url::redirectUrl("/DATABAZE/admin/photos.php");
    }
}

?>