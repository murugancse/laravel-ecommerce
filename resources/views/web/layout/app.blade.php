<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <meta name="keywords" content="MediaCenter, Template, eCommerce">
      <meta name="robots" content="all">
      <title>Online Shop</title>

      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="{{url('web-assets/css/bootstrap.min.css')}}">

      <!-- Customizable CSS -->
      <link rel="stylesheet" href="{{url('web-assets/css/main.css')}}">
      <link rel="stylesheet" href="{{url('web-assets/css/blue.css')}}">
      <link rel="stylesheet" href="{{url('web-assets/css/owl.carousel.css')}}">
      <link rel="stylesheet" href="{{url('web-assets/css/owl.transitions.css')}}">
      <link rel="stylesheet" href="{{url('web-assets/css/animate.min.css')}}">
      <link rel="stylesheet" href="{{url('web-assets/css/rateit.css')}}">
      <link rel="stylesheet" href="{{url('web-assets/css/bootstrap-select.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{url('web-assets/css/mystyle.css')}}">

      <!-- Icons/Glyphs -->
      <link rel="stylesheet" href="{{url('web-assets/css/font-awesome.css')}}">

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <style>
      .sticky {
        position: fixed;
        top: 0;
        width: 100%;
      }

      .sticky + .content {
        padding-top: 102px;
      }
      .modal-dialog {
          width: 646px !important;
          margin: 30px auto !important;
      }
      </style>
   </head>
   <body class="cnt-home">

       @include('web.layout.header')
       @yield('content')
       @include('web.layout.property')

        @include('web.layout.footer')
        <script src="{{url('web-assets/js/jquery-1.11.1.min.js')}}"></script>
        <script src="{{url('web-assets/js/bootstrap.min.js')}}"></script>
        <script src="{{url('web-assets/js/bootstrap-hover-dropdown.min.js')}}"></script>
        <script src="{{url('web-assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{url('web-assets/js/echo.min.js')}}"></script>
        <script src="{{url('web-assets/js/jquery.easing-1.3.min.js')}}"></script>
        <script src="{{url('web-assets/js/bootstrap-slider.min.js')}}"></script>
        <script src="{{url('web-assets/js/jquery.rateit.min.js')}}"></script>
        <script src="{{url('web-assets/js/lightbox.min.js')}}"></script>
        <script src="{{url('web-assets/js/bootstrap-select.min.js')}}"></script>
        <script src="{{url('web-assets/js/wow.min.js')}}"></script>
        <script src="{{url('web-assets/js/scripts.js')}}"></script>
        <script type='text/javascript' src="{{url('web-assets/js/jquery.mycart.js')}}"></script>
        <script type="text/javascript">
          $(function () {

            var goToCartIcon = function($addTocartBtn){
              var $cartIcon = $(".my-cart-icon");
              console.log($addTocartBtn.data('image'));
              var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
              $addTocartBtn.prepend($image);
              var position = $cartIcon.position();
              $image.animate({
                top: position.top,
                left: position.left
              }, 500 , "linear", function() {
                $image.remove();
              });
            }

            $('.my-cart-btn').myCart({
              classCartIcon: 'my-cart-icon',
              classCartBadge: 'my-cart-badge',
              affixCartIcon: true,
              checkoutCart: function(products) {
                $.each(products, function(){
                  console.log(this);
                });
              },
              clickOnAddToCart: function($addTocart){
                  console.log($addTocart);
                  goToCartIcon($addTocart);
              },
              getDiscountPrice: function(products) {
                var total = 0;
                $.each(products, function(){
                  total += this.quantity * this.price;
                });
                return 0;
              }
            });

          });
        </script>

        <script>
        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
        </script>
        <script>
          $(document).ready(function() {
              $('.minus').click(function () {
                var $input = $(this).parent().find('input');
                var product_id = $input.attr('data-productid');
                console.log($input.attr('data-productid'));
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                qty = $input.val();
                $('a[data-id='+product_id+']').attr("data-quantity",qty);

                $input.change();
                return false;
              });
              $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                qty = $input.val();
                var product_id = $input.attr('data-productid');
                $('a[data-id='+product_id+']').attr("data-quantity",qty);
                $input.change();
                return false;
              });
            });
        </script>
   </body>

</html>

