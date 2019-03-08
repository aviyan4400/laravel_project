<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="{{ asset('css/form1.css') }}" rel="stylesheet">

	<title>Resume1</title>
</head>
<body>
<div class="container">	
	
	<div class="first">
		<h1><input type="text" class="form-control" name="name"  value="{{$form->name}}" placeholder="Enter your name"></h1>
		<h5><input type="text" class="form-control" name="email"  value="{{$form->email}}" placeholder="Enter your email"></h5>
		<h5><input type="text" class="form-control" name="phone"  value="{{$form->phone}}" placeholder="Enter your phone number"></h5>
		<h5><input type="text" class="form-control" name="nationality"  value="{{$form->nationality}}" placeholder="Enter your nationality"></h5>
		<h5><textarea class="form-control" style="background:transparent;border:none" placeholder="Enter your address" name="address"cols="40">{{$form->address}}</textarea></h5>
	</div>

	<hr style="border:1px solid;">
	<div class="div2">
		<div class="row">
			<div class="first">
				<div class="col-sm-3"><h2>Profile</h2></div>
				<div class="col-sm-9" style="font-size: 144%;padding-right: 6.5em;line-height: 24px;">
					<textarea class="form-control" style="background:transparent;border:none" placeholder="Enter the profile details" name="personal" cols="80" rows="5">{{$form->personal}}</textarea>
				</div>
			</div>
		</div>
	</div>
	<hr style="border:0.5px solid;">
	<div class="row">
	<div class="first">
		<div class="col-sm-3"><h2>Skills</h2></div>
				<div class="col-sm-9" style="font-size: 144%;padding-right: 6.5em;line-height: 24px;">
					<textarea class="form-control" style="background:transparent;border:none" placeholder="Skill Details" cols="80" rows="5" name="skill" style="font-size: 13px">{{$form->skill}}</textarea>
				</div>
		</div>
	</div>

	<hr style="border:0.5px solid;">
	<div class="row">
	<div class="first">
			<div class="col-sm-3"><h2>Technical</h2></div>
			<div class="col-sm-9" style="font-size: 144%;padding-right: 6.5em;line-height: 24px;">
				<textarea class="form-control" style="background:transparent;border:none" placeholder="Enter Technical Details" cols="80" rows="5" name="technical" style="font-size:13px">{{$form->technical}}</textarea>
			</div>
		</div>
	</div>
	<hr style="border:0.5px solid;">
	<div class="row">
	<div class="first">
			<div class="col-sm-3"><h2>Experience</h2></div>
			<div class="col-sm-9" style="font-size: 144%;padding-right: 15px;line-height: 24px;">
				<h5 style="padding-left: 350px;margin-left:200px;"><input type="text" class="form-control" name="wyear" value="{{$form->wyear}}" placeholder="Work Date"></h5>
				<textarea  class="form-control" style="background:transparent;border:none" placeholder="Work Details" cols="80" rows="5" style="font-size: 13px" name="detail">{{$form->detail}}</textarea>
			</div>
		</div>
	</div>
					
	<hr style="border:0.5px solid;">

	<div class="row">
	<div class="first">
			<div class="col-sm-3"><h2>Education</h2></div>
			<div class="col-sm-9" style="font-size: 144%;padding-right: 15px;line-height: 24px;">
				<h5 style="padding-left: 350px;margin-left:200px;"><input name="eyear1" type="text" class="form-control" value="{{$form->eyear1}}" placeholder="Education Date"></h5>
				<h4><textarea class="form-control" style="background:transparent;border:none" placeholder="Education Details" cols="70" rows="4" style="font-size: 13px" name="edetail1">{{$form->edetail1}}</textarea></h4>
			<div class="col-sm-9" style="font-size: 144%;padding-right: 15px;line-height: 24px;">
				<h5 style="padding-left: 350px;margin-left:200px;"><input type="text" class="form-control" placeholder="Education Date" name="eyear2" value="{{$form->eyear2}}"></h5>
				<h4><textarea class="form-control" style="background:transparent;border:none" placeholder="Education Details" cols="70" rows="4" name="edetail2" style="font-size: 13px">{{$form->edetail2}}</textarea></h4>
			</div>
			</div>
		</div>
	</div> 
	<hr style="border:1px solid;">
	<div class="div2">
		<div class="row">
			<div class="first">
					<div class="col-sm-3"><h2>Hobbies</h2></div>
				<div class="col-sm-9">
					<textarea class="form-control" style="background:transparent;border:none;font-size:13px " placeholder="Enter your hobbies" name="interest" cols="70" rows="5">{{$form->interest}}</textarea></div>
				</div>
			</div>
	</div>
	
</div>

</body>
</html>
