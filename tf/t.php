<?php error_reporting(0);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>
<body>


<?php
$x1=$_GET['x1']; $x2=$_GET['x2'];$n1=$_GET['n1'];$n2=$_GET['n2'];$s1=$_GET['pjc1']*$_GET['pjc1'];$s2=$_GET['pjc2']*$_GET['pjc2'];
function tf($x1,$x2,$n1,$n2,$s1,$s2){$t=($x1-$x2)/sqrt((($n1*$s1*$s1+$n2*$s2*$s2)/($n1+$n2-2)) * (1/$n1+1/$n2) );echo number_format($t,3, '.', '');}
if(!empty($x1)){
?>
<div>
结果：<?php  tf($x1,$x2,$n1,$n2,$s1,$s2);?>
</div>
<?php }else{?>
<form action="t.php" method="get">
平均数1:<input type="text"  name="x1" value="">
平均数2:<input type="text"  name="x2" value="">
样本容量1:<input type="text"  name="n1" value="">
样本容量2:<input type="text"  name="n2" value="">
标准差1:<input type="text"  name="pjc1" value="">
标准差2:<input type="text"  name="pjc2" value="">
<button>提交</button>
</form>
<?php }?>



</body>
</html>