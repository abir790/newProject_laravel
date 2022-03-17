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
        <div class="col-lg-6">
            <h1 class="h3 mb-4 text-gray-800">Product List</h1>
        </div>
        <div class="col-lg-6 text-right">
           <a class="btn btn-primary" href="{{url('products/create')}}"><i class="fa fa-plus"></i>Add Product</a>

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
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>description</th>
                                            <th>Cost Price</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    	@foreach($product as $pro)
                                        <tr> 
                                        	<td>{{$pro->id}}</td>
                                            <td>{{$pro->category->title}}</td>
                                            <td>{{$pro->title}}</td>
                                            <td>{{$pro->description}}</td>
                                            <td>{{$pro->cost_price}}</td>
                                            <td>{{$pro->price}}</td>
                                             <td>
                                        <form class="form-control" action="{{route('products.destroy',$pro->id)}}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="btn-primary" href="products/{{$pro->id}}/edit">Edit</a>
                                                    <a class="btn-success" href="{{url('products/'.$pro->id)}}">Show</a>
                                                    <a class="btn-success" href="{{route('products.destroy',$pro->id)}}">D</a>
                                                    <button class="btn btn-danger" style="position: ;"><i class="fa fa-trash"></i></button>
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