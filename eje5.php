<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8"/>
	<title> ejercicio 5</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div class="problema">
	<h1>Ejercicio #5</h1>
	<p>	

		5. Desarrolle un script en php que imprima los colores RGB aplicados a las
			abreviaciones que se usan en los estilos css (#f0f, #f93), tome en cuenta que
			solo tomara los valores de 0 a 9 para construir la tabla de colores, cada color
			debe de estar compuesto por 3 valores.

	</p>
	</div>
	<div class="solucion">
	<table>	
	
	<?php
		$valores[0]=0;
$valores[1]=1;
$valores[2]=2;
$valores[3]=3;
$valores[4]=4;
$valores[5]=5;
$valores[6]=6;
$valores[7]=7;
$valores[8]=8;
$valores[9]=9;
$valores[10]="a";
$valores[11]="b";
$valores[12]="c";
$valores[13]="d";
$valores[14]="e";
$valores[15]="f";
for ($a=0;$a<16;$a++)
{   
	for ($b=0;$b<16;$b++)
	{
		echo "<tr>";
		for ($c=0;$c<16;$c++)
			{ 
			   $color=$valores[$a].$valores[$b].$valores[$c];
			   echo "<td style='background-color:#$color;'>$color";
			   echo "</td>";		
			   
			}
		echo "</tr>";
	}	
}

	?>
	</table>
	</div>
	<footer class="alumno">
		<p>Nelson Eduardo Rodriguez Lobos SIS 21B </p>
	</footer>
</body>
</html>