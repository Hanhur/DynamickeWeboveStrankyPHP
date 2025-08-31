<?php
class Student
{
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

    public static function getStudent($connection, $id, $columns = "*")
    {
        $sql = "SELECT $columns FROM student WHERE id = :id";

        // $stmt = mysqli_prepare($connection, $sql);
        $stmt = $connection->prepare($sql);

        if ($stmt === false) {
            echo mysqli_error($connection);
        } else {
            // mysqli_stmt_bind_param($stmt, "i", $id);
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                // $result = mysqli_stmt_get_result($stmt);
                // return mysqli_fetch_array($result, MYSQLI_ASSOC);
                return $stmt->fetch();
            }
        }
    }
    // =====================================================================================================================================
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
     * @return boolean true - pokud je updatování žáka úspěšné
     * 
     */

    public static function updateStudent($connection, $first_name, $second_name, $age, $life, $college, $id)
    {
        $sql = "UPDATE student SET first_name = :first_name, second_name = :second_name, age = :age, life = :life, college = :college WHERE id = :id";

        // $stmt = mysqli_prepare($connection, $sql);
        $stmt = $connection->prepare($sql);

        if (!$stmt) {
            echo mysqli_error($connection);
        } else {
            // mysqli_stmt_bind_param($stmt, "ssissi", $first_name, $second_name, $age, $life, $college, $id);
            $stmt->bindValue(":first_name", $first_name, PDO::PARAM_STR);
            $stmt->bindValue(":second_name", $second_name, PDO::PARAM_STR);
            $stmt->bindValue(":age", $age, PDO::PARAM_INT);
            $stmt->bindValue(":life", $life, PDO::PARAM_STR);
            $stmt->bindValue(":college", $college, PDO::PARAM_STR);
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return true;
            }
        }
    }
    // =========================================================================================================================================
    /** 
     * 
     * Vymaže studenta z databáze podle daného ID 
     * 
     * @param object $connection - propojení s databází 
     * @param integer $id - id daného žáka 
     * 
     * @return boolean true - pokud dojde k úspěšnému vymazání žáka
     */

    public static function deleteStudent($connection, $id)
    {
        $sql = "DELETE FROM student WHERE id = :id";

        // $stmt = mysqli_prepare($connection, $sql);
        $stmt = $connection->prepare($sql);

        if ($stmt === false) {
            echo mysqli_error($connection);
        } else {
            // mysqli_stmt_bind_param($stmt, "i", $id);
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return true;
            }
        }
    }
    // =============================================================================================================================================
    /** 
     * 
     * Vrátí všechny žáky z databáze 
     * 
     * @param object $connection - připojení do databáze 
     *
     ** @return array pole objektů, kde každý objekt je jeden žák 
     *
     */
    public static function getAllStudents($connection, $columns = "*")
    {
        $sql = "SELECT $columns FROM student";

        // $result = mysqli_query($connection, $sql);
        $stmt = $connection->prepare($sql);

        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        // if ($result === false) {
        //     echo mysqli_error($connection);
        // } else {
        //     $allStudents = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //     return $allStudents;
        // }
    }
    // ==================================================================================================================================================
    /** 
     * 
     * Přidání žáka do databáze a přesměruje nás na profil žáka 
     * 
     * @param object $connection - připojení do databáze 
     * @param string $first_name - křestní jméno žáka 
     * @param string $second_name - příjmení žáka 
     * @param integer $age - věk žáka 
     * @param string $life - podrobnosti o žákovi 
     * @param string $college - kolej žáka 
     * 
     * @return int $id - id přidaného žáka
     */

    public static function createStudent($connection, $first_name, $second_name, $age, $life, $college)
    {
        $sql = "INSERT INTO student (first_name, second_name, age, life, college) VALUES (:first_name, :second_name, :age, :life, :college)";

        // $statement = mysqli_prepare($connection, $sql);
        $stmt = $connection->prepare($sql);

        if ($stmt === false) {
            echo mysqli_error($connection);
        } else {
            // mysqli_stmt_bind_param($stm, "ssiss", $first_name, $second_name, $age, $life, $college);
            $stmt->bindValue(":first_name", $first_name, PDO::PARAM_STR);
            $stmt->bindValue(":second_name", $second_name, PDO::PARAM_STR);
            $stmt->bindValue(":age", $age, PDO::PARAM_INT);
            $stmt->bindValue(":life", $life, PDO::PARAM_STR);
            $stmt->bindValue(":college", $college, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $id = $connection->lastInsertId(); 
                return $id;
            } //else {
            //     echo mysqli_stmt_error($stm);
            // }
        }
    }
}
?>