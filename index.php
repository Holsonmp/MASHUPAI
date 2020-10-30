<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mashup AI</title>
    <meta name="description" content="Automatisez votre support , augmentez votre satisfaction client ">
    <meta name="keywords" content="Mashup AI, intelligence ,artificielle">
    <link rel="icon" type="image/png" href="elts/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="elts/animate.css">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
     <link rel="stylesheet" type="text/css" href="fonts/LineIcons.css">
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    
    <style>
	html{ scroll-behavior: smooth;}
	

.item {
  position: relative;
  height: 19rem;
  background-color: lightGrey;
  overflow-y: hidden;
  box-shadow: 0.1rem 0.1rem 1rem rgba(0, 0, 0, 0.1); border-radius:3px
}
.item h3 {
  margin: 0;
  display: block;
  background-color: #FFF;
  padding: 1rem; border-bottom:1px solid #F2F2F2 ;color: #34a583; font-weight:bold
}
.item a {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.item a:hover ~ .item__overlay, .item a:focus ~ .item__overlay {
  transform: translate3d(0, 0, 0);
}

#SOLUTIONS img {
  width: 100%;
  height: 100%;
  display: block;
  object-fit: cover;
}

.item__overlay {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
  position: absolute;
  width: 100%;
  top: 0;
  transition: transform 500ms;
  background-color: #FFF;
  transform: translate3d(0, calc(100% - 3.5rem), 0);
}

.item__body {
  flex-grow: 1;
  padding: 1rem;
}
.item__body p {
  margin: 0;
}











#intro{ position:relative; overflow:hidden;background-image: url(elts/bg1.jpg); background-position:bottom center; background-repeat:no-repeat; background-size:100% ;}
 
 

.boxFont {
  font-family: "helvetica", sans-serif;
  text-align: center;
  vertical-align: middle;
  position: relative;
  line-height: 0.3;
  letter-spacing: -.05em;
  font-size: 3rem;
  color: #e6007e;
}

 
box {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden; z-index:9;
}

.ball1 {
  display: block;
  width: 20px;
  height: 20px;
  border-radius: 50%;
  background-color: transparent;
  border:1px solid #CCC;
  position: absolute;
  -webkit-animation: moveX 6.45s ease-in-out 0s infinite alternate, moveY 7.4s ease-in-out 0s infinite alternate;
  -moz-animation: moveX 6.45s ease-in-out 0s infinite alternate, moveY 7.4s ease-in-out 0s infinite alternate;
  -o-animation: moveX 6.04s ease-in-out 0s infinite alternate, moveY 7.4s ease-in-out 0s infinite alternate;
  animation: moveX 6.45s ease-in-out 0s infinite alternate, moveY 7.4s ease-in-out 0s infinite alternate;
}

.ball2 {
  display: block;
  width: 50px;
  height: 50px;
  horizontal-anchor: center;
  border-radius: 50%;
  background-color: transparent;
  position: absolute;
  -webkit-animation: moveX 11.45s ease-in-out 0s infinite alternate, moveY 9.4s ease-in-out 0s infinite alternate;
  -moz-animation: moveX 11.45s ease-in-out 0s infinite alternate, moveY 9.4s ease-in-out 0s infinite alternate;
  -o-animation: moveX 11.04s ease-in-out 0s infinite alternate, moveY 9.4s ease-in-out 0s infinite alternate;
  animation: moveX 11.45s ease-in-out 0s infinite alternate, moveY 9.4s ease-in-out 0s infinite alternate;
   background-image:url(elts/f2.png); background-repeat:no-repeat; background-position:center center; background-size:100%
}

 

.ball3 {
  display: block;
  width: 25px;
  height: 25px;
  border-radius: 50%;
  background-color: transparent  ;
  position: absolute;
  -webkit-animation: moveX 8.15s linear 0s infinite alternate, moveY 5.8s linear 0s infinite alternate;
  -moz-animation: moveX 8.15s linear 0s infinite alternate, moveY 5.8s linear 0s infinite alternate;
  -o-animation: moveX 8.15s linear 0s infinite alternate, moveY 5.8s linear 0s infinite alternate;
  animation: moveX 8.15s linear 0s infinite alternate, moveY 5.8s linear 0s infinite alternate;
   background-image:url(elts/f2.png); background-repeat:no-repeat; background-position:center center; background-size:100%
}

.ball4 {
  display: block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: transparent;
  position: absolute;
  -webkit-animation: moveX 10.09s linear 0s infinite alternate, moveY 9.4s linear 0s infinite alternate;
  -moz-animation: moveX 10.09s linear 0s infinite alternate, moveY 9.4s linear 0s infinite alternate;
  -o-animation: moveX 10.09s linear 0s infinite alternate, moveY 9.4s linear 0s infinite alternate;
  animation: moveX 10.09s linear 0s infinite alternate, moveY 9.4s linear 0s infinite alternate;
   background-image:url(elts/f2.png); background-repeat:no-repeat; background-position:center center; background-size:100%
}

.ball4 {
  display: block;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: transparent;
  position: absolute;
  -webkit-animation: moveX 10.09s linear 0s infinite alternate, moveY 9.4s linear 0s infinite alternate;
  -moz-animation: moveX 10.09s linear 0s infinite alternate, moveY 9.4s linear 0s infinite alternate;
  -o-animation: moveX 10.09s linear 0s infinite alternate, moveY 9.4s linear 0s infinite alternate;
  animation: moveX 10.09s linear 0s infinite alternate, moveY 9.4s linear 0s infinite alternate;
   background-image:url(elts/f2.png); background-repeat:no-repeat; background-position:center center; background-size:100%
}

.ball5 {
  display: block;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background-color: transparent;
  position: absolute;
  -webkit-animation: moveX 13.09s linear 0s infinite alternate, moveY 7.4s linear 0s infinite alternate;
  -moz-animation: moveX 13.09s linear 0s infinite alternate, moveY 14.4s linear 0s infinite alternate;
  -o-animation: moveX 13.09s linear 0s infinite alternate, moveY 14.4s linear 0s infinite alternate;
  animation: moveX 13.09s linear 0s infinite alternate, moveY 14.4s linear 0s infinite alternate;
   background-image:url(elts/f2.png); background-repeat:no-repeat; background-position:center center; background-size:100%
}

.square1 {
  display: block;
  width: 45px;
  height: 45px;
  background-color: transparent;
  position: absolute;
  -webkit-animation: moveX 12.34s linear 0s infinite alternate, moveY 15.06s linear 0s infinite alternate, spin 40000ms linear 0s infinite alternate;
  -moz-animation: moveX 12.34s linear 0s infinite alternate, moveY 15.06s linear 0s infinite alternate, spin 40000ms linear 0s infinite alternate;
  -o-animation: moveX 12.34s linear 0s infinite alternate, moveY 15.06s linear 0s infinite alternate, spin 40000ms linear 0s infinite alternate;
  animation: moveX 12.34s linear 0s infinite alternate, moveY 15.06s linear 0s infinite alternate, spin 40000ms linear 0s infinite alternate; background-image:url(elts/f1.png); background-repeat:no-repeat; background-position:center center; background-size:100%

}

.square2 {
  display: block;
  width: 35px;
  height: 35px;
  background-color: transparent;
  position: absolute;
  -webkit-animation: moveX 9.74s linear 0s infinite alternate, moveY 20.06s linear 0s infinite alternate, spin 50000ms linear 0s infinite alternate;
  -moz-animation: moveX 9.34s linear 0s infinite alternate, moveY 20.06s linear 0s infinite alternate, spin 50000ms linear 0s infinite alternate;
  -o-animation: moveX 9.34s linear 0s infinite alternate, moveY 20.06s linear 0s infinite alternate, spin 50000ms linear 0s infinite alternate;
  animation: moveX 9.34s linear 0s infinite alternate, moveY 20.06s linear 0s infinite alternate, spin 50000ms linear 0s infinite alternate; background-image:url(elts/f1.png); background-repeat:no-repeat; background-position:center center; background-size:100%

}

.square3 {
  display: block;
  width: 50px;
  height: 50px;
  background-color: transparent;
  position: absolute;
  -webkit-animation: moveX 19.74s linear 0s infinite alternate, moveY 17.06s linear 0s infinite alternate, spin 63000ms linear 0s infinite alternate;
  -moz-animation: moveX 19.34s linear 0s infinite alternate, moveY 17.06s linear 0s infinite alternate, spin 63000ms linear 0s infinite alternate;
  -o-animation: moveX 19.34s linear 0s infinite alternate, moveY 17.06s linear 0s infinite alternate, spin 63000ms linear 0s infinite alternate;
  animation: moveX 19.34s linear 0s infinite alternate, moveY 17.06s linear 0s infinite alternate, spin 63000ms linear 0s infinite alternate; background-image:url(elts/f1.png); background-repeat:no-repeat; background-position:center center; background-size:100%

}

.triangle {
  width: 0; 
  height: 0; 
  border-top: 40px solid transparent;
  border-bottom: 40px solid transparent; 
  border-left: 75px solid #fce0cc;
    position: absolute;
  -webkit-animation: moveX 30.74s linear 0s infinite alternate, moveY 25.06s linear 0s infinite alternate, spin 75300ms linear 0s infinite alternate;
  -moz-animation: moveX 30.34s linear 0s infinite alternate, moveY 25.06s linear 0s infinite alternate, spin 75300ms linear 0s infinite alternate;
  -o-animation: moveX 30.34s linear 0s infinite alternate, moveY 25.06s linear 0s infinite alternate, spin 75300ms linear 0s infinite alternate;
  animation: moveX 30.34s linear 0s infinite alternate, moveY 25.06s linear 0s infinite alternate, spin 75300ms linear 0s infinite alternate;
}

.triangle2 {
  width: 0; 
  height: 0; 
  border-top: 43px solid transparent;
  border-bottom: 30px solid transparent; 
  border-left: 65px solid #f2f2ee;
    position: absolute;
  -webkit-animation: moveX 24.34s linear 0s infinite alternate, moveY 16.06s linear 0s infinite alternate, spin 55300ms linear 0s infinite alternate;
  -moz-animation: moveX 24.34s linear 0s infinite alternate, moveY 16.06s linear 0s infinite alternate, spin 55300ms linear 0s infinite alternate;
  -o-animation: moveX 24.34s linear 0s infinite alternate, moveY 16.06s linear 0s infinite alternate, spin 55300ms linear 0s infinite alternate;
  animation: moveX 24.34s linear 0s infinite alternate, moveY 16.06s linear 0s infinite alternate, spin 55300ms linear 0s infinite alternate;
}


/* 2.2 Keyframes for Floating Geometry  */
@-webkit-keyframes spin {
    from {
        -webkit-transform:rotate(0deg);
      }

    to {
        -webkit-transform:rotate(360deg);
      }
}

@-webkit-keyframes moveX {
  from { left: 0; } to { left: 100%; }
}
@-moz-keyframes moveX {
  from { left: 0; } to { left: 100%; }
}
@-o-keyframes moveX {
  from { left: 0; } to { left: 100%; }
}
@keyframes moveX {
  from { left: 0; } to { left: 100%; }
}
@-webkit-keyframes moveY {
  from { top: 0; } to { top: 100%; }
}
@-moz-keyframes moveY {
  from { top: 0; } to { top: 100%; }
}
@-o-keyframes moveY {
  from { top: 0; } to { top: 100%; }
}
@keyframes moveY {
  from { top: 0; } to { top: 100%; }
}
</style>
  </head>
  <body>
<div id="ACCUEIL"></div>
   
  
  
  
   <?php include 'header.php';?>
   
   
 <div id="intro" >
<!-- SECTION 1-->
<div style="z-index:10; position:relative" class="aftertop">
<div align="center" class="container">
<div style="max-width:700px; margin:0 auto"><h1 class="bt wow bounceIn"> Automatisez votre support, 
augmentez votre satisfaction client.</h1>
<p class="wow flipInX">Nous proposons des solutions basées sur l'intelligence artificielle pour aider les responsables du support à résoudre les problèmes des clients avec le juste mélange d'automatisation et de soutien humain.</p>
<a href="#APROPOS" class="buttona"  >Découvrez notre plateforme</a>  <a href="#INDUSTRIE" class="buttonb"  >Nos solutions par industrie</a></div>
<div style="max-width:1000px; margin:0 auto" class="animated bounceInUp"><img src="elts/DEEFDZD.png"  style=" width:100%; height:auto"></div>
</div>
</div>
<!--/--> 

<div class="box">
  <b class="ball1"></b>
  <b class="ball2"></b>
  <b class="ball3"></b>
  <b class="ball4"></b>
  <b class="ball5"></b>
  <b class="square1"></b>
  <b class="square2"></b>
  <b class="square3"></b>
  <div class="triangle"></div>
  <div class="triangle2"></div>
</div>

</div>
 


<!-- SECTION 2-->
 <div class="container Grid aftertop" style="background-image: url(elts/bg2.jpg); background-size:100%" id="APROPOS"> 
  <div class="equal-col"><div class="padding">
  <h1 class="bt">Automatisez votre support</h1>
  <p>Restez disponibles 24/7 pour vos clients sur les platformes de vos choix. Créez de l'engagement et de l'empathie grâce au langage naturel dévéloppé par notre intelligence artificielle.</p></div></div>
  
  <div class="equal-col "  align="center"> <div style="max-width:500px; margin:0 auto"><img src="elts/adzd.png"  style="width:100%; height:auto" class="wow  fadeInRight"></div> </div>
  
  
  <div class="equal-col" style="float:right; text-align:right"><div class="padding">
  <h1 class="bt">Des données à portée de main.<span style="color:#666">
soyez-maître de votre réputation</span></h1>
  <p>Découvrez ce que vos clients pensent de vous,
de vos services, comprenez leurs feedbacks et leur
attachement à votre marque.

Profitez de la puissance de l'intelligence artificielle pour exploiter au mieux mes données en votre possession.</p>
<h3><b>Il suffit de lui demander quoi faire!</b></h3></div></div>


   <div class="equal-col " align="center"> <div style="max-width:500px; margin:0 auto"><img src="elts/GVV.png"  style="width:100%; height:auto" class="wow fadeInLeft"></div> </div>
   
   
  <div class="Grid"></div>
 </div>
<!--/-->  


<!-- SECTION 3--><div style="background-image: url(elts/bg3.jpg); background-size:80%; background-position:bottom center; background-repeat:repeat-x">
 <div class="container Grid  " > 
  <div class="equal-col"><div class="padding">
  <h1 class="bt">Personnalisez l'expérience de vos clients.</h1>

connectez-les à votre marque grâce au Marketing conversationnel.</p></div></div>
  
  <div class="equal-col" align="center"> <div style="max-width:500px; margin:0 auto"><img src="elts/zedzde.png"  style="width:100%; height:auto; margin-top:-20%" class="wow bounceInDown"></div> </div>
  
  
  <div class="equal-col" style="float:right; text-align:right"><div class="padding">
  <h1 class="bt">Réduisez vos coûts!</h1>
  <p>

vous avez les meilleurs agents de supports et de vente et faites les assister par un système doté d'une intelligence artificielle pour réduire vos coûts lié à l'insatisfaction des clients ( win-backs) et liés au recrutement de plus en plus d'agent.</p>
 </div></div>
 
   <div class="equal-col" align="center"> <div style="max-width:500px; margin:0 auto"><img src="elts/xsx.png"  style="width:100%; height:auto" class="wow slideInRight"></div> </div>
  
   
  
 <div class="Grid"></div>
 </div></div>
<!--/-->  
  
  
  

<!-- SECTION 4-->
<div class="Grid container"  align="center" id="SOLUTIONS">
<h1 class="bt" id="INDUSTRIE"><br><br><br>Découvrez nos solutions par industrie</h1>

<div class="cell"><div class="padding">
<div class="item">
<a href="#0" aria-labelledby="person1"></a>
<img src='elts/o1.jpg' alt=''>
<div class="item__overlay">
<h3 id="person1" aria-hidden="true">Telcos</h3> 
<div class="item__body">
<p>
<b style="color:#F69">*</b> Donnez la puissance à vos utilisateurs de monitorer et suivre leurs activations<br><br>
<b style="color:#F69">*</b> Vendez de nouveaux produits et faites des enquêtes de satisfaction.</p>
</div>
</div>
</div>
</div></div>




<div class="cell"><div class="padding">
<div class="item">
<a href="#0" aria-labelledby="person1"></a>
<img src='elts/o2.jpg' alt=''>
<div class="item__overlay">
<h3 id="person1" aria-hidden="true">Les banques</h3> 
<div class="item__body">
<p>
<b style="color:#F69">*</b> Limitez les files d'attentes.<br><br>
<b style="color:#F69">*</b> Automatisez les ouvertures de comptes.<br><br>
<b style="color:#F69">*</b> Alléger votre équipe clientèle.</p></p>
</div>
</div>
</div>
</div></div>



<div class="cell"><div class="padding">
<div class="item">
<a href="#0" aria-labelledby="person1"></a>
<img src='elts/o3.jpg' alt=''>
<div class="item__overlay">
<h3 id="person1" aria-hidden="true">E-commerce</h3> 
<div class="item__body">
<p>
<b style="color:#F69">*</b> Automatisez vos commandes, vos listes de diffusions.<br><br>
<b style="color:#F69">*</b> Automatisez votre fonction support et réduisez vos coûts.</p></p>
</div>
</div>
</div>
</div></div>


<div class="cell"><div class="padding">
<div class="item">
<a href="#0" aria-labelledby="person1"></a>
<img src='elts/o4.jpg' alt=''>
<div class="item__overlay">
<h3 id="person1" aria-hidden="true">Santé</h3> 
<div class="item__body">
<p>
<b style="color:#F69">*</b> Limitez les files d'attente.<br><br>
<b style="color:#F69">*</b> Prenez les premiers services.<br><br>
<b style="color:#F69">*</b> Maximisez votre HOME CARE services.</p></p>
</div>
</div>
</div>
</div></div>


<div class="Grid"></div>
<br>
<br>
</div>
<!--/--> 





<!-- SECTION 5-->
<div style="background-color:#F5F5F5" align="center">
<div class="Grid container"  >
<h1 class="bt"><br><br>Ce qu'on fait</h1><p>Nos services sont développés de manière à vous offrir<br><br></p>


<div class=" Grid-col"><div class="padding">
<div style="background-color:#FFF; border-radius:5px;box-shadow: 0 0 60px rgba(0,0,0,0.15); min-height:300px" class="padding"> 
<img src="elts/i1.png" style="width:85px; height:auto; margin-top:50px"><br> CMR & Support <br><br>
<a href="#"><b style="color:#F69">Savoir plus</b></a> </div></div></div>

<div class=" Grid-col"><div class="padding">
<div style="background-color:#FFF; border-radius:5px;box-shadow: 0 0 60px rgba(0,0,0,0.15); min-height:300px;" class="padding mar10"> 
<img src="elts/i2.png" style="width:150px; height:auto; margin-top:50px"><br> Reports and Analytics<br><br>
<a href="#"><b style="color:#F69">Savoir plus</b></a> </div></div></div>


<div class=" Grid-col"><div class="padding">
<div style="background-color:#FFF; border-radius:5px;box-shadow: 0 0 60px rgba(0,0,0,0.15); min-height:300px" class="padding"> 
<img src="elts/i3.png" style="width:85px; height:auto; margin-top:50px"><br> Review & Rating <br><br>
<a href="#"><b style="color:#F69">Savoir plus</b></a> </div></div></div>


<div class=" Grid-col"><div class="padding">
<div style="background-color:#FFF; border-radius:5px;box-shadow: 0 0 60px rgba(0,0,0,0.15); min-height:300px" class="padding"> 
<img src="elts/i4.png" style="width:85px; height:auto; margin-top:50px"><br>FAQ & Survey <br><br>
<a href="#"><b style="color:#F69">Savoir plus</b></a> </div></div></div>
 


<div class=" Grid-col"><div class="padding">
<div style="background-color:#FFF; border-radius:5px;box-shadow: 0 0 60px rgba(0,0,0,0.15); min-height:300px; " class="padding mar10"> 
<img src="elts/i5.png" style="width:200px; height:auto; margin-top:50px"><br>olls & Feedbacks<br><br>
<a href="#"><b style="color:#F69">Savoir plus</b></a> </div></div></div>
 

 

<div class=" Grid-col"><div class="padding">
<div style="background-color:#FFF; border-radius:5px;box-shadow: 0 0 60px rgba(0,0,0,0.15); min-height:300px" class="padding"> 
<img src="elts/i6.png" style="width:110px; height:auto; margin-top:50px"><br>Market research report<br><br>
<a href="#"><b style="color:#F69">Savoir plus</b></a> </div></div></div>

 


<div class="Grid"></div></div></div>
<!--/--> 




<!-- SECTION 6-->
<div class="Grid container"  align="center" id="SOLUTIONS">
<h1 class="bt" id="PLATEFORME"><br><br><br>Nos integrations</h1>


<div class="cell"><div class="padding">
<div style="background-color:#FFF; border-radius:5px;box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);" class="padding">
<img src="elts/in1.png"  style="width:60%; height:auto"> <br><br>
<p><b>Facebook Messenger</b> </p>
<a href="#"><b style="color:#F69" >Savoir plus</b></a></div>
</div></div>

<div class="cell"><div class="padding">
<div style="background-color:#FFF; border-radius:5px;box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);" class="padding">
<img src="elts/in2.png"  style="width:60%; height:auto"> <br><br>
<p> <b>Slack </b></p>
<a href="#"><b style="color:#F69" >Savoir plus</b></a></div>
</div></div>

<div class="cell"><div class="padding">
<div style="background-color:#FFF; border-radius:5px;box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);" class="padding">
<img src="elts/in3.png"  style="width:60%; height:auto"><br><br>
<p> <b>Mobile App</b> </p>
<a href="#"><b style="color:#F69" >Savoir plus</b></a></div>
</div></div>

<div class="cell"><div class="padding">
<div style="background-color:#FFF; border-radius:5px;box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);" class="padding">
<img src="elts/in4.png"  style="width:60%; height:auto"> <br><br>
<p> <b>Zoom</b>  </p>
<a href="#"><b style="color:#F69" >Savoir plus</b></a></div>
</div></div>

 
 







<div class="Grid"></div></div>
<!--/--> 

  
  

   
   
   
   <?php include 'footer.php';?>
   
   
   
   
   
   

  
  
  
  
  
  
  
  <div class="gototop js-top"> <a href="#" class="js-gotop"><i class="lni lni-arrow-up"></i></a></div>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
  <script>$( ".nl1" ).addClass( "active" );</script>
   <script src="elts/WOW.js"></script>
  <script>
    wow = new WOW( {   animateClass: 'animated', offset:       100 }  );
    wow.init();
	
	$(function() {
$( '.probootstrap-nav ul li a' ).on( 'click', function () {
	$( '.probootstrap-nav ul ' ).find( 'li.active' ).removeClass( 'active' );
	$( this ).parent( 'li' ).addClass( 'active' );
});});
  </script>
  
  
  <script> 
	(function() {
		var lastTime = 0;
		var vendors = ['ms', 'moz', 'webkit', 'o'];
		for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
			window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
			window.cancelAnimationFrame = window[vendors[x]+'CancelAnimationFrame']
				|| window[vendors[x]+'CancelRequestAnimationFrame'];
		}

		if (!window.requestAnimationFrame)
			window.requestAnimationFrame = function(callback, element) {
				var currTime = new Date().getTime();
				var timeToCall = Math.max(0, 16 - (currTime - lastTime));
				var id = window.setTimeout(function() { callback(currTime + timeToCall); },
					timeToCall);
				lastTime = currTime + timeToCall;
				return id;
			};

		if (!window.cancelAnimationFrame)
			window.cancelAnimationFrame = function(id) {
				clearTimeout(id);
			};
	}());


	(function() {

    var width, height, largeHeader, canvas, ctx, points, target, animateHeader = true;

    // Main
    initHeader();
    initAnimation();
    addListeners();

    function initHeader() {
        width = window.innerWidth;
        height = window.innerHeight;
        target = {x: width/2, y: height/2};

        largeHeader = document.getElementById('large-header');
 
      largeHeader.style.height = height+'px';

        canvas = document.getElementById('x-canvas');
        canvas.width = width;
        canvas.height = height;
        ctx = canvas.getContext('2d');

        // create points
        points = [];
        var puntitos=20;
        for(var x = 0; x < width; x = x + width/puntitos) {
            for(var y = 0; y < height; y = y + height/puntitos) {
                var px = x + Math.random()*width/puntitos;
                var py = y + Math.random()*height/puntitos;
                var p = {x: px, originX: px, y: py, originY: py };
                points.push(p);
            }
        }

        // for each point find the 5 closest points
        for(var i = 0; i < points.length; i++) {
            var closest = [];
            var p1 = points[i];
            for(var j = 0; j < points.length; j++) {
                var p2 = points[j]
                if(!(p1 == p2)) {
                    var placed = false;
                    for(var k = 0; k < 5; k++) {
                        if(!placed) {
                            if(closest[k] == undefined) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }

                    for(var k = 0; k < 5; k++) {
                        if(!placed) {
                            if(getDistance(p1, p2) < getDistance(p1, closest[k])) {
                                closest[k] = p2;
                                placed = true;
                            }
                        }
                    }
                }
            }
            p1.closest = closest;
        }

        // assign a circle to each point
        for(var i in points) {
            var c = new Circle(points[i], 2+Math.random()*2, 'rgba(240,240,240,240)');
            points[i].circle = c;
        }
    }

    // Event handling
    function addListeners() {
        if(!('ontouchstart' in window)) {
            window.addEventListener('mousemove', mouseMove);
        }
        window.addEventListener('scroll', scrollCheck);
        window.addEventListener('resize', resize);
    }

    function mouseMove(e) {
        var posx = posy = 0;
        if (e.pageX || e.pageY) {
            posx = e.pageX;
            posy = e.pageY;
        }
        else if (e.clientX || e.clientY)    {
            posx = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft;
            posy = e.clientY + document.body.scrollTop + document.documentElement.scrollTop;
        }

        target.x = posx;
        target.y = posy;
    }

    function scrollCheck() {
        if(document.body.scrollTop > height) animateHeader = false;
        else animateHeader = true;
    }

    function resize() {
        width = window.innerWidth;
        height = window.innerHeight;
        largeHeader.style.height = height+'px';
        canvas.width = width;
        canvas.height = height;
    }

    // animation
    function initAnimation() {
        animate();
        for(var i in points) {
            shiftPoint(points[i]);
        }
    }

    function animate() {
        if(animateHeader) {
            ctx.clearRect(0,0,width,height);
            for(var i in points) {
                // detect points in range
                if(Math.abs(getDistance(target, points[i])) < 4000) {
                    points[i].active = 0.3;
                    points[i].circle.active = 0.6;
                } else if(Math.abs(getDistance(target, points[i])) < 20000) {
                    points[i].active = 0.1;
                    points[i].circle.active = 0.3;
                } else if(Math.abs(getDistance(target, points[i])) < 40000) {
                    points[i].active = 0.02;
                    points[i].circle.active = 0.1;
                } else {
                    points[i].active = 0;
                    points[i].circle.active = 0;
                }

                drawLines(points[i]);
                points[i].circle.draw();
            }
        }
        requestAnimationFrame(animate);
    }

    function shiftPoint(p) {
        TweenLite.to(p, 1+1*Math.random(), {x:p.originX-50+Math.random()*50,
            y: p.originY-50+Math.random()*50, ease:Circ.easeInOut,
            onComplete: function() {
                shiftPoint(p);
            }});
    }

    // Canvas manipulation
    function drawLines(p) {
        if(!p.active) return;
        for(var i in p.closest) {
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(p.closest[i].x, p.closest[i].y);
            ctx.strokeStyle = 'rgba(200,200,200,'+ p.active+')';
            ctx.stroke();
        }
    }

    function Circle(pos,rad,color) {
        var _this = this;

        // constructor
        (function() {
            _this.pos = pos || null;
            _this.radius = rad || null;
            _this.color = color || null;
        })();

        this.draw = function() {
            if(!_this.active) return;
            ctx.beginPath();
            ctx.arc(_this.pos.x, _this.pos.y, _this.radius, 0, 2 * Math.PI, false);
            ctx.fillStyle = 'rgba(200,200,200,'+ _this.active+')';
            ctx.fill();
        };
    }

    // Util
    function getDistance(p1, p2) {
        return Math.pow(p1.x - p2.x, 2) + Math.pow(p1.y - p2.y, 2);
    }

})();






</script>

  </body>
</html>