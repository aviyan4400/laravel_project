<!DOCTYPE html>
<html>
<head>
	<title>Resume4</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
 input[type]
{
  background:transparent;
  border:none;
  

}
 /*
input[type="text"]{
  font-size:20px;
}
input[type="email"]{
  font-size:20px;
}*/
h4{
  background:transparent;
  border:none;
}
.container{
 /*padding:5px 10px;*/
 background:lightgrey;
 /*margin:auto;
 
 border:solid #666;
 border-width:4px 0px 2px 0px;*/ 
}
 
}
hr{
  border:0.1px dotted;
  height:0.1px;
}

</style>
</head>
</head>
<body>
	<div class= "container">
     <h4 style="font-size: 20px ; background-color:#2298E7;color:white" class="form-control"><b>Resume</b></h4>
     <div class="form-group"> 
             <input  class="form-control" type="text"   name="name" value="{{$form->name}}" placeholder="Enter Name" required>
             <input  class="form-control" type="text" name="email" value="{{$form->email}}" placeholder=" Enter Email" required>
             <input  class="form-control" type="text" name="phone" value="{{$form->phone}}" placeholder="Enter phone" required>
             <input  class="form-control" type="text" name="nationality" value="{{$form->nationality}}" placeholder="Enter Nationality" required>
             <textarea class="form-control"style="background:transparent;border:none"  name="address" cols="50" placeholder=" Enter Address" required>{{$form->address}}</textarea><hr>
             </div>
             <h4>Personal Summary</h4>
             <textarea class="form-control" type="text"  style="background:transparent;border:none" name="personal" cols="80" rows="5" placeholder="Enter your hobbies"> {{ $form->personal }}
              </textarea><hr>

              <h4>Skills</h4>
              <textarea class="form-control" type="text"  style="background:transparent;border:none" name="skill" cols="80" rows="5" placeholder="Enter your skills">{{ $form->skill }}</textarea>
              <hr>
           
              <h4>Technical</h4>
              <textarea class="form-control" type="text"  style="background:transparent;border:none" name="technical" cols="80" rows="5" placeholder="Enter details">{{ $form->technical }}
              </textarea><hr>
           
              <h4>Experience</h4>
              <div class="form-inline">
                <table>
                  <tr>
                  <td> <input  class="form-control" type="text"  name="wyear" value="{{$form->wyear}}" placeholder="work-year"></td>
                  <td style="padding-left: 25px"><textarea class="form-control" type="text"  style="background:transparent;border:none" name="detail" cols="70" rows="5" placeholder="Enter post details">{{ $form->detail }}</textarea>
                    </td><br>
                </table>
              </div>
              <hr>

              <h4>Education</h4>
              <div class="form-inline">
                <table>
                  <tr>
                  <td> <input  class="form-control" type="text"  name="eyear1"  value="{{$form->eyear1}}" placeholder="Year"></td>
                  <td style="padding-left: 25px"><textarea class="form-control" type="text"  style="background:transparent;border:none" name="edetail1" cols="60" rows="4" placeholder="Enter details"> {{ $form->edetail1 }}</textarea>
                   </td>
                  </tr><br>
                  <tr>
                  <td><input  class="form-control" type="text" name="eyear2" value="{{$form->eyear2}}" placeholder="Year"></td>
                  <td style="padding-left: 25px"><textarea class="form-control" type="text"  style="background:transparent;border:none" name="edetail2" cols="60" rows="4" placeholder="Enter details"> {{ $form->edetail2 }}</textarea></td>
                  </tr>
                </table>
              </div>
              <hr>
              <br>
              <h4>Hobbies</h4>
              <textarea class="form-control" type="text"  style="background:transparent;border:none" name="interest" cols="80" rows="5" placeholder="Enter your hobbies"> {{ $form->interest }}
              </textarea><hr>
            </div>

</body>
</html>


