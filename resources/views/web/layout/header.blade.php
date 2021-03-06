<header class="header-style-1">
@php
    $category = Helper::get_categories(1);
    $settingData = Helper::get_settings();
    $currencySymbol = '₹';
    $webLogin = session('webLogin', false);
    //dd($webLogin);
@endphp
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
              @if($webLogin==true)
                  <li class="myaccount"><a href="#"><span>My Account</span></a></li>
                  <li class="wishlist"><a href="#"><span>Wishlist</span></a></li>
                  <li class="header_cart hidden-xs"><a href="#"><span>My Cart</span></a></li>
                  <li class="check"><a href="#"><span>Checkout</span></a></li>
              @endif

              @if($webLogin==false)
                <li class="login"><a href="{{ url('/web/login') }}"><span>Login</span></a></li>
                <li class="register"><a href="{{ url('/web/sign-up') }}"><span>Register</span></a></li>
              @else
                 <li class="logout"><a href="{{ route('userlogout') }}"><span>Logout</span></a></li>
              @endif
          </ul>
        </div>
        <!-- /.cnt-account -->

        <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">AED </span></a>
              <!--<ul class="dropdown-menu">-->
              <!--  <li><a href="#">USD</a></li>-->
              <!--  <li><a href="#">INR</a></li>-->
              <!--  <li><a href="#">GBP</a></li>-->
              <!--</ul>-->
            </li>
            <li class="dropdown dropdown-small lang"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span></a>
              <!--<ul class="dropdown-menu">-->
              <!--  <li><a href="#">English</a></li>-->
              <!--  <li><a href="#">French</a></li>-->
              <!--  <li><a href="#">German</a></li>-->
              <!--</ul>-->
            </li>
          </ul>
          <!-- /.list-unstyled -->
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.header-top -->
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo" style="color: #fff;font-size: 25px;font-weight: bold;"> <a href="{{ url('/web') }}"> <img src="{{url('web-assets/images/less-logo.png')}}" alt="logo"> </a> DEMO SHOP </div>
          <!-- /.logo -->
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->

        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder">
          <!-- /.contact-row -->
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form>
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                    <!--<ul class="dropdown-menu" role="menu" >-->
                    <!--  <li class="menu-header">Computer</li>-->
                    <!--  <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>-->
                    <!--  <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>-->
                    <!--  <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>-->
                    <!--  <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>-->
                    <!--</ul>-->
                  </li>
                </ul>
                <input class="search-field" placeholder="Search here..." />
                <a class="search-button" href="#" ></a> </div>
            </form>
          </div>
          <!-- /.search-area -->
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->

        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row">
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket my-cart-icon" style="float: right; cursor: pointer;">
                <div class="basket-item-count my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></div>
                <div class="total-price-basket"> <span class="lbl">Shopping Cart</span> <span class="value">{{$currencySymbol}}0.00</span> </div>
              </div>
            </div>
            </a>
            <ul class="dropdown-menu hide">
              <li>
                <!-- <div class="cart-item product-summary">
                  <div class="row">
                    <div class="col-xs-4">
                      <div class="image"> <a href="#"><img src="{{url('web-assets/images/products/p4.jpg')}}" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href="index.php?page-detail">Simple Product</a></h3>
                      <div class="price">$600.00</div>
                    </div>
                    <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div>
                  </div>
                </div> -->
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix cart-total hide">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$0.00</span> </div>
                  <div class="clearfix"></div>
                  <a href="#" class="btn btn-upper btn-primary btn-block m-t-20 hide">Checkout</a>
                </div>
                <!-- /.cart-total-->

              </li>
            </ul>
            <!-- /.dropdown-menu-->
          </div>
          <!-- /.dropdown-cart -->

          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row -->
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </div>
  <!-- /.main-header -->

  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown header" id="myHeader">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown"> <a href="{{ url('/web') }}">Home</a> </li>
                @foreach($category as $cat)
                  <li class="dropdown"> <a href="{{ url('web/category/'.$cat->cat_id) }}"> {{ $cat->title }} </a> </li>
                @endforeach
                <li class="dropdown  navbar-right special-menu"> <a href="#">Get 30% off on selected items</a> </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
          </div>
          <!-- /.navbar-collapse -->

        </div>
        <!-- /.nav-bg-class -->
      </div>
      <!-- /.navbar-default -->
    </div>
    <!-- /.container-class -->

  </div>
  <!-- /.header-nav -->
  <!-- ============================================== NAVBAR : END ============================================== -->

</header>
