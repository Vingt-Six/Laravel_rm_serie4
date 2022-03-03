<section class="mx-5">
    <h1>Légumes</h1>
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

        <h1>Fruits</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fruits as $fruit)
                    <tr class="{{strlen($fruit->name) >= 5 ? 'bg-primary text-light' : ''}}">
                        <th scope="row">{{$fruit->id}}</th>
                        <td><a href="/showfruits/{{$fruit->id}}" class="text-decoration-none {{strlen($fruit->name) >= 5 ? 'text-light' : 'text-dark'}} ">{{$fruit->name}}</a></td>
                        <td>{{$fruit->quantity}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</section>