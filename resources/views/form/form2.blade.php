<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Resume2</title>
  <style type="text/css">
    #div1{
      color: white;
      background-color: gray;
      margin-top: 30px;
      padding-left: 10px;

    }
    #div2{
      padding-left: 10px;
      margin-top: 30px;

    }
    #div3{
      color: white;
      background-color: gray;
      margin-top: 30px;
      padding-left: 10px;

    }

    .container{
      padding: 10px 80px;
      margin:auto;
      margin-bottom: 10px;
      background-color: #f5f5f5;
      border:solid #666;
      border-width: 8px 0 2px 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <form method="post" action="{{ url('insert3') }}">
       {{ csrf_field() }}

  <input type="text" name="name" placeholder="enter name" id="name" value="{{ old('name') }}" required style="color:gray; font-size: 40px; border:none; background: transparent; margin-top: 30px;">
  <div id="div1">
    <h4> INFO</h4>
  </div>
     <div id="div2">
  
  <input type="email" size="50" name="email" placeholder="enter email" id="email" value="{{ old('email') }}" required style="border:none; background: transparent; font-size: 15px; padding-top:2px"><br><br>
  
  
  <input type="phone" name="phone" placeholder="enter your phone number" id="phone" value="{{ old('phone') }}" required style="border: none; background: transparent;"><br><br>
  
  <input type="text" name="nationality"  placeholder="enter nationality" id="nationality" value="{{ old('nationality') }}" required style="border: none; background: transparent;"><br><br>

   <textarea rows="4" cols="123" placeholder="Enter your address" name="address" id="address" value="{{ old('address') }}" required style="border: none; background: transparent;"></textarea><br><br>
   </div>

    <div id="div3">
    <h4> PERSONAL SUMMARY</h4>
  </div>
    <textarea rows="4" cols="123" type="text" name="personal" id="personal" value="{{ old('personal') }}" required placeholder="enter about yourself" style="border:none; background: transparent;"></textarea>

    <div id="div3">
    <h4> SKILLS</h4>
   </div>
    <textarea rows="4" cols="123" type="text" name="skill" id="skill" value="{{ old('skill') }}" required placeholder="Skill Details" style="border:none; background: transparent;"></textarea>

  <div id="div3">
    <h4> TECHNICAL DETAILS</h4>
  </div>
    <textarea rows="4" cols="123" type="text" name="technical" id="technical" value="{{ old('technical') }}" required placeholder="enter technical Details" style="border:none; background: transparent;"></textarea>
        
    <div id="div3">
    <h4> EXPERIENCS</h4>
  </div>
    <input type="year" name="wyear" placeholder="work date" id="wyear" value="{{ old('wyear') }}" required style="border:none; background: transparent;"><br>
    <textarea rows="4" cols="123" type="text" name="detail"  id="wdetail" value="{{ old('wdetail') }}" required placeholder="work Details" style="border:none; background: transparent;"></textarea>

     
    <div id="div3">
  <h4> EDUCATION</h4>
    </div>
   <table>
       <tr>
         <td> 
          <label>
          <input type="year" name="eyear1" id="eyear1" value="{{ old('eyear1') }}" required placeholder="enter enrollment date" style="border:none; background: transparent;">
       </label>
       </td>
        
        <td>
        <textarea rows="2" cols="160" type="text" id="edetail1" value="{{ old('edetail1') }}" required name="edetail1" placeholder="Education details"  style="background: transparent; border:none;"></textarea>
      </td>
     </tr>
         <tr>
          <td> <label>
            <input type="year" name="eyear2" id="eyear2" value="{{ old('eyear2') }}" required placeholder="enter enrollment date" style="border:none; background: transparent;">
      </label>
      </td>
      
      <td>
        <textarea rows="2" cols="160" type="text" name="edetail2" id="edetail2" value="{{ old('edetail2') }}" required placeholder="Education details"  style="background: transparent; border:none;"></textarea>
      </td>
    </tr>


  </table>

  <div id="div3">
     <h4> HOBIES</h4>
    </div>
    
        <textarea rows="2" cols="160" type="text" name="interest" id="interest" value="{{ old('interest') }}" required placeholder="Enter hobies"  style="background: transparent; border:none;"></textarea>

        <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
          
      
          
      
    </form>
     </div>
</body>
</html>

