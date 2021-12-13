@extends('layouts.layout_reception')

@section('extra_css')
    <link href="{{ asset('css/patient.css') }}" rel="stylesheet">
@endsection

@section('title', 'Panel recepcki - Edytuj wizytę')


@section('content')
<div id="appointment_form_holder">
    <div id="appointment_banner">
        Umawianie wizyty
    </div>
    <form id="appointment_form" method="POST" action="{{ route('post_edit_visit') }}">
        <div id="form_down">

            @csrf

            <input type="hidden" value="{{ auth()->user()->id }}" name="patient_id">
            <input type="hidden" value="{{ $visit_id }}" name="visit_id">

            <select id="form_doctor" name="doctor_id" oninput="viewDoctorHours(this)">
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}" 
                        @isset($doctor_id) 
                            @if($doctor_id == $doctor->id) 
                                selected
                            @endif
                        @endisset
                    >
                        {{ $doctor->name }}
                    </option>
                @endforeach
            </select>

            <select id="form_doctor" name="visit_type_id">
                @foreach($visitTypes as $visitType)
                    <option value="{{ $visitType->id }}"
                        @isset($visit_type_id) 
                            @if($visit_type_id == $visitType->id) 
                                selected
                            @endif
                        @endisset
                    >
                        {{ $visitType->type }}
                    </option>
                @endforeach
            </select>

            <textarea required id="form_description" placeholder="Krótki opis dla lekarza..." name="description"
            >@isset($description){{$description}}@endisset</textarea>

            <input required type="date" name="visit_date"
                @isset($visit_date)
                    value="{{$visit_date}}"
                @endisset
            >

            <input required type="time" name="visit_time" 
                @isset($visit_time)
                    value="{{$visit_time}}"
                @endisset
            >

            <input type="submit">

            <span class="error">{{ $error_message }}</span>
            <span class="error" id="error_js"></span>

        </div>
        
        <div id="appointment_work_hours">
            <span>Godziny pracy</span>
            <span id="doctor" style="font-weight:bold">Marian Kowalski</span>
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


<script language="javascript" src="{{ asset('js/work.js') }}"></script>
@endsection