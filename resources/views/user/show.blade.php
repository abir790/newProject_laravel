@extends('layout/main')
@section('main')
<div class="container-fluid">
    @if(session()->has('delete'))
    <div class="alert alert-danger" role="alert">
       {{session('delete')}}
    </div>
    @endif
    @if(session('create'))
        <div class="alert alert-success" role="alert">
  {{ session('create') }}
        </div>
    @endif
        @if(session()->has('update'))
    <div class="alert alert-primary" role="alert">
       {{session('update')}}
    </div>
    @endif


    <div class="row clearfix">
        <div class="col-lg-4 text-left">
                    <a class="btn btn-primary" href="{{url('users/')}}"><i class="fa fa-"></i><Back</a>
        </div>
        <div class="col-lg-12 text-right">
                    <a class="btn btn-primary" href="{{url('users/create')}}"><i class="fa fa-plus"></i>New Sale</a>
                    <a class="btn btn-primary" href="{{url('users/create')}}"><i class="fa fa-plus"></i>New Purches</a>
                    <a class="btn btn-primary" href="{{url('users/create')}}"><i class="fa fa-plus"></i>New Payment</a>
                    <a class="btn btn-primary" href="{{url('users/create')}}"><i class="fa fa-plus"></i>New Receipt</a>
        </div>    
    </div>
    
</div>
                <div class="container-fluid">

                    <!-- Page Heading -->
                                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">{{$user->name}}  Information</h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                        <tr>
                                            <th>Name</th>
                                            <td>{{$user->name}}</td>
                                        </tr>
                                        <tr>
                                        <th>Group</th>
                                            <td>{{$user->group->title}}</td>
                                        </tr>
                                        <tr>
                                        <th>Name</th>
                                            <td>{{$user->address}}</td>
                                        </tr>
                                        <tr>
                                        <th>Name</th>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                        <tr>
                                        <th>Name</th>
                                            <td>{{$user->phone}}</td>
                                        </tr>
                           </table>
                        </div>
                    </div>

                </div>



@endsection