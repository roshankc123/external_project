<?php
    require"include.php";
    $a=0;
    exec("./serial",$p,$a);
    echo $a;
    //print_r($p);
    show("header");
    $i=0;
    $status = array('0' =>"green",'1' => "red" );
    $point=0;
    while($i<4){
        if($i<(4-$a))   
            $point=1;
        echo "<a class=\"col-2 $status[$point]\" role=\"button\" href=\"\#\"></a>";
        $i++;
        $point=0;
    }
    show("footer");
?>