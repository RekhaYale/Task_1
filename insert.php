<html>
<head>
<title>SUBMIT_PAGE</title>
<style>
.form-style{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 350px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}
.form-style input[type="submit"]{
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
.form-style input[type="submit"]:hover{
    background: #2EBC99;
</style>
</head>
<body bgcolor="#CCCC99">
<div class="form-style">
<form name="form2" action="reg_form.php" >
<input value="Back" type="submit">
</form>
<form name="form3" action="view.php" >
<input value="View all the submitted forms" type="submit">
</form>
</div>
<?php
$mysqlport=getenv('$2G_MYSQL_PORT');
$dbhost = "localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
$dbname='db_one';
mysql_select_db($dbname);
$name=$_POST["name"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$address=$_POST["address"];
$qualification=$_POST["qualification"];
$email=$_POST["email"];
$phone=$_POST["phone"];

$sql_insert="INSERT INTO
details(Name,Gender,DOB,Address,Qualification,Email,Phone_number)VALUES('$name','$gender','$dob','$address','$qualification','$email','$phone')";
if($name==NULL OR $gender==NULL OR $dob==NULL OR $address==NULL OR $qualification==NULL OR $email==NULL OR $phone==NULL)
	die('Please enter values for all the fields');
else
{
 if(!mysql_query($sql_insert,$conn))
 {
	 die('Error:'.mysql_error());
 }
 else
	 echo "You have successfully submitted the details!!";
}
mysql_close($conn)

?>
</body>
</html>