<?php
echo "<hr>";
		$n= 1;//punto9
		$acum1=0;
		$acum2=0;
		$acum3=0;
		$acum4=0;
		
		echo "<br>Punto 9:<br> ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($n<=10){
			$nn=rand(-100,100);
			echo $nn."&nbsp;&nbsp;";
			if($nn%2==0){
				if($nn>=0){
				$acum1++;
				}else{
					$acum3++;
					}				
			}else {
				if($nn>=0){
				$acum2++;
				}else{
					$acum4++;
					}	
			}
			$n++;
		}
		echo "</table>";
		
		echo "<br><b>REPORTE FINAL 2</b>";
		echo "<table border=2>";
		echo "<tr><td>  pares positivos:</td><td>". $acum1 ."</td></tr>";
		echo "<tr><td> impares positivos:</td><td>". $acum2 ."</td></tr>";
		echo "<tr><td> pares negativos:</td><td>". $acum3 ."</td></tr>";
		echo "<tr><td> impares negativos:</td><td>". $acum4 ."</td></tr>";
		echo "</table>";



?>