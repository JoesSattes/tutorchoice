<?php
 session_start();
 header ('Content-type: text/html; charset=utf-8');
 
 mysql_connect("mysql.hostinger.in.th","u233790766_root","sawada27");  //ข้อมูลนี้ได้มาจากตอนติดตั้งเว็บเซิร์ฟเวอร์
 mysql_select_db("u233790766_tuch");
 
 $username = isset($_POST['email']) ? $_POST['email'] : '';
 $password = isset($_POST['pass']) ? $_POST['pass'] : '';
 $_SESSION['abc']=$_POST['email'];
 
 $strSQL = "SELECT * FROM eit WHERE email = '".mysql_real_escape_string($username)."' 
 AND pass = '".mysql_real_escape_string($password)."'";
 $qry = mysql_query($strSQL) or die('ไม่สามารถเชื่อมต่อฐานข้อมูลได้ Error : '. mysql_error());
 $row = mysql_fetch_assoc($qry);
 if(!$row)
 {
   echo "<script type='text/javascript'>";
	echo "alert('ชื่หรือรหัสผ่านไม่ถูกต้อง ลองอีกครั้ง');";
	echo "window.location = 'login-page.php'; ";
	echo "</script>";
 }
 else
 {
   //สร้าง SESSION เพื่อใช้ในหน้าอื่น ที่ต้องการตรวจสอบข้อมูลผู้ใช้ในขณะนั้น
 	?><input type="hidden" value="<? echo $_SESSION['abc']; ?>"><?php
  echo "<script type='text/javascript'>";
	echo "alert('Log in Successful');";
	echo "window.location = 'member/member.php'; ";
	echo "</script>";

   


 }
 mysql_close();//ปิดการเชื่อมต่อฐานข้อมูล
?>