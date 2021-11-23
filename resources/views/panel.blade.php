

@extends('layouts.layout')

@section('title', 'Panel główny')


@section('content')
    <section id="visits_holder">
        <article class="visit_card">
            test
        </article>
        <article class="visit_card"></article>
        <article class="visit_card"></article>
        <article class="visit_card"></article>
        <article class="visit_card"></article>  
    </section>


    <section id="calendar_holder">
        <div id="color-calendar"></div>
        <article class="calendar_event"></article>
        <article class="calendar_event"></article>
        <article class="calendar_event"></article>
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