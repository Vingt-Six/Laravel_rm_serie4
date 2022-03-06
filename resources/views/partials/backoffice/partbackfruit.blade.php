<section class="mx-5">
    <a href="{{URL::previous()}}" class="btn btn-warning">Back</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Qauntity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fruits as $fruit)
                <tr>
                    <th scope="row">{{$fruit -> id}}</th>
                    <td>{{$fruit -> name}}</td>
                    <td>{{$fruit -> quantity}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{Route('addfruits')}}" class="btn btn-dark">Add Fruit</a>
</section>
