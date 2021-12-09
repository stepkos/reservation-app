@extends('layouts.layout_reception')

@section('title', 'Panel recepcji')


@section('content')

<section id="visits_holder_acc">


    <div id="accounts">
        @foreach($allUsers as $user)

            <article class="visit_card_accounts">
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

                        <form method="POST">

                            @csrf

                            <input type="hidden" value="{{ $user->email }}" name="user_email">
                            
                            <select id="select" name="role_id">
                                <option {{ $user->role_id==1 ? "selected": ""}} value="1">Pacjent</option>
                                <option {{ $user->role_id==2 ? "selected": ""}} value="2">Lekarz</option>
                                <option {{ $user->role_id==3 ? "selected": ""}} value="3">Recepcja</option>
                            </select>

                            <!-- Do poprawy  -->
                            <section id="acc_button_holder">
                                <button id="acc_button"> Zatwierdź zmiany</button>
                            </section>

                        </form>

                    </div>
                
                </div>
                    
            </article>
        @endforeach
    </div>

    </section>


@endsection