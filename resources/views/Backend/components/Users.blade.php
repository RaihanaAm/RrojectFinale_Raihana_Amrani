@extends('layout.Back')
@section('content')
    <div class="mb-5 text-center">
        @include('Backend.components.users.create')

    </div>

    <table class="table container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">Role</th>
                <th scope="col">Show</th>
                <th scope="col">Edite role</th>
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
                    <td>
                     @include('Backend.components.users.changerole')
                    </td>
                    <td>
                        <form action="{{ route('destroyUser.back',$user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>

                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
