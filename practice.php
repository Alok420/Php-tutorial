<?php 
// loop with array
// $num=array(123,45,65,34,23,64,23,56,23,23,233,32,32);
// for ($i=0; $i <count($num) ; $i++) { 
//     print($num[$i].",");
// }

// loop with array addition
// $num=array(123,45,65,34,23,64,23,56,23,23,233,32,32);
// $num2=array(12343,4534,6543,5344,2343,64343,2343,5364,2334,2334,23343,3324,3432);
// for ($i=0; $i <count($num) ; $i++) { 
//     print($num[$i]+$num2[$i].",");
// }



// loop with multi dimentional array 

// $row=array(
//     array(12343,4534,6543,5344,2343,64343,2343,5364,2334,2334,23343,3324,3432),
//            array(12343,4534,6543,5344,2343,64343,2343,5364,2334,2334,23343,3324,3432)
//         );
        
//         echo "number of row= ".count($row);
//         echo "<br>number of column= ".count($row[0])."<br>";
// for ($i=0; $i <count($row) ; $i++) { 
//    for($j=0;$j<count($row[$i]);$j++){
//        echo $row[$i][$j].",";
//    }
//    echo "<br>";
// }
// loop with multi dimentional array addition

$row=array(
    array(12343,4534,6543,5344,2343,64343,2343,5364,2334,2334,23343,3324,3432),
           array(12343,4534,6543,5344,2343,64343,2343,5364,2334,2334,23343,3324,3432)
        );
        $row2=array(
            array(12343,4534,6543,5344,2343,64343,2343,5364,2334,2334,23343,3324,3432),
                   array(12343,4534,6543,5344,2343,64343,2343,5364,2334,2334,23343,3324,3432)
                );
        
        echo "number of row= ".count($row);
        echo "<br>number of column= ".count($row[0])."<br>";
echo "<br>";
        echo "number of row= ".count($row2);
        echo "<br>number of column= ".count($row2[0])."<br>";
for ($i=0; $i <count($row) ; $i++) { 
   for($j=0;$j<count($row[$i]);$j++){
       echo $row[$i][$j]+$row2[$i][$j].",";
   }
   echo "<br>";
}

?>