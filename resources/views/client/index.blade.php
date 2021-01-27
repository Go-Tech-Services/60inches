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
                                    <h3 class="mb-0">{{ __('My Clients') }}</h3>
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
                                        <th scope="col">{{ __('Sr.no.') }}</th>
                                        <th scope="col">{{ __('client Name') }}</th>
                                        <th scope="col">{{ __('Store Name') }}</th>
                                        <th scope="col">{{ __('Phone') }}</th>
                                        <th scope="col">{{ __('Email Id') }}</th>
                                        <th scope="col">{{ __('Creation Date') }}</th>
                                        <th scope="col">{{ __('Action') }}</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($clients as $client)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $client->client_name }}</td>

                                            <td>
                                                @php
                                                    $store_name = \DB::table('store_info')->where('id',$client->store_id)->first();
                                                @endphp
                                                {{ $store_name->store_name ?? 'No Record Found'}} || {{ $store_name->owner_name ?? 'No Record Found'}}
                                            </td>

                                            <td>
                                                {{ $client->client_phone }}</a>
                                            </td>
                                            <td>
                                                {{ $client->email }}</a>
                                            </td>
                                            <td>{{ $client->created_at->format('d/m/Y H:i') }}</td>
                                            <td>
                                            <span style="float:left;">
                                             <form action="{{url('client/view/'.$client->id)}}" >
                                                @csrf
                                                @method('get')
                                                <input type="hidden" name="id" value="{{ $client->id }}">
                                                <button type="submit" class="btn btn-primary">view</button>
                                            </form>
                                            </span>
                                            <span style="float:right;">
                                            <form action="{{url('client/delete/'.$client->id)}}" >
                                                @csrf
                                                @method('get')
                                                <button type="submit" class="btn btn-primary">Delete</button>
                                            </form>
                                            </span>
                                            
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody> 
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection