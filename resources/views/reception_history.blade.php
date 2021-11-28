@extends('layouts.layout_recepcja')

@section('title', 'Panel recepcji')


@section('content')
<section class="search">
    <input type="text" placeholder="Znajdź wizytę">
</section>
<section id="visits_holder_history">
    <article class="visit_card">
        <div class="visit_right">
            <div class="visit_left_photo">
                <img src="..\images\profile_picture.jpg">
            </div>
            <div class="right_text">
                <span class="description">Imię i nazwisko lekarza</span>
                <span class="visit_doctor_name">Jan Kowalski</span>
                <span class="description">Imię i nazwisko pacjenta</span>
                <span class="visit_pacient_name">Geralt z Rivii</span>
                <span class="description">Typ zabiegu</span>
                <span class="visit_type">Usuwanie zęba</span>
            </div>
            <div class="right_desc">
                <span class="description_visit">opis zabiegu</span>
                <textarea name="opis" id="opis" cols="30" rows="9">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
                </div>
            </div>
            
    </article>
    <article class="visit_card">
        <div class="visit_right">
            <div class="visit_left_photo">
                <img src="..\images\profile_picture.jpg">
            </div>
            <div class="right_text">
                <span class="description">Imię i nazwisko lekarza</span>
                <span class="visit_doctor_name">Jan Kowalski</span>
                <span class="description">Imię i nazwisko pacjenta</span>
                <span class="visit_pacient_name">Geralt z Rivii</span>
                <span class="description">Typ zabiegu</span>
                <span class="visit_type">Usuwanie zęba</span>
            </div>
            <div class="right_desc">
                <span class="description_visit">opis zabiegu</span>
                <textarea name="opis" id="opis" cols="30" rows="9">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
                </div>
            </div>
            
    </article>
    <article class="visit_card">
        <div class="visit_right">
            <div class="visit_left_photo">
                <img src="..\images\profile_picture.jpg">
            </div>
            <div class="right_text">
                <span class="description">Imię i nazwisko lekarza</span>
                <span class="visit_doctor_name">Jan Kowalski</span>
                <span class="description">Imię i nazwisko pacjenta</span>
                <span class="visit_pacient_name">Geralt z Rivii</span>
                <span class="description">Typ zabiegu</span>
                <span class="visit_type">Usuwanie zęba</span>
            </div>
            <div class="right_desc">
                <span class="description_visit">opis zabiegu</span>
                <textarea name="opis" id="opis" cols="30" rows="9">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
                </div>
            </div>
            
    </article>
    <article class="visit_card">
        <div class="visit_right">
            <div class="visit_left_photo">
                <img src="..\images\profile_picture.jpg">
            </div>
            <div class="right_text">
                <span class="description">Imię i nazwisko lekarza</span>
                <span class="visit_doctor_name">Jan Kowalski</span>
                <span class="description">Imię i nazwisko pacjenta</span>
                <span class="visit_pacient_name">Geralt z Rivii</span>
                <span class="description">Typ zabiegu</span>
                <span class="visit_type">Usuwanie zęba</span>
            </div>
            <div class="right_desc">
                <span class="description_visit">opis zabiegu</span>
                <textarea name="opis" id="opis" cols="30" rows="9">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
                </div>
            </div>
            
    </article>
    <article class="visit_card">
        <div class="visit_right">
            <div class="visit_left_photo">
                <img src="..\images\profile_picture.jpg">
            </div>
            <div class="right_text">
                <span class="description">Imię i nazwisko lekarza</span>
                <span class="visit_doctor_name">Jan Kowalski</span>
                <span class="description">Imię i nazwisko pacjenta</span>
                <span class="visit_pacient_name">Geralt z Rivii</span>
                <span class="description">Typ zabiegu</span>
                <span class="visit_type">Usuwanie zęba</span>
            </div>
            <div class="right_desc">
                <span class="description_visit">opis zabiegu</span>
                <textarea name="opis" id="opis" cols="30" rows="9">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</textarea>
                </div>
            </div>
            
    </article>
    </section>

@endsection