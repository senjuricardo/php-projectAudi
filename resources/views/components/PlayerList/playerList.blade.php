<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">date</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($players as $player)
    <tr>
        <th scope="row">{{$player->id}}</th>
        <td>{{$player->name}}</td>
        <td>{{$player->birth_date}}</td>
        <td>{{$player->created_at}}</td>
        <td> {{$player->updated_at}}</td>
    </tr>
    @endforeach
    </tbody>
</table>

