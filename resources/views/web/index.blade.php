@extends('web.layout.app')
@section('content')
@php
     $categoryone = Helper::get_product_categories(1);
@endphp
<div class="body-content outer-top-vs" id="top-banner-and-menu">
  <div class="container">
    <div class="row">
      <!-- ============================================== SIDEBAR ============================================== -->
      @include('web.layout.sidebar')
      <!-- /.sidemenu-holder -->
      <!-- ============================================== SIDEBAR : END ============================================== -->
      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
        <!-- ========================================== SECTION – HERO ========================================= -->
        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url({{url('web-assets/images/sliders/slide1.png')}});border-radius:5px;">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1">Organic Vegetables</div>
                  <div class="big-text fadeInDown-1"> 100% Fresh Vegetables</div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="{{ url('web') }}?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption -->
              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.item -->
            <div class="item" style="background-image: url({{url('web-assets/images/sliders/portfolio-2.jpg')}});border-radius:5px;">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1" style="color:#fff;">Spring 2021</div>
                  <div class="big-text fadeInDown-1" style="color:#fff;"> Fresh Meats</div>
                  <div class="excerpt fadeInDown-2 hidden-xs" style="color:#fff;"> <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="{{ url('web') }}?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption -->
              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.item -->
          </div>
          <!-- /.owl-carousel -->
        </div>
      </div>
      <!-- ========================================= SECTION – HERO : END ========================================= -->
      <div class="col-xs-12 col-sm-12 col-md-12">
        <!-- ============================================== SCROLL TABS ============================================== -->
        @foreach($categoryone as $key => $categorypro)
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
          @php
            $catproducts = Helper::cat_Products($categorypro->cat_id);
          @endphp
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">{{$categorypro->title}}</h3>
            <!-- <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
              <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
              <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
              <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
            </ul> -->
            <!-- /.nav-tabs -->
          </div>

          <div class="tab-content outer-top-xs">

            <div class="tab-pane in active" id="all">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                  @foreach($catproducts as $product)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image">
                            <a target="_blank" href="{{ url('web/product/'.$product->product_id) }}"> <img src="{{url($product->product_image)}}" alt=""> <img src="{{url($product->product_image)}}" alt="" class="hover-image"> </a>
                          </div>
                          <!-- /.image -->
                          <!-- <div class="tag new"><span>new</span></div> -->
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                          <h3 class="name"><a target="_blank" href="{{ url('web/product/'.$product->product_id) }}">{{ substr($product->product_name, 0, 25) }} @if(strlen($product->product_name)>25)...@endif</a></h3>
                          <!--<div class="rating rateit-small"></div>-->
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> <i class="fa fa-inr"></i> {{ $product->price }} </span> <span class="price-before-discount"><i class="fa fa-inr"></i> {{ $product->mrp }}</span> </div>
                          <!-- /.product-price -->
                          <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <div class="number">
                                    <span class="minus quantity-action">-</span>
                                        <input type="text" id="product_quantity_{{$product->product_id}}" data-productid="{{$product->product_id}}" value="1" class="add-input">
                                    <span class="plus quantity-action">+</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6"> <a data-id="{{$product->product_id}}" data-name="{{$product->product_name}}" data-summary="{{$product->product_name}}" data-price="{{ $product->price }}" data-quantity="1" data-image="{{url($product->product_image)}}" href="#" class="btn btn-add my-cart-btn">Add To Cart</a> </div>
                          </div>
                        </div>
                        <!-- /.product-info -->

                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->
                    </div>
                    <!-- /.products -->
                  </div>
                  <!-- /.item -->
                   @endforeach
                  <!-- /.item -->
                </div>
                <!-- /.home-owl-carousel -->
              </div>
              <!-- /.product-slider -->
            </div>


            <!-- /.tab-pane -->
          </div>

          <!-- /.tab-content -->
        </div>
        @if($key==1)
        <div class="wide-banners outer-bottom-xs">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{url('web-assets/images/products/fish/bnh4.jpg')}}" alt=""> </div>
              </div>
              <!-- /.wide-banner -->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{url('web-assets/images/products/fish/bnh5.jpg')}}" alt=""> </div>
              </div>
              <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
            <div class="col-md-4 col-sm-4 col-xs-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{url('web-assets/images/products/fish/bnh6.jpg')}}" alt=""> </div>
              </div>
              <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        @endif
        @endforeach
        <!-- /.scroll-tabs -->
        <!-- ============================================== SCROLL TABS : END ============================================== -->
        <!-- ============================================== WIDE PRODUCTS ============================================== -->

        <!-- /.wide-banners -->
        <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
        <!-- /.sidebar-widget -->
        <!-- ============================================== BEST SELLER : END ============================================== -->
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->

        <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
        <div class="wide-banners outer-bottom-xs">
          <div class="row">
            <div class="col-md-8 col-xs-8">
              <div class="wide-banner1 cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{url('web-assets/images/sliders/add.png')}}" alt=""> </div>
                <div class="new-label">
                  <div class="text">NEW</div>
                </div>
                <!-- /.new-label -->
              </div>
              <!-- /.wide-banner -->
            </div>
            <!-- /.col -->
            <div class="col-md-4 col-xs-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="{{url('web-assets/images/sliders/add2.png')}}" alt="" style="width: 100%;"> </div>
                <!-- /.new-label -->
              </div>
              <!-- /.wide-banner -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.wide-banners -->
        <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
        <!-- ============================================== FEATURED PRODUCTS ============================================== -->

        <!-- /.section -->
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
      </div>
      <!-- /.homebanner-holder -->
      <!-- ============================================== CONTENT : END ============================================== -->
    </div>
    <!-- /.row -->
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    @include('web.layout.brand')
    <!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
  </div>
  <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->
<!-- ============================================== INFO BOXES ============================================== -->
@include('web.layout.shipbar')
@endsection
