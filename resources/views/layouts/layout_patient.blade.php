<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css imports -->
    <link href="{{ asset('css/panel1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main_patient.css') }}" rel="stylesheet">
    <link href="{{ asset('css/patient.css') }}" rel="stylesheet">
    <!-------------------------------------------------------------->

    <!-- font imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-------------------------------------------------------------->

    <!-- https://www.npmjs.com/package/color-calendar#usage-basic -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-basic.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/color-calendar/dist/css/theme-glass.css" />
    <script src="https://cdn.jsdelivr.net/npm/color-calendar/dist/bundle.min.js"></script>
    <!--------------------------------------------------------------->
    
    <title>@yield('title')</title>
</head>
<body>


    

    <nav>
        <div id="logo_box"></div>
        
        <section id="nav_user">
            <span>John Doe</span>

            <!-- to jakoś dynamicznie zrobić -->
            <div id="profile_picture_holder" style="background-image: url('./images/profile_picture.jpg')"></div>
            <span id="logout">Wyloguj się</span>
        </section>
        
    </nav>

   

    <aside>
        <span class="panel_section">Zakładki</span>
        <div class="panel_link">
            <img src="./images/cal.svg"/>
            <a href="">Twoje wizyty</a>
        </div>

        <div class="panel_link">
            <img src="./images/add.svg"/>
            <a href="">Umów wizytę</a>
        </div>

        <div class="panel_link">
            <img src="./images/search.svg"/>
            <a href="">Zobacz lekarzy</a>
        </div>


    </aside>
        
    


    <main>
        @yield('content')
    </main>