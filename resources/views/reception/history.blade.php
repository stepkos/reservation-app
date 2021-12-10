@extends('layouts.layout_reception')

@section('title', 'Panel recepcji')


@section('content')
<section class="search">

    <input type="text" placeholder="Znajdź wizytę" id="filter_input" oninput="filterVisits()">
    <select id="select_history" onchange="changeFilterType()">
        <option value="data">Data</option>
        <option value="doctor">Imię i Nazwisko lekarza</option>
        <option value="patient">Imię i Nazwisko pacjenta</option>
        <option value="visit_type">Typ zabiegu</option>
    </select>

</section>
<section id="visits_holder_history">


    @foreach($archiveVisits as $visit)

        <article class="visit_card">
                <div class="visit_date_history">
                <span>
                    {{ explode(' ', $visit->date)[0] }}</br>
                    {{ explode(' ', $visit->date)[1] }}
                </span>

                </div>
            <div class="visit_right">
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


    <script language="javascript" src="{{ asset('js/filter.js') }}"></script>
@endsection