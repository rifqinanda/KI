@extends('backend.layouts.master')

@section('content')

@section('title', 'Users Menu')

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users Table</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

    <!-- Main content -->
<section class="content">


      <!-- Default box -->
      
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">
    <a href="{{url('/users/create')}}" class="btn btn-primary btn-sm" class="mt-3"><i class="fa fa-plus"></i> Add</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
               
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr>
                    
                    @foreach($users as $usr)
                      
                      <th>{{ $loop->iteration }}</th>
                      <td>{{ $usr->name }}</td>
                      <td>{{ $usr->email }}</td>
                      <td>
                            <a href="{{url('/users').'/'.$usr->id.'/'.'edit'}}" class="btn btn-primary btn-sm"><i class="fa fa-list"></i></a>
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      
      <!-- /.card -->

</section>
<script src="{{asset('https://kit.fontawesome.com/12869f30a4.js')}}" crossorigin="anonymous"></script>


@endsection