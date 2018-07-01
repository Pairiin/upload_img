<?php
// $id=$_GET['show_id'];//ตั้งค่าตัวแปล
// $name=$_POST['name'];
// $tel=$_POST['tel'];
// $email=$_POST['email'];
// $position=$_POST['position'];

include ("connect.php");

$sql="UPDATE user SET name='".$_POST["name"]."',tel='".$_POST["tel"]."',email='".$_POST["email"]."' WHERE id='".$_GET['show_id']."'";
$sql2="UPDATE position SET name='".$_POST["name"]."', position='".$_POST['position']."' WHERE id='".$_GET['show_id']."'";
$sql_query=mysql_query($sql);
$sql_query2=mysql_query($sql2);

if($_FILES["filUpload"]["name"] != "")
{
  if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
  {

    @unlink("myfile/".$_POST["hdnOldFile"]);

    $sql = "UPDATE user ";
    $sql .=" SET pic = '".$_FILES["filUpload"]["name"]."' WHERE id = '".$_GET["show_id"]."' ";
    $sql_query = mysql_query($sql);

  }
}
    if($sql_query&&$sql_query2) {
        echo "<script type='text/javascript'>alert('แก้ไขข้อมูลเรียบร้อยแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=show.php'>";
    }else{
        echo "<script type='text/javascript'>alert('ไม่สามารถแก้ไขข้อมูลได้');window.history.go(-1);</script>" ;
    }

mysql_close();
?>
<!-- <a href="show.php">View files</a> -->
