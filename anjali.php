<h1> Hello</h1>
<?php
/*$con=mysqli_connect("localhost","root","");
if(mysqli_select_db($con,"class db"))
{
	echo "connection success";
}
else
{
	echo"connection fail";
}

*/
$con=new mysqli("localhost","root","","class db");
if($con->connect_error)
{
die("connection failed".$con->connect_error);
}
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	
	$hour1=$_POST['hour1'];
	$hour2=$_POST['hour2'];
	$sql="insert into attendace(name,hour1,hour2) values('$name','$hour1','$hour2')";
	$result=$con->query($sql);
	if($result==TRUE)
		echo "inserted successfully";
}
$sql="select *from attendace";
$result=$con->query($sql);
echo '<table border=1><tr><th>rollno</th><th>name</th><th>hour1</th><th>hour2</th></tr>';
while($row=$result->fetch_assoc())
{
	echo'<tr><td>'. $row['rollno'].'</td><td>'.$row['name'].'</td><td>'.$row['hour1'].'</td><td>'.$row['hour2'].'</td></tr>';
	
}
echo '</table>';


?>
<form method=post>
name:<input type="text"id="name"name="name"><br><br>

Hour1:<input type="text"id="id"name="hour1"><br><br>
Hour2:<input type="text"id="id"name="hour2"><br><br>
<input type="submit"name="submit"value="submit">
</form>



</form>