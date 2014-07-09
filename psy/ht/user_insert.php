<?php  require_once('conn.php');
$sex=mysql_real_escape_string(htmlspecialchars($_GET["sex"], ENT_QUOTES));
$edu=mysql_real_escape_string(htmlspecialchars($_GET["edu"], ENT_QUOTES));
$single=mysql_real_escape_string(htmlspecialchars($_GET["single"], ENT_QUOTES));
$home=mysql_real_escape_string(htmlspecialchars($_GET["home"], ENT_QUOTES));
$study=mysql_real_escape_string(htmlspecialchars($_GET["study"], ENT_QUOTES));
$fbl=mysql_real_escape_string(htmlspecialchars($_GET["fbl"], ENT_QUOTES));
$b=date("Y-m-d H:i:s"); 
if($sex!='' and $edu!='' and $single!='' and $home!='' and $study!='' and $fbl!=''){
$result = mysql_query("INSERT INTO `evabioyetian`.`psy_user` (`userid`,`sex`, `edu`, `single`,`home`,`study`,`fbl`,`addtime`) VALUES (NULL, '$sex','$edu','$single','$home','$study','$fbl','$b');");
$result1= mysql_query("SELECT userid FROM  `psy_user` ORDER BY  `psy_user`.`addtime` DESC  LIMIT 0 , 1");
$row = mysql_fetch_row($result1);
$session_id=$row[0];



setcookie("psy",$session_id.'|'.'0'.'|'.'0', time()+3600*24*365,'/');
echo '<script language="javascript"> window.location.href="../word_s.php";</script>';
}
else{ echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.6, maximum-scale=0.6, minimum-scale=0.6" />
<title>交互界面测验</title><body><h1 style="color:#37a;width:100%;height:100%;text-align:center;">有选项没填吧。。。。。</h1></body></html>';}










?>