<?php
 echo "<b> lista de numeros con while</b>";
echo "<table border 1>";
$i=1;
while ($i <=10)
    {
  
    
    if ($i%2==0){
echo "<td bgcolor='YELLOW'>".$i."</td>";
} else {

echo "<td bgcolor='blue'>".$i."</td>";
}
    
    $i++; // $i=$i+1;

}
echo "</table>"


?>