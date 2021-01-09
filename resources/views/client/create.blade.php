@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'client',
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
                                    <input type="text" name="phone" id="client_phone_val" class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Mobile Number') }}" value="{{ old('phone') }}">
                                </div>

                                <div class="form-group" id="altern_phone">
                                    <label class="form-control-label" for="altern_phone">{{ __('Alternate Mobile Number') }}</label>
                                    <input type="text" name="altern_phone" id="altern_phone_val" class="form-control form-control-alternative{{ $errors->has('altern_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Alternate Mobile No.') }}" value="{{ old('altern_phone') }}">
                                </div>

                                <div class="form-group" id="email" >
                                    <label class="form-control-label" for="email">{{ __('Email') }}</label>
                                    <input type="text" name="email" id="email_val"  class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email') }}">
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

@endsection