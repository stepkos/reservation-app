@extends('layouts.layout_patient')

@section('title', 'Panel pacjenta - Wszyscy lekarze')


@section('content')
<section id="doctors_list">
    <div id="doctors_list_holder">
        <div class="doctor_holder">
            <div class="doctor_profile_picture" style="background-image: url('./images/profile_picture.jpg')"></div>
            <div class="doctor_name">
                Jan Kowalski
            </div>
            <div class="doctor_telephone">
                Numer telefonu: 111222333
            </div>
        </div>
    </div>
</section>
@endsection