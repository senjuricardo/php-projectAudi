<table class="table table-sm table-dark">
    <thead>
    <tr>
        <th scope="col">iderino</th>
        <th scope="col">namerino</th>
        <th scope="col">Countryrino</th>
        <th scope="col">birtherino</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($teams as $team)
    <tr>
        <th scope="row">{{$team->id}}</th>
        <td>{{$team->name}}</td>
        <td>{{$team->country_id}}</td>
        <td>{{$team->date_birth}}</td>
        <td>{{$team->created_at}}</td>
        <td> {{$team->updated_at}}</td>
    </tr>
    @endforeach

    </tbody>
</table>
