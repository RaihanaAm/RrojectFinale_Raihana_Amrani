@extends('layout.Back')
@section('content')

<div class="text-center mb-5">
    @include('Backend.components.createproduct')
</div>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">image</th>
                <th scope="col">Show</th>
                <th scope="col">Edite</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            @if ($product->user->id ===2)
            <tr valign="middle">
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $product->name }} </td>
                <td> <img src="{{asset("storage/".$product->img)}}" width="80" alt=""></td>
                <td>@include('Backend.components.productshow')</td>
                <td>@include("Backend.components.productedite")</td>
            
            </tr>
            @endif
            @endforeach

        </tbody>
    </table>
@endsection
