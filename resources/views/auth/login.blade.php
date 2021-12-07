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
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body>
    <div id="container">
        <div id="container2">

            <div id="lewa-gora" class="lewa">
                <img src="{{ asset('images/dentist-logo.png') }}" id="logo">
                <p id="lorem">Witamy w aplikacji gabinetu dentystycznego Healfy<br/> już tylko kilka kroków dzieli Cie od wygodnego planowania swoich wizyt u stomatologa!</p>
            </div>

            <div id="formularz">
                <p id="pacjent">Zaloguj się na swoje konto</p>
                <form id="logowanie" method="POST">
                    @csrf

                    @error('email')
                        <strong>{{ $message }}</strong>
                    @enderror
                    <input type="email" placeholder="Email" class="login" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></br>

                    @error('password')
                        <strong>{{ $message }}</strong>
                    @enderror
                    <input type="password" placeholder="Hasło" class="login" name="password" required autocomplete="current-password"></br>

                    <input type="submit" id="zaloguj" value="Zaloguj">
                </form>
            </div>
        </div>

        <div id="lewa-dol" class="lewa">
            <a href="{{ route('register') }}">
                <input type="button" id="rejestracja" value="Rejestracja">
            </a>
            <p id="log">Jeśli nie posiadasz jeszcze konta</p>
        </div>
    </div>
    </div>
</body>
</html>