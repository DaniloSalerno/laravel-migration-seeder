@extends('layouts.app')

@section('page_title', 'Home')
@section('content')
    
    <section class="welcome py-5">

        <div class="container">
            <div class="banner">
                <h1>Welcome to Trains!</h1>
                <h4>Travel with us,find your train</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque eligendi, ea adipisci maxime, sint recusandae odio quae, est aut vitae a sunt temporibus et quod eveniet. Assumenda, consequatur eveniet. Ducimus a expedita mollitia. Odio ut exercitationem minima recusandae omnis, ratione incidunt labore harum aspernatur sequi accusantium deserunt corrupti itaque molestiae pariatur nemo. Facere libero provident dolorem, modi recusandae repudiandae sint officia exercitationem dolores tenetur quibusdam dignissimos obcaecati, explicabo reprehenderit. Possimus asperiores assumenda, quis commodi totam nemo temporibus amet sed voluptas officia, maxime voluptate? Optio quasi impedit incidunt fugit aspernatur, praesentium dicta excepturi saepe facilis possimus iure quaerat aperiam. Tempora debitis sed, accusamus, culpa cum esse atque excepturi quaerat totam molestiae nostrum omnis quasi officia non eum repudiandae aspernatur aliquid enim nisi ad. Fugit facilis exercitationem, amet sequi ullam illum delectus ea magnam voluptate iste velit excepturi autem fugiat aperiam hic! Eos commodi nobis alias dolores quas temporibus esse et quaerat deserunt facere ipsa amet exercitationem vero dolorem optio omnis at, laudantium numquam consectetur distinctio. Repellendus voluptate laboriosam at blanditiis. Tempora fuga repellendus amet facere libero veritatis dolores ratione nobis reiciendis, dignissimos, ipsum voluptas aut perferendis iure quam, accusantium iusto soluta vitae atque autem adipisci illo! Voluptatibus exercitationem repellat quaerat expedita!</p>
            </div>
        </div>
        <!-- /.container -->

    </section>
    <!-- /section -->

    <section class="departing py-5">
        <div class="container">
            <h2>Departing trains</h2>
            <div class="row row-cols-sm-2 row-cols-md-4">
                @forelse ($departing_trains as $train)
                <div class="col">
                    <div class="card h-100">
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
                    </div>
                </div>
                @empty
                
                @endforelse
            </div>
        </div>
    </section>

    

@endsection