@extends('master.main')


@section('content')
    <h1>Players</h1>

@component('components.PlayerList.playerList',[
        'players'=>$players
])
@endcomponent
@endsection
