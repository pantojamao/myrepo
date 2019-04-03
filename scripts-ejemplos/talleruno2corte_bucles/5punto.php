<?php
$matris=array();
 for($i=1; $i<=10;$i++)
     {
     $numeroAleatorio=rand(1,10);
     array_push($matris, $numeroAleatorio);
     }

  for ($i=0;$i<count($matris);$i++)
  echo $matris[$i]."<br/>";
     
     
?>