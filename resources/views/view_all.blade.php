@extends('master')


@section('content')
<br>
<div class="container">

    <h1 class="text-center"> Student Information </h1>
    <br><br>
    <div class="table_data  justify-content-center d-flex">
        @if(isset($data) && count($data) > 0)
        <table border='1'>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Class Name</th>
            </tr>
            @foreach($data as $d)
            <tr>
                    <td>  {{$d['id']}}   </td>
                    <td>  {{$d['first_name']}}   </td>
                    <td>  {{$d['last_name']}}   </td>
                    <td>  {{$d['class_name']}}   </td>
                </tr>
            @endforeach    
        </table>
       @else
            <h1>No data found</h1>
        @endif
    </div>
    <br><br>
    <span>
        {{$data->links()}}
    </span>

</div>

@endsection