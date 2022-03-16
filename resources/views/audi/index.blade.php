@extends('master.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @component('components.cards.cards')
                @endcomponent
            </div>
        </div>
    </div>
@endsection
