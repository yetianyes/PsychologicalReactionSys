<?php  require_once('conn.php');
$userid=$_COOKIE["psy"];
$userid_array=explode('|',$userid); 
$time=mysql_real_escape_string(htmlspecialchars($_GET["time"], ENT_QUOTES));
$dc=mysql_real_escape_string(htmlspecialchars($_GET["dc"], ENT_QUOTES));
if($time!=''and $dc!=''){
		
	if($userid_array[1]<=4)
	{     
		  switch ($userid_array[1])
					{
					case 0:
					  $type=array('word_s','wsid');//$word_s
					  $type_href='word_c';
					  break;
					case 1:
					  $type=array('word_c','wcid');//$word_c
					  $type_href='pic_s';
					  break;
					case 2:
					  $type=array('pic_s','psid');//$pic_s
					  $type_href='pic_c';
					  break;
					case 3:
					  $type=array('pic_c','pcid');//$pic_c
					  $type_href='w_p';
					  break;
					case 4:
					  $type=array('w_p','wpid');//$w_p
					  $type_href='end';
					  break;
					 }
		  
		  if($userid_array[2]<=4)
		  {
			    if($userid_array[2]==4)
				{
				$result = mysql_query("INSERT INTO `evabioyetian`.`$type[0]` (`$type[1]`, `time`, `userid`,`dc`) VALUES (NULL, '$time','$userid_array[0]','$dc');");
				setcookie("psy",$userid_array[0].'|'.($userid_array[1]+1).'|'.'0', time()+3600*24*365,'/');
		        echo $type_href.'.php';
				
				}
				else{
				$result = mysql_query("INSERT INTO `evabioyetian`.`$type[0]` (`$type[1]`, `time`, `userid`,`dc`) VALUES (NULL, '$time','$userid_array[0]','$dc');");
				setcookie("psy",$userid_array[0].'|'.$userid_array[1].'|'.($userid_array[2]+1), time()+3600*24*365,'/');
				echo $type[0].'.php';
				
				}
		  }
		  else
		  {
		  setcookie("psy",$userid_array[0].'|'.($userid_array[1]+1).'|'.'0', time()+3600*24*365,'/');
		  echo $type_href.'.php';
		  }  
	}
	else
	{
	  echo 'end.php';	
	}

}
else
{echo 'no';}










?>