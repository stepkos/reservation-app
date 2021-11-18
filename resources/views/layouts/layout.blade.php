<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/panel1.css') }}" rel="stylesheet">
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
            <img src="./images/add.svg"/>
            <a href="">Umów wizyte</a>
        </div>

        <div class="panel_link">
            <img src="./images/search.svg"/>
            <a href="">Znajdź lekarza</a>
        </div>

        <div class="panel_link">
            <img src="./images/cal.svg"/>
            <a href="">Moje wizyty</a>
        </div>

        <span class="panel_section">Twoi lekarze</span>
        <div class="panel_link">
            <img src="./images/person.svg" />
            <a href="">John Doe</a>
        </div>

        <div class="panel_link">
            <img src="./images/person.svg"/>
            <a href="">John Doe</a>
        </div>

    </aside>
        
    


    <main>
        @yield('content')
    </main>






</body>