<?php
include"connect.php";
$name=$_POST["name"];
// $id=$_POST["id"];
$position=$_POST["position"];
  if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
  	{
    $sql = "INSERT INTO user";
    $sql .= "(name,tel,email,pic) VALUES ('".$_POST["name"]."','".$_POST["tel"]."','".$_POST["email"]."','".$_FILES["filUpload"]["name"]."')";
    $sql2 = "INSERT INTO position (name,position) VALUES ('$name','$position')";

    $sql_query=mysql_query($sql);
    $sql_query2=mysql_query($sql2);
  }
 if($sql_query&&$sql_query2) {
        echo "<script type='text/javascript'>alert('บันทึกข้อมูลเรียบร้อยแล้ว')</script>";
        echo "<meta http-equiv ='refresh'content='0;URL=show.php'>";
    }else{
        echo "<script type='text/javascript'>alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล');window.history.go(-1);</script>" ;
        // echo $id=$_POST['id'];
        // echo $name=$_POST['name'];
        // echo $tel=$_POST['tel'];
        // echo $email=$_POST['email'];
        // echo $position=$_POST['position'];
        // echo $pic=$_FILES["filUpload"]["name"];
    }
mysql_close();


?>
