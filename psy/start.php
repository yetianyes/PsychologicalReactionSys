<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.8, maximum-scale=0.8, minimum-scale=0.8" />
<title>�����������</title>
<style>
body{font-family:arial;margin:0;padding:0;overflow-x:hidden;}
button{margin: 20px 0 0 95px;} 	
.pc{position:relative;margin:0 auto;text-align:left;width:300px;height:200px;padding-left: 85px;}	
 h1{margin:0;width:100%;text-align:center;border-bottom: 1px solid #ccc;padding:20px 0 20px 0;background: #edf4ed;color: #072;}	
</style>
<script type="text/javascript">
function add(){
var fbl=screen.width + "*" + screen.height;
document.getElementById("fbl").value=fbl;
}
</script>
</head>
<body>
<form action="ht/user_insert.php" method="get">  
            <h1>�������ʵ��</h1>
            <div class="pc">   
                    <p>1���Ա�:
                    <input type="radio" name="sex" value="1" />��
                    <input type="radio" name="sex" value="0" />Ů
                    </p>
                    <p>2�������̶�:
                    <select name="edu">
                      <option value="0">Сѧ</option>
                      <option value="1">����</option>
                      <option value="2">����</option>
                      <option value="3">����</option>
                      <option value="4">�о���</option>
                      <option value="5">��ʿ</option>
                    </select>
                    </p>
                    <p>3���Ƿ������Ů��
                    <input type="radio" name="single" value="1" />��
                    <input type="radio" name="single" value="0" />����
                    </p>
                    <p>4���Ƿ���ũ�廧�ڣ�
                    <input type="radio" name="home" value="1" />��
                    <input type="radio" name="home" value="0" />����
                    </p>
                    <p>5��ѧ������ 
                    <input type="radio" name="study" value="1" />���
                    <input type="radio" name="study" value="0" />�Ŀ�
                    </p>
                    <button onClick="add()" >�ύ</button> <input id="fbl" name="fbl" type="hidden" value="" />
              </div>     
</form>
</body>
</html>