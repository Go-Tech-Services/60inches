@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'client',
])

@section('content')
    <div class="content">
    <h3 class="mb-0">{{ __('Client Profile') }}</h3><br>
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
                                    <a href="{{ url('client/index') }}" class="btn btn-sm btn-primary">{{ __('Back to List') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ url('client.update') }}" autocomplete="off">
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
                                        @endif</td>

                                       <td> <div style="width:500px; padding:20px " class="form-group{{ $errors->has('client_phone') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="client_phone">{{ __('client_phone') }}</label>
                                        <input type="text" name="client_phone" id="client_phone_val" class="form-control form-control-alternative{{ $errors->has('client_phone') ? ' is-invalid' : '' }}" placeholder="{{ __('client_phone') }}" value="{{ old('client_phone', $client->client_phone) }}" required>

                                        @if ($errors->has('client_phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('client_phone') }}</strong>
                                            </span>
                                        @endif
                                        </td>


                                        
                                        </table>
                                    </div> 
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
