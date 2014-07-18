<?php require_once('moudle/tittle.php');?>
<div class="pc" style="width:700px;height:500px;">                 
<?php
$a=array('上','下','左','右');
$b=array('A','B','C','D');
$c=array('下','左','右');
$num=array('0','1','2');
$num_1=array('0','1','2','3'); 
shuffle($num_1);
for($i=0;$i<=3;$i++){
?>
<p> 
		<?php 
              shuffle($a);
              shuffle($num);
              foreach($a as $key=>$aa){
                if($i!=$num_1[0]){$bb=str_replace("上",$c[$num[0]],$aa);} else{$bb=$aa;}								
         ?>
                <span class="pce_<?php switch ($bb){
                                case '上':
                                  echo "0";
                                  break;
                                case '下':
                                  echo "1";
                                  break;
                                case '左':
                                  echo "2";
                                  break;
                                case '右':
                                  echo "3";
                                  break;
                            }?> kuai"></span> 
                 <?php } ?>
                 <span class="button"><button action-data="<?php if($i!=$num_1[0]){echo '1';} else{echo '0';}?>">选择</button></span>
</p>
		   <?php } ?>  
</div>
<?php require_once('moudle/bottom.php');?>
