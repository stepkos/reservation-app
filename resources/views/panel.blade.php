

@extends('layouts.layout')

@section('title', 'Panel główny')


@section('content')
<section id="visits_holder">


        <article class="visit_card">
            <div class="visit_color">
                <span>15 listopada 2021</span>
                <span>9:30</span>
            </div>

            <div class="visit_row_content">
                <section>
                    <p>Imie i nazwisko pacjenta</p>
                    <p>Jan Kowalski</p>
                </section>

                <section>
                    <p>Typ wizyty</p>
                    <p>Konsultacja</p>
                </section>

                <section>
                    <p>Przewidywany czas</p>
                    <p>1 godzina</p>
                </section>
            </div>
            <div class="short_note">
                <div class="short_note_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>
        </article>

        <article class="visit_card">
            <div class="visit_color">
                <span>18 listopada 2021</span>
                <span>15:30</span>
            </div>

            <div class="visit_row_content">
                <section>
                    <p>Imie i nazwisko pacjenta</p>
                    <p>Grażyna Kowalska</p>
                </section>

                <section>
                    <p>Typ wizyty</p>
                    <p>Plombowanie</p>
                </section>

                <section>
                    <p>Przewidywany czas</p>
                    <p>2 godziny</p>
                </section>
            </div>
            
            <div class="short_note">
            <div class="short_note_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>
        </article>

        <article class="visit_card">
            <div class="visit_color">
                <span>18 listopada 2021</span>
                <span>15:30</span>
            </div>

            <div class="visit_row_content">
                <section>
                    <p>Imie i nazwisko pacjenta</p>
                    <p>Grażyna Kowalska</p>
                </section>

                <section>
                    <p>Typ wizyty</p>
                    <p>Plombowanie</p>
                </section>

                <section>
                    <p>Przewidywany czas</p>
                    <p>2 godziny</p>
                </section>
            </div>
            
            <div class="short_note">
                <div class="short_note_text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>
        </article>




    </section>


    <section id="calendar_holder">
        <div id="color-calendar"></div>
        <article class="calendar_event">
            <span class="calendar_event_name">Janusz Nowak</span>
            <span class="calendar_event_date">31.05.2023</span>
        </article>
        <article class="calendar_event">
            <span class="calendar_event_name">Grzegorz Doktorowski</span>
            <span class="calendar_event_date">09.09.2009</span>
        </article>
        <article class="calendar_event">
            <span class="calendar_event_name">Jan Paweł</span>
            <span class="calendar_event_date">21.37.2005</span>
        </article>
    </section>


    <script language="javascript">
        new Calendar({
            id: '#color-calendar',
            primaryColor:"#37aee6",
            theme:"glass",
            headerBackgroundColor:"#37aee6"
        })
    </script>

    
@endsection