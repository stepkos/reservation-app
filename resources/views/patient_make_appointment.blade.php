@extends('layouts.layout_patient')

@section('title', 'Panel pacjenta - Umów wizytę')


@section('content')
<div id="appointment_form_holder">
    <div id="appointment_banner">
        Umawianie wizyty
    </div>
    <form id="appointment_form">
        <select id="form_doctor" name="doctor_name">
            <option>Johnny Sins</option>
            <option>Jerzy Nowak</option>
            <option>Andrzej Andrzej</option>
        </select>
        <select id="form_doctor" name="visit_type">
            <option>Wyrywanie zęba</option>
            <option>Leczenie kanałowe</option>
            <option>Wstawienie plomby</option>
        </select>
        <textarea id="form_description" placeholder="Krótki opis dla lekarza..." name="short_description"></textarea>
        <input type="submit" />
    </form>
</div>
@endsection