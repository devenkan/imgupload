<?php

$msg="";


if(isset($_POST["button"]))
{

$target="usersimg/".basename($_FILES['image']['name']);

$db=mysqli_connect("localhost","root","","image");
$image=$_FILES['image']['name'];
$text=$_POST['text'];

$sql="INSERT INTO deven(image,text) VALUES('$image','$text')";
mysqli_query($db,$sql);

if (move_uploaded_file($_FILES['image']['tmp_name'],$target)) {
  $msg="image uploaded successfully";
}
else
{
  $msg="image not  uploaded successfully";

}
}
echo $msg;

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form action="#" method="POST" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
    <input type="text" name="text" id="file" />
    <input type="file" name="image" id="file" />
<input type="submit" name="button" value="Upload Image" />
</form>
    


</form>
<a href="view.php">view images</a>
 </td>
  </tr>
  </table>


</body>
</html>
