@extends('layout.Back')
@section('content')
    <table class="table container">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">subject</th>
                <th scope="col">message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($touches as $touche)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $touche->name }}</td>
                    <td>{{ $touche->email }}</td>
                    <td>{{ $touche->subject }}</td>
                    <td>{{ $touche->message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
