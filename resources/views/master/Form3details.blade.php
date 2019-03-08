<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Resume3</title>
	<style> 
	body{
	background-color: lightgrey;
}
</style>

</head>
<body>
	<div class="container">
	     <input type="text" name="name"  value="{{ $form->name}}" class="form-control" placeholder="Enter candidate name"  style="border:none; font-size: 15px; font-weight: bold; background: transparent;">
             <input type="text" name="email"  value="{{ $form->email}}" class="form-control" placeholder="Enter email" style="border:none; background:transparent;">
             <input type="text" name="phone"  value="{{ $form->phone}}" class="form-control" placeholder="Enter phone" style="border:none; background:transparent;">
             <input type="text" name="nationality"  value="{{ $form->nationality}}" class="form-control" placeholder="Enter nationality" style="border:none; background:transparent;">
              <textarea rows="2" cols="250" name="address" class="form-control" placeholder="Enter Address" style="background: transparent; border:none;"> {{$form->address}}</textarea>
              <hr>
     <p style="font-size: 13px; font-family: monospace;font-weight: bold"> PERSONAL SUMMARY</p><hr>
     <textarea rows="2" cols="250" name="personal" class="form-control" placeholder="Enter personal details" style="border:none; background:transparent;"> {{$form->personal}} </textarea>

    <hr>
	<p style="font-size: 13px; font-family: monospace;font-weight: bold "> SKILLS</p><hr>

	<textarea rows="2" cols="250" name="skill" class="form-control" placeholder="Write your skills" style="border: none; background: transparent;">{{$form->skill}} </textarea> 

	<hr>
	<p style="font-size: 13px; font-weight: bold; font-family: monospace;"> TECHNICAL DETAILS</p><hr>

	<textarea rows="2" cols="250" name="technical" class="form-control" placeholder="Write your technical details" style="border: none; background: transparent;"> {{$form->technical}}</textarea>

	<hr>
	<p style="font-size: 13px; font-weight: bold; font-family: monospace;"> EXPERIENCE</p><hr>
	<table>
		<tr>
<td>
	<input type="text" name="wyear" class="form-control"  value="{{ $form->wyear}}" placeholder="working date" style="border:none; background: transparent;">

	</td>
	<td style="padding-left: 25px">
	<textarea rows="2" cols="250" name="detail" class="form-control" placeholder="Write your working details" style="border: none; background: transparent;"> {{$form->detail}} </textarea>
</td>
</tr>
</table>
	 <hr>   
       <p style="font-size: 13px; font-weight: bold; font-family: monospace;"> EDUCATION</p><hr>
       <table>
       	<tr>
       		<td>
		<input type="text" name="eyear1" class="form-control"  value="{{ $form->eyear1}}" placeholder="Enter enrollment date" style="border:none; background: transparent;"></td>
		<td style="padding-left: 25px">
	<textarea rows="2" cols="250" name="edetail1" class="form-control" placeholder="Enter education details" style="border:none; background: transparent;"> {{$form->edetail1}}</textarea></td>
</tr>
	<tr>
<td>
	<input type="text" name="eyear2" class="form-control"  value="{{ $form->eyear2}}"placeholder="Enter enrollment date" style="border:none; background: transparent;"></td>
	<td style="padding-left: 25px">
	<textarea rows="2" cols="250" name="edetail2" class="form-control" placeholder="Enter education details" style="border:none; background: transparent;"> {{$form->edetail2}} </textarea>
</td>
</tr>
</table>

	<hr>
	<p style="font-size: 13px; font-weight: bold; font-family: monospace;"> HOBBIES</p><hr>

	<textarea rows="2" cols="250" name="interest" class="form-control" placeholder="Write your hobbies." style="border: none; background: transparent;"> {{$form->interest}}</textarea>

	
</div>
</body>

</html>