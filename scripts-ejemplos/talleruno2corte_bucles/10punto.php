<html><!--mi comentario -->
    <head>
          <title>HTML</title>
         
    </head>
    <body">

<form name="form1" action="10punto.php" method="POST">
    <center>

	<table border="0" align="center" >
          <center><p>Punto 10 </center>
          <tr>
            <td align="left"><font face="Times new Roman" size="3" >Digite numero
              <font face="Times new Roman" size="3" >*
             </td>

            <td><input type="number2" name="num1" border="1" placeholder="Numero " required></td>
          </tr>
		  
		  <tr><td align= "center"><input type="submit"  value="Calcular" >
			</td><br></tr>
	
    </table>
  </form>


	</body>
	</html>




<?php

echo "<hr>";
		echo "Punto 10:<br>" ;
		$n2 = $_POST['num1'];
		$contador7=0;
		$tabla=0;
		do{
			
			$tabla=($n2*$contador7);
			echo "$n2"." * "."$contador7"." = "."$tabla"."<br>";
			$contador7++;
		}while($contador7<=10)
		
?>		