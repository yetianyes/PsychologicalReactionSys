<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.8, maximum-scale=0.8, minimum-scale=0.8" />
<title>交互界面测验</title>
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
            <h1>交互设计实验</h1>
            <div class="pc">   
                    <p>1、性别:
                    <input type="radio" name="sex" value="1" />男
                    <input type="radio" name="sex" value="0" />女
                    </p>
                    <p>2、教育程度:
                    <select name="edu">
                      <option value="0">小学</option>
                      <option value="1">初中</option>
                      <option value="2">高中</option>
                      <option value="3">本科</option>
                      <option value="4">研究生</option>
                      <option value="5">博士</option>
                    </select>
                    </p>
                    <p>3、是否独生子女：
                    <input type="radio" name="single" value="1" />是
                    <input type="radio" name="single" value="0" />不是
                    </p>
                    <p>4、是否是农村户口：
                    <input type="radio" name="home" value="1" />是
                    <input type="radio" name="home" value="0" />不是
                    </p>
                    <p>5、学科性质 
                    <input type="radio" name="study" value="1" />理科
                    <input type="radio" name="study" value="0" />文科
                    </p>
                    <button onClick="add()" >提交</button> <input id="fbl" name="fbl" type="hidden" value="" />
              </div>     
</form>
</body>
</html>