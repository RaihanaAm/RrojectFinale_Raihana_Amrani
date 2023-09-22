@extends('layout.Front')
@section('content')
    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Cart Products</h2>
                            <p>Home <span>-</span>Cart Products</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Cart Area =================-->
    <section class="cart_area padding_top">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>


                            {{-- ********************* --}}
                            @foreach ($userProducts as $userProduct )
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{asset('storage/'.$userProduct->product->img)}}" width="150" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <p>{{$userProduct->product->name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{$userProduct->product->price}}$</h5>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input class="input-number" type="text" disabled value="{{$userProduct->qnt}}" min="0"
                                            max="10">
                                    </div>
                                </td>
                                <td>
                                    <h5>${{$userProduct->product->price * $userProduct->qnt}}</h5>
                                </td>
                            </tr>
                            @endforeach
                            {{-- ********************* --}}




                            <tr class="bottom_button">
                                <td>
                                    <a class="btn_1" href="#">Update Cart</a>
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="cupon_text float-right">
                                        <a class="btn_1" href="#">Close Coupon</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>$</h5>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">
                        <a class="btn_1" href="#">Continue Shopping</a>
                    </div>
                </div>
            </div>
    </section>
    <!--================End Cart Area =================-->
@endsection
