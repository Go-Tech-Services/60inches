@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'store',
])

<!-- <!DOCTYPE html>
 
<html lang="en">
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
      <body>
         <div class="container">
               <h2>Store Data</h2>
            <table class="table table-bordered" id="laravel_datatable">
               <thead>
                  <tr>
                     <th>Store Name</th>
                     <th>Owner Name</th>
                     <th>Phone</th>
                     <th>Created at</th>
                  </tr>
               </thead>
            </table>
         </div>
   <script>
   $(document).ready( function () {
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('store.index') }}",
           columns: [
                    { data: 'Store Name', name: 'Store Name' },
                    { data: 'Owner Name', name: 'Owner Name' },
                    { data: 'Phone', name: 'Phone' },
                    { data: 'created_at', name: 'created_at' }
                 ]
        });
     });
  </script>
   </body>
   </html> -->
    
@section('content')
    <div class="content">
        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0">{{ __('Stores') }}</h3>
                                </div>
                                <div class="col-4 text-right">
                                    <a href="{{ route('store.create') }}" class="btn btn-sm btn-primary">{{ __('Add store') }}</a>
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
                                        <th scope="col">{{ __('Store Name') }}</th>
                                        <th scope="col">{{ __('Owner Name') }}</th>
                                        <th scope="col">{{ __('Phone') }}</th>
                                        <th scope="col">{{ __('Creation Date') }}</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ($stores as $store)
                                        <tr>
                                            <td>{{ $store->store_name }}</td>
                                            <td>
                                                {{ $store->owner_name }}</a>
                                            </td>
                                            <td>
                                                {{ $store->phone }}</a>
                                            </td>
                                            <td>{{ $store->created_at->format('d/m/Y H:i') }}</td>
                                            <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="nc-align-left-2 nc-icon"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    @if ($store->id != auth()->id())
                                                            <form action="{{ route('store.destroy', $store) }}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                
                                                                <a class="dropdown-item" href="{{ route('store.edit', $store) }}">{{ __('Edit') }}</a>
                                                                <button type="button" class="dropdown-item" onclick="confirm('{{ __("Are you sure you want to delete this user?") }}') ? this.parentElement.submit() : ''">
                                                                    {{ __('Delete') }}
                                                                </button>
                                                            </form>    
                                                        @else
                                                            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Edit') }}</a>
                                                        @endif 
                                                    </div>
                                                </div>
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