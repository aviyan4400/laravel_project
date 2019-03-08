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
		    border:0px none;
		}
		textarea{
			 background: transparent;
		    border:0px none;
		}
		body { 
			font-family: Georgia;
			color: #444; 
		}
		.container { 
			padding: 10px 80px;
			margin:auto;
			margin-bottom: 10px; 
			background-color:#CFDCEA; 
			border: solid #666; 
			border-width: 8px 0 2px 0; 
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
	<form method="POST" action="{{url('insert2')}}">
		@csrf
	<div class="first">
		<p style="text-decoration: underline">Personal Info</p>
		<h3><input type="text" name="name" placeholder="Enter your name"></h3>
		<h5><input type="email" name="email" placeholder="Enter your email"></h5>
		<h5><input type="number" name="phone" placeholder="Enter your phone no"></h5>
		<h5><input type="text" name="nationality" placeholder="Enter your nationality"></h5>
		<h5><textarea type="text" name="address" placeholder="Enter your address" cols="40"></textarea></h5>
	</div>

	<hr style="border:1px solid;">
	<div class="div2">
		<div class="row">
			<div class="first">
					<div class="col-sm-3"><h2>Objective:</h2></div>
				<div class="col-sm-9" style="font-size:144%;padding-right: 6.5em;line-height: 24px;"><textarea type="text" name="personal" placeholder="Enter personal details" cols="70"></textarea></div>
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
							<td style="font-size: 18px"><textarea type="text" name="skill" placeholder=" Enter Skill " cols="50"></textarea></td>
							
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
				<textarea type="text"  name="technical" cols="50"placeholder="Enter technical details"></textarea>
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
						    <td style="padding-left: 15px"><input type="year"  name="wyear"placeholder="Work-year"></td>
					
							<td><textarea type="text" name="detail" cols="40"placeholder="Enter post details"></textarea></td>
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
						    <td style="padding-left: 15px"><input type="year" name="eyear1" placeholder="Year"></td>
					
							<th><textarea type="text" name="edetail1" cols="40" placeholder="Enter Education details"></textarea></th>
					</tr>
					<tr>
						    <td style="padding-left: 15px"><input type="year" name="eyear2" placeholder="Year"></td>
					
							<th><textarea type="text" name="edetail2" cols="40" placeholder="Enter Education details"></textarea></th>
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
				<div class="col-sm-9" style="font-size:13px ;padding-right: 6.5em;line-height: 24px;"><textarea type="text" name="interest" placeholder="Enter your hobbies" cols="70"></textarea></div>
				</div>
			</div>
	</div>
	<button type="submit" class="btn btn-primary">submit</button>
</form>
</div>
</body>
</html>


