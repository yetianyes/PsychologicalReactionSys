<?php require_once('moudle/tittle.php');?>
<div class="pc" style="width:550px;" >    
           <?php
            $a=array('��','��','��','��');
			$b=array('A','B','C','D');
			$c=array('��','��','��');
			$num=array('0','1','2');
			$num_1=array('0','1','2','3');
			?>

           <?php 
			shuffle($num_1);
			for($i=0;$i<=3;$i++){
				?>
               <p style="line-height:130px;width:230px;"> 
              <?php 
				  shuffle($a);
				  shuffle($num);
				  foreach($a as $key=>$aa){
					if($i!=$num_1[0]){$bb=str_replace("��",$c[$num[0]],$aa);} else{$bb=$aa;}								
			?>
                    <span class="pce_25<?php switch ($bb){
									case '��':
									  echo "5";
									  break;
									case '��':
									  echo "1";
									  break;
									case '��':
									  echo "2";
									  break;
									case '��':
									  echo "3";
									  break;
								}?> kuai"></span> 
           <?php } ?>
            <span class="button"><button action-data="<?php if($i!=$num_1[0]){echo '1';} else{echo '0';}?>">ѡ��</button></span>
            </p>
			<?php } ?>
</div>

<?php require_once('moudle/bottom.php');?>