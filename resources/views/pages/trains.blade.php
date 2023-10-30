@extends('layouts.app')

@section('page_title', 'Trains List')

@section('content')
    
<section class="trains py-5">

    <div class="container">

        <h2 class="py-3">Treni in partenza Oggi</h2>
    
        <div class="row row-cols-2 row-cols-md-4 g-4">
    
            @forelse ($trains as $train)
            <div class="col">
    
                <div class="card h-100">
    
                    @include('partials.card_train')
    
                </div>
                {{-- /.card --}}
    
            </div>
            <!-- /.col -->
            @empty
                <div>Nessun treno disponibile ancora,torna più tardi</div>
            @endforelse
        </div>
        <!-- /.row -->

       <div class="pt-4"> {{$trains->links('pagination::bootstrap-5')}} </div>

    </div>
    <!-- /.container -->

</section>
{{-- /.trains --}}

@endsection