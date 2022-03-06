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
            @foreach ($legumes as $legume)
                <tr>
                    <th scope="row">{{$legume -> id}}</th>
                    <td><a href="/showbacklegume/{{$legume -> id}}" class="text-decoration-none text-dark">{{$legume -> name}}</a></td>
                    <td>{{$legume -> quantity}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{Route('addlegumes')}}" class="btn btn-dark">Add Fruit</a>
</section>
