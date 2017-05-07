<?php

function nav_main($dbc, $pageid){
	
	
	$q = "SELECT * FROM info";
	$r = mysqli_query($dbc, $q);
	
while($nav = mysqli_fetch_assoc($r)){ ?>	
	
	<li class="labels <?php if($pageid == $nav['id']){echo'active';} ?>"><a href="?page=<?php echo $nav['id'];?>" title="<?php echo $nav['label'];?>"><?php echo $nav['label'];?></a></li>
	<?php }

}



?>
