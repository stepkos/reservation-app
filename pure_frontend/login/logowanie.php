<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="logowanie.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    </style>
</head>
<body>
    <div id="container">
        <div id="lewa">
            <img src="dentist-3249382_960_720.png" id="logo">
            <p id="lorem">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <form>
                <a href="rejestracja.php">
                    <input type="button" name="registration" id="rejestracja" value="Rejestracja">
                </a>
                <p id="log">Jeśli nie posiadasz jeszcze konta</p>
            </form>
        </div>
        <div id="formularz">
            <p id="pacjent">Zaloguj się jako pacjent</p>
            <form id="logowanie">
                <input type="text" placeholder="Login" class="login" name="login"></br>
                <input type="password" placeholder="Hasło" class="login" name="password"></br>
                <input type="submit" name="submit_login" id="zaloguj" value="Zaloguj">
            </form>
        </div>
    </div>
</body>
</html>