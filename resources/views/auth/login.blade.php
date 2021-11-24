<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    </style>

    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body>
    <div id="container">
        <div id="container2">
            <div id="lewa-gora" class="lewa">
                <img src="dentist-3249382_960_720.png" id="logo">
                <p id="lorem">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div id="formularz">
                <p id="pacjent">Zaloguj się jako pacjent</p>
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

                    <input type="submit" name="submit_login" id="zaloguj" value="Zaloguj">
                </form>
            </div>
        </div>
        <div id="lewa-dol" class="lewa">
            <form>
                @csrf
                <a href="{{ route('register') }}">
                    <input type="button" name="registration" id="rejestracja" value="Rejestracja">
                </a>
                <p id="log">Jeśli nie posiadasz jeszcze konta</p>
            </form>
        </div>
    </div>
    </div>
</body>
</html>