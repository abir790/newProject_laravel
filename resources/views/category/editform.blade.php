@extends('layout/main')

@section('main')
@if(session()->has('update'))
    <div class="alert alert-primary" role="alert">
       {{session('update')}}
</div>
    @endif
<h1 style="background: white;">Edit category</h1>

<div class=" justify-content-md-center">

				            <form  class="category" method="POST" action="{{url('category/'.$category->id)}}">
	                            	@csrf
                                    @method('put')
                                <div class="form-group">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Title : <input type="text" value="{{$category->title}}" name="title" class="form-control form-control-user" id="exampleFirstName" placeholder="edit titlee">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success btn-lg mb-1">Submit</button>
                            </form>



	
</div>



@endsection