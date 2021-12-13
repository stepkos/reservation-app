@extends('layouts.layout_patient')

@section('title', 'Panel pacjenta')


@section('content')

    <section id="visits_holder">
        <div id="visits">
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
                            <p>{{ $visit->standard_duration }} 
                            @php
                                if($visit->standard_duration !== 1)
                                    echo 'godziny';
                                else
                                    echo 'godzina';
                            @endphp

                            </p>
                        </section>
                    </div>
                    <div class="short_note">
                        <div class="short_note_text">
                            {{ $visit->description }}
                        </div>
                    </div>
                </article>

            @endforeach
        </div>
    </section>


    <section id="calendar_holder">
        <div id="color-calendar"></div>

        @foreach($visits->take(3) as $visit)
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