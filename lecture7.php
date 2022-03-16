<!--
Loop is used to iterate any statement multiple times
Loops there are 4 types of lops in php 
1) For loop
2) while loop
3) do while loop
4) For each loop
-->
<?php
// --------------------for loop
// for($i=0;$i<10000;$i++)
// {
//     echo $i."<br>,";
// }
?>


<table border="1" style="width:50%; text-align:center;" align="center" >

    <?php
// for($i=1;$i<=10;$i++)
// {
//         echo "<tr>";
//     for($j=1;$j<=10;$j++){
//         $c1=rand(1,255);
//         $c2=rand(1,255);
//         $c3=rand(1,255);
//         echo "<td style='background-color:rgb($c1,$c2,$c3,0.5);'>".$j*$i." </td>";
//     }
//     echo "</tr>";
// }


?>
</table>
<?php
// -------------------------while loop

$a=10;
while($a>0){
    echo $a;
  
    $a--;
}
echo "<br>";
$a=20;
 do{
echo "<br>".$a;
$a--;
 }while($a>11);
?>