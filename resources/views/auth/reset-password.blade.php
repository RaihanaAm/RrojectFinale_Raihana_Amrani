

@extends('layout.Front')
@section('content')
    <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Reset password</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3 class="mb-3">New password
                            </h3>
                            <form method="POST" class="row contact_form" action="{{ route('password.store') }}">
                                @csrf
                            
                                <!-- Password Reset Token -->
                                <input type="hidden" class="form-control " name="token" value="{{ $request->route('token') }}">
                            
                                <!-- Email Address -->
                                <div class="col-md-12 form-group ">
                                    <x-text-input id="email" class="form-control " type="email" name="email" placeholder="write ur email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            
                                <!-- Password -->
                                <div class="col-md-12 form-group ">
                                    <x-text-input id="password" class="form-control " type="password" name="password" placeholder="New password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            
                                <!-- Confirm Password -->
                                <div class="col-md-12 form-group ">
                            
                                    <x-text-input id="password_confirmation" class="form-control "
                                                        type="password"
                                                        name="password_confirmation" placeholder="confirme password" required autocomplete="new-password" />
                            
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            
                                <div class="col-md-12 form-group">
                                    <x-primary-button class="btn_3">
                                        {{ __('Reset Password') }}
                                    </x-primary-button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

