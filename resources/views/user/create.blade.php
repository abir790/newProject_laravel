@extends('layout/main')
@section('main')
<div class="container-fluid">


    <div class="row clearfix">
        <div class="col-lg-6">
            <h1 class="h3 mb-4 text-gray-800">Userssssss</h1>
        </div>
        <div class="col-lg-6 text-right">
        <a class="btn btn-primary" href="{{url('users')}}"><i class="fa fa-arrow-circle-left"></i>Back to Users List</a>

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
            
            @if(isset($user))
           <b class="h3 mb-4 text-blue-800 border-0 ">Edit Users</b>
           @else
         <h1 class="h3 mb-4 text-blue-800 border-0 ">Create Users</h1>
         @endif
			
				        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            	<div class="container">
                @if(isset($user))
           {{ Form::model($user, ['route' => ['users.update', 'user'=>$user->id],'method'=>'put']) }}\\ ata route use hoise
           @else

         {!! Form::open(['url' => 'users ','method'=>'post' ]) !!} \\ akhane url use hse users\create route list dekhlei bojhe jabe

         @endif


   <div class="form-group">
    <label for="exampleInputEmail1">User Group</label>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select</label>
  </div>
     {{Form::select('group_id', $gro, null, ['class'=>'form-control','placeholder' => 'Pick a group...']) }}
</div>
    <small id="emailHelp" class="form-text text-muted">We'll never share your group with anyone else.</small>
  </div>


    <div class="form-group">
    <label for="exampleInputName">Name</label>
    {{ Form::text('name',null,['class'=>'form-control @error(name) is-invalid @enderror','value'=>old('name'),'placeholder'=>'Enter name']) }}
         @error('name')
         <div class="text-danger">
     {{$message}}
   </div>
     @enderror
       <small id="nameHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    {{ Form::text('email',null,['class'=>'form-control','value'=>old('email'),'placeholder'=>'Enter email']) }}
          @error('email')
         <div class="text-danger">
     {{$message}}
   </div>
     @enderror
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
   {{ Form::text('address',null,['class'=>'form-control','value'=>old('address'),'placeholder'=>'Enter address']) }}
         @error('address')
         <div class="alert alert-danger">
     {{$message}}
   </div>
     @enderror
    <small id="emailHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
   {{ Form::text('phone',null,['class'=>'form-control','value'=>old('phone'),'placeholder'=>'Enter phone']) }}
         @error('phone')
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