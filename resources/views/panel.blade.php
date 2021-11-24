

@extends('layouts.layout')

@section('title', 'Panel główny')


@section('content')
    <section id="visits_holder">
        <article class="visit_card">
            <span class="visit_doctor_name">Jan Kowalski</span>
            <span class="visit_date">09.01.2022</span>
            <span class="visit_recommendations">
                <a href="">Zobacz zalecenia</a>
            </span>
        </article>
        <article class="visit_card">
        <span class="visit_doctor_name">Janusz Nowak</span>
            <span class="visit_date">31.05.2023</span>
            <span class="visit_recommendations">
                <a href="">Zobacz zalecenia</a>
            </span>
        </article>
        <article class="visit_card">
        <span class="visit_doctor_name">Jan Paweł</span>
            <span class="visit_date">21.37.2005</span>
            <span class="visit_recommendations">
                <a href="">Zobacz zalecenia</a>
            </span>
        </article>
        <article class="visit_card">
        <span class="visit_doctor_name">Eugeniusz Podlaski</span>
            <span class="visit_date">23.03.2024</span>
            <span class="visit_recommendations">
                <a href="">Zobacz zalecenia</a>
            </span>
        </article>
        <article class="visit_card">
        <span class="visit_doctor_name">Grzegorz Doktorowski</span>
            <span class="visit_date">09.09.2009</span>
            <span class="visit_recommendations">
                <a href="">Zobacz zalecenia</a>
            </span>
        </article>  
    </section>


    <section id="calendar_holder">
        <div id="color-calendar"></div>
        <article class="calendar_event">
            <span class="calendar_event_name">Janusz Nowak</span>
            <span class="calendar_event_date">31.05.2023</span>
        </article>
        <article class="calendar_event">
            <span class="calendar_event_name">Grzegorz Doktorowski</span>
            <span class="calendar_event_date">09.09.2009</span>
        </article>
        <article class="calendar_event">
            <span class="calendar_event_name">Jan Paweł</span>
            <span class="calendar_event_date">21.37.2005</span>
        </article>
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