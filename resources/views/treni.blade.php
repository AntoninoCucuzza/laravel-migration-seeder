@extends('layout.app')


@section('content')
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-3 g-3">

                    <div class="card">
                        <p>Azienda: {{ $train->azienda }}</p>
                        <p>Partenza: {{ $train->stazione_di_partenza }}</p>
                        <p>Arrivo: {{ $train->stazione_di_arrivo }}</p>
                        <p>Orario Partenza: {{ $train->orario_di_partenza }}</p>
                        <p>Orario Arrivo: {{ $train->orario_di_arrivo }}</p>
                        <p>Codice Treno: {{ $train->codice_treno }}</p>
                        <p>Numero Carrozze: {{ $train->numero_carrozze }}</p>
                        <p>In Orario: {{ $train->in_orario ? 'miracolo' : '4 ore di ritardo' }}</p>
                        <p>Cancellato: {{ $train->cancellato ? 'cancellato' : 'miracolo ' }}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
