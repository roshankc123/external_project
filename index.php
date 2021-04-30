<?php
    function show($url){
        $file=fopen($url,"r");  
        while($gets=fgets($file)){
            echo $gets;
        }
    }
    $a=0;
    exec("./serial",$p,$a);
    echo $a;
    //print_r($p);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script> 
    <title>Parking</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
</style>
<body>
    <div class="row upper-road"> 
<?php
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
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
</html>