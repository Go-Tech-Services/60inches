@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'client',
])
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@section('content')
<div class="content">
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('New Customer') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('client.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form autocomplete="off" id="client" enctype="multipart/form-data">
                            {{-- method="post" action="{{ route('client.store') }}"  --}}
                            @csrf
        
                            <h6 class="heading-small text-muted mb-4">{{ __('Client information') }}</h6>
                            <div class="pl-lg-4">

                                <div class="form-group" id="client_name">
                                    <label class="form-control-label" for="client_name">{{ __('Client Name') }}</label>
                                    <input type="text" name="client_name" id="client_name_val"  class="form-control form-control-alternative{{ $errors->has('client_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Client Name') }}" value="{{ old('client_name') }}">
                                </div>

                                <div class="form-group" id="client_phone">
                                    <label class="form-control-label" for="client_phone">{{ __('Mobile Number') }}</label>
                                    <input type="text" name="client_phone" id="client_phone_val" class="form-control form-control-alternative{{ $errors->has('client_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Mobile Number') }}" value="{{ old('client_phone') }}">
                                </div>

                                <div class="form-group" id="altern_phone">
                                    <label class="form-control-label" for="altern_phone">{{ __('Alternate Mobile Number') }}</label>
                                    <input type="text" name="altern_phone" id="altern_phone_val" class="form-control form-control-alternative{{ $errors->has('altern_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Alternate Mobile No.') }}" value="{{ old('altern_phone') }}">
                                </div>

                                <div class="form-group" id="email" >
                                    <label class="form-control-label" for="email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="email_val"  class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email') }}">
                                </div>

                                <div class="form-group" id="birth_date">
                                    <label class="form-control-label" for="birth_date">{{ __('Date Of Birth') }}</label>
                                    <input type="text" name="birth_date" id="birth_date_val"  class="form-control form-control-alternative{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" placeholder="{{ __('Date Of Birth') }}" value="{{ old('birth_date') }}">
                                </div>
                                
                                <div class="form-group" id="client_address">
                                    <label class="form-control-label" for="client_address">{{ __('Client Address') }}</label>
                                    <input type="text" name="client_address" id="client_address_val"  class="form-control form-control-alternative{{ $errors->has('client_address') ? ' is-invalid' : '' }}" placeholder="{{ __('Address') }}" value="{{ old('client_address') }}">
                                </div>

                                <div class="form-group" id="client_city">
                                    <label class="form-control-label" for="client_city">{{ __('City') }}</label>
                                    <input type="text" name="client_city" id="client_city_val"  class="form-control form-control-alternative{{ $errors->has('client_city') ? ' is-invalid' : '' }}" placeholder="{{ __('City') }}" value="{{ old('client_city') }}">
                                </div>

                                <div class="form-group" id="pin_code">
                                    <label class="form-control-label" for="pin_code">{{ __('Pincode') }}</label>
                                    <input type="text" name="pin_code" id="client_address_val"  class="form-control form-control-alternative{{ $errors->has('pin_code') ? ' is-invalid' : '' }}" placeholder="{{ __('PinCode') }}" value="{{ old('pin_code') }}">
                                </div>
                                
                                <div class="text-center">
                                    <button id="submit" class="btn btn-success mt-4">{{ __('Submit') }}</button>
                                    <button id="submit" class="btn btn-success mt-4">{{ __('Cancle') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script type="text/javascript">
    $( document ).ready(function() { 
       console.log('Client Blade');
        $("#submit").click(function(e) {
            e.preventDefault();

            var client_name = $('#client_name_val').val();
            var client_phone = $('#client_phone_val').val();
            var altern_phone = $('#altern_phone_val').val();
            var email = $('#email_val').val();
            var birth_date = $('#birth_date_val').val();
            var client_address = $('#client_address_val').val();
            var client_city = $('#client_city_val').val();
            var pin_code = $('#pin_code_val').val();
        
        $.ajax({
          url: "{{ url('/client/store') }}",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            client_name:client_name, 
            client_phone:client_phone, 
            altern_phone:altern_phone,  
            email:email, 
            birth_date:birth_date, 
            client_address:client_address, 
            client_city:client_city,
            pin_code:pin_code
          },
          success:function(response){
            console.log(response);
            window.location.href = "{{ route('client.index')}}";
            
          },
          error:function(error){
                $('#validation-errors').html('');
                $.each(error.responseJSON.errors, function(key,value) {
                    console.log(key+value);
                    if ( key == 'client_name' ) {
                        $('#client_name').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }
                    if( key == 'client_phone') {
                        $('#client_phone').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }
                    if( key == 'altern_phone' ) {
                        $('#altern_phone').append("<span class='alert alert-danger'<strong>"+value+"</strong></span>");
                    }
                    if( key == 'email' ) {
                        $('#email').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }
                    if( key == 'birth_date' ) {
                        $('#birth_date').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }
                    if( key == 'client_address' ) {
                        $('#client_address').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }
                    if( key == 'client_city' ) {
                        $('#client_city').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }
                    if( key == 'pin_code' ) {
                        $('#pin_code').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }
                
                }); 
          }
         });
        });
   });
   </script>

<!--  validation script  -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js"></script>
 
<!--  jsrender script  -->
<script src="http://cdn.syncfusion.com/js/assets/external/jsrender.min.js"></script>
 
<!-- Essential JS UI widget -->
<script src="http://cdn.syncfusion.com/16.4.0.52/js/web/ej.web.all.min.js"></script>
 
<!--Add custom scripts here --> 



<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        console.log( "Client Create Blade!" );
               
                jQuery.ajax({
                    url: "{{  route('client.store') }}" ,
                    type: "POST",
                    data: jQuery('#client').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    },
                    success: function( response ) {
                        console.log('response');
                        console.log(response);
                    },
                    error: function ( err ){
                        console.log('err');
                        console.log(err);
                    }
                });
        
    });
</script>  -->
@endsection
   