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
                <p id="lorem">Witamy w aplikacji gabinetu dentystycznego Healfy<br/> już tylko kilka kroków dzieli Cie od wygodnego planowania swoich wizyt u stomatologa!</p>
            </div>
            <div id="formularz">
                <p id="pacjent">Zarejestruj się</p>
                <form id="rejestracja_formularz" method="POST">
                    @csrf

                    <div class="divy_form">

                        @error('name')
                            <strong>{{ $message }}</strong>
                        @enderror
                        <input type="text" placeholder="Imię i Nazwisko" id=imie name="name" class="register" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    </div>
                    <div class="divy_form">

                        @error('email')
                            <strong>{{ $message }}</strong>
                        @enderror
                        <input type="email" placeholder="Email" id="login" name="email" class="register" value="{{ old('email') }}" autocomplete="email" required>

                        <input type="tel" placeholder="Numer telefonu" id=imie name="phone_number" class="register">

                    </div>
                    <div class="divy_form">

                        @error('password')
                            <strong>{{ $message }}</strong>
                        @enderror
                        <input type="password" placeholder="Hasło" id="haslo" name="password" class="register" required autocomplete="new-password">

                        <input type="password" placeholder="Powtórz hasło" id="haslo" name="password_confirmation" class="register" required autocomplete="new-password">

                    </div>

                    <input type="submit" id="zarejestruj" value="Zarejestruj się">

                </form>
            </div>
        </div>
        <div id="lewa-dol">
            <a href="{{ route('login') }}">
                <input type="button" id="rejestracja" value="Login">
            </a>
            <p id="log">Jeśli posiadasz już konto</p>
        </div>
    </div>
</body>
</html>