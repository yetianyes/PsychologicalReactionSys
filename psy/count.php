<?php require_once('ht/conn.php');error_reporting(0);?>
<?php $jieguo=array('�޲�������ѡ��Ӧʱ','��������ѡ��Ӧʱ','�޲���ͼƬѡ��Ӧʱ','����ͼƬѡ��Ӧʱ','������ͼƬѡ��Ӧʱ'); $jieguo1=array('0','1','2','3','4');
function yetian($zjx) {$jieguo=array('�޲�������ѡ��Ӧʱ','��������ѡ��Ӧʱ','�޲���ͼƬѡ��Ӧʱ','����ͼƬѡ��Ӧʱ','������ͼƬѡ��Ӧʱ'); $jieguo1=array('0','1','2','3','4');
	?>
<table width="1300" border="0" cellspacing="10" style="margin:20px auto 20px auto;background: #f9f9f9;color:#37a;">
    <tr>
      <td width="300" style="border:0;">��������</td>
    <?php for($i=0;$i<5;$i++){?>
      <td width="378" style="border:0;"><?php echo $jieguo[$i];?></td>
    <?php }?> 
    </tr>
   <tr>
   <td width="300" >ƽ��<span style="font-size:12px;">(ƽ����)</span>��</td>
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
                  echo '��('.round(sqrt($pfh1/$row_num_sex[0]),2).')';
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
<title>�����������</title>
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
		echo 'ʵ��������:'.$row_user[0].'��&nbsp;&nbsp;&nbsp;��Ч������Ϊ:'.round($row_yx[0]/$row_yx1[0],2)*100 .'%&nbsp;&nbsp;&nbsp;&nbsp;����ֹʱ�䣺'.date("Y-m-d H:i:s").'��';
   ?>
   </div> 
   <a href="www.zizhushu.com/psy" target="_blank" style="margin: 0 auto;display: block;text-align: center;width: 200px;margin-top: 10px;">���ò��������� ����������һ�ѣ�</a>
 <table width="1300" border="0" cellspacing="10" style="margin:20px auto 20px auto;background: #f9f9f9;color:#37a;">
    <tr>
      <td width="300" style="border:0;">��������</td>
    <?php for($i=0;$i<5;$i++){?>
      <td width="378" style="border:0;"><?php echo $jieguo[$i];?></td>
    <?php }?> 
    </tr>
   <tr>
   <td width="300" >ƽ��<span style="font-size:12px;">(ƽ����)</span>��</td>
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
			echo '��('.round(sqrt($pfh/$row_word_s_num[0]),2).')';
		?>
	 </td>
  <?php }?> 
    </tr>
  </table>
 <!--��ƽ����-->
  <table width="1300" border="0" cellspacing="10" style="margin:20px auto 20px auto;background: #f9f9f9;color:#37a;">
    <tr>
      <td width="300" style="border:0;">�˿�ͳ�Ʊ���</td>
      <td width="300" style="border:0;">��Ŀ</td>
      <td width="300" style="border:0;">����</td>
      <td width="300" style="border:0;">ռ�����ٷֱ�</td>
     </tr>
     <tr>
      <td width="300" >�Ա�</td>
      <td width="300" >��<br />Ů</td>
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
      <td width="300" >�Ƿ������Ů</td>
      <td width="300" >��<br />��</td>
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
      <td width="300" >ѧ������</td>
      <td width="300" >�Ŀ�<br />���</td>
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
      <td width="300" >ѧ��</td>
      <td width="300" >Сѧ<br />����<br />����<br />����<br />�о���<br />��ʿ<br />ר��</td>
      
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
      <td width="300" >����</td>
      <td width="300" >����<br />ũ��</td>
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
      <td width="300" >��Ļ�ֱ���</td>
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
  <!--�˿�ͳ��-->
<div>����:</div><?php yetian('sex=1');?><div>Ů��:</div><?php yetian('sex=0');?><div>������Ů:</div><?php yetian('single=1');?><div>�Ƕ�����:</div><?php yetian('single=0');?><div>�Ŀ�:</div><?php yetian('study=0');?><div>���:</div><?php yetian('study=1');?>
<!--�����̶�--><div>Сѧ:</div><?php yetian('edu=0');?><div>����:</div><?php yetian('edu=1');?><div>����:</div><?php yetian('edu=2');?><div>ר��:</div><?php yetian('edu=6');?><div>����:</div><?php yetian('edu=3');?><div>�о���:</div><?php yetian('edu=4');?><div>��ʿ:</div><?php yetian('edu=5');?>
<div>���л���:</div><?php yetian('home=0');?> <div>ũ�廧��:</div><?php yetian('home=1');?> 
<?php 
	  $sql_user_fbl1= mysql_query("SELECT distinct `fbl` FROM `evabioyetian`.`psy_user` ");
	  while($row_user_fbl1= mysql_fetch_array($sql_user_fbl1))
	  {
	  echo '<div>��Ļ�ֱ���Ϊ��'.$row_user_fbl1[0].'</div>';
	  yetian("`fbl` like '%".$row_user_fbl1[0]."%'");
	  }
	  ?>
<?php require_once('moudle/bottom.php');?>