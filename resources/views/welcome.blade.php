@extends('layout/primary')

@section('main_body')
<h1 class="h3 mb-4 text-gray-800">Blank Welcome Page</h1>
<h1 class="h3 mb-4 text-gray-800" style="font-size: 100px;">Point Of Sale</h1>
<div class="row">
    <div class="col-lg-4">
    </div>
    <div class="col-lg-8">
    <a href="{{route('login')}}" target="_blank" >Login Please</a>
    
    </div>
</div>
<?php
echo "12345678";
echo "<br>";
echo password_hash("12345678",PASSWORD_DEFAULT);
?>

@endsection