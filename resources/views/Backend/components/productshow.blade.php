<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal"
    data-bs-target="#exampleModal{{ $product->id }}productshow">
    show
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $product->id }}productshow" tabindex="-1"
    aria-labelledby="exampleModal{{ $product->id }}productshowLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModal{{ $product->id }}productshowLabel">Show</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p> Name: {{ $product->name }}</p>
                <p>Quantité: {{ $product->qnt }}</p>
                <p>price : {{ $product->price }}$</p>
                <p>catégorie: {{ $product->categorie->name}}</p>
                <p>posted by: {{ $product->user->name}}</p>
            </div>

        </div>
    </div>
</div>
