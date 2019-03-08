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
    
  <a href="{{ url('resume3') }}"><button class="btn-lg btn-primary"> Click Here To Insert New Data</button></a>
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
        @foreach($form as $forms)
        <tr>
      <td>{{$forms->name}}</td>
      <td>{{$forms->email}}</td>
      <td>{{$forms->phone}}</td>
      <td>{{$forms->nationality}}</td>
      <td>{{$forms->address}}</td>
      <td>{{$forms->personal}}</td>
      <td>{{$forms->skill}}</td>
      <td>{{$forms->technical}}</td>
      <td>{{$forms->wyear}}</td>
      <td>{{$forms->detail}}</td>
      <td>{{$forms->eyear1}}</td>
      <td>{{$forms->edetail1}}</td>
      <td>{{$forms->eyear2}}</td>
      <td>{{$forms->edetail2}}</td>
      <td>{{$forms->interest}}</td>
            <td>
                <a class="btn btn-info" href="{{ url('edit3') }}/{{$forms->id}}">View</a>
                 <a href="{{action('Form3Controller@downloadPDF',$forms->id)}}"><button class="btn btn-warning"> Download</button></a>

            </td>
        </tr>
        @endforeach
    </table>
     <a class="btn btn-info" href="{{ url('displaydetails') }}">Back</a>

  </div>
@endsection