<?php include('config/setup.php');?>

<!DOCTYPE html>
<html>
<head> 
<title><?php echo $page['title'].' | '.$site_title;?> </title>
<meta name ="view port" content ="width=device-width,initial-scale=1.0">
<?php include('config/css.php');?>

<?php include('config/js.php');?>

</head> 

<body>
<div id ="wrap">
 
<?php include(D_TEMPLATE.'/navigation.php'); ?>

<?php if($page['id']!=2){ ?><div class="container">
            <h1> <?php echo $page['header'];  ?></h1>
            <?php echo $page['body_formatted'];  // to make html tag hidden?>
             
            </div> 
            <?php } ?>
            
     <?php if($page['id']==2){ ?><div class="container">
     	
		<form action ="form.php" method="post"name= "f"  id="msform" onsubmit="return validate()">
							 
		<fieldset>
			 <h1>PLEASE ENTER THE DETAILS</h1>
			<input type="number" name="t1" placeholder="PROJECT ID" id="pid" min="1" max="" />
			<input type="text" name="t2" placeholder="PROJECT TITLE"  />
			<input type="text" name="t3" placeholder="MENTOR NAME"  />
							   
							    <select name="t4"id ="s"class="form-control" >
		    	<option value="-1" selected>CLASS</option>
  <option>CSE-A</option>
  <option>CSE-B</option>
  <option>CSE-C</option>
  <option>CSE-D</option>
  <option>CSE-E</option>
 
</select>
<br>

<input type="text" name="t5" placeholder="NAME1"  />
<input type="number" name="t6" placeholder="COLLEGE ID1" id="cid1" min="1401021000" max="1401021099" />

<input type="text" name="t7" placeholder="NAME2"  />
<input type="number" name="t8" placeholder="COLLEGE ID2" id="cid2" min="1401021000" max="1401021099" />

<input type="text" name="t9" placeholder="NAME3"  />
<input type="number" name="t10" placeholder="COLLEGE ID3" id="cid3" min="1401021000" max="1401021099" />

<input type="text" name="t11" placeholder="NAME4"  />
<input type="number" name="t12" placeholder="COLLEGE ID4" id="cid4" min="1401021000" max="1401021099" />
		    
		    
		    <input id="uid" type="text" name="t13" placeholder="UNIVERSITY NAME" />
		    
		    <input type="number" name="t14" placeholder="CONTACT NUMBER" />
		    
		    
		    <input type="submit" id="button" name="submit" class="submit action-button" value="Submit"   />
		  </fieldset>
		</form>
     </div> 
      <?php } ?>     
            
            
            
            
            
</div>
<?php include(D_TEMPLATE.'/footer.php');?>
<?php if($debug ==1)
{ include ('widgets/debug.php');
	  }  ?>
</body>
</html>
