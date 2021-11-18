<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="rejestracja.css">
</head>
<body>
    <div id="container">
        <div id="lewa">
            <img src="dentist-3249382_960_720.png" id="logo">
            <p id="lorem">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <form>
                <a href="logowanie.php">
                    <input type="button" name="login_przejscie" id="rejestracja" value="Login">
                </a>
                <p id="log">Jeśli posiadasz już konto</p>
            </form>
        </div>
        <div id="formularz">
            <p id="pacjent">Zarejestruj się</p>
            <form id="rejestracja_formularz">
                <div class="divy_form">
                    <input type="text" placeholder="Login" id="login" name="login" class="register">
                    <input type="text" placeholder="Imię i Nazwisko" id=imie name="name" class="register">
                </div>
                <div class="divy_form">
                    <input type="password" placeholder="Hasło" id="haslo" name="password" class="register">
                    <input type="email" placeholder="mail" id=imie name="email" class="register">
                </div>
                <div class="divy_form">
                    <input type="password" placeholder="Powtórz hasło" id="haslo" name="password_repeat" class="register">
                    <input type="tel" placeholder="Numer telefonu" id=imie name="phone_number" class="register">
                </div>
                <input type="submit" name="submit_register" id="zarejestruj" value="Zarejestruj się">
            </form>
        </div>
    </div>
</body>
</html>