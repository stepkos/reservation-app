@extends('layouts.layout_doctor')

@section('title', 'Panel doktora')


@section('content')

    <div id="no-visit-holder">
        <div id="no-visit">
            <span>Brak aktualnej wizyty</span>
        </div>
        <div id="next-visit">
            <span>Następna wizyta</span>
        </div>
        <div id="no-visit-next-visit">
            <div id="next-visit-hour">
                <span class="up">Godzina</span>
                <span class="down">
                    {{ explode(' ', $nextVisit->date)[0] }}<br/>
                    {{ explode(' ', $nextVisit->date)[1] }}
                </span>
            </div>
            <div id="next-visit-name">
                <span class="up">Imię i nazwisko pacjenta</span>
                <span class="down">{{ $nextVisit->patient }}</span>
            </div>
            <div id="next-visit-type">
                <span class="up">typ wizyty</span>
                <span class="down">{{ $nextVisit->type }}</span>
            </div>
        </div>

    </div>


@endsection