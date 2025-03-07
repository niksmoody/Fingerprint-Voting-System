<!DOCTYPE html>
<html>
   <head>
      <title>Redirection</title>
      <meta http-equiv = "refresh" content = "5; url = Admin_login.php" />
      <style>
.container{
  margin: auto;
  position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%,-50%);
}

p{
  text-align:Center;
  font-family: 'Fredoka One', cursive;
  color:#3498db;
  font-size:30px;
  padding:10px;
}

.face{
  width:150px;
  height:150px;
  border: 9px solid #bdc3c7;
  border-radius:50%;
  animation: face 7s infinite;
  animation-delay:2s;
  position:relative;
  z-index:9999;
}


.mouth{
  height:10px;
  width:35px;
  margin: 0 auto;
  margin-top: 15px;
  background-color:#bdc3c7;
  animation: mouth 7s infinite;
  animation-delay:2s;
}

.tear{
  position:absolute;
  background-color: #3498db;
  height:0px;
  width:45px;
  top:62px;
  left:29px;
  border-bottom-left-radius:50%;
  animation: tear 7s infinite;
  animation-delay:2s;
}

.tear2{
  position:absolute;
  background-color: #3498db;
  height:0px;
  width:45px;
  top:62px;
  left:98px;
  border-bottom-right-radius:50%;
  animation: tear 7s infinite;
  animation-delay:2s;
}

.eye{
  height:10px;
  width:45px;
  background-color:#bdc3c7;
  display:inline-block;
  margin-left:20px;
  margin-top:20px;
  animation: cry 7s infinite;
  animation-delay:2s;
}

.eyebrow{
  width:30px;
  font-size:40px;
  font-weight:bold;
  color:#bdc3c7;
  display:inline-block;
  margin-left:27px;
  margin-top: 10px;
  opacity:0;
  animation: eyebrow 7s infinite;
  animation-delay:2s;
}

.eyebrow:nth-child(1){
  transform:rotate(-20deg);
}

.eyebrow:nth-child(2){
  transform:rotate(20deg);
}

@keyframes mouth{
  10%{height:30px;width:25px; border:6px solid black;border-radius:50%;margin-top:-8px;}
  50%{height:30px;width:25px; border:6px solid black;border-radius:50%;margin-top:-8px;}
  60%{height:10px;width:35px;border-radius:0%;border:none;margin-top:15px;}
}

@keyframes cry{
  10%{transform:translateY(-34px);background-color:black;}
  50%{transform:translateY(-34px);background-color:black;}
  60%{background-color:#bdc3c7;transform:translateY(0px);}
}

@keyframes eyebrow{
  10%{opacity:1;color:black;}
  50%{opacity:1;color:black;}
  60%{opacity:0;}
}

@keyframes face{
  10%{border-color:black;}
  50%{border-color:black;}
  60%{border-color:#bdc3c7;}
}

@keyframes tear{
  10%{height:96px;}
  50%{height:96px;}
  52%{height:0px;}
}
</style>

</head>
   <body>
      <p style='background:black; color:white; padding: 20px; width:1500px;'>
          Sorry! This page is under construction...</p>
      <div class='container'>
      <div class='tear'></div>
      <div class='tear2'></div>
      <div class='face'>
      <div class='eyebrow'>︶</div>
      <div class='eyebrow'>︶</div>
      <div class='eye'></div>
      <div class='eye'></div>
      <div class='mouth'></div>
  </div>
</div>
   </body>
</html>