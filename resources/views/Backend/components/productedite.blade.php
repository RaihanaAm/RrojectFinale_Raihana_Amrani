<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$product->id}}edite">
    Edite
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$product->id}}edite" tabindex="-1" aria-labelledby="exampleModal{{$product->id}}editeLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModal{{$product->id}}editeLabel">Update product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form action="{{route('update.back',$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div>
              <label for="name">Write ur name</label>
              <input type="text" class="form-control" name="name" id="name" value="{{old("name",$product->name)}}" required>
            </div>
            <div>
              <label for="desc">Write ur desc</label>
              <input type="text" class="form-control" name="desc" id="desc" value="{{old("desc",$product->desc)}}" required>
            </div>
            <div>
              <label for="img">upload ur img</label>
              <input type="file" class="form-control" name="img" id="img" >
            </div>
            <div>
              <label for="qnt">Write ur quantité</label>
              <input type="number" min="0" class="form-control" name="qnt" id="qnt" value="{{old("qnt",$product->qnt)}}" required>
            </div>
            <div>
              <label for="price">Write ur Price</label>
              <input type="number" min="0" class="form-control" name="price" id="price" value="{{old("price",$product->price)}}" required>
            </div>
            <div>
              <label for="categorie_id">chose ur categorie</label>

              <select class="form-control" name="categorie_id" id="">
                <option disabled>Choose product category</option>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}" @if (old('categorie_id', $product->categorie_id) == $categorie->id) selected @endif>
                        {{ $categorie->name }}
                    </option>
                @endforeach
            </select>
            
            </div>
            <button class="btn mt-2 btn-success" type="submit">Update</button>
        
          </form>
          
        </div>
        
      </div>
    </div>
  </div>