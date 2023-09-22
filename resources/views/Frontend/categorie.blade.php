@extends('layout.Front')
@section('content')
    <style>
        /* Custom tablist background color */
        #v-pills-tab .nav-link.active {
            background-color: #ba160a;
            /* Change this to your desired color */
            color: #fff;
            /* Change this to the text color you prefer */
        }

        #v-pills-tab .nav-link {
            color: #ba160a;
            /* Change this to the text color you prefer */
        }
    </style>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Shop Category</h2>
                            <p>Home <span>-</span> Shop Category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Category Product Area =================-->
    {{-- gudgsd --}}

    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="#">Frozen Fish</a>
                                        <span>(250)</span>
                                    </li>
                                    <li>
                                        <a href="#">Dried Fish</a>
                                        <span>(250)</span>
                                    </li>
                                    <li>
                                        <a href="#">Fresh Fish</a>
                                        <span>(250)</span>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu">
                                    <p> Prodict Found</p>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <h5>short by : </h5>
                                    <select>
                                        <option data-display="Select">name</option>
                                        <option value="1">price</option>
                                        <option value="2">product</option>
                                    </select>
                                </div>


                            </div>
                        </div>
                    </div>

                    {{-- ********** --}}
                    <section class="">

                        <div class="row ">
                            <div class="col-3">
                                <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link  active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true">All product</a>
                                    <a class="nav-link " id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false">Chair</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false">Table</a>
                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                                        aria-controls="v-pills-settings" aria-selected="false">sofa</a>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    
                                        <div class="row align-items-center latest_product_inner">
                                            @foreach ($products as $product)
                                                <div class="col-lg-4 col-sm-6">
                                                    <div class="single_product_item">
                                                        <a href="{{ route('singlepage.show', $product->id) }}">
                                                            <img style="object-fit: cover;" src="{{ asset('storage/' . $product->img) }}"
                                                                width="180" height="230" alt="">
                                                        </a>
                                                        <div class="single_product_text">
                                                            <h4>{{ $product->name }}</h4>
                                                            <h3>${{ $product->price }}.00</h3>
                                                            <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                    
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                        
                                        <div class="row align-items-center latest_product_inner">
                                            @foreach ($products as $product)
                                            @if ($product->categorie->name === "chaire" )
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="single_product_item">
                                                    <a href="{{ route('singlepage.show', $product->id) }}">
                                                        <img style="object-fit: cover;" src="{{ asset('storage/' . $product->img) }}"
                                                            width="180" height="230" alt="">
                                                    </a>
                                                    <div class="single_product_text">
                                                        <h4>{{ $product->name }}</h4>
                                                        <h3>${{ $product->price }}.00</h3>
                                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                        <div class="row align-items-center latest_product_inner">
                                            @foreach ($products as $product)
                                            @if ($product->categorie->name === "tables" )
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="single_product_item">
                                                    <a href="{{ route('singlepage.show', $product->id) }}">
                                                        <img style="object-fit: cover;" src="{{ asset('storage/' . $product->img) }}"
                                                            width="180" height="230" alt="">
                                                    </a>
                                                    <div class="single_product_text">
                                                        <h4>{{ $product->name }}</h4>
                                                        <h3>${{ $product->price }}.00</h3>
                                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                        <div class="row align-items-center latest_product_inner">
                                            @foreach ($products as $product)
                                            @if ($product->categorie->name === "sofa" )
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="single_product_item">
                                                    <a href="{{ route('singlepage.show', $product->id) }}">
                                                        <img style="object-fit: cover;" src="{{ asset('storage/' . $product->img) }}"
                                                            width="180" height="230" alt="">
                                                    </a>
                                                    <div class="single_product_text">
                                                        <h4>{{ $product->name }}</h4>
                                                        <h3>${{ $product->price }}.00</h3>
                                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    




                    <div class="row align-items-center latest_product_inner">
 {{-- pagination --}}
 <div class="col-lg-12">
    <div class="pageination">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <i class="ti-angle-double-left"></i>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <i class="ti-angle-double-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
