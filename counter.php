<?php
    $link = mysqli_connect("localhost","root","1234");
    mysqli_set_charset($link,'utf8');
    mysqli_query($link,"Use room;");
    $sql = "select * from counter;";
asd
    $result = mysqli_query($link,$sql);
    while ($dbarr = mysqli_fetch_array($result)){
        $pgcount = $dbarr["Tamonnut"];
    }
    $pgcount = $pgcount + 1;
    $pgcount = "000000000000000000" . $pgcount;
    $pgcount = substr($pgcount, -6);
    echo "$pgcount";
    
    $sql = "Update counter set countnum = '$pgcount' where id = 1";
    $result = mysqli_query($link,$sql);
?>
