@extends('layout/main')

@section('main')

@if(session('create') )
<div class="alert alert-success" role="alert">
  {{ session('create') }}
</div>
@endif
@if(session('delete') )
<div class="alert alert-danger" role="alert">
  {{ session('delete') }}
</div>
@endif
<!-- @if(session()->has('delete') )
<div class="alert alert-danger" role="alert">
  {{ session('delete') }}
</div>
@endif -->

<div class="container-fluid">


    <div class="row clearfix">
        <div class="col-lg-6">
            <h1 class="h3 mb-4 text-gray-800">Group List</h1>
        </div>
                <div class="col-lg-6 text-right">
                    <a class="btn btn-primary" href="{{url('group/create')}}"><i class="fa fa-plus"></i>Create Group</a>

        </div>

        
    </div>
    
</div>
                <div class="container-fluid">

                    <!-- Page Heading -->
                                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                         @foreach($group as $grop)
                                        <tr> 
                                            <td>{{$grop->id}}</td>
                                            <td>{{$grop->title}}</td>
                                            <td>
                                               <!--  <a href="{{url('group/'.$grop->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
 -->                                                <form method="post" action="{{url('group/'.$grop->id)}}">
                                                    @csrf
                                                    @method('delete')

                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i>>Delete</button>
                                                </form>
                                            </td>
                                          </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>



@endsection