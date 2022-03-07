<?php 
error_reporting(2);
// $name="ram";
// $maxmarks=300;
// $subject1=36;
// $subject2=45;
// $subject3=40;

// $total=$subject1+$subject2+$subject3;
// $percent=($total/$maxmarks)*100;
// $passingpercent=40;
// if($percent>=$passingpercent){
//     echo "You are pass and your percentage is $percent";
// }else{
//     echo "You are fail and your percentage is $percent";
// }

// indexed array
// $students=array("ram","shyam","ghanshyam","radheshyam");
// Associative and multidimentional array
$students=array("ram"=>array("hindi","english","math"),"shyam","ghanshyam","radheshyam");
for($i=0;$i<count($students);$i++){
    if($i!=3){
        echo $students[$i]."<br>";
    }
}



?>