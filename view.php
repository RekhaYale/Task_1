<html>
<head>
<title>DISPLAY</title>
<style>
.form-style{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 100px;
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
<form name="form4" action="reg_form.php" >
<input value="Back" type="submit">
</form>
</div>
<?php
$mysqlport=getenv('$2G_MYSQL_PORT');
$dbhost="localhost:".$mysqlport;
$dbuser='root';
$dbpass='';
$conn=mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
$dbname='db_one';
mysql_select_db($dbname);
echo"<TABLE width='1000' border=4 align=center>
<TBODY>
<TR>
<TH width='2' height='50px' bgColor=white align=middle><pre>Name</TH>
<TH width='2' height='50px' bgColor=white align=middle><pre>Gender</TH>
<TH width='2' height='50px' bgColor=white align=middle><pre>Date of birth</TH>
<TH width='2' height='50px' bgColor=white align=middle><pre>Address</TH>
<TH width='2' height='50px' bgColor=white align=middle><pre>Qualification</TH>
<TH width='2' height='50px' bgColor=white align=middle><pre>Email</TH>
<TH width='2' height='50px' bgColor=white align=middle><pre>Phone number</TH>
</TR>";
?>
<?php
$sql="Select * from details";
$result=mysql_query($sql);
$row=mysql_fetch_array(mysql_query($sql),MYSQL_ASSOC);
while($row=mysql_fetch_array($result,MYSQL_ASSOC))
{
	echo"<tr height='100px'><td>".$row['Name']."</td><td>".$row['Gender']."</td><td>".$row['DOB']."</td><td>".$row['Address']."</td><td>".$row['Qualification']."</td><td>".$row['Email']."</td><td>".$row['Phone_number']."</td></tr>";
	
}
echo"</Table>";
mysql_close($conn)
?>
</body>
</html>