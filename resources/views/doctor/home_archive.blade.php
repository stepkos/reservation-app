@extends('layouts.layout_doctor')

@section('title', 'Panel doktora')


@section('content')
<section id="visits_holder">
        
        @foreach($visits_archive as $visit)
            <article class="visit_card">
            <div class="visit_color">
                <span>{{ explode(' ', $visit->date)[0] }}</span>
                <span>{{ explode(' ', $visit->date)[1] }}</span>
            </div>

            <div class="visit_row_content">
                <section>
                    <p>Imie i nazwisko pacjenta</p>
                    <p>{{ $visit->patient }}</p>
                </section>

                <section>
                    <p>Typ wizyty</p>
                    <p>{{ $visit->type}}</p>
                </section>

                <section>
                    <p>Przewidywany czas</p>
                    <p>{{ $visit->standard_duration }}</p>
                </section>
            </div>
            </article>
        @endforeach


        

    </section>


    <section id="calendar_holder">
        <div id="color-calendar"></div>

            @foreach($visits_actual->take(3) as $visit)
                <article class="calendar_event">
                    <span class="calendar_event_name">{{ $visit->patient }}</span>
                    <span class="calendar_event_date">{{ $visit->date }}</span>
                </article>
            @endforeach

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