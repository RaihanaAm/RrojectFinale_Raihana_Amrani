@extends('layout.Back')
@section('content')
<div class="container">
    <form action="{{route('store.contact',$contact->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div>
            <label class="fw-bold" for="name">write street name</label>
            <input class="form-control" type="text" name="name" value="{{old('name', $contact->name)}}" required >
        </div>
        <div class="mt-4">
            <label class="fw-bold" for="number"> write phone number</label>
            <input class="form-control" type="text" name="number" value="{{old('number', $contact->number)}}" required >
        </div>
        <div class="mt-4">
            <label class="fw-bold" for="email">write Store email</label>
            <input class="form-control" name="email" type="text" value="{{old('email', $contact->email)}}" required >
        </div>
        <button class="btn btn-success mt-4" type="submit">Done</button>

    </form>
</div>
@endsection
