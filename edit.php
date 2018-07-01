<?php
$show_id=$_GET['show_id'];
include"connect.php";
$strSQL="SELECT * FROM user
        LEFT JOIN position on user.id = position.id where user.id='".$_GET['show_id']."' ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysql_fetch_array($objQuery);
mysql_close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แก้ไขข้อมูล</title>
<style type="text/css">
.style10 {color: #FF6666}
.style11 {font-size: 24px}
.style12 {color: #FF0000}
</style>
</head>

<body>
<form id="form1" name="form1" method="POST" action="saveedit.php?show_id=<?php echo $_GET["show_id"];?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo"$objResult[id]"; ?>"/>
  </p>
  <table width="50%" border="0" align="center" bgcolor="#FFCCCC">
    <tr>
      <td colspan="2" align="center">** แก้ไขข้อมูล **</td>
    </tr>
    <!-- <tr>
      <td width="24%">
        <div align="right">
      id :</div></td>
      <td width="76%"><input type="text" name="id" id="id" value="<?php echo $objResult['id']; //แสดงข้อมูลที่จะแก้ไข?>" /></td>
    </tr> -->
    <tr>
      <td width="24%">
        <div align="right">
      ชื่อ-นามสกุล :</div></td>
      <td width="76%"><input type="text" name="name" id="name" value="<?php echo $objResult['name']; //แสดงข้อมูลที่จะแก้ไข?>" /></td>
    </tr>
    <tr>
      <td width="24%">
        <div align="right">
      เบอร์ :</div></td>
      <td width="76%"><input type="text" name="tel" id="tel" value="<?php echo $objResult['tel']; //แสดงข้อมูลที่จะแก้ไข?>" /></td>
    </tr>
    <tr>
      <td width="24%">
        <div align="right">
      อีเมลล์ :</div></td>
      <td width="76%"><input type="text" name="email" id="email" value="<?php echo $objResult['email']; //แสดงข้อมูลที่จะแก้ไข?>" /></td>
    </tr>
    <tr>
      <td width="24%">
        <div align="right">
      รูปภาพ :</div></td>
      <td width="76%">
      <?php echo "<img src='myfile/$objResult[pic]' width='200px'>"; ?>
      <input type="file" name="filUpload">
      <input type="hidden" name="hdnOldFile" value="<?php echo $objResult["pic"];?>">
    </td>
    </tr>
    <tr>
      <td width="24%">
        <div align="right">
      ตำแหน่ง :</div></td>
      <td width="76%"><input type="text" name="position" id="position" value="<?php echo $objResult['position']; //แสดงข้อมูลที่จะแก้ไข?>" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="แก้ไข"  />
        <input type="reset" name="button2" id="button2" value="ยกเลิก" />
      </div></td>
    </tr>
  </table>
  </p>
</form>
</body>
</html>
