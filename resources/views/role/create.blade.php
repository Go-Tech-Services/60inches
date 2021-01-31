@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'role',
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
                                   
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('role.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="post" action="{{ route('role.store') }}" autocomplete="off">
                                @csrf
                                
                               
                                <div class="pl-lg-4">
                                    <div class="form-group{{ $errors->has('role_type') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="role_type">{{ __('Name') }}</label>
                                        <input type="text" name="role_type" id="role_type" class="form-control form-control-alternative{{ $errors->has('role_type') ? ' is-invalid' : '' }}" placeholder="{{ __('Role Type') }}" value="{{ old('role_type') }}" required autofocus>

                                        @if ($errors->has('role_type'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('role_type') }}</strong>
                                            </span>
                                        @endif
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
