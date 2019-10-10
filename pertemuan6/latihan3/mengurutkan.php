<?php
    $nama =["lnirne","aduh", "ifuat","toda", "anevi", "samid", "kifuat"];
    
    echo "<b>Sebelum Di Sorting</b> <br/>";
    foreach($nama as $n){
        echo $n ."<br>";
    }
    
    echo "<br>";
    echo "<b>Sesudah Di Sorting ascending</b><br/>";
    sort ($nama);
    foreach ($nama as $m){
        echo $m . "<br>";
    }

     echo "<br>";
    echo "<b>Sesudah Di Sorting descending</b><br/>";
    rsort ($nama);
    foreach ($nama as $m){
        echo $m . "<br>";
    }
?>