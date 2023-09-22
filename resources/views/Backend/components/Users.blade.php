@extends('layout.Back')
@section('content')
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Role</th>
                <th scope="col">Show</th>
                <th scope="col">Edite</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $user->name }} </td>
                    <td>{{ $user->roles[0]->name }} </td>
                    <td>@include('Backend.components.usershow')</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
