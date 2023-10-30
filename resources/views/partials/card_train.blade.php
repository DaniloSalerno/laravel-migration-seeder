<div class="card-body">
    <div><strong>Compagnia:</strong> {{$train->company}}</div>
    <div><strong>Partenza da:</strong> {{$train->start_station}}</div>
    <div><strong>Partenza alle:</strong> {{$train->start_time}}</div>
    <div><strong>Arrivo a:</strong> {{$train->arrive_station}}</div>
    <div><strong>Arrivo alle:</strong> {{$train->arrive_time}}</div>
    <div><strong>Codice treno:</strong> {{$train->train_code}}</div>
    <div><strong>Numero di carrozze:</strong> {{$train->carriage_number}}</div>

    @if ($train->in_time)

        <div><strong>Stato:</strong> In orario</div>

    @elseif ($train->deleted)

        <strong>Treno Cancellato</strong>

    @else
        <div><strong>Stato:</strong> In ritardo</div>
    @endif
</div>
{{-- /.card-body --}}