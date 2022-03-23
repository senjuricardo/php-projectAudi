@extends('master.main')

@section('content')
    <div class="container-fluid">

    <div class="row ">
        <div class="col-12 w-100">
            @component('components.carrousel.carrousel', [
            'images' => $imagesCarrousel
])
            @endcomponent
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12"
                @component('components.cards.cards',[

            'images' =>$imagesCards
            ])
                @endcomponent
            </div>
        </div>
    <div class="container">
        <div class="row d-flex align-items-center mb-5">
        @component('components.imgTexto.imgTexto',[
            'images' => $imageText
            ])

        @endcomponent
        </div>
    </div>
@endsection
