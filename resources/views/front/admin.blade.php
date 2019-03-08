@extends('layouts.app')
@section('content')

<h2>Registered Users</h2>
<table class="table table-hover ">
        <tr class="success">

            <th>Name</th>
      <th>Email</th>
      <th>Role</th>

        </tr>
        @foreach($resume as $resumes)
        <tr>
            <td>{{$resumes->name}}</td>
      <td>{{$resumes->email}}</td>
      <td>{{$resumes->role}}</td>
        </tr>
        @endforeach
    </table>
@endsection    