<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalcreateusers">
    create new user
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalcreateusers" tabindex="-1" aria-labelledby="exampleModalcreateusersLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalcreateusersLabel">Create new user</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{route("usersStore.back")}}" method="POST">
            @csrf
            <div>
                <label for="name">write user name</label>
                <input type="text" class="form-control" name="name" id="name"  required>
            </div>
            <div>
                <label for="email">write user email</label>
                <input type="email" class="form-control" name="email" id="email"  required>
            </div>
            <button class="btn mt-2 btn-success" type="submit" >create</button>
          </form>
        </div>
      </div>
    </div>
  </div>