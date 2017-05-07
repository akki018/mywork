<?php
// CSS:





?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 <!-- Jquery CSS -->
<link rel="stylesheet" href="css/jquery-ui.css">
<!-- fontawesome -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<style>
html,
body
{
	/*background:linear-gradient(to right,skyblue,rgba(0,0,0,0.3));*/
	/*background:linear-gradient(45deg,rgba(12,147,207,.93) 0,rgba(0,169,128,.93) 97%);*/
	background: url(images/people_large.jpg) center center no-repeat fixed;
    background-size: cover;
	height:100%;
}
/*body:before
{
	content: '';
    position: absolute;
    display: inline-block;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: url(images/people_large.jpg) center center no-repeat fixed;
    background-size: cover;
    z-index: 0;
    opacity: .1;
}*/
#wrap 
{
	min-height:100%;
	height:auto;
	margin:0 auto -60px;
	padding: 0 0 60px;
	background:linear-gradient(45deg,rgba(12,147,207,.93) 0,rgba(0,169,128,.93) 97%);
}
img.img:hover {
    transform: scale(1.1);
   }
.img{
	transition: all 0.5s linear;
	float: left ;
	width:320px;
	height:240px;
	margin:10px;
	padding: 0px 10px 10px 0px;
}


.labels.labels.labels a
{
		color:#f7f7f7;
}
.labels.labels.labels a:hover
{
		color:#008080;
}
.labels.labels.labels.active a
{
		color:#444;
}
.navbar{
	background: #444;
}

#footer{
height: 60px;
background-color: #444;
}

#btn-debug{
	position:absolute;
}
#console-debug{
	position: absolute;
	top: 50px;
	left: 0px; 
	width: 30%;  
	height: 700px;
	overflow-y:scroll;
	background-color:#FFFFFF;
}
#console-debug pre{
	
	
}
/*// Form styling*/
/*custom font*/
@import url(http://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
	height: 100%;
	/*Image only BG fallback*/
	
	/*background = gradient + image pattern combo*/
	background: linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
}
body {
	font-family: montserrat, arial, verdana;
}
/*form styles*/

#msform {
	width: 800px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: White;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
input[type=text] {
    text-transform: capitalize;
}
</style> 
