<section class="w-75 mx-auto">
    <a href="{{URL::previous()}}" class="btn btn-warning">Back</a>
    <form action="/legumes/store" method="POST">
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="name">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="formGroupExampleInput2" name="quantity" min="0">
        </div>
        <button class="btn btn-primary" type="submit">ADD</button>
    </form>
</section>