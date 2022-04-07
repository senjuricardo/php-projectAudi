@extends('master.main')


@section('content')
    <h1>Team <Navi></Navi></h1>
@component('components.teamList.teamList',[
    'teams'=>$teams
    ])
@endcomponent

@endsection
