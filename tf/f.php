<?php error_reporting(0);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>
<body>
<?php
$x1=$_GET['x1']; $x2=$_GET['x2'];
function tf($x1,$x2){$f=($x1*$x1)/($x2*$x2);echo number_format($f,3, '.', '');}
if(!empty($x1)){
?>
<div>
结果：<?php  tf($x1,$x2);?>
</div>
<?php }else{?>
<form action="f.php" method="get">
标准差大:<input type="text"  name="x1" value="">
标准差小:<input type="text"  name="x2" value="">
<button>提交</button>
</form>
<?php }?>
</body>
</html>