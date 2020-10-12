<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<table align="center">
	<thead>
		<tr></tr>
	</thead>
	<tbody>
		<?php 
				for($tr=0;$tr<2;$tr++){
			 ?>
		<tr>
			<?php 
				for($td=0;$td<9;$td++){
			 ?>
			<td>
				<?php

					for( $a=10;$a>0;$a--){
						for($i=1; $i<=$a; $i++){
							echo "_";
						}
						for($a1=10;$a1>$a;$a1--){
							echo "x";
						}
						for($a2=10;$a2>$a;$a2--){
							echo "x";
						}
						echo "<br>";
					}

					for($b=0; $b<=10;$b++){
						for($j=1;$j<=$b;$j++){
							echo "_";
						}
						for($b1=10; $b1>$b;$b1--){
							echo "x";
						}
						for($b2=10; $b2>$b;$b2--){
							echo "x";
						}
						echo "<br>";
					}

				?>
			</td>
		<?php } ?>
		</tr>
		<?php } ?>
	</tbody>

</table>


</body>
</html>