@extends('layouts.app')

@section('content') 
  <div class="container">
    @if (count($errors) >0)
                   <div class="alert alert-success">
                       <ul>
                           @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                       </ul>
                   </div>
                @endif
    
  <a href="{{ url('resume5') }}"><button class="btn btn-primary"> Click Here To Insert New Data</button></a>
  <br>
  <br>

  <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Nationality</th>
            <th>Address</th>
            <th>Personal</th>
            <th>Skill</th>
            <th>Technical</th>
            <th>Wyear</th>
            <th>detail</th>
            <th>Eyear1</th>
            <th>Edetail1</th>
            <th>Eyear2</th>
            <th>Edetail2</th>
            <th>Interest</th>
            <th>Action</th>
        </tr>
        @foreach($five as $fives)
        <tr>
            <td>{{$fives->name}}</td>
            <td>{{$fives->email}}</td>
            <td>{{$fives->phone}}</td>
            <td>{{$fives->nationality}}</td>
            <td>{{$fives->address}}</td>
            <td>{{$fives->personal}}</td>
            <td>{{$fives->skill}}</td>
            <td>{{$fives->technical}}</td>
            <td>{{$fives->wyear}}</td>
            <td>{{$fives->detail}}</td>
            <td>{{$fives->eyear1}}</td>
            <td>{{$fives->edetail1}}</td>
            <td>{{$fives->eyear2}}</td>
            <td>{{$fives->edetail2}}</td>
            <td>{{$fives->interest}}</td>
            <td>
                    <a class="btn btn-info" href="{{ url('edit5') }}/{{$fives->id}}">View</a>
                    <a href="{{ action('FiveController@downloadPDF',$fives->id)}}"><button class="btn btn-warning">Download</button></a>

            </td>
        </tr>
        @endforeach
    </table>
     <a class="btn btn-info" href="{{ url('displaydetails') }}">Back</a>

  </div>
@endsection
