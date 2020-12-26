@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'store',
])
@section('content')

<div class="col-md-6 offset-md-3 book-desc">
    <div class="card">
        <img class="card-img-top" src="{{url('uploads/'.$logo->filename)}}" alt="{{$logo->filename}}">
        <div class="card-body">
            <a href="{{ route('store.index') }}" class="btn btn-dark">Back</a>
        </div>
    </div>
</div>

@endsection