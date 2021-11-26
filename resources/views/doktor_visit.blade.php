@extends('layouts.layout_doktor')

@section('title', 'Panel doktora')


@section('content')
<section id="visit_holder">
        

        <div id="flex_row_holder1">

            <div id="patient_profile_picture" style="background-image: url('./images/profile_picture.jpg')"></div>
            <div id="patient_name_holder">
                <p>Pacjent</p>
                <p>Jan Kowalski</p>
            </div>

            <div id="timer_holder">
                <p id="remains-p">Pozostało</p>
                <p id="remains-time">50 minut</p>
            </div>
        </div>

        <div id="visit-type">
            Konsultacja
        </div>

        <div id="visit-description">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem, pariatur corrupti est inventore distinctio incidunt veritatis. 
            Tenetur dolores qui consequuntur sunt unde, impedit odit a eos obcaecati repudiandae accusantium cumque. Lorem ipsum dolor sit amet
             consectetur adipisicing elit. Natus, cum quia impedit praesentium alias voluptates. Eum, voluptas. Sed hic, quo impedit enim, 
             consequuntur, quis itaque officiis cum iste iusto numquam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus 
             officiis eos esse provident molestias? Illo laboriosam eius sunt commodi error labore animi debitis dolor, architecto dolorem,
              necessitatibus provident natus culpa. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis doloremque amet vel c
              orporis, repudiandae maiores obcaecati totam dolore, neque qui illo culpa ad cumque necessitatibus iste quia ipsum reprehenderit
            ea!
        </div>

</section>


<section id="right-holder">

    <div id="patient-archive-title">
        Wizyty pacjenta
    </div>

    <section id="patient-older-visits-holder">
        <article class="patient-archive-visit">
          
        </article>

        <article class="patient-archive-visit">
          
        </article>

        <article class="patient-archive-visit">
          
        </article>

        <article class="patient-archive-visit">
          
        </article>

        <article class="patient-archive-visit">
          
        </article>
    </section>

</section>





@endsection