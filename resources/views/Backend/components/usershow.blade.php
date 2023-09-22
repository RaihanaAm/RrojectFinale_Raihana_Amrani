<!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}usershow">
    show
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$user->id}}usershow" tabindex="-1" aria-labelledby="exampleModal{{$user->id}}usershowLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModal{{$user->id}}usershowLabel">Show</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p> Name: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
          

        </div>
      </div>
    </div>
  </div>