<section>
    <a href="{{ URL::previous() }}" class="btn btn-warning">Back</a>
    <h1>{{ $show->name }} - {{ $show->quantity }}</h1>
    <form action="/deletelegume/{{$show->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-dark" type="submit">Delete</button>
    </form>
</section>