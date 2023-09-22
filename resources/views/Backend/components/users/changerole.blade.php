<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}role">
    Edite role
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal{{$user->id}}role" tabindex="-1" aria-labelledby="exampleModal{{$user->id}}roleLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModal{{$user->id}}roleLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{route("editeRoleUser.back",$user->id)}}" method="POST">
                @csrf
                @method('PUT')
                <select name="role" class="form-control" id="">
                    @foreach ($roles as $role )
                    <option value="{{$role->id}}"   @if (old('role', $role->id) == $user->id) selected @endif>{{$role->name}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-success">Done</button>
            </form>
        </div>
      </div>
    </div>
  </div>