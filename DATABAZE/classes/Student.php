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

        $stmt = $connection->prepare($sql);

        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        try {
            if ($stmt->execute()) {
                return $stmt->fetch();
            } else {
                throw new Exception("Získání dat o jednom studentovi selhalo");
            }
        } catch (Exception $e) {
            error_log("Chyba u funkce getStudent, získání dat selhalo\n", 3, "../errors/error.log");
            echo "Typ chyby: " . $e->getMessage();
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

        $stmt = $connection->prepare($sql);

        $stmt->bindValue(":first_name", $first_name, PDO::PARAM_STR);
        $stmt->bindValue(":second_name", $second_name, PDO::PARAM_STR);
        $stmt->bindValue(":age", $age, PDO::PARAM_INT);
        $stmt->bindValue(":life", $life, PDO::PARAM_STR);
        $stmt->bindValue(":college", $college, PDO::PARAM_STR);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);

        try {
            if ($stmt->execute()) {
                return true;
            } else {
                throw new Exception("Získání dat o jednom studentovi selhalo");
            }
        } catch (Exception $e) {
            error_log("Chyba u funkce getStudent, získání dat selhalo\n", 3, "../errors/error.log");
            echo "Typ chyby: " . $e->getMessage();
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

        $stmt = $connection->prepare($sql);

        $stmt->bindValue(":id", $id, PDO::PARAM_INT);

        try {
            if ($stmt->execute()) {
                return true;
            } else {
                throw new Exception("Získání dat o jednom studentovi selhalo");
            }
        } catch (Exception $e) {
            error_log("Chyba u funkce getStudent, získání dat selhalo\n", 3, "../errors/error.log");
            echo "Typ chyby: " . $e->getMessage();
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

        $stmt = $connection->prepare($sql);

        try {
            if ($stmt->execute()) {
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                throw new Exception("Získání dat o jednom studentovi selhalo");
            }
        } catch (Exception $e) {
            error_log("Chyba u funkce getStudent, získání dat selhalo\n", 3, "../errors/error.log");
            echo "Typ chyby: " . $e->getMessage();
        }
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

        $stmt = $connection->prepare($sql);

        $stmt->bindValue(":first_name", $first_name, PDO::PARAM_STR);
        $stmt->bindValue(":second_name", $second_name, PDO::PARAM_STR);
        $stmt->bindValue(":age", $age, PDO::PARAM_INT);
        $stmt->bindValue(":life", $life, PDO::PARAM_STR);
        $stmt->bindValue(":college", $college, PDO::PARAM_STR);

        try {
            if ($stmt->execute()) {
                $id = $connection->lastInsertId();
                return $id;
            } else {
                throw new Exception("Získání dat o jednom studentovi selhalo");
            }
        } catch (Exception $e) {
            error_log("Chyba u funkce getStudent, získání dat selhalo\n", 3, "../errors/error.log");
            echo "Typ chyby: " . $e->getMessage();
        }
    }
}
?>