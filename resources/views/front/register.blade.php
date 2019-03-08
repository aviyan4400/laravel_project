@extends('layouts.app')

@section('content')

	<div class="container">
		<form method="POST" action="{{url('insert1')}}">
			@csrf
			<h2>Registration</h2>
			<label>name:</label><input type="text" id="name" name="name" placeholder="Enter your Name"><br>
			<label>Nationality:</label><input type="text" id="nationality" name="nationality" placeholder="Enter your Nationality"><br>
			<label>Email:</label><input type="email" name="email" id="email" placeholder="Enter your Email"><br>
			<label>Number:</label><input type="number" name="number" id="number
			" placeholder="Enter your Number"><br><br>
			<label>Address:</label><textarea type="text" name="address" cols="30"  id="address" placeholder="Enter your Address"></textarea><br>
			<div>
				<h3>Personal summary</h3>
				<textarea type="text"  name="personal" placeholder="Enter Details" cols="30" rows="3"></textarea> 
			</div>
			<div>
				<h3>Skills</h3>
				<textarea type="text"  name="skills" cols="30" rows="3" placeholder="Enter Skills"></textarea>
			</div>
			<div>
				<h3>Technical</h3>
				<textarea type="text" cols="30"  name="technical" rows="3" placeholder="Enter details"></textarea>
			</div>
			<div>
				<h3>Experience</h3>
				<table>
					<tr>
						    <td><input type="year"  name="wyear1" placeholder="Work-year"></td>
					</tr>		
						
					<tr colspan="2">
						<td>
							<textarea  name="detail1"placeholder="work Details" cols="40" rows="4" style="font-size: 13px"></textarea></td>
					</tr>
					<br>
					<br>
					<tr>
						 <td><input type="year" name="wyear2" placeholder="Work-year"></td>
					</tr>
					<tr colspan="2">
						<td>
							<textarea  name="detail2" placeholder="Work Details" cols="40" rows="4" style="font-size: 13px"></textarea></td>
						
					</tr>
				</table>
			</div>
			<div>
				<h3>Education</h3>
				<table>
					<tr>
						    <td style="padding-left: 15px"><input type="year" name="year1"placeholder="year"></td>
					
							<td><textarea type="text"  name="edetail1" cols="30" rows="3" placeholder="Enter Education details"></textarea></td>
					</tr>					
					<br>
					<br>
					<tr>
						 <td style="padding-left: 15px"><input type="year" name="year2" placeholder="year"></td>
					
						 <td><textarea type="text"  name="edetail2" cols="30" rows="3"placeholder="Enter Education details"></textarea></td>
					</tr>
					
				</table>
			</div>
			<div> 
				<h3>Interest</h3>
				<textarea type="text" name="interest" cols="40" rows="3" placeholder="Enter your interest"></textarea>
			</div>
		
			<button type="submit" class="btn btn-primary" >submit	</button>	
		</form>
	</div>

@endsection