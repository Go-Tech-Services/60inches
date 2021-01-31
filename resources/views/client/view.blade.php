@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'client',
])
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section('content')
    <div class="content">
    <h3 class="mb-0"><b>{{ $client->client_name }}</h3><br>
    
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-12 order-xl-1"> 
                    <div class="card bg-white">
                        <div class="card-header bg-secondary shadow border-0">
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
                            <form method="post" action="{{ url('client/view',$client->id) }}" autocomplete="off">
                               
                              
                                <div class="pl-lg-4">

                                <table  class="table">
                                <thead >
                                            <tr>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody  bgcolor="white">
                                            <tr>
                                        
                                                <td>Name:   {{ $client->client_name}}</td>
                                                <td>Mobile Number:   {{ $client->client_phone}}</td>
                                            </tr>
                                            <thead >
                                            <tr>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody  bgcolor="white">
                                            <tr>
                                        
                                                <td>Email:   {{ $client->email}}</td>
                                                <td>Address:   {{ $client->client_address}}</td>
                                            </tr>
                                        
                                        </tbody>
                                        </tbody>
                                    </table>                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Measurements View -->
        
        <div class="card bg-white">
                        <div class="card-header bg-secondary shadow border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                   <h3 class="mb-0"><h5>{{ __('Measurements') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Measurements</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="pl-lg-4">
                      
                                <table>
                                <td>
                                    @php
                                        $client_id = \DB::table('client_info')->where('id',$measurement->client_id)->first();
                                    @endphp
                                </td>
                                </table>
                                
                                <table  class="table">
                                <thead >
                                            <tr>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody  bgcolor="white">
                                            <tr>
                                        
                                                <td>Neck:   {{ $measurement->neck}}</td>
                                                <td>Shoulder:   {{ $measurement->shoulder}}</td>
                                                <td>Upper Bust:   {{ $measurement->upper_bust}}</td>
                                                <td>Bust:   {{ $measurement->bust}}</td>
                                            </tr>
                                        
                                        </tbody>

                                        <thead >
                                            <tr>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody  bgcolor="white">
                                            <tr>
                                        
                                                <td>Cup:   {{ $measurement->cup}}</td>
                                                <td>Under Bust:   {{ $measurement->under_bust}}</td>
                                                <td>Upper Waist:   {{ $measurement->upper_waist}}</td>
                                                <td>Hips:   {{ $measurement->Hips}}</td>
                                            </tr>
                                        
                                        </tbody>

                                        <thead >
                                            <tr>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody  bgcolor="white">
                                            <tr>
                                        
                                                <td>Knee:   {{ $measurement->knee}}</td>
                                                <td>Ankle:   {{ $measurement->ankle}}</td>
                                                <td>Thigh Round:   {{ $measurement->thigh_round}}</td>
                                                <td>Calf Round:   {{ $measurement->calf_round}}</td>
                                            </tr>
                                        
                                        </tbody>

                                        <thead >
                                            <tr>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                                <th scope="col">{{ __('') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody  bgcolor="white">
                                            <tr>
                                        
                                                <td>Dark Point:   {{ $measurement->dark_point}}</td>
                                                <td>Fork:   {{ $measurement->fork}}</td>
                                                <td>Shoe Size:   {{ $measurement->shoe_size}}</td>
                                                <td>  </td>
                                            </tr>
                                        
                                        </tbody>
                                </table>
                        </div>

<!-- PopUP Page Code -->


                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Measurements</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="card-body">
                            <form method="get" action="{{ url('measurement/view',$measurement->id) }}" autocomplete="off">
                                <div class="modal-body">
                            
                                <div class="form-group{{ $errors->has('clients') ? ' has-danger' : '' }}">
                                <input type="hidden" name="client_id" id="client_id" value="{{ $clients->id }}" >   
                                        @if ($errors->has('clients'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('clients') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                <table>
                                
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('neck') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="neck">{{ __('Neck') }}</label>
                                       <input type="text" name="neck" id="neck_val" class="form-control form-control-alternative{{ $errors->has('neck') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('neck', $measurement->neck) }}"  autofocus>

                                       @if ($errors->has('neck'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('neck') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('shoulder') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="shoulder">{{ __('Shoulder') }}</label>
                                       <input type="text" name="shoulder" id="shoulder_val" class="form-control form-control-alternative{{ $errors->has('shoulder') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('shoulder', $measurement->shoulder) }}" autofocus>

                                       @if ($errors->has('shoulder'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('shoulder') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                </table>
                                <table>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('upper_bust') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="upper_bust">{{ __('Upper Bust') }}</label>
                                       <input type="text" name="upper_bust" id="upper_bust_val" class="form-control form-control-alternative{{ $errors->has('upper_bust') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('upper_bust', $measurement->upper_bust) }}"  autofocus>

                                       @if ($errors->has('upper_bust'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('upper_bust') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('bust') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="bust">{{ __('Bust') }}</label>
                                       <input type="text" name="bust" id="bust_val" class="form-control form-control-alternative{{ $errors->has('bust') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('bust', $measurement->bust) }}"  autofocus>

                                       @if ($errors->has('bust'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('bust') }}</strong>
                                           </span>
                                       @endif
                                    </div> </td>
                                </table>
                                <table>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('cup') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="cup">{{ __('Cup') }}</label>
                                       <input type="text" name="cup" id="cup_val" class="form-control form-control-alternative{{ $errors->has('cup') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('cup', $measurement->cup) }}"  autofocus>

                                       @if ($errors->has('cup'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('cup') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('under_bust') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="under_bust">{{ __('Under_Bust') }}</label>
                                       <input type="text" name="under_bust" id="under_bust_val" class="form-control form-control-alternative{{ $errors->has('under_bust') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('under_bust', $measurement->under_bust) }}"  autofocus>

                                       @if ($errors->has('under_bust'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('under_bust') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                </table>
                                <table>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('upper_waist') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="upper_waist">{{ __('Upper Waist') }}</label>
                                       <input type="text" name="upper_waist" id="upper_waist_val" class="form-control form-control-alternative{{ $errors->has('upper_waist') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('upper_waist', $measurement->upper_waist) }}"  autofocus>

                                       @if ($errors->has('upper_waist'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('upper_waist') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('hips') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="hips">{{ __('Hips') }}</label>
                                       <input type="text" name="hips" id="hips_val" class="form-control form-control-alternative{{ $errors->has('hips') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('hips', $measurement->hips) }}"  autofocus>

                                       @if ($errors->has('hips'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('hips') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                </table>
                                <table>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('knee') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="knee">{{ __('Knee') }}</label>
                                       <input type="text" name="knee" id="knee_val" class="form-control form-control-alternative{{ $errors->has('knee') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('knee', $measurement->knee) }}"  autofocus>

                                       @if ($errors->has('knee'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('knee') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('ankle') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="ankle">{{ __('Ankle') }}</label>
                                       <input type="text" name="ankle" id="ankle_val" class="form-control form-control-alternative{{ $errors->has('ankle') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('ankle', $measurement->ankle) }}"  autofocus>

                                       @if ($errors->has('ankle'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('ankle') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                </table>
                                <table>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('thigh_round') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="thigh_round">{{ __('Thigh Round') }}</label>
                                       <input type="text" name="thigh_round" id="thigh_round_val" class="form-control form-control-alternative{{ $errors->has('thigh_round') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('thigh_round', $measurement->thigh_round) }}"  autofocus>

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
                                       <input type="text" name="calf_round" id="calf_round_val" class="form-control form-control-alternative{{ $errors->has('calf_round') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('calf_round', $measurement->calf_round) }}"  autofocus>

                                       @if ($errors->has('calf_round'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('calf_round') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                </table>
                                <table>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('dark_point') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="dark_point">{{ __('Dark Point') }}</label>
                                       <input type="text" name="dark_point" id="dark_point_val" class="form-control form-control-alternative{{ $errors->has('dark_point') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('dark_point', $measurement->dark_point) }}"  autofocus>

                                       @if ($errors->has('dark_point'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('dark_point') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('fork') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="fork">{{ __('Fork') }}</label>
                                       <input type="text" name="fork" id="fork_val" class="form-control form-control-alternative{{ $errors->has('fork') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('fork', $measurement->fork) }}"  autofocus>

                                       @if ($errors->has('fork'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('fork') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                </table>
                                <table>
                                    <td>
                                    <div style="width:500px" class="form-group col-md-2{{ $errors->has('shoe_size') ? ' has-danger' : '' }}">
                                       <label class="form-control-label" for="shoe_size">{{ __('Shoe Size') }}</label>
                                       <input type="text" name="shoe_size" id="shoe_size_val" class="form-control form-control-alternative{{ $errors->has('shoe_size') ? ' is-invalid' : '' }}" placeholder="{{ __('-') }}" value="{{ old('shoe_size', $measurement->shoe_size) }}"  autofocus>

                                       @if ($errors->has('shoe_size'))
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('shoe_size') }}</strong>
                                           </span>
                                       @endif
                                    </div></td>
                                </table>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
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
    <div class="text-center">
        <button type="submit" class="btn btn-primary">{{ __('No Past Records') }}</button>
    </div>
</div>
                    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection
