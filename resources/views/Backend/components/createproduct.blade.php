<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalcreateproduct">
    New product
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalcreateproduct" tabindex="-1" aria-labelledby="exampleModalcreateproductLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalcreateproductLabel">Create product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route("store.back")}}"  method="POST" enctype="multipart/form-data">
                    @csrf
       
                    <div>
                      <label for="name">Write ur name</label>
                      <input type="text" class="form-control" name="name" id="name"  required>
                    </div>
                    <div>
                      <label for="desc">Write ur desc</label>
                      <input type="text" class="form-control" name="desc" id="desc" required>
                    </div>
                    <div>
                      <label for="img">upload ur img</label>
                      <input type="file" class="form-control" name="img" id="img" required >
                    </div>
                    <div>
                      <label for="qnt">Write ur quantité</label>
                      <input type="number" min="0" class="form-control" name="qnt" id="qnt"  required>
                    </div>
                    <div>
                      <label for="price">Write ur Price</label>
                      <input type="number" min="0" class="form-control" name="price" id="price" required>
                    </div>
                    <div>
                      <label for="categorie_id">chose ur categorie</label>
        
                      <select class="form-control" name="categorie_id" id="" required>
                        <option disabled selected>Choose product category</option>
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">
                                {{ $categorie->name }}
                            </option>
                        @endforeach
                    </select>
                    
                    </div>
                    <button class="btn mt-2 btn-success" type="submit">create</button>
                
                  </form>

            </div>

        </div>
    </div>
</div>
