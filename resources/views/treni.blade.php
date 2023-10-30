@extends('layout.app')


@section('content')
    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-6 g-3">
                    <div class="card">
                        <div class="card-header">
                            <h1>{{ $train->azienda }}</h1>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h2>{{ $train->stazione_di_partenza }} - {{ $train->stazione_di_arrivo }}</h2>
                                <div class="col-6 my-2">
                                    <h4 class="mt-4">{{ $train->orario_di_partenza }} - {{ $train->orario_di_arrivo }}</h4>
                                </div>
                                <div class="col-6 my-2">
                                    <h3>{{ $train->codice_treno }}</h3>
                                    <h3>Numero Carrozze: {{ $train->numero_carrozze }}</h3>
                                </div>
                                <div>
                                    <span>ritardo: {{ $train->in_orario ? 'in orario' : '4 ore di ritardo' }} - </span>
                                    <span>stato: {{ $train->cancellato ? 'cancellato' : 'attivo ' }} </span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
