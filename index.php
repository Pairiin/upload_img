<?php require_once("connect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>เพิ่มข้อมูล</title>
</head>
<body>
  <body>
<form id="form1" name="form1" method="POST" action="insert.php" enctype="multipart/form-data">
  <table width="60%" border="0" align="center" bgcolor="#FFCCCC">
    <tr>
      <td width="24%" colspan="2">
        <div align="center">
        ** แบบสอบถาม **</div>
      </td>
    </tr>
    <!-- <tr>
      <td width="24%">
        <div align="right">
          ไอดี :</div></td>
      <td width="76%"><input type="text" name="id" id="id" value="<?php echo isset($get['id']) ? $get['id'] : '';?>" /></td>
    </tr> -->
    <tr>
      <td width="24%">
        <div align="right">
          ชื่อ-นามสกุล :</div></td>
      <td width="76%"><input type="text" name="name" id="nameth" value="<?php echo isset($get['name']) ? $get['name'] : '';?>" /></td>
    </tr>
    <tr>
      <td><div align="right">เบอร์มือถือ :</div></td>
      <td><input type="text" name="tel" id="tel" value="<?php echo isset ($get['tel'])? $get['tel'] : '';?>" /></td>
    </tr>
    <tr>
      <tr>
        <td><div align="right">E-mail :</div></td>
        <td><input type="text" name="email" id="email" value="<?php echo isset ($get['email'])? $get['email'] : '';?>" /></td>
      </tr>
      <tr>
        <td><div align="right">รูปภาพ :</div></td>
        <td><input type="file" name="filUpload"></td>
      </tr>
      <tr>
        <td><div align="right">ตำแหน่ง :</div></td>
        <td><input name="position" type="text" id="position" size="40" value="<?php echo isset ($get['position'])? $get['position'] : '';?>" /></td>
      </tr>
      <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="button" id="button" value="ตกลง" />
        <input type="reset" name="button2" id="button2" value="ยกเลิก" />
        <a href='show.php'><input type="button" name="index" id="index" value="แสดงข้อมูล" />
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
