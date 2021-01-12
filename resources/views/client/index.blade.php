@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'client',
])
   
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('Client') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ url('client/create') }}" class="btn btn-sm btn-primary">{{ __('Add Customer') }}</a>
                                </div>
                            </div>
                         </div>
                        
                        <div class="col-12">
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">{{ __('client Name') }}</th>
                                        <th scope="col">{{ __('Phone') }}</th>
                                        <th scope="col">{{ __('Creation Date') }}</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ $client->client_name }}</td>
                                            <td>
                                                {{ $client->client_phone }}</a>
                                            </td>
                                            <td>{{ $client->created_at->format('d/m/Y H:i') }}</td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection