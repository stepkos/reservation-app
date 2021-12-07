@extends('layouts.layout_reception')

@section('title', 'Panel recepcji')


@section('content')

<section id="visits_holder_acc">



    @foreach($allUsers as $user)

        <article class="visit_card">
            <div class="visit_right">
                <div class="visit_left_photo">
                    <img src="..\images\profile_picture.jpg">
                </div>
                <div class="right_text">
                    <span class="description">Imię i nazwisko</span>
                    <span class="visit_pacient_name">{{ $user->name }}</span>
                    <span class="description">Adres Email</span>
                    <span class="visit_pacient_email">{{ $user->email }}</span>
                    <span class="description">Obecna rola</span>
                    <span class="acc_type">{{ $user->role }}</span>
                </div>
                <div class="right_kebab">
                        <select id="select">
                            <option>Pacjent</option>
                            <option>Lekarz</option>
                            <option>Recepcja</option>
                        </select>
                    </div>
                </div>
                
        </article>
    @endforeach

    </section>
<section id="acc_button_holder">
    <button id="acc_button" onclick="" name="acc_button"> Zatwierdź zmiany</button>
</section>

@endsection