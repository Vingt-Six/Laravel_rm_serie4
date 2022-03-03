<section class="mx-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($legumes as $legume)
                <tr class="{{strlen($legume->name) >= 5 ? 'bg-primary text-light' : ''}}">
                    <th scope="row">{{$legume->id}}</th>
                    <td><a href="/showlegumes/{{$legume->id}}" class="text-decoration-none {{strlen($legume->name) >= 5 ? 'text-light' : 'text-dark'}} ">{{$legume->name}}</a></td>
                    <td>{{$legume->quantity}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
