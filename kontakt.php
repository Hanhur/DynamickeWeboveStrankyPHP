<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
</head>
<body>
    <header>
        <h1>Kontakt</h1>
    </header>

    <main>
        <section>
            <h1>Formulář</h1>
            <form>
                <!-- readonly, autofocus, disabled, required -->
                <!-- readonly - můžeme jen číst, nemůžeme měnit
                autofocus - nastaví se kurzor po načtení stránky
                disabled - není možné s elementem pracovat (ale je vidět)
                required - povinné políčko -->
                <label for="firstName">Křestní jméno</label><br>
                <input type="text" name="first_name" id="firstName" placeholder="Křestní jméno" autofocus><br>
                <input type="text" name="second_name" placeholder="Příjmení" autofocus><br>
                <input type="password" name="password" placeholder="Heslo" required><br>
                <input type="email" name="email" placeholder="E-mail"><br>
                <input type="date" name="date"><br>
                <input type="hidden" name="form-type" value="kontakt">
                <textarea name="message" placeholder="Vaše zpráva"></textarea><br>
                <select name="color[]">
                    <optgroup label="hlavní barva">
                        <option value="red">Červená</option>
                        <option value="green">Zelená</option>
                        <option value="yellow" selected>Žlutá</option>
                    </optgroup>
                    <optgroup label="barva okraje">
                        <option value="red2">Červená</option>
                        <option value="green2">Zelená</option>
                        <option value="yellow2">Žlutá</option>
                    </optgroup>
                </select><br>
                <input type="radio" name="country" value="cr">ČR <br>
                <input type="radio" name="country" value="germany">Německo <br>
                <input type="radio" name="country" vaelu="portugal">Portugalsko <br>
                <br>
                <input type="checkbox" value="tricko" disabled>Tričko zdarma <br>
                <input type="checkbox" value="zalozka">Záložka do knížky <br>
                <input type="checkbox" value="el-kniha">Elektronická kniha <br>
                <br>
                <input type="number" name="weight" min="10" max="15"><br>
                <input type="url" value="https://www."><br>
                <br>
                <!-- <input type="submit" value="Registrovat"> -->
                <button>Odeslat</button>
            </form>
        </section>
        <section>
            <iframe style="border:none"
            src="https://frame.mapy.cz/s/denozopato" width="400" height="280"
            frameborder="0"></iframe><br>
            <a href="index.php">Zpět na úvodní stranu</a>
        </section>
    </main>
    
    <footer>
        <p>&copy; Všechna práva vyhrazena, David Šetek, 2023</p>
    </footer>
</body>
</html>