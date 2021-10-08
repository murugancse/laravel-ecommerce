@php 
    $category = Helper::get_categories(1); 
@endphp
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
    <!-- ================================== TOP NAVIGATION ================================== -->
    <div class="hidden-xs side-menu animate-dropdown outer-bottom-xs">
        <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
        <nav class="yamm megamenu-horizontal">
        <ul class="nav"> 
            @foreach($category as $cat)
            <li class="dropdown menu-item"> <a href="{{ url('web/category/'.$cat->cat_id) }}">{{ $cat->title }}</a> </li> @endforeach
            <!-- /.menu-item -->
        </ul>
        <!-- /.nav -->
        </nav>
        <!-- /.megamenu-horizontal -->
    </div>
    <!-- /.side-menu -->
    <!-- ================================== TOP NAVIGATION : END ================================== -->
</div>