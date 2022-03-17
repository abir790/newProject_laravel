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
@if(session()->has('update'))
    <div class="alert alert-primary" role="alert">
       {{session('update')}}
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
            <h1 class="h3 mb-4 text-gray-800">Category List</h1>
        </div>
                <div class="col-lg-6 text-right">
                    <a class="btn btn-primary" href="{{url('category/create')}}"><i class="fa fa-plus"></i>Add Category</a>

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

                                         @foreach($category as $cat)
                                        <tr> 
                                            <td>{{$cat->id}}</td>
                                            <td>{{$cat->title}}</td>
                                            <td>
                                               <form style="size: 3px;" method="post" action="{{route('category.destroy',$cat->id)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="btn-primary" style="margin: 10px; paddin: 10px;" href="category/{{$cat->id}}/edit">Edit</a>
                                                    <a class="btn-success" href="{{url('category/'.$cat->id.'/edit')}}">S</a>
                                                    <a class="btn-success" href="{{route('category.destroy',$cat->id)}}"><i class="fa fa-trash"></i>Delete</a>
                                                    <button class="btn btn-danger" ><i class="fa fa-trash"></i>>Delete</button>
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
   