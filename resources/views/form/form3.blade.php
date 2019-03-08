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
	background-color: lightgrey;}
</style>

</head>
<body>
	<form method="POST" action="{{ url('insert4') }}">
    	 {{ @csrf_field() }}

		<p style="font-size: 25px; font-family: monospace;">Candidate Details</p><hr>
             <input type="text" name="name" placeholder="Enter candidate name"  style="color: blue; border:none; font-size: 15px; margin: :8px; background: transparent;"><br><br>

             <input type="email" name="email" placeholder="Enter email" style="border:none; background:transparent;"><br><br>

             <input type="number" name="phone" placeholder="Enter phone" style="border:none; background:transparent;"><br><br>

             <input type="text" name="nationality" placeholder="Enter nationality" style="border:none; background:transparent;"><br><br>

              <textarea rows="2" cols="250" name="address" placeholder="Enter Address" style="background: transparent; border:none;"></textarea><br><br>

     <p style="font-size: 25px; font-family: monospace;"> PERSONAL SUMMARY</p><hr>
     <textarea rows="2" cols="250" name="personal" placeholder="Enter personal details" style="border:none; background:transparent;"></textarea><br><br>

    <hr>
	<p style="font-size: 25px; font-family: monospace;"> SKILLS</p><hr>

	<textarea rows="2" cols="250" name="skill" placeholder="Write your skills" style="border: none; background: transparent;"></textarea><br><br>

	<hr>
	<p style="font-size: 25px; font-family: monospace;"> TECHNICAL DETAILS</p><hr>

	<textarea rows="2" cols="250" name="technical" placeholder="Write your technical details" style="border: none; background: transparent;"></textarea><br><br>

	<hr>
	<p style="font-size: 25px; font-family: monospace;"> EXPERIENCE</p><hr>
	<input type="year" name="wyear" placeholder="working date" style="color: blue; border:none; background: transparent;"><br><br>

	<textarea rows="2" cols="250" name="detail" placeholder="Write your working details" style="border: none; background: transparent;"></textarea><br><br>

	 <hr>   
       <p style="font-size: 25px; font-family: monospace;"> EDUCATION</p><hr>
		<input type="year" name="eyear1" placeholder="Enter enrollment date" style="color: blue; border:none; background: transparent;"><br><br>
	<textarea rows="2" cols="250" name="edetail1" placeholder="Enter education details" style="border:none; background: transparent;"></textarea><br>
	
	<input type="year" name="eyear2" placeholder="Enter enrollment date" style="color: blue; border:none; background: transparent;"><br><br>
	<textarea rows="2" cols="250" name="edetail2" placeholder="Enter education details" style="border:none; background: transparent;"></textarea><br><br>
	<hr>
	<p style="font-size: 25px; font-family: monospace;"> HOBBIES</p><hr>

	<textarea rows="2" cols="250" name="interest" placeholder="Write your hobbies." style="border: none; background: transparent;"></textarea><br><br>

	 <button type="submit" class="btn btn-primary">Submit</button>
					

</form>

</body>

</html>