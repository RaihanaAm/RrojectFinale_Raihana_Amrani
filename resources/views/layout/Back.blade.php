<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aranoz Backend</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    @include('layout.flash')
    <div class="m-5 d-flex align-items-center ">
        <li class="nav-link">
            <a class=" " href="{{ route('welcome') }}"> <img src="{{asset("img/logo.png")}}" alt="logo">
            </a>
        </li>
        <li class="nav-link  ms-5 fs-5">
            <a class="text-danger nav-link ms-5 " href="{{ route('welcome') }}">Home</a>
        </li>
        @hasrole('admin')
            <li class="nav-link ms-3 fs-5">
                <a class=" nav-link  " href="{{ route('contactBack') }}">Contact</a>
            </li>
            <li class="nav-link ms-3 fs-5">
                <a class=" nav-link  " href="{{ route('touchback') }}">Messages</a>
            </li>
            <li class="nav-link ms-3 fs-5">
                <a class=" nav-link  " href="{{ route('users.back') }}">Users</a>
            </li>
            <li class="nav-link ms-3 fs-5">
                <a class=" nav-link  " href="{{ route('product.back') }}">Products</a>
            </li>
        @endhasrole
        @hasrole('webMaster')
            <li class="nav-link ms-3 fs-5">
                <a class=" nav-link  " href="{{ route('Master.back') }}">Products</a>
            </li>
        @endhasrole
    </div>



    @yield('content')


</body>

</html>
