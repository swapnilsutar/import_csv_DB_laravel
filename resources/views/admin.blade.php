@extends('master')

@section('content')

<div class="container">
<br><br>
    <h1 class="text-center" > Admin Panal</h1>


    <form enctype='multipart/form-data' action="{{route('student.import')}}" method="post">
    @csrf
    
    <input type="file" name="file" class="form-control"><br>
    <button type="submit" class="btn btn-success btn-block" >Submit</button>
    </form>

</div>

@endsection