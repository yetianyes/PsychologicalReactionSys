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
</head>

<body>
<h1>测验结果</h1>
	  <?php 
		   $jieguo=array('无差异文字选择反应时:','差异文字选择反应时:','无差异图片选择反应时:','差异图片选择反应时:','文字与图片选择反应时:');
		   $jieguo1=array('word_s','word_c','pic_s','pic_c','w_p'); 
		   $jieguo2=array('wsid','wcid','psid','pcid','wpid');      
          $fbl = mysql_query("select fbl from psy_user where userid=$userid_array[0] LIMIT 0 , 1;");
		  $fbl_row=mysql_fetch_array($fbl);
		  $pj=array();
		   function psy_pj($array,$ia,$user_id,$dc_lv){
                if($dc_lv==0){
					$result5 = mysql_query("SELECT count(*) FROM `evabioyetian`.`average` where userid='$user_id';");
				    $row5= mysql_fetch_array($result5);
							if($row5[0]<=4){
							$result6 = mysql_query("INSERT INTO `evabioyetian`.`average` (`pjid`, `av_time`, `type`,`userid`) VALUES (NULL, 'null','$ia','$user_id');");
							}
							else{ echo '';}
					echo '数据无效';
				}
				else{ 
				$b0=explode(":",$array[0]);
				$b1=explode(":",$array[1]);
				$b2=explode(":",$array[2]);
				$b3=explode(":",$array[3]);
				$b4=explode(":",$array[4]);
				
				$i0=1;$i1=2;$i2=3;
				$min=($b0[$i0]+$b1[$i0]+$b2[$i0]+$b3[$i0]+$b4[$i0])/$dc_lv;
				$s=($b0[$i1]+$b1[$i1]+$b2[$i1]+$b3[$i1]+$b4[$i1])/$dc_lv;
				$ms=($b0[$i2]+$b1[$i2]+$b2[$i2]+$b3[$i2]+$b4[$i2])/$dc_lv;
				
				if(is_float($s)){
				$s_array=explode(".",$s);
                      if(strlen($s_array[1])<2){$s_array[1]=$s_array[1]*10;}
					  if( ($s_array[1]+$ms)>=100){
						  $s_array_miao=($s_array[0]+1);
						  $s_array_hm=round(($s_array[1]+$ms)-100);
					  }
					  else{
						  $s_array_miao=$s_array[0];
					      $s_array_hm=round(($s_array[1]+$ms));
					  }
				}
				else {
					  $s_array_miao=$s;
					  $s_array_hm=round($ms);
				}
                if(strlen($s_array_hm)<2){
					  $s_array_hm='0'.round($ms);
				}
				$go=$min.':'.$s_array_miao.'.'.$s_array_hm;
				$result = mysql_query("SELECT count(*) FROM `evabioyetian`.`average` where userid='$user_id';");
				$row = mysql_fetch_array($result);
							if($row[0]<=4){
							$result1 = mysql_query("INSERT INTO `evabioyetian`.`average` (`pjid`, `av_time`, `type`,`userid`) VALUES (NULL, '$go','$ia','$user_id');");
							}else{ 
								echo '';
							}
							
				echo $min.'分&nbsp;'.$s_array_miao.'.'.$s_array_hm.'秒';
		        }
	       }
      ?>  
<div class="pc" style="height:50px">您的屏幕分辨率为：<?php echo $fbl_row[0];?></div>
 
 <table width="987" border="0" cellspacing="10" style="margin:20px auto 20px auto;background: #f9f9f9;color:#37a;">
 <tr>
    <td width="176" >测试类型</td>
    <td width="61">第一次</td>
    <td width="61">第二次</td>
    <td width="72">第三次</td>
    <td width="88">第四次</td>
    <td width="61">第五次</td>
    <td width="61">正确</td>
    <td width="78">正确率</td>
    <td width="117">平均反应时</td>
  </tr>
  <?php
  for($i=0;$i<=4;$i++)
  {
  ?>
  <tr>
    <td width="176" style="text-align:left;"><?php echo  $jieguo[$i];?></td>
       <?php
	   $word_s = mysql_query("SELECT `time`,`dc` FROM  `$jieguo1[$i]` where userid='$userid_array[0]' ORDER BY  `$jieguo1[$i]`.`$jieguo2[$i]` DESC LIMIT 0,5;");
	    $ii=0;
	   while($ws_row=mysql_fetch_array($word_s))
		     { 
		?>
    <td width="61"><?php if($ws_row[1]==0) {echo  $ws_row[0];}else{echo '<span style="color:#ff9933;">'.$ws_row[0].'</span>';}?> </td>
       <?php   
			 if($ws_row[1]==0) { $pj[$ii]=$ws_row[0]; }else{$pj[$ii]='00:00:00:00';}
			 $ii++;
			 }
	   ?>
    <td width="61"><?php $dc = mysql_query("SELECT count(dc) FROM  `$jieguo1[$i]` where userid='$userid_array[0]' and dc='0';");
						  $dc_row=mysql_fetch_array($dc);
						  echo  $dc_row[0];
				   ?>
    </td>
    <td width="72"><?php  echo  $dc_row[0]/5*100 ."%";
				   ?>
    </td>
    <td width="88"><?php  psy_pj($pj,$i,$userid_array[0], $dc_row[0]);
				   ?>
    </td>
   </tr>
   <?php
  }
  ?>
  </table>
   <div class="pc" style="height:50px;margin-top:50px;">
   <?php 
    $jb = mysql_query("SELECT `av_time` FROM  `average`  where userid='$userid_array[0]' LIMIT 0,5;");
    $jb_arr=array();
	   while( $jb_row=mysql_fetch_array($jb)){
		   if($jb_row[0]=='null'){array_push($jb_arr,'0');}else{$jb_row_1=str_replace(':','',$jb_row[0]);array_push($jb_arr,$jb_row_1);}
	   }
		for($i=0;$i<=4;$i++)
		{
		  $x+= 	$jb_arr[$i];
		}
	?>
  <p>综合反应时间为：
  <span style="color:red;font-size:30px;"><?php echo  $x;?></span>&nbsp;&nbsp;秒<a target="_blank" href="http://www.zizhushu.com/psy/count.php">点击这里查看数据结果</a><br /><br /><br />
  感谢您的测验，  
  如果您想测量一下您的朋友，请将链接发送给Ta。</p>
  <a href="http://www.zizhushu.com/psy" style="margin-top:50px;">www.zizhushu.com/psy</a><br /><br />
<br />
<br />
<span style="font-size:12px;">有建议可以直接微信我呀：355285351</span>
</div>            
<?php require_once('moudle/bottom.php');?>