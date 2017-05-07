<nav class="navbar navbar-default" role="navigation ">
	<?php if($debug == 1){ ?>
	<button id ="btn-debug" class="btn btn-default"><i class="fa fa-bug" aria-hidden="true"></i>
	<?php } ?>
</button>
<div class="container">
 <ul class="nav navbar-nav">
 	<?php nav_main($dbc, $pageid);?>


</ul>
</div>  
</nav>  