<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php


$db=mysqli_connect("localhost","root","","image");
$sql="SELECT *FROM deven";
$result=mysqli_query($db,$sql);
while ($row=mysqli_fetch_array($result)) {
 echo "<img src='usersimg/".$row['image']."'>";
}


?>
</body>
</html>
