@extends('master.main')


@section('content')
    <h1>Player</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">date</th>
            <th scope="col">car</th>
            <th scope="col">address</th>

        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$player->id}}</th>
                <td>{{$player->name}}</td>
                <td>{{$player->birth_date}}</td>
                <td>
                    @foreach($player -> cars as $car)
                        <p>{{$car ->name}}</p>
                    @endforeach
                </td>
                <td> {{$player->address->address}} - {{$player->address->country->name}}</td>
            </tr>
        </tbody>
    </table>



@endsection
