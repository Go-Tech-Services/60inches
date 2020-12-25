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
                            <form method="post" action="{{ route('user.store') }}" autocomplete="off">
                                @csrf
                                
                                <h6 class="heading-small text-muted mb-4">{{ __('User information') }}</h6>
                                <div class="pl-lg-4">
                                    <div class=
                                    "form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Name') }}</label>
                                        <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group{{ $errors->has('store_name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Store Name') }}</label>
                                        <input type="text" name="store_name" id="input-name" class="form-control form-control-alternative{{ $errors->has('store_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Store Name') }}" value="{{ old('store_name') }}" required autofocus>

                                        @if ($errors->has('store_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('store_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('Mobile Number') }}</label>
                                        <input type="text" name="phone" id="input-email" class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Number') }}" value="{{ old('phone') }}" required>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="form-group{{ $errors->has('store_address') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Store Address') }}</label>
                                        <input type="text" name="store_address" id="input-name" class="form-control form-control-alternative{{ $errors->has('store_address') ? ' is-invalid' : '' }}" placeholder="{{ __('Address') }}" value="{{ old('store_address') }}" required autofocus>

                                        @if ($errors->has('store_address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('store_address') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    

                                     <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-email">{{ __('Email') }}</label>
                                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-password">{{ __('Password') }}</label>
                                        <input type="password" name="password" id="input-password" class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" value="" required>
                                        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-password-confirmation">{{ __('Confirm Password') }}</label>
                                        <input type="password" name="password_confirmation" id="input-password-confirmation" class="form-control form-control-alternative" placeholder="{{ __('Confirm Password') }}" value="" required>
                                    </div>


                                    <div class="form-group">
                                        <label for="input-name">Store Logo:</label>
                                        <input type="file" class="form-control" name="filename"/>
                                    </div>
                                    


                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
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