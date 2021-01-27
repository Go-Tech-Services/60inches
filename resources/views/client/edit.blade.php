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
                                    <h3 class="mb-0">{{ __('Client Management') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ url('client/index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ url('client/edit/{id}', $client->id) }}" autocomplete="off">
                                @csrf
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
                                       @endif
                                       </td>

                                      <td> <div style="width:500px; padding:20px " class="form-group{{ $errors->has('client_phone') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="client_phone">{{ __('Contact Number') }}</label>
                                       <input type="text" name="client_phone" id="client_phone_val" class="form-control form-control-alternative{{ $errors->has('client_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('Contact') }}" value="{{ old('client_phone', $client->client_phone) }}" required>

                                       @if ($errors->has('client_phone'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('client_phone') }}</strong>
                                           </span>
                                       @endif
                                       </div></td>
                                       </div> 
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
                                       @endif</td>

                                      <td> <div style="width:500px; padding:20px " class="form-group{{ $errors->has('client_address') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="client_address">{{ __('client address') }}</label>
                                       <input type="text" name="client_address" id="client_address_val" class="form-control form-control-alternative{{ $errors->has('client_address') ? ' is-invalid' : '' }}" placeholder="{{ __('Address') }}" value="{{ old('client_address', $client->client_address) }}" required>

                                       @if ($errors->has('client_address'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('client_address') }}</strong>
                                           </span>
                                       @endif
                                       </div> </td>
                                   </div>     
                           </table>
                           <table>
                               <td>
                               <div style="width:500px" class="form-group{{ $errors->has('client_city') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="client_city">{{ __('City') }}</label>
                                       <input type="text" name="client_city" id="phone_val" class="form-control form-control-alternative{{ $errors->has('client_city') ? ' is-invalid' : '' }}" placeholder="{{ __('City') }}" value="{{ old('client_city', $client->client_city) }}" required autofocus>

                                       @if ($errors->has('client_city'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('client_city') }}</strong>
                                           </span>
                                       @endif</td>

                                      <td> 
                                      <div style="width:500px; padding:20px " class="form-group{{ $errors->has('pin_code') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="pin_code">{{ __('Pin Code') }}</label>
                                       <input type="text" name="pin_code" id="pin_code" class="form-control form-control-alternative{{ $errors->has('pin_code') ? ' is-invalid' : '' }}" placeholder="{{ __('Pin Code') }}" value="{{ old('pin_code', $client->pin_code) }}" required>

                                       @if ($errors->has('pin_code'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('pin_code') }}</strong>
                                           </span>
                                       @endif
                                       </div> </td>
                                   </div>     
                                   
                           </table> </form>
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