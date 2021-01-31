@extends('layouts.app', [
    'class' => 'login-page',
    'backgroundImagePath' => 'img/bg/fabio-mangione.jpg'
])

<script src="/jobs/public/js/jquery.js"></script>
<script src="/jobs/public/js/jquery.form.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script src="/jobs/public/js/jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
<script src="{{ asset('js/sem-ui/jquery.min.js') }}"></script>
<script src="{{ asset('js/sem-ui/semantic.min.js') }}"></script>
@section('content')


    <div class="content">
        <div class="container">
            <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <form  id="loginForm" class="form" method="POST" action="{{ route('login')}}">
                <!-- action="{{ route('login') }}"> -->
                    @csrf
                    <div class="card card-login">
                        <div class="card-header ">
                            <div class="card-header ">
                                <h3 class="header text-center">{{ __('Login') }}</h3>
                            </div>
                        </div>
                        <div class="card-body ">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                </div>
                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="{{ __('Email or Phone') }}" type="text" name="email" value="{{ old('email') }}" >
                                
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                </div>
                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="{{ __('Password') }}" type="password" >
                                
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- <div class="form-group">
                                <div class="form-check">
                                     <label class="form-check-label">
                                        <input class="form-check-input" name="remember" type="checkbox" value="" {{ old('remember') ? 'checked' : '' }}>
                                        <span class="form-check-sign"></span>
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="ui section divider width100 mar-top-20px"></div>
                    <div class="ui error message mar-top-30px" style="padding-bottom: 14px; margin-left: 25px; border-right-width: 25px; padding-right: 22px; margin-right: 149px; "></div>
                        <div class="card-footer">
                            <div class="text-center">
                                <button id="submit" type="submit" class="btn btn-warning btn-round mb-3">{{ __('Sign in') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- <a href="{{ route('password.request') }}" class="btn btn-link">
                    {{ __('Forgot password') }}
                </a>
                <a href="{{ route('register') }}" class="btn btn-link float-right">
                    {{ __('Create Account') }}
                </a> -->
            </div>
            <a href="{{ route('password.request') }}" class="btn btn-link">
                    {{ __('Forgot password') }}
                </a>
                <a href="{{ route('register') }}" class="btn btn-link float-right">
                    {{ __('Create Account') }}
                </a>
        </div>
    </div>
@endsection

@push('scripts')

<script>
   $("#loginForm").validate({
        rules: {
        email: {
        required: true,
        maxlength: 50,
        email: true,
        },
        phone: {
        required: true,
        maxlength: 50,
        phone: true,
        },
        password: {
        required: true,
        minlength: 8,
        maxlength:20, 
        },   
        },
        messages: {
            email: {
            required: "Please enter valid email",
            email: "Please enter valid email",
            },
            phone: {
            required: "Please enter valid phone number",
            phone: "Please enter valid phone number",
            },
            password:{
                required: "Please enter password",
                password: "Please enter password", 
            },
        },

        submitHandler: function(form) {
 $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  $('#submit').html('Sending..');
  $.ajax({
    url: '{{route('login')}}' ,
    type: "POST",
    data: $('#loginForm').serialize(),
    success: function( response ) {
        console.log(response);
        $('#').html('Submit');
        $('#res_message').show();
        $('#res_message').html(response.msg);
        $('#msg_div').removeClass('d-none');

        document.getElementById("loginForm").reset(); 
        setTimeout(function(){
        $('#res_message').hide();
        $('#msg_div').hide();
        },10000);
    },
    error: function(err){
        console.log(err);
    }
  });
}
})


     jQuery(document).ready(function() {
        demo.checkFullPageBackgroundImage();
    });
</script>
@endpush