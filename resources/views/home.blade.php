@extends('master')


@section('content')
<div class="container">
    <br><br>
    <h1 class="text-center">Student Registration </h1>
<br>

    @if (session()->has('status'))
        <div class="alert alert-success">
            <h3>{{ session()->get('status') }}</h3>
        </div>
    @endif

    <form action="add_student" method="post">
    @csrf
        <input  placeholder="Enter First Name" type="text" class="form-control" name="f_name"><br>
        <input placeholder="Enter Last Name"  type="text" class="form-control" name="l_name"><br>
        <input  placeholder="Batch" type="text" class="form-control" name="class"><br>
        <button type="submit" class="btn btn-success btn-block"> Submit </button>
    </form>

</div>

@endsection