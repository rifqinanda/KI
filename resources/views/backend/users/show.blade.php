@extends('backend.layouts.master')

@section('title', 'Users Data')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Users Data</h1>
           
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Name : {{ $user->name }}</h5>
                    <p class="card-text">Role : {{ $user->role }}</p>
                    <p class="card-text">Username : {{ $user->username }}</p>
                    
                    <a href="{{url('/users').'/'.$user->id.'/edit'}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                    
                    <form action="{{ $user->id }}" method="post" class="d-inline" onsubmit="return confirm('Are you sure ?')">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                    </form>
                    <a href="{{url('/users')}}" class="card-link">Back</a>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection