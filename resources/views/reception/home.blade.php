@extends('layouts.layout_recepcja')

@section('title', 'Panel recepcji')


@section('content')

<section id="visits_holder">
    <article class="visit_card">
        <div class="visit_left">
    <span class="visit_date">09.01.2022</span>
    <span class="visit_date">9:30</span>
</div>
<div class="visit_right">
    <div class="right_text">
        <span class="description">Imię i nazwisko lekarza</span>
        <span class="visit_doctor_name">Jan Kowalski</span>
        <span class="description">Imię i nazwisko pacjenta</span>
        <span class="visit_pacient_name">Jan Paweł</span>
        <span class="description">Typ wizyty</span>
        <span class="visit_type">Zakładanie plomby</span>
    </div>
    <div class="right_buttons">
        <button><i class="fas fa-clock clock" title="Przełóż wizytę"></i></button>
        <button><i class="fas fa-ban undo" title="Odwołaj wizytę"></i></button>
    </div>
</article>
        <article class="visit_card">
                <div class="visit_left">
            <span class="visit_date">09.01.2022</span>
            <span class="visit_date">9:30</span>
        </div>
        <div class="visit_right">
            <div class="right_text">
                <span class="description">Imię i nazwisko lekarza</span>
                <span class="visit_doctor_name">Jan Kowalski</span>
                <span class="description">Imię i nazwisko pacjenta</span>
                <span class="visit_pacient_name">Jan Paweł</span>
                <span class="description">Typ wizyty</span>
                <span class="visit_type">Zakładanie plomby</span>
            </div>
            <div class="right_buttons">
                <button><i class="fas fa-check approve" title="Zatwierdź wizytę"></i></button>
            </div>
        </article>
        <article class="visit_card">
            <div class="visit_left">
        <span class="visit_date">09.01.2022</span>
        <span class="visit_date">9:30</span>
    </div>
    <div class="visit_right">
        <div class="right_text">
            <span class="description">Imię i nazwisko lekarza</span>
            <span class="visit_doctor_name">Jan Kowalski</span>
            <span class="description">Imię i nazwisko pacjenta</span>
            <span class="visit_pacient_name">Jan Paweł</span>
            <span class="description">Typ wizyty</span>
            <span class="visit_type">Zakładanie plomby</span>
        </div>
        <div class="right_buttons">
            <button><i class="fas fa-check approve" title="Zatwierdź wizytę"></i></button>
        </div>
    </article>
    <article class="visit_card">
        <div class="visit_left">
    <span class="visit_date">09.01.2022</span>
    <span class="visit_date">9:30</span>
</div>
<div class="visit_right">
    <div class="right_text">
        <span class="description">Imię i nazwisko lekarza</span>
        <span class="visit_doctor_name">Jan Kowalski</span>
        <span class="description">Imię i nazwisko pacjenta</span>
        <span class="visit_pacient_name">Jan Paweł</span>
        <span class="description">Typ wizyty</span>
        <span class="visit_type">Zakładanie plomby</span>
    </div>
    <div class="right_buttons">
        <button><i class="fas fa-check approve" title="Zatwierdź wizytę"></i></button>
    </div>
</article>
<article class="visit_card">
    <div class="visit_left">
<span class="visit_date">09.01.2022</span>
<span class="visit_date">9:30</span>
</div>
<div class="visit_right">
<div class="right_text">
    <span class="description">Imię i nazwisko lekarza</span>
    <span class="visit_doctor_name">Jan Kowalski</span>
    <span class="description">Imię i nazwisko pacjenta</span>
    <span class="visit_pacient_name">Jan Paweł</span>
    <span class="description">Typ wizyty</span>
    <span class="visit_type">Zakładanie plomby</span>
</div>
<div class="right_buttons">
    <button><i class="fas fa-clock clock" title="Przełóż wizytę"></i></button>
    <button><i class="fas fa-ban undo" title="Odwołaj wizytę"></i></button>
</div>
</article> 
    </section>



@endsection