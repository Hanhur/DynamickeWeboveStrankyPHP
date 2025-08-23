<?php
/** 
 * 
 * Získá jednoho žáka z databáze podle ID 
 * 
 * @param object $connection - napojení na databázi 
 * @param integer $id - id jednoho konkrétního žáka 
 * 
 * @return mixed asociativní pole, které obsahuje informace o jednom konkrétním žákovi nebo vrátí null, pokud žák nebyl nalezen 
 * 
 */

function getStudent($connection, $id)
{
    $sql = "SELECT * FROM student WHERE id = ?";

    $stmt = mysqli_prepare($connection, $sql);

    if ($stmt === false) {
        echo mysqli_error($connection);
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);

        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }
}

/** 
* 
* Updatuje informace o žákovi v databázi 
* 
* @param object $connection - napojení na databázi 
* @param string $first_name - křestní jméno žáka 
* @param string $second_name - příjmení žáka 
* @param integer $age - věk žáka 
* @param string $life - informace o žákovi 
* @param string $college - kolej žáka 
* @param integer $id - id žáka 
* 
* @return void 
* 
*/

function updateStudent($connection, $first_name, $second_name, $age, $life, $college, $id)
{
    $sql = "UPDATE student SET first_name = ?, second_name = ?, age = ?, life = ?, college = ? WHERE id = ?";

    $stmt = mysqli_prepare($connection, $sql);

    if (!$stmt) {
        echo mysqli_error($connection);
    } else {
        mysqli_stmt_bind_param($stmt, "ssissi", $first_name, $second_name, $age, $life, $college, $id);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "Informace o žákovi byly upraveny";
        }
    }
}
?>