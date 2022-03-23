@extends('master.main')

@section('content')
    <div class="row">
        <div class="col-12">
            @component('components.carrousel.carrousel', [
            'images' => $imagesCarrousel
])
            @endcomponent
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
        <div class="row">
        @component('components.imgTexto.imgTexto',[
            'images' => $imageText
            ])

        @endcomponent
        </div>
    </div>
@endsection
