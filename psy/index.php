<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.8, maximum-scale=0.8, minimum-scale=0.8" />
<title>�����������</title>
<style>
body{font-family:arial;margin:0;padding:0;overflow-x:hidden;}
button{margin: 20px 0 0 70px;} 	
.pc{position:relative;margin:0 auto;text-align:left;width:900px;height:200px;font-size:16px;}	
 h1{margin:0;width:100%;text-align:center;padding:20px 0 20px 0;background: #edf4ed;color: #072;}	
</style>
<script type="text/javascript">
function add(){
var fbl=screen.width + "*" + screen.height;
document.getElementById("fbl").value=fbl;
}
</script>
</head>
<body>
<div style="background: #edf4ed;text-align: center;color:#072;font-size:12px;border-bottom: 1px solid #ccc;"><h1 style="color:#072;">�����ϡ�������Ӧʱ������Ϸ˵��</h1>��������Ϸ�ǻ���ʵ������ѧ��Ӧʱ�����������ۣ������ޣ�ʵ������ѧ[M]��������������磬2009-6-1 ������������ѧʵ����Ϸ���ǹ����û���ͼ���������ڽ��������е�������û�������֪������о���Ӧ�ý����о���</div>

<h3 style="color:red;text-align:center;">�ֻ��û��������óɺ������Ա�������õ���ϷЧ����</h3>  

<div class="pc" style="color:#37a;background:#f4f4f4;text-align:center;font-size:12px;line-height: 55px;padding-top: 20px;margin-top: 50px;width:400px;">���������ٶ��ҵ���<span style="font-size:50px;">��</span>�������֣���<span style="position: relative;display: inline-block;margin: 10px;overflow: hidden;width: 50px;height: 50px;background: url(images/e_50.png) no-repeat 0px 0;margin-bottom: 0px;"></span>��ͼƬ��������������Ӧ�� <span class="button" style="display:initial;"><img src="/psy/images/xz.png" width="50" height="22" /></span>��ť��<br />
��д����ȫ�����Ϻ󣬵����ʼ��Ϸ��    
</div>       
 <div class="pc" style="width:300px;height:200px;padding-left: 85px;color:#37a;"> 
            <form action="ht/user_insert.php" method="get">   
                    <p>1���Ա�:
                    <input type="radio" name="sex" value="1" />��
                    <input type="radio" name="sex" value="0" />Ů
                    </p>
                    <p>2�������̶�:
                    <select name="edu">
                      <option value="0">Сѧ</option>
                      <option value="1">����</option>
                      <option value="2">����</option>
                      <option value="6">ר��</option>
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
                    <button onClick="add()" >��ʼ��Ϸ</button> <input id="fbl" name="fbl" type="hidden" value="" />
               </form>
</div>
</body>
</html>