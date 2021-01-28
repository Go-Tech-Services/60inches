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
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Measurements</button>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myLargeModalLabel">Measurements</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <div class="pl-lg-4">
                               
                               <table>
                               <td>
                               
                                   <div style="width:500px" class="form-group col-md-2{{ $errors->has('neck') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="neck">{{ __('Neck') }}</label>
                                       <input type="text" name="neck" id="neck_val" class="form-control form-control-alternative{{ $errors->has('neck') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('neck', $measurement->neck) }}" required autofocus>

                                       @if ($errors->has('neck'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('neck') }}</strong>
                                           </span>
                                       @endif
                                       </td>
                                       </div>
                                      <td>
                                     
                                      <div style="width:500px" class="form-group col-md-2{{ $errors->has('shoulder') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="shoulder">{{ __('Shoulder') }}</label>
                                       <input type="text" name="shoulder" id="shoulder_val" class="form-control form-control-alternative{{ $errors->has('shoulder') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('shoulder', $measurement->shoulder) }}" required autofocus>

                                       @if ($errors->has('shoulder'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('shoulder') }}</strong>
                                           </span>
                                       @endif
                                       </div>
                                      </td></table>
                                       
                               <table>
                               <td>
                               
                                   <div style="width:500px" class="form-group col-md-2{{ $errors->has('upper_bust') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="upper_bust">{{ __('Upper Bust') }}</label>
                                       <input type="text" name="upper_bust" id="upper_bust_val" class="form-control form-control-alternative{{ $errors->has('upper_bust') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('upper_bust', $measurement->upper_bust) }}" required autofocus>

                                       @if ($errors->has('upper_bust'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('upper_bust') }}</strong>
                                           </span>
                                       @endif
                                       </td>
                                       </div>
                                      <td>
                                      
                                      <div style="width:500px" class="form-group col-md-2{{ $errors->has('bust') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="bust">{{ __('Bust') }}</label>
                                       <input type="text" name="bust" id="bust_val" class="form-control form-control-alternative{{ $errors->has('bust') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('bust', $measurement->bust) }}" required autofocus>

                                       @if ($errors->has('bust'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('bust') }}</strong>
                                           </span>
                                       @endif
                                       </div>
                                      </td></table>
                                       
                               <table>
                               <td>
                              
                                   <div style="width:500px" class="form-group col-md-2{{ $errors->has('cup') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="cup">{{ __('Cup') }}</label>
                                       <input type="text" name="cup" id="cup_val" class="form-control form-control-alternative{{ $errors->has('cup') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('cup', $measurement->cup) }}" required autofocus>

                                       @if ($errors->has('cup'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('cup') }}</strong>
                                           </span>
                                       @endif
                                       </td>
                                       </div>
                                      <td>
                                    
                                      <div style="width:500px" class="form-group col-md-2{{ $errors->has('under_bust') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="under_bust">{{ __('Under_Bust') }}</label>
                                       <input type="text" name="under_bust" id="under_bust_val" class="form-control form-control-alternative{{ $errors->has('under_bust') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('under_bust', $measurement->under_bust) }}" required autofocus>

                                       @if ($errors->has('under_bust'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('under_bust') }}</strong>
                                           </span>
                                       @endif
                                       </div>
                                      </td></table>

                             <table>
                               <td>
                              
                                   <div style="width:500px" class="form-group col-md-2{{ $errors->has('upper_waist') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="upper_waist">{{ __('Upper Waist') }}</label>
                                       <input type="text" name="upper_waist" id="upper_waist_val" class="form-control form-control-alternative{{ $errors->has('upper_waist') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('upper_waist', $measurement->upper_waist) }}" required autofocus>

                                       @if ($errors->has('upper_waist'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('upper_waist') }}</strong>
                                           </span>
                                       @endif
                                       </td>
                                       </div>
                                      <td>
                                     
                                      <div style="width:500px" class="form-group col-md-2{{ $errors->has('hips') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="hips">{{ __('Hips') }}</label>
                                       <input type="text" name="hips" id="hips_val" class="form-control form-control-alternative{{ $errors->has('hips') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('hips', $measurement->hips) }}" required autofocus>

                                       @if ($errors->has('hips'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('hips') }}</strong>
                                           </span>
                                       @endif
                                       </div>
                                       </td></table>

                            <table>
                               <td>
                              
                                   <div style="width:500px" class="form-group col-md-2{{ $errors->has('knee') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="knee">{{ __('Knee') }}</label>
                                       <input type="text" name="knee" id="knee_val" class="form-control form-control-alternative{{ $errors->has('knee') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('knee', $measurement->knee) }}" required autofocus>

                                       @if ($errors->has('knee'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('knee') }}</strong>
                                           </span>
                                       @endif
                                       </td>
                                       </div>
                                      <td>
                                     
                                      <div style="width:500px" class="form-group col-md-2{{ $errors->has('ankle') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="ankle">{{ __('Ankle') }}</label>
                                       <input type="text" name="ankle" id="ankle_val" class="form-control form-control-alternative{{ $errors->has('ankle') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('ankle', $measurement->ankle) }}" required autofocus>

                                       @if ($errors->has('ankle'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('ankle') }}</strong>
                                           </span>
                                       @endif
                                       </div>
                                       </td></table>
                                       <table>
                               <td>
                              
                                   <div style="width:500px" class="form-group col-md-2{{ $errors->has('thigh_round') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="thigh_round">{{ __('Thigh Round') }}</label>
                                       <input type="text" name="thigh_round" id="thigh_round_val" class="form-control form-control-alternative{{ $errors->has('thigh_round') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('thigh_round', $measurement->thigh_round) }}" required autofocus>

                                       @if ($errors->has('thigh_round'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('thigh_round') }}</strong>
                                           </span>
                                       @endif
                                       </td>
                                       </div>
                                      <td>
                                     
                                      <div style="width:500px" class="form-group col-md-2{{ $errors->has('calf_round') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="calf_round">{{ __('Calf Round') }}</label>
                                       <input type="text" name="calf_round" id="calf_round_val" class="form-control form-control-alternative{{ $errors->has('calf_round') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" value="{{ old('calf_round', $measurement->calf_round) }}" required autofocus>

                                       @if ($errors->has('calf_round'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('calf_round') }}</strong>
                                           </span>
                                       @endif
                                       </div>
                                       </td></table>
                            <table>
                               <td>
                              
                                   <div style="width:500px" class="form-group col-md-2{{ $errors->has('dark_point') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="dark_point">{{ __('Dark Point') }}</label>
                                       <input type="text" name="dark_point" id="dark_point_val" class="form-control form-control-alternative{{ $errors->has('dark_point') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('dark_point', $measurement->dark_point) }}" required autofocus>

                                       @if ($errors->has('dark_point'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('dark_point') }}</strong>
                                           </span>
                                       @endif
                                       </td>
                                       </div>
                                      <td>
                                     
                                      <div style="width:500px" class="form-group col-md-2{{ $errors->has('fork') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="fork">{{ __('Fork') }}</label>
                                       <input type="text" name="fork" id="fork_val" class="form-control form-control-alternative{{ $errors->has('fork') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('fork', $measurement->fork) }}" required autofocus>

                                       @if ($errors->has('fork'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('fork') }}</strong>
                                           </span>
                                       @endif
                                       </div>
                                       </td></table>

                                       <table>
                               <td>
                              
                                   <div style="width:500px" class="form-group col-md-2{{ $errors->has('shoe_size') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="shoe_size">{{ __('Shoe Size') }}</label>
                                       <input type="text" name="shoe_size" id="shoe_size_val" class="form-control form-control-alternative{{ $errors->has('shoe_size') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('shoe_size', $measurement->shoe_size) }}" required autofocus>

                                       @if ($errors->has('shoe_size'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('shoe_size') }}</strong>
                                           </span>
                                       @endif
                                       </td>
                                       </div>
                                     
                                      </table>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
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
