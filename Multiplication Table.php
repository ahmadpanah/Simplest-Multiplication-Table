<?php 
$i=1;
$j=1;
while($i<10){
    echo "{$j}*{$i}=".$i*$j.' ';
    if($i==$j){
        echo "<br/>";
        $j=1;
        $i++;
    }else{
        $j++;
    }
}

?>