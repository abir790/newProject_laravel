@extends('layout/main')
@section('main')
<div class="container-fluid">

    <div class="row clearfix">
        <div class="col-lg-6">

            @if(isset($product))
           <b class="h3 mb-4 text-blue-800 border-0 ">Edit Product</b>
           @else
         <h1 class="h3 mb-4 text-blue-800 border-0 ">Create Product</h1>
         @endif

        </div>
        <div class="col-lg-6 text-right">
        <a class="btn btn-primary" href="{{url('products')}}"><i class="fa fa-arrow-circle-left"></i>Back to Prodects List</a>

        </div>  
   </div>
    
</div>
@if($errors->any())
@foreach($errors->all() as $error)
<div class="alert alert-danger">
<li>{{$error}}</li>  
</div>
@endforeach
@endif

<div class="row justify-content-md-center">

	<div class="col-lg-6 ">
            

         <h1 class="h3 mb-4 text-blue-800 border-0 ">Create Product</h1>
				        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            	<div class="container">
              @if(isset($product))
           {{ Form::model($product, ['route' => ['products.update', 'products'=>$product->id],'method'=>'put']) }}
           @else

         {!! Form::open(['url' => 'products ','method'=>'post' ]) !!} \\ akhane url use hse users\create route list dekhlei bojhe jabe

         @endif

   <div class="form-group">
    <label for="exampleInputEmail1">Category Group</label>
    {{Form::select('category_id', $catt, null, ['class'=>'form-control','placeholder' => 'Pick a category...']) }}
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select</label>
  </div>
     
</div>
    <small id="emailHelp" class="form-text text-muted">We'll never share your group with anyone else.</small>
  </div>


    <div class="form-group">
    <label for="exampleInputName">Title</label>
    {{ Form::text('title',null,['class'=>'form-control @error(title) is-invalid @enderror','value'=>old('title'),'placeholder'=>'Enter name']) }}
         @error('title')
         <div class="text-danger">
     {{$message}}
   </div>
     @enderror
       <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    {{ Form::text('description',null,['class'=>'form-control','value'=>old('description'),'placeholder'=>'Enter description']) }}
          @error('description')
         <div class="text-danger">
     {{$message}}
   </div>
     @enderror
    <small id="emailHelp" class="form-text text-muted">We'll never share your description with anyone else.</small>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">CostPrice</label>
   {{ Form::text('cost_price',null,['class'=>'form-control','value'=>old('address'),'placeholder'=>'Enter address']) }}
         @error('cost_price')
         <div class="alert alert-danger">
     {{$message}}
   </div>
     @enderror
    <small id="emailHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
   {{ Form::text('price',null,['class'=>'form-control','value'=>old('phone'),'placeholder'=>'Enter phone']) }}
         @error('price')
         <div class="alert alert-danger">
     {{$message}}
   </div>
     @enderror
    <small id="emailHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

{!! Form::close() !!}

</div>
</div>
		
</div>
		
	</div>


	
</div>


@endsection