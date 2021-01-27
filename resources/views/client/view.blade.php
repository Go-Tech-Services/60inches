@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'client',
])
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')
    <div class="content">
    <h3 class="mb-0">{{ __('Client Profile  ') }}</h3><br>
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                   <h3 class="mb-0"><h5>{{ __('Personal Details') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                <a href="{{ url('client/edit/{id}') }}" class="btn btn-sm btn-primary">{{ __('Edit') }}</a>

                                    <a href="{{ url('client/index') }}" class="btn btn-sm btn-primary">{{ __('Back to List') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ url('client/view/',$client->id) }}" autocomplete="off">
                                @csrf
                                @method('put')
                                <div class="pl-lg-4">
                                <table>
                                <td>
                                    <div style="width:500px" class="form-group{{ $errors->has('client_name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="client_name">{{ __('Name') }}</label>
                                        <input type="text" name="client_name" id="client_name_val" class="form-control form-control-alternative{{ $errors->has('client_name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('client_name', $client->client_name) }}" required autofocus>

                                        @if ($errors->has('client_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('client_name') }}</strong>
                                            </span>
                                        @endif</td></div>

                                       <td> <div style="width:500px; padding:20px " class="form-group{{ $errors->has('client_phone') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="client_phone">{{ __('client_phone') }}</label>
                                        <input type="text" name="client_phone" id="client_phone_val" class="form-control form-control-alternative{{ $errors->has('client_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('client_phone') }}" value="{{ old('client_phone', $client->client_phone) }}" required>

                                        @if ($errors->has('client_phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('client_phone') }}</strong>
                                            </span>
                                        @endif
                                        </div></td> 
                                </table>
                            <table>
                                <td>
                                <div style="width:500px" class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="email">{{ __('Email') }}</label>
                                        <input type="email" name="email" id="email_val" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" value="{{ old('email', $client->email) }}" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif</td></div>

                                       <td> <div style="width:500px; padding:20px " class="form-group{{ $errors->has('client_address') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="client_address">{{ __('client address') }}</label>
                                        <input type="text" name="client_address" id="client_address_val" class="form-control form-control-alternative{{ $errors->has('client_address') ? ' is-invalid' : '' }}" placeholder="{{ __('Client Address') }}" value="{{ old('client_address', $client->client_address) }}" required>

                                        @if ($errors->has('client_address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('client_address') }}</strong>
                                            </span>
                                        @endif
                                        </div> </td> 
                                    </table>
                                </div>
                            
                       <!-- Button trigger modal -->

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
