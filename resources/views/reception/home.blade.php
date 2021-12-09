@extends('layouts.layout_reception')

@section('title', 'Panel recepcji')


@section('content')

<section id="visits_holder">
    <div id="visits">
        @foreach($visits as $visit)

            <article class="visit_card">
                <div class="visit_left">
                    <!-- <span class="visit_date">{{ date('d-m-Y', strtotime($visit->date)); }}</span> -->
                    <!-- <span class="visit_date">{{ date('h:m', strtotime($visit->date)); }}</span> -->
                    <span class="visit_date">{{ explode(' ', $visit->date)[0] }}</span>
                    <span class="visit_date">{{ explode(' ', $visit->date)[1] }}</span>
                </div>
                <div class="visit_right">
                    <div class="right_text">
                        <span class="description">Imię i nazwisko lekarza</span>
                        <span class="visit_doctor_name">{{ $visit->doctor }}</span>
                        <span class="description">Imię i nazwisko pacjenta</span>
                        <span class="visit_pacient_name">{{ $visit->patient }}</span>
                        <span class="description">Typ wizyty</span>
                        <span class="visit_type">{{ $visit->type }}</span>
                    </div>
                    <div class="right_buttons">

                        <button><i class="fas fa-clock clock" title="Przełóż wizytę"></i></button>

                        <form method="POST" action="{{ route('del_visit') }}" >
                            
                            @csrf

                            <input type="hidden" name="visit_id" value="{{ $visit->visit_id }}">

                            <button type="submit"><i class="fas fa-ban undo" title="Odwołaj wizytę"></i></button>

                        </form>
                    </div>
            </article>

        @endforeach
    </div>
    
</section>



@endsection