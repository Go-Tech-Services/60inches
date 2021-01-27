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
                                   <h3 class="mb-0"><h5>{{ __('My Profile') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                   <a href="{{ url('/store') }}" class="btn btn-sm btn-primary">{{ __('Back to List') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ url('store/edit' , $store->id) }}" autocomplete="off">
                                @csrf
                            
                             
                            
                                <div class="pl-lg-4">
                                <!-- {{\Auth::user()->role_id}} -->
                                <table>
                                <td>
                                    <div style="width:500px" class="form-group{{ $errors->has('owner_name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="owner_name">{{ __('Name') }}</label>
                                        <input type="text" name="owner_name" id="owner_name_val" class="form-control form-control-alternative{{ $errors->has('owner_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('owner_name', $store->owner_name) }}" required autofocus>

                                        @if ($errors->has('owner_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('owner_name') }}</strong>
                                            </span>
                                        @endif
                                        </td>

                                       <td> <div style="width:500px; padding:20px " class="form-group{{ $errors->has('store_name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="store_name">{{ __('Store Name') }}</label>
                                        <input type="text" name="store_name" id="store_name_val" class="form-control form-control-alternative{{ $errors->has('store_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Store Name') }}" value="{{ old('store_name', $store->store_name) }}" required>

                                        @if ($errors->has('store_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('store_name') }}</strong>
                                            </span>
                                        @endif
                                        </div></td>
                                        </div> 
                                </table>
                            <table>
                                <td>
                                <div style="width:500px" class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="phone">{{ __('Contact') }}</label>
                                        <input type="phone" name="phone" id="phone_val" class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Phone Number') }}" value="{{ old('phone', $store->phone) }}" required autofocus>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif</td>

                                       <td> <div style="width:500px; padding:20px " class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="email">{{ __('Email') }}</label>
                                        <input type="text" name="email" id="email_val" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', $store->email) }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        </div> </td>
                                    </div>     
                            </table>
                            <table>
                                <td>
                                <div style="width:500px" class="form-group{{ $errors->has('store_address') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="store_address">{{ __('Address') }}</label>
                                        <input type="text" name="store_address" id="phone_val" class="form-control form-control-alternative{{ $errors->has('store_address') ? ' is-invalid' : '' }}" placeholder="{{ __('Address ') }}" value="{{ old('store_address', $store->store_address) }}" required autofocus>

                                        @if ($errors->has('store_address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('store_address') }}</strong>
                                            </span>
                                        @endif</td>

                                       <td> 
                                       <div style="width:500px; padding:20px " class="form-group{{ $errors->has('store_logo') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="store_logo">{{ __('Logo') }}</label>
                                        <input type="text" name="store_logo" id="store_logo" class="form-control form-control-alternative{{ $errors->has('store_logo') ? ' is-invalid' : '' }}" placeholder="{{ __('Logo') }}" value="{{ old('store_logo', $store->store_logo) }}" required>

                                        @if ($errors->has('store_logo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('store_logo') }}</strong>
                                            </span>
                                        @endif
                                             <!-- <div  style="width:500px; padding:20px "class="form-group custom-file">
                                                <label class="form-control-label custom-file-label" for="store_logo">{{ __('Store Logo') }}</label>
                                                {{-- <label class="custom-file-label form-control-label" for="customFile">{{ __('Store Logo') }}</label> --}}
                                                <input type="file" class="custom-file-input form-control form-control-alternative{{ $errors->has('store_logo') ? ' is-invalid' : '' }}" name="store_logo"  value="{{ old('store_logo') }}" id="store_logo_val">
                                            </div>
                                            <div id="store_logo">
                                            </div> -->
                                        </div> </td>
                                    </div>     
                                    
                            </table> </form>
                            <div class="text-center">
                                    <button id="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                            </div>
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection