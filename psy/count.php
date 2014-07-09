<?php require_once('ht/conn.php');error_reporting(0);?>
<?php $jieguo=array('无差异文字选择反应时','差异文字选择反应时','无差异图片选择反应时','差异图片选择反应时','文字与图片选择反应时'); $jieguo1=array('0','1','2','3','4');
function yetian($zjx) {$jieguo=array('无差异文字选择反应时','差异文字选择反应时','无差异图片选择反应时','差异图片选择反应时','文字与图片选择反应时'); $jieguo1=array('0','1','2','3','4');
	?>
<table width="1300" border="0" cellspacing="10" style="margin:20px auto 20px auto;background: #f9f9f9;color:#37a;">
    <tr>
      <td width="300" style="border:0;">测试类型</td>
    <?php for($i=0;$i<5;$i++){?>
      <td width="378" style="border:0;"><?php echo $jieguo[$i];?></td>
    <?php }?> 
    </tr>
   <tr>
   <td width="300" >平均<span style="font-size:12px;">(平均差)</span>：</td>
   <?php for($ii=0;$ii<5;$ii++){$av_pj=0;$av_he=0;$arr1=array();$pfh1=0;?>
    <td width="378">
	 <?php $av_he=0;$arr1=array();
            $sql_num_sex=mysql_query("SELECT count(*) FROM `evabioyetian`.`average` where `type`='$jieguo1[$ii]' and `av_time` not like '%null%' and userid in (select `userid` from `evabioyetian`.`psy_user` where $zjx)");
            $row_num_sex= mysql_fetch_array($sql_num_sex);
            $sql_av_sex= mysql_query("SELECT `av_time` FROM `evabioyetian`.`average` where `type`='$jieguo1[$ii]' and `av_time` not like '%null%' and userid in (select `userid` from `evabioyetian`.`psy_user` where $zjx)");
            while($row_av_sex= mysql_fetch_array($sql_av_sex))
            {
                  $av_arr=explode(':',$row_av_sex[0]);
                  $av=$av_arr[1];
                  $av_he+=$av;
                  array_push($arr1,$av);
            }
            echo $av_pj=round($av_he/$row_num_sex[0],2);
                  $if1=0;
                  while($arr1[$if1])
                  {   
                      $pfh1+= ($av_pj-$arr1[$if1])*($av_pj-$arr1[$if1]);
                      $if1++;
                  }
                  echo '秒('.round(sqrt($pfh1/$row_num_sex[0]),2).')';
      ?>
	</td>
  <?php }?> 
    </tr>
  </table>
<?php }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.8, maximum-scale=0.8, minimum-scale=0.8" />
<title>交互界面测验</title>
<style>
body{font-family:Helvetica,Arial,sans-serif;margin:0;padding:0;overflow-x:hidden;font-size:12px;}
td{text-align:center;border-top: 1px solid #E7E7E7;;}
div{text-align:center;color:#072;font-size:12px;margin-top:20px;}
      a:link{color:red;text-decoration: none;}
	  a:visited{color:red;text-decoration: none;}
	  a:hover{color:white;background:red;text-decoration: none;}
	  a:active{background:red;color:white;}
</style>
</head>
<body> 
   <div>
  <?php 
        $sql_user= mysql_query("SELECT count(*) FROM `evabioyetian`.`psy_user`;");
		$row_user= mysql_fetch_array($sql_user);
		$sql_yx=mysql_query("SELECT count(*) FROM `evabioyetian`.`average` where `av_time` not like '%null%'");
		$row_yx= mysql_fetch_array($sql_yx); 
		$sql_yx1=mysql_query("SELECT count(*) FROM `evabioyetian`.`average`");
		$row_yx1= mysql_fetch_array($sql_yx1); 
		echo '实验总人数:'.$row_user[0].'人&nbsp;&nbsp;&nbsp;有效数据率为:'.round($row_yx[0]/$row_yx1[0],2)*100 .'%&nbsp;&nbsp;&nbsp;&nbsp;（截止时间：'.date("Y-m-d H:i:s").'）';
   ?>
   </div> 
   <a href="www.zizhushu.com/psy" target="_blank" style="margin: 0 auto;display: block;text-align: center;width: 200px;margin-top: 10px;">觉得不服气？！ 点这里再来一把！</a>
 <table width="1300" border="0" cellspacing="10" style="margin:20px auto 20px auto;background: #f9f9f9;color:#37a;">
    <tr>
      <td width="300" style="border:0;">测试类型</td>
    <?php for($i=0;$i<5;$i++){?>
      <td width="378" style="border:0;"><?php echo $jieguo[$i];?></td>
    <?php }?> 
    </tr>
   <tr>
   <td width="300" >平均<span style="font-size:12px;">(平均差)</span>：</td>
   <?php for($ii=0;$ii<5;$ii++){$word_s_pj=0;$word_s_he=0;$arr=array();$pfh=0;?>
    <td width="378">
    <?php 
		$sql_word_s_num=mysql_query("SELECT count(av_time) FROM `evabioyetian`.`average` where `type`='$jieguo1[$ii]' and `av_time` not like '%null%';");
		$row_word_s_num= mysql_fetch_array($sql_word_s_num);
		$sql_word_s= mysql_query("SELECT `av_time` FROM `evabioyetian`.`average` where `type`='$jieguo1[$ii]' and `av_time` not like '%null%';");
		while($row_word_s= mysql_fetch_array($sql_word_s))
		{	
			$word_s_arr=explode(':',$row_word_s[0]);
			$word_s=$word_s_arr[1];
			$word_s_he+=$word_s;
			array_push($arr,$word_s);
		}
		echo $word_s_pj=round($word_s_he/$row_word_s_num[0],2);
			$if=0;
			while($arr[$if])
			{   
				$pfh+= ($word_s_pj-$arr[$if])*($word_s_pj-$arr[$if]);
				$if++;
			}
			echo '秒('.round(sqrt($pfh/$row_word_s_num[0]),2).')';
		?>
	 </td>
  <?php }?> 
    </tr>
  </table>
 <!--总平均差-->
  <table width="1300" border="0" cellspacing="10" style="margin:20px auto 20px auto;background: #f9f9f9;color:#37a;">
    <tr>
      <td width="300" style="border:0;">人口统计变量</td>
      <td width="300" style="border:0;">项目</td>
      <td width="300" style="border:0;">人数</td>
      <td width="300" style="border:0;">占人数百分比</td>
     </tr>
     <tr>
      <td width="300" >性别</td>
      <td width="300" >男<br />女</td>
	  <?php
         $sql_user_sex= mysql_query("SELECT count(*) FROM `evabioyetian`.`psy_user` where sex=1;");
         $row_user_sex= mysql_fetch_array($sql_user_sex);
       ?>
      <td width="300" ><?php echo $row_user_sex[0];?><br /><?php echo $row_user[0]-$row_user_sex[0];?></td>
      <td width="300" > 
	   <?php 
         echo round($row_user_sex[0]/$row_user[0],2)*100 . '%<br />'.round($row_user[0]-$row_user_sex[0],2)/$row_user[0]*100 .'%';
       ?>    
      </td>
     </tr>
     <tr>
      <td width="300" >是否独生子女</td>
      <td width="300" >是<br />否</td>
	   <?php
         $sql_user_s= mysql_query("SELECT count(*) FROM `evabioyetian`.`psy_user` where single=1;");
         $row_user_s= mysql_fetch_array($sql_user_s);
       ?>
      <td width="300" ><?php echo $row_user_s[0];?><br /><?php echo $row_user[0]-$row_user_s[0];?></td>
      <td width="300" >
      <?php
	  echo round($row_user_s[0]/$row_user[0],2)*100 .'%<br />'.round(($row_user[0]-$row_user_s[0])/$row_user[0],2)*100 .'%';
	  ?>
      </td>
     </tr>
     <tr>
      <td width="300" >学科类型</td>
      <td width="300" >文科<br />理科</td>
       <?php
         $sql_user_e= mysql_query("SELECT count(*) FROM `evabioyetian`.`psy_user` where study=0;");
         $row_user_e= mysql_fetch_array($sql_user_e);
       ?>
      <td width="300" ><?php echo $row_user_e[0];?><br /><?php echo $row_user[0]-$row_user_e[0];?></td>
      <td width="300" >
      <?php
	  echo round($row_user_e[0]/$row_user[0],2)*100 .'%<br />'.round(($row_user[0]-$row_user_e[0])/$row_user[0],2)*100 .'%';
	  ?>
      </td>
     </tr>
     <tr>
      <td width="300" >学历</td>
      <td width="300" >小学<br />初中<br />高中<br />本科<br />研究生<br />博士<br />专科</td>
      
      <td width="300" >
      <?php
	  for($a=0;$a<=6;$a++)
	  {
		  $ss= mysql_query("SELECT count(*) FROM `evabioyetian`.`psy_user` where edu='$a';");
		  $aa= mysql_fetch_array($ss);
		  echo $aa[0].'<br />'; 
	  }
	  ?>
      </td>
      <td width="300" >
      <?php
	  for($a=0;$a<=6;$a++)
	  {
		  $ss= mysql_query("SELECT count(*) FROM `evabioyetian`.`psy_user` where edu='$a';");
		  $aa= mysql_fetch_array($ss);
		  echo round($aa[0]/$row_user[0],2)*100 .'%<br />'; 
	  }
	  ?>
      </td>
     </tr>
     <tr>
      <td width="300" >户口</td>
      <td width="300" >城镇<br />农村</td>
      <?php
         $sql_user_n= mysql_query("SELECT count(*) FROM `evabioyetian`.`psy_user` where home=0;");
         $row_user_n= mysql_fetch_array($sql_user_n);
       ?>
      <td width="300" ><?php echo $row_user_n[0];?><br /><?php echo $row_user[0]-$row_user_n[0];?></td>
      <td width="300" >
      <?php
	  echo round($row_user_n[0]/$row_user[0],2)*100 .'%<br />'.round(($row_user[0]-$row_user_n[0])/$row_user[0],2)*100 .'%';
	  ?>
      </td>
     </tr>
     <tr>
      <td width="300" >屏幕分辨率</td>
      <td width="300" >
      <?php 
	  $sql_user_fbl= mysql_query("SELECT distinct `fbl` FROM `evabioyetian`.`psy_user` ");
	  while($row_user_fbl= mysql_fetch_array($sql_user_fbl))
	  {
	  echo $row_user_fbl[0].'<br />';
	  }
	  ?>
      </td>
      <td width="300" >
	  <?php 
	  $sql_user_fbl= mysql_query("SELECT distinct `fbl` FROM `evabioyetian`.`psy_user` ");
	  while($row_user_fbl= mysql_fetch_array($sql_user_fbl))
	  {
	  $sql=mysql_query("SELECT count(*) FROM `evabioyetian`.`psy_user` where `fbl` like '%$row_user_fbl[0]%'");
      $row=mysql_fetch_array($sql);
      echo $row[0].'<br />';
	  }
	  ?>
      </td>
      <td width="300" >
       <?php 
	  $sql_user_fbl= mysql_query("SELECT distinct `fbl` FROM `evabioyetian`.`psy_user` ");
	  while($row_user_fbl= mysql_fetch_array($sql_user_fbl))
	  {
	  $sql=mysql_query("SELECT count(*) FROM `evabioyetian`.`psy_user` where `fbl` like '%$row_user_fbl[0]%'");
      $row=mysql_fetch_array($sql);
      echo round($row[0]/$row_user[0],2)*100 .'%<br />';
	  }
	  ?>
      </td>
     </tr>
  </table>
  <!--人口统计-->
<div>男性:</div><?php yetian('sex=1');?><div>女性:</div><?php yetian('sex=0');?><div>独生子女:</div><?php yetian('single=1');?><div>非独生子:</div><?php yetian('single=0');?><div>文科:</div><?php yetian('study=0');?><div>理科:</div><?php yetian('study=1');?>
<!--教育程度--><div>小学:</div><?php yetian('edu=0');?><div>初中:</div><?php yetian('edu=1');?><div>高中:</div><?php yetian('edu=2');?><div>专科:</div><?php yetian('edu=6');?><div>本科:</div><?php yetian('edu=3');?><div>研究生:</div><?php yetian('edu=4');?><div>博士:</div><?php yetian('edu=5');?>
<div>城市户口:</div><?php yetian('home=0');?> <div>农村户口:</div><?php yetian('home=1');?> 
<?php 
	  $sql_user_fbl1= mysql_query("SELECT distinct `fbl` FROM `evabioyetian`.`psy_user` ");
	  while($row_user_fbl1= mysql_fetch_array($sql_user_fbl1))
	  {
	  echo '<div>屏幕分辨率为：'.$row_user_fbl1[0].'</div>';
	  yetian("`fbl` like '%".$row_user_fbl1[0]."%'");
	  }
	  ?>
<?php require_once('moudle/bottom.php');?>