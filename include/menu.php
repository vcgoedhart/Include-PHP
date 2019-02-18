<?php 
	$total = 1;
	$b3w1 = ["http://localhost/B3W1/Lab%202/", "Lab2",
	  "http://localhost/B3W1/Lab%203a/", "Lab3a",
	  "http://localhost/B3W1/Lab%203b/", "Lab3b",
	  "http://localhost/B3W1/Lab%204/", "Lab4",
	  "http://localhost/B3W1/Goodmorning-PHP/", "B3W1O1"];
 ?>

<?php
	for ($i = 0; $i < $total; $i++){
 ?>
 <div>
 	<ul>
 		<?php 
 			for ($j = 0; $j < count($b3w1); $j++){
 		 ?>
		<li>
			<a href=<?=$b3w1[$j]?>>
				<?php
					$j++;
					echo $b3w1[$j];
				?>	
			</a>
		</li>
 		<?php
 		}
 		 ?>
 	</ul>
 </div>
 <?php 
	}
  ?>
