<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
<style>
body{
padding:0px;
margin:0px;
}
.div1 {
 position: fixed;
  top:0px;
  right: 0;
  height: 40px;
  width: 100%;
}

.div2 {
background-image: url("https://1stwebdesigner.com/wp-content/uploads/2019/07/css-background-effects-thumb.jpg");
padding:0px;
height:280px;
width: 100%;
}

p.ex1 {

  margin-top:11px;
  margin-left: 400px;
  color:#1B6EBD;
 
}

div.absolute {
margin-right:200px;
  position: absolute;
  top: 0px;
  right: 0;
  width: 250px;
  height: 100px;
  font-size:15px;
}

.icon-bar {
  position: fixed;
  top: 2%;
  right: 25%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
.icon-bar a {
  display: block;
  text-align: center;
  padding: 10px;
  transition: all 0.3s ease;
  color: #1B6EBD;
  font-size: 20px;
  opacity: 0.7;
  float: left;
  margin-left:10px;
}
.icon-bar a:hover {
  opacity: 1;
}

.tablink {
  opacity: 1;
 position: relative;
 font-size:15px;
 background-color:transparent;
 color:white;
 border:none;
    float:right;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    width: 2%;
     margin-right:30px;
     margin-top: 50px;
     margin-left:30px;
   
}


div.absolute1 {
  position: absolute;
  top: 50px;
  left: 400px;
  
  width: 250px;
  height: 100px;
  font-size:30px;
}

div.absolute2 {
  position: absolute;
  top: 200px;
  left: 400px;
  color:white;
  width: 250px;
  height: 100px;
  font-size:30px;
}
.meniu{
position:relative;
right:500px;

}

.div3{
margin-top:20px;
 margin-left:400px;
 margin-right:700px;
  height: 800px;
}
.p1{
font-size:30px;
}
.poza1{
margin-top:-300px;
 margin-left:300px;
  height: 100px;
}
img {
  
  margin-top:-125px;
  margin-left:480px;
  width: 300px;
}
p{
margin-right:350px;
}
.p2{
margin-top:-80px;
margin-right:350px;
}
.p3{
margin-top:20px;
font-size:20px;
}
.logo{
position:relative;
top:70px;
right:490px;
}
.p4{
margin: 0;
}
.div4{
margin-top:-800px;
 margin-left:1220px;
 margin-right:300px;
  height: 400px;
}
.p5{

margin_top:20px;
padding:20px;
margin:0px;
margin-left:10px;
}
.p6{
margin: 5px;
margin-left:30px;
}
.div5{
margin-left: 400px;
margin-right: 300px;
margin-top: 650px;
height: 300px;
}
.div6 {
 position: relative;
 margin-top:50px;
 bottom: 0;
width: 100%;
height: 50px;
color:white;
}
.p7{
margin-left:1300px;
padding:10px;
}
.p8{
margin-left:1600px;
margin-top:300px;
}
</style>

<div class="div1" style="background-color:#20424E">
<p class="ex1">Toll Free : (002) 124 2548 </p>
  <div class="absolute">
  <div class="icon-bar">
  <a href="https://twitter.com" class="twitter"><i class="fa fa-twitter"></i></a> 
  <a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a> 
  <a href="https://www.instagram.com" class="instagram"><i class="fa fa-instagram"></i></a> 
  <a href="https://github.com/" class="github"><i class="fa fa-github"></i></a> 
  <a href="https://www.youtube.com/cocacola" class="youtube"><i class="fa fa-youtube"></i></a> 
  </div>
</div>
</div>

<div class="div2">
<div class="meniu">
<button class="tablink" onclick="openPage('News', this,)" >CONTACT</button>
<button class="tablink" onclick="openPage('News', this,)" >PAGES</button>
<button class="tablink" onclick="openPage('News', this,)" >PROJECTS</button>
<button class="tablink" onclick="openPage('News', this,)" >PRICES</button>
<button class="tablink" onclick="openPage('News', this,)" >SERVICES</button>
<button class="tablink" onclick="openPage('About', this,)">ABOUT</button>
<button class="tablink" onclick="openPage('Login', this,)">HOME</button>
</div>

 <div class="absolute1">
  <img src="https://webthemez.com/demo/rider-free-multi-purpose-bootstrap-template/assets/images/logo.png" class="logo">
 </div>
 <div class="absolute2">About us</div>
 </div>

<div class="div3" style="background-color:white">
  <p class="p1"><strong>Our Company</strong></p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.<img src="https://webthemez.com/demo/rider-free-multi-purpose-bootstrap-template/assets/images/about.jpg">
<div class="p2">Consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.
</div>
  <p class="p1"><strong>Our Achievements</strong></p>
  <p class="p3"><strong>2015</strong></p>
  <p class="p4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
   <p class="p3"><strong>2013</strong></p>
   <p calss="p4" style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
   <p class="p3"><strong>2012</strong></p>
   <p calss="p4" style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
   <p class="p3"><strong>2011</strong></p>
   <p calss="p4" style="margin: 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
   <p class="p3"><strong>Our Team</strong></p>
   <p calss="p4" style="margin: 0;">Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.</p>

</div>
<div class="div4" style="background-color:#F0F0F0">
  <p class="p5"><strong>Latest News</strong></p>
  <p class="p6" style="color:#4DCEF7 "><strong>Responsive Design</strong></p>
  <p class="p6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</p>
  <p class="p6" style="color:#4DCEF7 "><strong>HTML5, CSS3 and JavaScript</strong></p>
  <p class="p6">Consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam</p>
  <p class="p6" style="color:#4DCEF7 "><strong>Bootstrap</strong></p>
  <p class="p6">Eveniet, consequuntur eius repellendus eos aliquid molestiae ea</p>
  <p class="p6" style="color:#4DCEF7 "><strong>Clean Template</strong></p>
  <p class="p6">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</p>
   <p class="p6" style="color:#4DCEF7 "><strong>Premium Quality</strong></p>
  <p class="p6">Voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia.</p>
</div>

<div class="div5" style="background-color:green">
</div>

<div class="div6" style="background-color:black">
<p class="p7">Copyright © 2015. Template by</p>
<a class="p8" href="https://webthemez.com/">WebThemez.com</a>
</div>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155852947-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-155852947-1');
</script>

</body>
</html>
