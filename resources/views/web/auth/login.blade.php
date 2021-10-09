@extends('web.layout.app')

@section('content')

    <div class="container"
         style="background-color: white;border-radius: 10px;width: 73%;padding: 40px 40px 30px 40px;margin-top: 160px;">

        <div class="row">
            <div class="col-sm-12" style="">
                <h3>Login</h3>
            </div>
        </div>

        <form class="login100-form validate-form" method="POST" action="{{ route('custLoginCheck') }}">
            {{ csrf_field() }}
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-7" style="border-right: 1px solid #CCCCCC">
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
					<div class="form-group">
						<label class="info-title" for="phone">User Phone <span>*</span></label>
						<input type="text" class="form-control text-input" id="phone" name="phone" placeholder="">
					</div>
                    
					<div class="form-group">
						<label class="info-title" for="password">Password <span>*</span></label>
						<input type="password" class="form-control text-input" id="password" name="password" placeholder="">
						<a href="#" class="forgot-password">Forgot your Password?</a>
					</div>
                    
                    @php
                        $settingData = Helper::get_settings();
                    @endphp

                    <button class="btn"
                            style="background-color: #FB641B;color: white;width: 48%;font-size: 17px;margin-top: 20px;display: inline-block;"
                            type="submit">Login
                    </button>
                    <p style="width: 45%;display: inline-block;margin-left: 8px;top: 10px;position: relative;"><a
                            href="forgot_pass.php" style="color: black">Forgot Password?</a></p>
        </form>

        <p style="color: gray;margin-top: 30px;">New To {{$settingData->name}} <a href="{{ url('/web/sign-up') }}"
                                                                                  style="color:#FB641B; ">Register</a>
        </p>

    </div>

    </div>
    </div>

    <br>

@endsection
