@extends('web.layout.app')
<style>
    body {
        background-color: #EBEBEB !important;
    }
</style>
@php
    $settingData = Helper::get_settings();
@endphp
@section('content')
    <div class="container"
         style="background-color: white;border-radius: 10px;width: 73%;padding: 40px 40px 30px 40px;margin-top: 160px;">

        <div class="row">
            <div class="col-sm-12" style="">
                <h3>Register</h3>
            </div>
        </div>

        <form class="login100-form validate-form" method="POST" action="{{ route('user_registration') }}">
            {{ csrf_field() }}
            <div class="row" style="margin-top: 20px;">
                <div class="col-lg-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            @if(is_array(session()->get('success')))
                                <ul>
                                    @foreach (session()->get('success') as $message)
                                        <li>{{ $message }}</li>
                                    @endforeach
                                </ul>
                            @else
                                {{ session()->get('success') }}
                            @endif
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                                {{$errors->first()}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        @endif
                    @endif
                </div>
				<div class="col-md-7 col-sm-7 already-registered-login">

						<div class="form-group">
							<label class="info-title" for="user_name">User Name <span>*</span></label>
							<input type="text" class="form-control text-input" id="user_name" name="user_name" placeholder="">
						</div>
						<div class="form-group">
							<label class="info-title" for="user_phone">User Phone <span>*</span></label>
							<input type="text" class="form-control text-input" id="user_phone" name="user_phone" placeholder="">
						</div>
						<div class="form-group">
							<label class="info-title" for="user_email">User Email <span>*</span></label>
							<input type="email" class="form-control text-input" id="user_email" name="user_email" placeholder="">
						</div>
						<div class="form-group">
							<label class="info-title" for="user_password">Password <span>*</span></label>
							<input type="password" class="form-control text-input" id="user_password" name="user_password" placeholder="">
							<a href="#" class="forgot-password">Forgot your Password?</a>
						</div>
						<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Register</button>

					<p style="color: gray;margin-top: 30px;">Already Registered on {{$settingData->name}} <a href="{{ url('/web/login') }}"
                                                                                  style="color:#FB641B; ">LOGIN</a></p>
				</div>


        </form>


    </div>


    </div>
    </div>
    <br>
@endsection
