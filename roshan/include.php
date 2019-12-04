<?php
    function show($url){
        $file=fopen($url,"r");  
        while($gets=fgets($file)){
            echo $gets;
        }
    }
?>