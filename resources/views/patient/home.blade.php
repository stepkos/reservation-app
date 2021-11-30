@extends('layouts.layout_patient')

@section('title', 'Panel pacjenta')


@section('content')

    <section id="visits_holder">

        @foreach($visits as $visit)

            <article class="visit_card">
                <div class="visit_color">
                    <span>{{ explode(' ', $visit->date)[0] }}</span>
                    <span>{{ explode(' ', $visit->date)[1] }}</span>
                </div>

                <div class="visit_row_content">
                    <section>
                        <p>Imie i nazwisko lekarza</p>
                        <p>{{ $visit->doctor }}</p>
                    </section>

                    <section>
                        <p>Typ wizyty</p>
                        <p>{{ $visit->type }}</p>
                    </section>

                    <section>
                        <p>Przewidywany czas</p>
                        <p>{{ $visit->standard_duration }}</p>
                    </section>
                </div>
                <div class="short_note">
                    <div class="short_note_text">
                        {{ $visit->description }}
                    </div>
                </div>
            </article>

        @endforeach

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