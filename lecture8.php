<!-- ----arrrays -->
<?php
$name="alok";//normal variable
// indexexd based array
$person=array("alok","panday",45);// array variable
// array variable
$persons=array($person,array("anup","shukla",33));
// associative array
$persons2=array(array("fname"=>"alok","lname"=>"panday","age"=>"43"),array("fname"=>"anup","lname"=>"shukla","age"=>33));
foreach($persons2 as $person){
    foreach($person as $key => $value) {
        echo "$key is at $value<br>";
      }
      echo " -------------------- <br>";
}

?>