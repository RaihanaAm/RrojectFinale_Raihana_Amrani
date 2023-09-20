@extends('layout.Front')
@section('content')
    <!--================login_part Area =================-->
    <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="{{route("registere")}}" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="{{ route('inter') }}" method="POST"
                                novalidate="novalidate">
                                @csrf
                                <div class="col-md-12 form-group p_star">
                                    <x-text-input id="email" class="form-control " type="email" name="email"
                                        :value="old('email')" placeholder="Email" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                                </div>
                                <!-- Password -->
                                <div class="mt-4 col-md-12 form-group p_star">
                                    <x-text-input id="password" class="form-control" type="password" name="password"
                                        required placeholder="Password" autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2  text-danger" />
                                </div>

                                <!-- Remember Me -->
                                <div class="col-md-12 form-group creat_account">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox"
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                            name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                <div class="col-md-12 form-group">
                                    
                    
                                <x-primary-button class=" btn_3">
                                    {{ __('Log in') }}
                                </x-primary-button>
                                @if (Route::has('password.request'))
                                    <a class="lost_pass underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
@endsection
<!--::footer_part start::-->
