<?php require_once('moudle/tittle.php'); ?>
<div class="pc" style="width:600px;height:500px;">        
<?php
$a=array('��','��','��','��');
$b=array('A','B','C','D');
$c=array('��','��','��');
$num=array('0','1','2');
$num_1=array('0','1','2','3');
shuffle($num_1);
			for($i=0;$i<=3;$i++){
?>
               <p style="height:130px;line-height:130px;"> 
					  <?php 
                          shuffle($a);
                          shuffle($num);
                          foreach($a as $key=>$aa){
                            if($i!=$num_1[0]){$bb=str_replace("��",$c[$num[0]],$aa);} else{$bb=$aa;}								
                    ?>
                            <?php  if ($bb=='��'){ 
										echo '<span class="pce_0 kuai" style="margin-bottom: -5px;"></span>';
									}else {
										echo $bb;
									}?>
                   <?php } ?>
                    <span class="button" style="margin-top: -30px;"><button action-data="<?php if($i!=$num_1[0]){echo '1';} else{echo '0';}?>">ѡ��</button></span>
               </p>
		   <?php } ?>
</div>
<?php require_once('moudle/bottom.php');?>