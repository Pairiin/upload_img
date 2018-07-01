<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>แสดงข้อมูล</title>
</head>
<body>
<table width="60%" height="50" border="0.5" align="center" >
  <tr bgcolor="#FF6699">
    <td colspan="8" align="center">แสดงข้อมูลทั้งหมด</td>
  </tr>
  <tr bgcolor="#FF6699">
    <td width="82"><div align="center">ไอดี</div></td>
    <td width="82"><div align="center">ชื่อ</div></td>
    <td width="82"><div align="center">เบอร์</div></td>
    <td width="82"><div align="center">อีเมลล์</div></td>
    <td width="82"><div align="center">รูปภาพ</div></td>
    <td width="82"><div align="center">ตำแหน่ง</div></td>
    <td width="82"><div align="center">แก้ไข</div></td>
    <td width="82"><div align="center">ลบ</div></td>
  </tr>

<?php
include"connect.php";
$strSQL = "SELECT * FROM user as u
            LEFT JOIN position as p on u.id = p.id";
            $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
            $num1=mysql_num_rows($objQuery);
            if($num1<=0){
              echo "<script type='text/javascript'>alert('ไม่มีข้อมูลให้แสดง')</script>";
              echo "<meta http-equiv ='refresh'content='0;URL=index.php'>";
            }
    while ($objResult = mysql_fetch_array($objQuery)) {// คำสั่งให้แสดงข้อมูล
    {
        echo"<tr bgcolor='#FFCCCC'>";
        echo "<td>$objResult[id]</td>";
        echo "<td>$objResult[name]</td>";
        echo "<td>$objResult[tel]</td>";
        echo "<td>$objResult[email]</td>";
        echo "<td><center><img src='myfile/$objResult[pic]' width='200px'></center></td>";
        echo "<td>$objResult[position]</td>";
        echo "<td><center><a href ='edit.php?show_id=$objResult[id]'>แก้ไข </a></center></td>";
        echo "<td><center><a href='delete.php?delete_id=$objResult[id]'>ลบข้อมูล</a></center></td>";
        echo"</tr>";
    }
  }
  echo "<tr>";
  echo "<td colspan='7'><center><a href='index.php'><input type='button' value='กลับหน้าแรก'/></a></center></td>";
  echo "</tr>";

mysql_close();
?>
</table>
</body>
</html>
