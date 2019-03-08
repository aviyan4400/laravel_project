<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="{{ asset('css/form1.css') }}" rel="stylesheet">

	<title>Resume1</title>
</head>
<body>
<div class="container">
	<form method="POST" action="{{ url('insert') }}">
	@csrf	
	<div class="first">
		<h1><input type="text" name="name" placeholder="Enter your name"></h1>
		<h5><input type="email" name="email" placeholder="Enter your email"></h5>
		<h5><input type="text" name="phone" placeholder="Enter your phone number"></h5>
		<h5><input type="text" name="nationality" placeholder="Enter your nationality"></h5>
		<h5><textarea  style="background-color: transparent;border:none" placeholder="Enter your address" name="address"cols="40"></textarea></h5>
	</div>

	<hr style="border:1px solid;">
		<div class="row">
			<div class="first">
				<div class="col-sm-3"><h2>Profile</h2></div>
				<div class="col-sm-9" style="font-size: 144%;padding-right: 6.5em;line-height: 24px;">
					<textarea  style="background-color: transparent;border:none" placeholder="Enter the profile details" name="personal" cols="70"></textarea>
				</div>
			</div>
		</div>

	<hr style="border:0.5px solid;">
	<div class="row">
			<div class="first">
				<div class="col-sm-3"><h2>Skills</h2></div>
				<div class="col-sm-9" style="font-size: 144%;padding-right: 6.5em;line-height: 24px;">
					<input type="text" style="background-color: transparent;border:none" placeholder="Enter the skill details" name="skill" size="80">
				</div>
			</div>
		</div>

	<hr style="border:0.5px solid;">
	<div class="row">
	<div class="first">
			<div class="col-sm-3"><h2>Technical</h2></div>
			<div class="col-sm-9" style="font-size: 144%;padding-right: 6.5em;line-height: 24px;">
				<textarea  style="background-color: transparent;border:none" placeholder="Enter Technical Details" cols="60" rows="4" name="technical" style="font-size:13px"></textarea>
			</div>
		</div>
	</div>
	<hr style="border:0.5px solid;">
	<div class="row">
	<div class="first">
			<div class="col-sm-3"><h2>Experience</h2></div>
			<div class="col-sm-9" style="font-size: 144%;padding-right: 15px;line-height: 24px;">
				<h5 style="padding-left: 350px;margin-left:200px;"><input type="year" name="wyear" placeholder="Work Date"></h5>
				<textarea  style="background-color: transparent;border:none" placeholder="Work Details" cols="70" rows="4" style="font-size: 13px" name="detail"></textarea>
			</div>
		</div>
	</div>
					
	<hr style="border:0.5px solid;">

	<div class="row">
		<div class="first">
			<div class="col-sm-3"><h2>Education</h2></div>

			<div class="col-sm-9" style="font-size: 144%;padding-right: 15px;line-height: 24px;">

				<h5 style="padding-left: 350px;margin-left:200px;"><input name="eyear1" type="year" placeholder="Education Date" style="background-color: transparent;border:none"></h5>
				
				<h4><textarea  style="background-color: transparent;border:none;font-size: 18px" placeholder="Education Details" cols="70" rows="4" name="edetail1"></textarea></h4>
			
			<div class="col-sm-9" style="font-size: 144%;padding-right: 15px;line-height: 24px;">
			
				<h5 style="padding-left: 350px;margin-left:200px;"><input type="year" placeholder="Education Date" name="eyear2" style="background-color: transparent;border:none"></h5>
				
				<h4><textarea  style="background-color: transparent;border:none;font-size: 18px" placeholder="Education Details" cols="70" rows="4" name="edetail2" ></textarea></h4>

			</div>
			</div>
		</div>
	</div> 
	<hr style="border:1px solid;">
	<div class="div2">
		<div class="row">
			<div class="first">
					<div class="col-sm-3"><h2>Hobbies</h2></div>
				<div class="col-sm-9" style="font-size:13px ;padding-right: 6.5em;line-height: 24px;"><textarea  style="background-color: transparent;border:none" placeholder="Enter your hobbies" name="interest" cols="70"></textarea></div>
				</div>
			</div>
	</div>
	<!-- <div >
	<p> Created By Abhiyan Bhattarai &mdash; <a href="mailto:xabhiyan@gmail.com">Contact Email</a> &mdash;</p>
</div> 		 -->
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>
