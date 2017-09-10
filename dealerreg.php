<?php
$db="renew";
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,$db);
$bg1=$_REQUEST['name'];
$bg2=$_REQUEST['loc'];
$bg3=$_REQUEST['email'];
$bg4=$_REQUEST['phn'];
$bg5=$_REQUEST['pass'];
$sql2="INSERT INTO registration(name,location,email,phn,pass) VALUES (bg1,bg2,bg3,bg4,bg5);";
$result=mysqli_query($con,$sql2);
echo "done";
?>
<html>
<body>
<form action="search.php" >
<input type="submit" value="back" >
</form>
</body>
</html>