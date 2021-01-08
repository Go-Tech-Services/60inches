@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'Store',
])
{{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
@section('content')
<div class="content">
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Store Management') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('store.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form autocomplete="off" id="store" enctype="multipart/form-data">
                            {{-- method="post" action="{{ route('store.store') }}"  --}}
                            @csrf
        
                            <h6 class="heading-small text-muted mb-4">{{ __('Store information') }}</h6>
                            <div class="pl-lg-4">

                                <div class="form-group" id="store_name">
                                    <label class="form-control-label" for="store_nam">{{ __('Store Name') }}</label>
                                    <input type="text" name="store_name" id="store_name_val"  class="form-control form-control-alternative{{ $errors->has('store_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Store Name') }}" value="{{ old('store_name') }}">
                                </div>

                                <div class="form-group" id="owner_name">
                                    <label class="form-control-label" for="owner_name">{{ __('Owner Name') }}</label>
                                    <input type="text" name="owner_name" id="owner_name_val" class="form-control form-control-alternative{{ $errors->has('owner_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Owner Name') }}" value="{{ old('owner_name') }}">
                                </div>

                                <div class="form-group" id="store_address">
                                    <label class="form-control-label" for="store_address">{{ __('Store Address') }}</label>
                                    <input type="text" name="store_address" id="store_address_val" class="form-control form-control-alternative{{ $errors->has('store_address') ? ' is-invalid' : '' }}" placeholder="{{ __('Store Address') }}" value="{{ old('store_address') }}">
                                </div>

                                <div class="form-group" id="email" >
                                    <label class="form-control-label" for="email">{{ __('Email') }}</label>
                                    <input type="text" name="email" id="email_val"  class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email') }}">
                                </div>

                                <div class="form-group" id="phone">
                                    <label class="form-control-label" for="phone">{{ __('Phone') }}</label>
                                    <input type="text" name="phone" id="phone_val"  class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone') }}" value="{{ old('phone') }}">
                                </div>


                                {{-- <div class="form-group{{ $errors->has('store_logo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="store_logo">{{ __('Store Logo') }}</label>
                                    <input type="file" name="store_logo" id="store_logo" class="form-control form-control-alternative{{ $errors->has('store_logo') ? ' is-invalid' : '' }}" placeholder="{{ __('Store Logo') }}" value="{{ old('store_logo') }}">

                                    @if ($errors->has('store_logo'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('store_logo') }}</strong>
                                        </span>
                                    @endif
                                </div> --}}

                                <div class="form-group custom-file">
                                    <label class="form-control-label custom-file-label" for="store_logo">{{ __('Store Logo') }}</label>
                                    {{-- <label class="custom-file-label form-control-label" for="customFile">{{ __('Store Logo') }}</label> --}}
                                    <input type="file" class="custom-file-input form-control form-control-alternative{{ $errors->has('store_logo') ? ' is-invalid' : '' }}" name="store_logo"  value="{{ old('store_logo') }}" id="store_logo_val">
                                </div>
                                <div id="store_logo">
                                </div>
                                <div class="text-center">
                                    <button id="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
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
       console.log('Store Blade');
        $("#submit").click(function(e) {
            e.preventDefault();

            var owner_name = $('#owner_name_val').val();
            var email = $('#email_val').val();
            var store_name = $('#store_name_val').val();
            var phone = $('#phone_val').val();
            var store_address = $('#store_address_val').val();
            var store_logo = $('#store_logo_val').val();
        console.log(owner_name);
        console.log(email);
        $.ajax({
          url: "{{ url('store/store') }}",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
            owner_name:owner_name,
            email:email,
            store_name:store_name,
            phone:phone,
            store_address:store_address,
            store_logo:store_logo
          },
          success:function(response){
            console.log(response);
            window.location.href = "{{ route('store.index')}}";
          },
          error:function(error){
                $('#validation-errors').html('');
                $.each(error.responseJSON.errors, function(key,value) {
                    console.log(key+value);
                    if ( key == 'owner_name' ) {
                        $('#owner_name').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }
                    if( key == 'store_name') {
                        $('#store_name').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }
                    if( key == 'email' ) {
                        $('#email').append("<span class='alert alert-danger'<strong>"+value+"</strong></span>");
                    }if( key == 'store_address' ) {
                        $('#store_address').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }if( key == 'phone' ) {
                        $('#phone').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }if( key == 'store_logo' ) {
                        $('#store_logo').append("<span class='alert alert-danger'><strong>"+value+"</strong></span>");
                    }
                    // $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
                }); 
          }
         });
        });
   });
    // $('#submit').on('click',function(event){
    //     event.preventDefault();

    
    //     });
      </script>
{{-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> --}}
<!--  jquery script  -->
{{-- <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<!--  validation script  -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js"></script>
 
<!--  jsrender script  -->
<script src="http://cdn.syncfusion.com/js/assets/external/jsrender.min.js"></script>
 
<!-- Essential JS UI widget -->
<script src="http://cdn.syncfusion.com/16.4.0.52/js/web/ej.web.all.min.js"></script>
 
<!--Add custom scripts here --> --}}
{{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script> --}}

{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        console.log( "Store Create Blade!" );
        
    //    jQuery("#store").validate({
    //         rules: {
    //             owner_name: {
    //                 required:true
    //             },
    //             store_name: {
    //                 required:true
    //             },
    //             email: {
    //                 required:true
    //             },
    //             store_address: {
    //                 required:true
    //             },
    //             phone: {
    //                 required:true
    //             },
    //             store_logo: {
    //                 required:true
    //             }
    //         },
    //         messages: {
    //             owner_name: {
    //                 required: "Please Enter Name",
    //             },
    //             store_name: {
    //                 required: "Please Enter Store Name",
    //             },
    //             email: {
    //                 required: "Please Enter Email",
    //             },
    //             store_address: {
    //                 required: "Please Enter Store Address",
    //             },
    //             phone: {
    //                 required: "Please Enter Phone",
    //             },
    //             store_logo: {
    //                 required: "Please Enter Phone",
    //             },
    //         },
    //         submitHandler: function(form) {
    //             $.ajaxSetup({
                    
    //             });
                // jQuery('#store-button').html('Sending..');
                jQuery.ajax({
                    url: "{{ route('store.store') }}" ,
                    type: "POST",
                    data: jQuery('#store').serialize(),
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    },
                    success: function( response ) {
                        console.log('response');
                        console.log(response);
                        //   jQuery('#store-button').html('Submit');
                        //   jQuery('#res_message').show();
                        //   jQuery('#res_message').html(response.msg);
                        //   jQuery('#msg_div').removeClass('d-none');
            
                        //   document.getElementById("store-form").reset(); 
                        //   setTimeout(function(){
                        //   jQuery('#res_message').hide();                                                                                                                             
                        //   jQuery('#msg_div').hide();
                        //   },10000);
                    },
                    error: function ( err ){
                        console.log('err');
                        console.log(err);
                    }
                });
        //     }
        // });
    });
</script> --}}
{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
    
     
 </script> --}}
@endsection