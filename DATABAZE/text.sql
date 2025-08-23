Základy SQL jazyka (1. část)===================================================================

Vybere všechny sloupečky z tabulky student
SELECT * FROM student

Vybere sloupec s názvem first_name z tabulky student
SELECT first_name FROM student

Vybere všechny sloupečky z tabulky student, kde id se rovná jedné
SELECT * FROM student
WHERE id = 1

Vybere sloupeček first_name a second_name z tabulky student, kde sloupeček college se rovná hodnotě Zmijozel
SELECT first_name, second_name FROM student
WHERE college = "Zmijozel";

Nevrátí nic, protože záznam s ID 100 neexistuje
SELECT * FROM student
WHERE id = 100

Základy SQL jazyka (2. část)============================================================

SELECT * FROM `article`
WHERE title = "First post"

Nerovná se
SELECT * FROM `article`
WHERE title != "First post";

Spojování NEBO
SELECT * FROM `article`
WHERE title = "First post" OR title = "Second post";

AND
SELECT * FROM `article`
WHERE title = "First post" AND content = "Text of the first post";

Na více řádků
SELECT *
FROM `article`
WHERE title = "First post" AND content = "Text of the first post";

Základy SQL jazyka (3. část)==============================================================

Seřazení podle jména vzestupně (od A do Z)
SELECT * FROM student
ORDER BY first_name ASC;

Seřazení podle jména sestupně (od Z do A)
SELECT * FROM student
ORDER BY first_name DESC;


SQL příkazy na vložení dat do tabulky================================================================

INSERT INTO student
VALUES (300, "David", "Šetek", 36, "Podrobnosti o žákovi", "Nebelvír")

INSERT INTO student (first_name, second_name, age)
VALUES ("Martin", "Krutý", 15)

V tabulce student změň křestní jméno na David u záznamu, který má ID rovno jedné.===================
UPDATE student
SET first_name = "David"
WHERE id = 1

Takto změníme více sloupců najednou===============================================================
UPDATE student
SET first_name = "David",
    second_name = "Potter"
WHERE id = 305