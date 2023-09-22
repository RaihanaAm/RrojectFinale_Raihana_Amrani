@extends('layout.Back')
@section('content')
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">image</th>
                <th scope="col">Show</th>
                <th scope="col">Edite</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr valign="middle">
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $product->name }} </td>
                    <td> <img src="{{asset("storage/".$product->img)}}" width="80" alt=""></td>
                    <td>@include('Backend.components.productshow')</td>
                    <td>@include("Backend.components.productedite")</td>
                    <td>
                        <form action="{{route('destroy.back',$product->id)}}" method="POST" >
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
