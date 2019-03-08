<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link href="css/style1.css" rel="stylesheet" type="text/css">
<style type="text/css">
   input[type]
{
  background:transparent;
  border:0px none;

}
input[type="text"]{
  font-size:20px;
}
input[type="email"]{
  font-size:20px;
}
h2{
  background:transparent;
  border:none;
}
textarea{
  background:transparent;
  border:  none;
}
.container{
 padding:5px 80px;
 margin:auto;
 background:lightgrey;
 border:solid #666;
 border-width:8px 0px 2px 0px; 
}
 
}
hr{
  border:0.1px dotted;
  height:1px;
}

</style>

</head>
<body>
<div class= "container">
    <form method="POST" action="{{url('insert1')}}">
      @csrf
     <h2 style="font-size: 20px ; background-color:#2298E7;color:white" class="form-control"><b>Resume </b></h2>
     <div class="form-group"> 
     <input type="text"   name="name" placeholder="Enter Name" required><br>
     <input type="email" name="email"  placeholder=" Enter Email" required><br>
     <input type="text" name="phone"  placeholder="Enter phone" required><br>
     <input type="text" name="nationality" placeholder="Enter Nationality" required><br>
     <textarea style="font-size:20px"  name="address" cols="50" placeholder=" Enter Address" required></textarea><hr>
     </div>
     <h2>Personal Summary</h2>
     <textarea  name="personal" cols="80" rows="5" placeholder="Enter your personal details"></textarea><hr>

      <h2>Skills</h2>
      <textarea  type="text" name="skill" cols="80" rows="5" placeholder="Enter your skills"></textarea>
      <hr>
   
      <h2>Technical</h2>
      <textarea  type="text" name="technical" cols="80" rows="5" placeholder="Enter details"></textarea><hr>
   
      <h2>Experience</h2>
      <div class="form-inline">
        <table>
          <tr>
          <td> <input type="year"  name="wyear" placeholder="work-year"></td>
          <td><textarea  type="text" name="detail" cols="80" rows="4" placeholder="Enter post details"></textarea></td><br>
        </table>
      </div>
      <hr>
   
      <h2>Education</h2>
      <div class="form-inline">
        <table>
          <tr>
          <td> <input type="year"  name="eyear1" placeholder="Year"></td>
          <td><textarea  type="text" name="edetail1" cols="70" rows="4" placeholder="Enter details"></textarea></td>
          </tr><br>
          <tr>
          <td><input type="year" name="eyear2" placeholder="Year"></td>
          <td><textarea  type="text" name="edetail2" cols="70" rows="4" placeholder="Enter details"></textarea></td>
          </tr>
        </table>
      </div>
      <hr>
      <h2>Hobbies</h2>
      <textarea  type="text" name="interest" cols="80" rows="5" placeholder="Enter your hobbies"></textarea><hr>

      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
 </div>
</body>
</html>