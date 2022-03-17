@extends('layout/main')

@section('main')

 @if(isset($category))
<h1 style="background: white;">Edit Category</h1>
@else
<h1 style="background: white;">Add Category</h1>
@endif
<div class="row justify-content-md-center">

	<div class="col-lg-6 ">
				        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            	<div class="container">
              @if(isset($category))
           {{ Form::model($category, ['route' => ['category.update', 'category'=>$category->id],'method'=>'put']) }}
           @else
         {!! Form::open(['url' => 'category ','method'=>'post' ]) !!} 
         @endif
  <div class="form-group">
    <label for="exampleInputCategory">Category</label>
   {{ Form::text('title',null,['class'=>'form-control','value'=>old('title'),'placeholder'=>'inter a category name']) }}
         @error('title')
         <div class="alert alert-danger">
     {{$message}}
   </div>
     @enderror
    <small id="categoryHelp" class="form-text text-muted">We'll never share the with anyone else.</small>
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