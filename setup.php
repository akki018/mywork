<?php
// setup file:

#Database connection here.....
$dbc = mysqli_connect('localhost','aman','password','rdatabase') OR die('could not connect: '.mysqli_connect_error());

# constants
DEFINE('D_TEMPLATE', 'template');

# functions
include('functions/data.php');
include('functions/template.php');
# Site setup
$debug = data_settings_value($dbc, 'debug_status');

$site_title = 'REPORT GENERATOR';


if(isset($_GET['page'])){
	$pageid = $_GET['page']; // set $pageid to equal the value given in the url
}
else{
	$pageid = 1;    // set $pageid to equal the value 1 or home page
}

#page setup
$page = data_page($dbc, $pageid);






?>