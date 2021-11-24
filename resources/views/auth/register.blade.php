<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">

</head>
<body>
    <div id="container">
        <div id="container2">
            <div id="lewa-gora">
                <img src="{{ asset('images/dentist-logo.png') }}" id="logo">
                <p id="lorem">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
        <div id="lewa-dol">
            <a href="{{ route('login') }}">
                <input type="button" name="login_przejscie" id="rejestracja" value="Login">
            </a>
            <p id="log">Jeśli posiadasz już konto</p>
        </div>
    </div>
</body>
</html>