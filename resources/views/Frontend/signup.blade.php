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
                            <a href="{{ route('Logine') }}" class="btn_3">Log in</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Please Sign Up now <br>
                                Register !</h3>
                                <form method="POST" class="row contact_form" action="{{ route('test') }}">
                                    @csrf
                            
                                    <!-- Name -->
                                    <div class="col-md-12 form-group p_star">
                                        <x-text-input id="name" class="form-control " type="text" name="name" :value="old('name')" required  placeholder="Username" autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                            
                                    <!-- Email Address -->
                                    <div  class="mt-4 col-md-12 form-group p_star">
                                        <x-text-input id="email" class="form-control " type="email" name="email" :value="old('email')" required  placeholder="Email" autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                            
                                    <!-- Password -->
                                    <div class="mt-4 col-md-12 form-group p_star">
                            
                                        <x-text-input id="password" class="form-control "
                                                        type="password"
                                                        name="password"
                                                        placeholder="Password"
                                                        required autocomplete="new-password" />
                            
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                            
                                    <!-- Confirm Password -->
                                    <div class="mt-4 col-md-12 form-group p_star">
                            
                                        <x-text-input id="password_confirmation" class="form-control "
                                                        type="password"
                                                        placeholder="Confirme Password"
                                                        name="password_confirmation" required autocomplete="new-password" />
                            
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                            
                                    <div class="flex items-center justify-end mt-4 col-md-12 form-group">
                                        
                                        <x-primary-button class="btn_3">
                                            {{ __('Register') }}
                                        </x-primary-button>
                                        <a class="lost_pass underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>
                                    </div>
                                </form>
                                {{-- ********************** --}}
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
@endsection
<!--::footer_part start::-->
