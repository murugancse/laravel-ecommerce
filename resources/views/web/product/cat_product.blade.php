@extends('web.layout.app')
@section('content')
@php
    $thirdparam = Request::segment(3);
    $secondparam = Request::segment(2);
@endphp
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="#">Home</a></li>
        <li class='active'>{{$category->title}}</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner -->
  </div>
  <!-- /.container -->
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class="col-xs-12 col-sm-12 col-md-12 rht-col">
        <!-- ========================================== SECTION – HERO ========================================= -->



        <div class="clearfix filters-container m-t-10">
          <div class="row">

            <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">
              <div class="col col-sm-6 col-md-6 no-padding">
                <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                  <div class="fld inline">
                    <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                      <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                      <ul role="menu" class="dropdown-menu">
                        <li role="presentation"><a href="#">position</a></li>
                        <li role="presentation"><a href="#">Price:Lowest first</a></li>
                        <li role="presentation"><a href="#">Price:HIghest first</a></li>
                        <li role="presentation"><a href="#">Product Name:A to Z</a></li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.fld -->
                </div>
                <!-- /.lbl-cnt -->
              </div>
              <!-- /.col -->

              <!-- /.col -->
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 col-xs-6 col-lg-4 text-right hide">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline -->
              </div>
              <!-- /.pagination-container -->
			      </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">

              <div class="category-product">
                <div class="row">
                  @foreach($products as $product)
                  <div class="col-sm-6 col-md-3 col-lg-3">

                    <div class="item">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image">
                              <a href="{{ url('web/product/'.$product->product_id) }}"> <img src="{{url($product->product_image)}}" alt=""> <img src="{{url($product->product_image)}}" alt="" class="hover-image"> </a>
                            </div>
                            <!-- /.image -->
                            <!-- <div class="tag new"><span>new</span></div> -->
                          </div>
                          <!-- /.product-image -->
                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{ url('web/product/'.$product->product_id) }}">{{ substr($product->product_name, 0, 25) }} @if(strlen($product->product_name)>25)...@endif</a></h3>
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
                              <div class="col-md-6 col-xs-6"> <a data-id="{{$product->product_id}}" data-name="{{$product->product_name}}" data-summary="{{$product->product_name}}" data-price="{{ $product->price }}" data-quantity="1" data-image="{{url($product->product_image)}}" href="#" class="btn btn-add my-cart-btn">Add To Cart</a>  </div>
                            </div>
                          </div>
                          <!-- /.product-info -->

                          <!-- /.cart -->
                        </div>
                        <!-- /.product -->
                      </div>

                      <!-- /.products -->
                    </div>

                  </div>
                  @endforeach
                  <!-- /.item -->

                  <!-- /.item -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.category-product -->

            </div>
            <!-- /.tab-pane -->

            <!-- /.tab-pane #list-container -->
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container bottom-row hide">
            <div class="text-right">
              <div class="pagination-container">
                <ul class="list-inline list-unstyled">
                  <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
                <!-- /.list-inline -->
              </div>
              <!-- /.pagination-container -->
            </div>
            <!-- /.text-right -->

          </div>
          <!-- /.filters-container -->

        </div>
        <!-- /.search-result-container -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    @include('web.layout.brand')
    <!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container -->

</div>

<!-- /#top-banner-and-menu -->
<!-- ============================================== INFO BOXES ============================================== -->
@include('web.layout.shipbar')
@endsection
