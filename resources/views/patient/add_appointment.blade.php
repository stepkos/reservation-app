@extends('layouts.layout_patient')

@section('title', 'Panel pacjenta - Umów wizytę')


@section('content')
<div id="appointment_form_holder">
    <div id="appointment_banner">
        Umawianie wizyty
    </div>
    <form id="appointment_form" method="POST">
        <div id="form_down">

            @csrf

            <input type="hidden" value="{{ auth()->user()->id }}" name="patient_id">

            <select id="form_doctor" name="doctor_id">
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
            <select id="form_doctor" name="visit_type_id">
                @foreach($visitTypes as $visitType)
                    <option value="{{ $visitType->id }}">{{ $visitType->type }}</option>
                @endforeach
            </select>
            <textarea id="form_description" placeholder="Krótki opis dla lekarza..." name="description"></textarea>
            <input type="date" name="visit_date" />
            <input type="time" name="visit_time" />
            <input type="submit" />

            <span id="error">Error test test</span>

        </div>
        
        <div id="appointment_work_hours">
            <span>Godziny pracy</span>
            <span id="doctor" class="hours">Marian Kowalski</span>
            <span class="day">Poniedziałek</span>
            <span class="hours">8:00-16:00</span>
            <span class="day">Wtorek</span>
            <span class="hours">8:00-16:00</span>
            <span class="day">Środa</span>
            <span class="hours">8:00-16:00</span>
            <span class="day">Czwartek</span>
            <span class="hours">8:00-16:00</span>
            <span class="day">Piątek</span>
            <span class="hours">8:00-16:00</span>
        </div>
    </form>
</div>
@endsection