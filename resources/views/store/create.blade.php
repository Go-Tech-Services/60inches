@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'store',
])
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('Store Registration') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="" autocomplete="off" id="store-form">
                                @csrf
                                
                                <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                                <div class="pl-lg-4">
                                    <div class=
                                    "form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}" autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('store_name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Store Name') }}</label>
                                        <input type="text" name="store_name" id="input-name" class="form-control form-control-alternative{{ $errors->has('store_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Store Name') }}" value="{{ old('store_name') }}" autofocus>

                                        @if ($errors->has('store_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('store_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('Mobile Number') }}</label>
                                        <input type="text" name="phone" id="input-email" class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Number') }}" value="{{ old('phone') }}">

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="form-group{{ $errors->has('store_address') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Store Address') }}</label>
                                        <input type="text" name="store_address" id="input-name" class="form-control form-control-alternative{{ $errors->has('store_address') ? ' is-invalid' : '' }}" placeholder="{{ __('Address') }}" value="{{ old('store_address') }}" autofocus>

                                        @if ($errors->has('store_address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('store_address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    

                                     <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email') }}">

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Password') }}</label>
                                        <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" value="">
                                        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                                        <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm Password') }}" value="">
                                    </div>


                                    <div class="form-group">
                                        <label for="input-name">Store Logo:</label>
                                        <input type="file" class="form-control" name="filename"/>
                                    </div>
                                    


                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4" id="store-form-button">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
     $("#store-form").validate({
      rules: {
        name: {
            required:true
        },
        store_name: {
            required:true
        },
        email: {
            required:true
        },
        store_address: {
            required:true
        },
        phone: {
            required:true
        }
      },
      messages: {
        name: {
            required: "Please Enter Name",
        },
        store_name: {
            required: "Please Enter Store Name",
        },
        email: {
            required: "Please Enter Email",
        },
        store_address: {
            required: "Please Enter Store Address",
        },
        phone: {
            required: "Please Enter Phone",
        }
      },
      submitHandler: function(form) {
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#store-form-button').html('Sending..');
        $.ajax({
          url: "{{ route('store.store') }}" ,
          type: "POST",
          data: $('#store-form').serialize(),
          success: function( response ) {
            console.log'(response');
            console.log(response);
            //   $('#store-form-button').html('Submit');
            //   $('#res_message').show();
            //   $('#res_message').html(response.msg);
            //   $('#msg_div').removeClass('d-none');
   
            //   document.getElementById("store-form").reset(); 
            //   setTimeout(function(){
            //   $('#res_message').hide();
            //   $('#msg_div').hide();
            //   },10000);
          },
          error: function ( err ){
            console.log('err');
              console.log(err);
          }
        });
      }
    });
</script>
@endsection