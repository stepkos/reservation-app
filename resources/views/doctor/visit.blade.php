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
                <p style="display:none" id="visit_end">{{$visit[0]->standard_duration}}</p>
                <p id="remains-p">Pozostało</p>
                <p id="remains-time"></p>
            </div>
        </div>

        <div id="visit-type">
            {{ $visit[0]->type }}
        </div>

        <form id="doctor_visit_form">
        <textarea id="visit-description" cols="100" rows="5">
            {{ $visit[0]->description }}
        </textarea> 

        <input type="submit" />

        </form>

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


<script language="javascript" src="{{ asset('js/visit.js') }}"></script>


@endsection