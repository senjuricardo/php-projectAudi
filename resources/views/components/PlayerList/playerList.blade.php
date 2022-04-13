<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">date</th>
        <th scope="col">car</th>
        <th scope="col">address</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($players as $player)
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
        <td>  <a href="{{url('players/' . $player->id)}}">Show</a> </td>

    </tr>
    @endforeach
    </tbody>
</table>

