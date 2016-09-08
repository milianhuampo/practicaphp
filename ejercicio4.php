<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />

 <?php

 
  $filas = 9;
  $columnas = 9;
  $texto = 0;
  $grey = true;
  ?>                                                   
 </head>                                                                 
 <body>      
 

<table border="1">
 <?php

 for($t=0;$t<$filas;$t++){
          echo "<tr>";
        
      for($y=0;$y<$columnas;$y++){
         if($grey){
             
              echo "<td style=padding:3px;
                 bgcolor=#464A4B;>".$p."</td>";
            
              $grey=false;
				$p=pow($texto,2);
              $texto++;
         }
         else{
              //Dejamos cuadro en blanco
              echo "<td style=padding:3px;>".$p."</td>";
              //El próximo será pintado
             $p=pow($texto,2);
              $grey=true;
              $texto++;
          }
       }
      
       echo "</tr>";
  }
 ?>
 
 </table>
 </body>                                                                 
 </html>