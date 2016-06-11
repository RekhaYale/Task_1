<html>
<head>
<script type="text/javascript">
function checkForm(form)
  {
   if(form.name.value=="")
   {
   alert("Error:Fill the 'Name' field");
   return false;
   }
   
      re = /[0-9]/;
      if(re.test(form.name.value))
	  {
        alert("Error: Name cannot have numbers!");
        form.name.focus();
        return false;
      }
      re = /[!,@,#,$,%,^,&,*]/;
      if(re.test(form.name.value))
	  {
        alert("Error: Name cannot have special character!");
        form.name.focus();
        return false;
      }
  
   if(form.gender.value=="")
   {
	 alert("Error:Fill the 'Gender' field!!");
   return false;  
   }
   if(form.dob.value=="")
   {
	   alert("Error:Fill the 'DOB' field!!");
	   return false;
   }
   if(form.address.value=="")
   {
	   alert("Error:Fill the 'Address' field!!");
	   return false;
   }
   if(form.qualification.value=="")
   {
	   alert("Error:Fill the 'Qualification' field!!");
	   return false;
   }
   if(form.email.value=="")
   {
	   alert("Error:Fill the 'Email Address' field!!");
	   return false;
   }
   var emailID = form.email.value;
   atpos = emailID.indexOf("@");
   dotpos = emailID.lastIndexOf(".");
   if (atpos < 1 || ( dotpos - atpos < 2 )) 
   {
       alert("Please enter correct email ID");
       document.form.email.focus() ;
       return false;
   }
   if(form.phone.value=="")
   {
	   alert("Error:Fill the 'Phone Number' field!!");
	   return false;
   }
   var phonenum = form.phone.value;
   if(phonenum.length!=10)
   {
	   alert("Error:Enter a 10 digit phone number");
	   return false;
   }
   
   return true;
  }
</script>
<style type="text/css">
.form-style{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 350px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form-style h1{
    background: #43D1AF;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.form-style input[type="text"],
.form-style input[type="date"],
.form-style input[type="email"],
.form-style textarea,
.form-style select 
{
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    background: #fff;
    margin-bottom: 4%;
    border: 1px solid #ccc;
    padding: 3%;
    color: #555;
    font: 95% Arial, Helvetica, sans-serif;
}
.form-style input[type="text"]:focus,
.form-style input[type="date"]:focus,
.form-style input[type="email"]:focus,
.form-style textarea:focus,
.form-style select:focus
{
    box-shadow: 0 0 5px #43D1AF;
    padding: 3%;
    border: 1px solid #43D1AF;
}

.form-style input[type="submit"],
.form-style input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: #43D1AF;
    border-bottom: 2px solid #30C29E;
    border-top-style: none;
    border-right-style: none;
    border-left-style: none;    
    color: #fff;
}
.form-style input[type="submit"]:hover,
.form-style input[type="button"]:hover{
    background: #2EBC99;
}
</style>

</head>
<body bgcolor="#CCCC99">
<div class="form-style">
<h1>Fill out the details</h1>
<form name="form1" onsubmit="return checkForm(this);" action="insert.php" method="POST">
Name:<br/><input type="text" name="name" placeholder="Name" /><br/>
Gender:<input type="radio" name="gender" value="male" /> Male
<input type="radio" name="gender" value="female" /> Female<br/><br/>
Date of birth:<br/><input type="date" name="dob"><br/>
Address for communication:<br/><textarea name="address" placeholder="Address"></textarea><br/>
Qualification :<br/>
<select name="qualification">
<option value="B.E">B.E</option>
<option value="B.Tech">B.Tech</option>
<option value="B.Sc">B.Sc</option>
<option value="B.C.A">B.C.A</option>
</select><br/>
Email:<br/><input type="text" name="email" placeholder="Email Address" /><br/>
Contact number:<br/><input type="text" name="phone" placeholder="contact number" /><br/>
<input type="submit" value="Submit" />
</form></div>
<div class="form-style">
<form name="form5" action="view.php" >
<input value="View all the submitted forms" type="submit">
</form>
</div>
</body>
</html>