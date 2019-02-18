<?php 
	$items = ["#", "Home"];
?>

<nav>
	<ul>
		<?php 
			for ($i = 0; $i < count($items); $i++) {
		 ?>
		 <li>
		 	<a href=<?=$items[$i]?>>
		 		<?php 
		 			$i++;
		 			echo $items[$i];
		 		 ?>
		 	</a>
		 </li>
		<?php
			}
		 ?>
	</ul>
</nav>