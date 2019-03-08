<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Resume5</title>
	<style type="text/css">

	p{
		font-size: 24px;
		font-family: Georgia;
	}
		input[type]
		{
		    background: transparent;
		    border:none;
		}
		/*textarea{
			 background: transparent;
		    border:none;
		}*/
		body { 
			font-family: Georgia;
			/*color: #444; */
		}
		.container { 
			/*padding: 10px 80px;*/
			margin:auto;
			margin-bottom: 10px; 
			background-color:#CFDCEA; 
			border: solid #666; 
			border-width: 4px 0 2px 0; 
		}

		h2 { 
		font-size: 152%; 
		}
		h3, h4 { 
		font-size: 122%; 
		}
		h1, h2, h3, h4 { 
		color: #333; 
		}
		.first h2 { 
		font-style: italic; 
		}
	</style>
</head>
<body>
<div class="container">
	<div class="first">
		<p style="text-decoration: underline">Personal Info</p>
		<h3><input type="text" class="form-control" value="{{$five->name}}" name="name" placeholder="Enter your name"></h3>
		<h5><input type="text" class="form-control" name="email" value="{{$five->email}}" placeholder="Enter your email"></h5>
		<h5><input type="text" class="form-control" name="phone" value="{{$five->phone}}" placeholder="Enter your phone no"></h5>
		<h5><input type="text"  class="form-control" name="nationality" value="{{$five->nationality}}" placeholder="Enter your nationality"></h5>
		<h5><textarea type="text" class="form-control" style="background:transparent;border:none" name="address"  placeholder="Enter your address" cols="40">{{$five->address}}</textarea></h5>
	</div>

	<hr style="border:1px solid;">
	<div class="div2">
		<div class="row">
			<div class="first">
					<div class="col-sm-3"><h2>Objective:</h2></div>
				<div class="col-sm-9" style="font-size:144%;padding-right: 6.5em;line-height: 24px;"><textarea type="text" style="background:transparent;border:none" class="form-control" name="personal" placeholder="Enter personal details" cols="70">{{$five->personal}}</textarea></div>
				</div>
			</div>
	</div>
	<hr style="border:0.5px solid;">
	<div class="row">
	<div class="first">
		<div class="col-sm-3"><h2>Skills:</h2></div>
				<div class="col-sm-9" style="font-size: 144%;padding-right: 6.5em;line-height: 24px;">
					<table>
						<tr>
							<td style="font-size: 18px"><textarea type="text" style="background:transparent;border:none" class="form-control" name="skill" placeholder=" Enter Skill " cols="50">{{$five->skill}}</textarea></td>
							
						</tr>
					</table>
				</div>
		</div>
	</div>

	<hr style="border:0.5px solid;">
	<div class="row">
	<div class="first">
			<div class="col-sm-3"><h2>Technical:</h2></div>
			<div class="col-sm-9" style="font-size: 144%;padding-right: 6.5em;line-height: 24px;">
				<textarea type="text"  style="background:transparent; border:none" class="form-control"  name="technical" cols="50"placeholder="Enter technical details">{{$five->technical}}</textarea>
				</div>
		</div>
	</div>
	<hr style="border:0.5px solid;">
	<div class="row">
	<div class="first">
			<div class="col-sm-3"><h2>Experience:</h2></div>
			<div class="col-sm-9" style="font-size: 144%;padding-right: 6.5em;line-height: 24px;">
				<table>
					<tr>
						    <td style="padding-left: 15px"><input type="text" class="form-control" name="wyear"value="{{$five->wyear}}" placeholder="Work-year"></td>
					
							<td style="padding-left: 25px"><textarea type="text" style="background:transparent;border:none;" class="form-control" name="detail" cols="40"placeholder="Enter post details">{{$five->detail}}</textarea></td>
					</tr>		
						
				</table>
			</div>
		</div>
	</div>
					
	<hr style="border:0.5px solid;">

	<div class="row">
	<div class="first">
			<div class="col-sm-3"><h2>Education:</h2></div>
			<div class="enlarge">
			<div class="col-sm-9" style="padding-right: 6.5em;line-height: 24px;font-size: 13px ">
			<table>
					<tr>
						    <td style="padding-left: 15px"><input type="text" class="form-control" name="eyear1" value="{{$five->eyear1}}" placeholder="Year"></td>
					
							<th style="padding-left: 25px"><textarea type="text" style="background:transparent;border:none" class="form-control" name="edetail1" cols="40" placeholder="Enter Education details">{{$five->edetail1}}</textarea></th>
					</tr>
					<tr>
						    <td style="padding-left: 15px"><input type="text" class="form-control" name="eyear2" value="{{$five->eyear2}}" placeholder="Year"></td>
					
							<th style="padding-left: 25px" ><textarea type="text" style="background:transparent;border:none" class="form-control" name="edetail2" cols="40" placeholder="Enter Education details">{{$five->edetail2}}</textarea></th>
					</tr>
			</table>			
			</div>
			</div>
		</div>
	</div> 
	<hr style="border:1px solid;">
	<div class="div2">
		<div class="row">
			<div class="first">
					<div class="col-sm-3"><h2>Hobbies:</h2></div>
				<div class="col-sm-9" style="font-size:13px ;padding-right: 6.5em;line-height: 24px;"><textarea type="text" style="background:transparent;border:none" class="form-control" name="interest" placeholder="Enter your hobbies" cols="70">{{$five->interest}}</textarea></div>
				</div>
			</div>
	</div>
</div>
</body>
</html>


