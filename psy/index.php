<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=0.8, maximum-scale=0.8, minimum-scale=0.8" />
<title>交互界面测验</title>
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
<div style="background: #edf4ed;text-align: center;color:#072;font-size:12px;border-bottom: 1px solid #ccc;"><h1 style="color:#072;">找上上——心理反应时测验游戏说明</h1>本测验游戏是基于实验心理学反应时测量方法理论（郭秀艳，实验心理学[M]，人民教育出版社，2009-6-1 ）做出的心理学实验游戏，是关于用户在图像与文字在交互界面中的组合与用户心理认知的相关研究的应用进行研究。</div>

<h3 style="color:red;text-align:center;">手机用户，请设置成横屏，以便体验更好的游戏效果。</h3>  

<div class="pc" style="color:#37a;background:#f4f4f4;text-align:center;font-size:12px;line-height: 55px;padding-top: 20px;margin-top: 50px;width:400px;">用您最快的速度找到‘<span style="font-size:50px;">上</span>’（文字）或<span style="position: relative;display: inline-block;margin: 10px;overflow: hidden;width: 50px;height: 50px;background: url(images/e_50.png) no-repeat 0px 0;margin-bottom: 0px;"></span>（图片），并点击所相对应的 <span class="button" style="display:initial;"><img src="/psy/images/xz.png" width="50" height="22" /></span>按钮。<br />
填写下列全部资料后，点击开始游戏。    
</div>       
 <div class="pc" style="width:300px;height:200px;padding-left: 85px;color:#37a;"> 
            <form action="ht/user_insert.php" method="get">   
                    <p>1、性别:
                    <input type="radio" name="sex" value="1" />男
                    <input type="radio" name="sex" value="0" />女
                    </p>
                    <p>2、教育程度:
                    <select name="edu">
                      <option value="0">小学</option>
                      <option value="1">初中</option>
                      <option value="2">高中</option>
                      <option value="6">专科</option>
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
                    <button onClick="add()" >开始游戏</button> <input id="fbl" name="fbl" type="hidden" value="" />
               </form>
</div>
</body>
</html>