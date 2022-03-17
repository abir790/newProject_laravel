
@extends('layout/main')
@section('main')
<div class="container-fluid">


    <div class="row clearfix">
        <div class="col-lg-6">
            <h1 class="h3 mb-4 text-gray-800">Edit User</h1>
        </div>
        <div class="col-lg-6 text-right">
        <a class="btn btn-primary" href="{{url('users')}}"><i class="fa fa-arrow-circle-left"></i>Back to Users List</a>

        </div>

        
    </div>
    
</div>

<div class="row justify-content-md-center">

	<div class="col-lg-6 ">
			<h1 class="h3 mb-4 text-blue-800 border-0 ">Create Users</h1>
				        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
            	<div class="container">

<form action="{{url('users/'.$user->id)}}" method="post">
	@csrf
	@method('put')


	<div class="form-group">
    <label for="exampleInputEmail1">User Group</label>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select</label>
  </div>

  <select name="group_id" class="custom-select" id="inputGroupSelect01">

       @foreach($group as $grop)
        @if($grop->id==$user->group_id)
            <option value="{{$grop->id}}" selected>{{$grop->title}}</option>
            @else
                <option value="{{$grop->id}}">{{$grop->title}}</option>
    @endif
      @endforeach
  </select>
</div>
    <small id="emailHelp" class="form-text text-muted">We'll never share your group with anyone else.</small>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input value="{{$user->name}}" name="name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input value="{{$user->email}}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input value="{{$user->address}}" name="address" type="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter address">
    <small id="emailHelp" class="form-text text-muted">We'll never share your address with anyone else.</small>
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input value="{{$user->phone}}" name="phone" type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone">
    <small id="emailHelp" class="form-text text-muted">We'll never share your phone with anyone else.</small>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>


  
  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
</div>
		
</div>
		
	</div>


	
</div>






@endsection