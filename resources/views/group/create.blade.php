@extends('layout/main')

@section('main')
<h1 style="background: white;">Add Group Title</h1>

<div class=" justify-content-md-center">

				            <form  class="user" method="POST" action="{{url('group')}}">
	                            	@csrf
                                <div class="form-group">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Title : <input type="text" name="title" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
                            </form>



	
</div>



@endsection