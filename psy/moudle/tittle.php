<?php 
error_reporting(0);
require_once('ht/conn.php');
$userid=$_COOKIE["psy"];
$userid_array=explode('|',$userid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.6, maximum-scale=0.6, minimum-scale=0.6" />
<title>交互界面测验</title>
<style>
	  body{font-family:Helvetica,Arial,sans-serif;margin:0;padding:0;overflow-x:hidden;}
	  .kuai{position:relative;display:inline-block;margin:10px;overflow:hidden;}
	  .pc{position:relative;margin:0 auto;text-align: center;width:500px;height:200px;}
	  <?php $px=array('0','-79','-159','-238');
	  for($i=0;$i<=3;$i++){ ?>.pce_<?=$i?>{width:50px;height:50px;background:url(images/e_50.png) no-repeat <?=$px[$i]?>px 0;}
	  <?php }?>
	   <?php $px_25=array('0','-39','-79','-119');
	  for($i=0;$i<=3;$i++){ ?>.pce_25<?=$i?>{width:25px;height:25px;background:url(images/e_25.png) no-repeat <?=$px_25[$i]?>px 0;}
	  <?php }?>
	  .pce_255{width:50px;height:50px;background:url(images/e_50.png) no-repeat 0px 0;}	
	  p{position:relative;float:left;margin:20px;height:auto;line-height:50px;}
	  button{width: 50px;line-height:normal;}
	  .button{text-align:center;position:relative;display: block;width: 100%;}
	  h1{margin:0 auto;width:100%;text-align:center;border-bottom: 1px solid #ccc;padding:20px 0 20px 0;background: #edf4ed;color: #072;margin-bottom:50px;}	
	  td{text-align:center;}
	  h3{color:#072;}
	   a:link{color:#37a;text-decoration: none;}
	  a:visited{color:#37a;text-decoration: none;}
	  a:hover{color:white;background:#37a;text-decoration: none;}
	  a:active{background:#ff9933;color:white;}
</style>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script language="javascript">
 var se, m = 0, h = 0, s = 0; ms=0;
    function second() {
		if (ms > 0 && (ms % 100) == 0) { s += 1; ms = 0; }
        if (s > 0 && (s % 60) == 0) { m += 1; s = 0; }
        if (m > 0 && (m % 60) == 0) { h += 1; m = 0; }
        t = (h <= 9 ? "0" + h : h) + ":" + (m <= 9 ? "0" + m : m) + ":" + (s <= 9 ? "0" + s : s)+ ":" +(ms <= 9 ? "0" + ms : ms); 
        ms += 1;
		$("#js_time").attr('value',t);
    }
	
	  $(document).ready(
		function startclock() { se = setInterval("second()",10); }
	  );
	
	  function pauseclock() { clearInterval(se); }
	  function stopclock() { clearInterval(se); m = h = s = ms = 0; }
	
	$(document).ready(function(){
		
	  $("button").click(function(){
		   var $time=$("#js_time").val();
		   var $dc=$(this).attr("action-data");
		   $.ajax({
				 type: "GET",
				 url: "ht/insert.php",
				 data: {time:$time,dc:$dc},
				 success: function(result){
					 if(result=='no'){alert('系统错误');}else{window.location.href=result;}
				 }
		   })//ajax		
	  });
	  
	  
    });	
	
</script>


</head>

<body>
<input type="text" name="js_time" id="js_time"  style=" width:200px; border:0px;font-size:20px;background-color:RGB(72,254,3);display:none;" value="00:00:00:00">
<h1>找上上</h1> 