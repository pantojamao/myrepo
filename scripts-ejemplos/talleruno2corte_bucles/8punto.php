<center>
<?php
echo "<br>";
$pares=0;
$impares=0;
$matris=array();
 for($i=1; $i<=10;$i++)
     {
     $numeroAleatorio=rand(1,100);
     array_push($matris, $numeroAleatorio);
     }

  for ($i=0;$i<10;$i++){
	  if($matris[$i]%2==0){
			$pares++;
    
	}else{
			$impares++;
       
}
      echo $matris[$i]." , ";
  }

	echo "<table border=2>";
	echo "<tr>";
	echo" <th> pares generados</th>";
	echo "<th> impares generados</th>";
    
	echo"</tr>";
	echo "<tr>";
	echo " <td> ". $pares ."</td>";
	echo "<td>". $impares ."</td>";   
	echo "</tr>";

	echo"</table>";
    
?>
</center>