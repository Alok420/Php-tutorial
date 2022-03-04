<?php 
// php is a dynamic type language, that's why we don't need to pass data type before any variable
// Data types(Datatypes indicates the type of value in avariable)
    // Four scalar types: 
    // int,string,float,bool,
// Variables (Variables is used to store any kind of data )
    // like:
    $name ='alok';
    $age=30;
    $qualification='BCA';
    $percent_in_graduation=65.5;
    $back=false;

    echo $name."<br>";
    echo $age."<br>";
    echo $qualification.'<br>';
    echo $back.'<br>';
    echo $percent_in_graduation." thats all"."<br>";
    // arithamatic operation 
    // + ,-,*,/,%
        $a=23;
        $b=50;
    echo "Actual value= a,b".$a.",".$b."<br>";    
    echo $a+$b." a+b <br>";    
    echo $a-$b." a -b <br>";    
    echo $a*$b." a* b <br>";    
    echo $a/$b." a/ b<br>";    
    echo $a%$b." a % b<br>";    
    // operator precedence 
    // oerator precedence is a set of rules that determines the priority of valuation of operators
    $c=2+3*(2-2);
    echo $c; 



    // 1 --find sum of any 5 number;
    // 2 find multiplaction of twa ages;
    // list down all the operator precedence
?>