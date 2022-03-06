<section class="w-75 mx-auto">
    <h1>Vérification</h1>
    <form action="/administration" method="GET">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="mail">
        </div>
        <button class="btn btn-dark" type="submit">Vérifié</button>
    </form>
</section>
