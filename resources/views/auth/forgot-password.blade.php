@extends('layout.Front')
@section('content')
    <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Forget Password</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3 class="mb-3">Check ur email
                            </h3>
                            <form class="row contact_form" method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <!-- Email Address -->
                                <div class="col-md-12 form-group ">

                                    <x-text-input id="email" class="form-control " placeholder="write ur email"
                                        type="email" name="email" :value="old('email')" required autofocus />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div class="col-md-12 form-group">
                                    <x-primary-button class="btn_3">
                                        {{ __('Email Password Link') }}
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
