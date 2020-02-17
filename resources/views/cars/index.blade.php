<table class="table">
    <thead>
        <tr>
            <th>Brand</th>
            <th>Model</th>
            <th>Year</th>
            <th>Owner</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cars as $car)
            <tr>
            <td>{{$car->brand}}</td>
            <td>{{$car->model}}</td>
            <td>{{$car->year}}</td>
            <td>{{$car->owner}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
