<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css imports -->
    <link href="{{ asset('css/panel1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reception.css') }}" rel="stylesheet">
    <!-------------------------------------------------------------->

    <!-- font imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">
    <!-------------------------------------------------------------->

    <!-- https://www.npmjs.com/package/color-calendar#usage-basic -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-basic.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-glass.css" />
    <script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.min.js"></script>
    <!--------------------------------------------------------------->

    <!-- icon imports -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <!--------------------------------------------------------------->
    <title>@yield('title')</title>
</head>

<body>

    <nav>
        <div id="logo_box">
            <img src="./images/app_logo.png" />
        </div>

        <section id="nav_user">
            <span>{{ auth()->user()->name }}</span>

            <!-- to jakoś dynamicznie zrobić -->
            <div id="profile_picture_holder" style="background-image: url('./images/profile_picture.jpg')"></div>

            <span id="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Wyloguj się
            </span>

            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>

        </section>

    </nav>

    <aside>
        <span class="panel_section">Zakładki</span>
        <div class="panel_link">
            <img src="./images/add.svg" />
            <a href="{{route('reception_home')}}">Wizyty</a>
        </div>

        <div class="panel_link">
            <img src="./images/search.svg" />
            <a href="{{route('reception_accounts')}}">Administruj kontami</a>
        </div>

        <div class="panel_link">
            <img src="./images/search.svg" />
            <a href="{{route('reception_history')}}">Historia wizyt</a>
        </div>

    </aside>

    <main>
        @yield('content')
    </main>

</body>