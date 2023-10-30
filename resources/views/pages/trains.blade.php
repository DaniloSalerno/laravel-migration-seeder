@extends('layouts.app')

@section('content')
    
<section class="trains py-5">

    <div class="container">
    
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-4">
    
            @forelse ($trains as $train)
            <div class="col">
    
                <div class="card h-100">
    
                    <div class="card-body">
                        <div>Compagnia: {{$train->company}}</div>
                        <div>Partenza da: {{$train->start_station}}</div>
                        <div>Partenza alle: {{$train->start_time}}</div>
                        <div>Arrivo a: {{$train->arrive_station}}</div>
                        <div>Arrivo alle: {{$train->arrive_time}}</div>
                        <div>Codice treno: {{$train->train_code}}</div>
                        <div>Numero di carrozze: {{$train->carriage_number}}</div>

                        @if ($train->in_time)

                            <div>Stato: In orario</div>

                        @elseif ($train->deleted)

                            <strong>Treno Cancellato</strong>

                        @else
                            <div>Stato: In ritardo</div>
                        @endif
                    </div>
                    {{-- /.card-body --}}
    
                </div>
                {{-- /.card --}}
    
            </div>
            <!-- /.col -->
            @empty
                <div>Nessun treno disponibile ancora,torna più tardi</div>
            @endforelse
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

</section>
{{-- /.trains --}}

@endsection