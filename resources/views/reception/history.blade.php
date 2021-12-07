@extends('layouts.layout_reception')

@section('title', 'Panel recepcji')


@section('content')
<section class="search">
    <input type="text" placeholder="Znajdź wizytę">
</section>
<section id="visits_holder_history">


    @foreach($archiveVisits as $visit)

        <article class="visit_card">
            <div class="visit_right">
                <div class="visit_left_photo">
                    <img src="..\images\profile_picture.jpg">
                </div>
                <div class="right_text">
                    <span class="description">Imię i nazwisko lekarza</span>
                    <span class="visit_doctor_name">{{ $visit->doctor}}</span>
                    <span class="description">Imię i nazwisko pacjenta</span>
                    <span class="visit_pacient_name">{{ $visit->patient }}</span>
                    <span class="description">Typ zabiegu</span>
                    <span class="visit_type">{{ $visit->type }}</span>
                </div>
                <div class="right_desc">
                    <span class="description_visit">opis zabiegu</span>
                    <textarea name="opis" id="opis" cols="30" rows="9">
                        {{ $visit->description }}
                    </textarea>
                    </div>
                </div>
        </article>

    @endforeach
    
    </section>

@endsection