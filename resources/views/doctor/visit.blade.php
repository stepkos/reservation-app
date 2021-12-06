@extends('layouts.layout_doctor')

@section('title', 'Panel doktora')


@section('content')
<section id="visit_holder">
        

        <div id="flex_row_holder1">

            <div id="patient_profile_picture" style="background-image: url('./images/profile_picture.jpg')"></div>
            <div id="patient_name_holder">
                <p>Pacjent</p>
                <p>{{ $visit[0]->patient }}</p>
            </div>

            <div id="timer_holder">
                <p id="remains-p">Pozostało</p>
                <p id="remains-time">50 minut</p>
            </div>
        </div>

        <div id="visit-type">
            {{ $visit[0]->type }}
        </div>

        <div id="visit-description">
           {{ $visit[0]->description }}
        </div>

</section>


<section id="right-holder">

    <div id="patient-archive-title">
        Wizyty pacjenta
    </div>

    <section id="patient-older-visits-holder">


        @foreach($patient_archive_visits as $visit)
            <article class="patient-archive-visit">
                <div class="archive-type">
                    {{ $visit->type }}
                </div>

                <p>{{ explode(' ', $visit->date)[0] }}</p>

                <div class="archive-description">
                    {{ $visit->description }}
                </div>
            </article>
        @endforeach


    </section>

</section>





@endsection