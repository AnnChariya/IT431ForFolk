<?php 
    $date = date("j");
    $day = date("D");
    $month = date("M");
    $year = date("Y");
    switch($day){
        case 'Sun' : $day = "อาทิตย์"; break;
        case 'Mon' : $day = "จันทร์" ; break;
        case 'Tue' : $day = "อังคาร" ; break;
        case 'Wed' : $day = "พุธ" ; break;
        case 'Thu' : $day = "พฤหัสบดี" ; break;
        case 'Fri' : $day = "ศุกร์" ; break;
        case 'Sat' : $day = "เสาร์"; break;
    }

    switch($month){
        case 'Jan' : $month = "มกราคม"; break;
        case 'Feb' : $month = "กุมภาพันธ์"; break;
        case 'Mar' : $month = "มีนาคม" ; break;
        case 'Apr' : $month = "เมษายน" ; break;
        case 'May' ; $month = "พฤษภาคม" ; break;
        case 'Jun' : $month = "มิถุนายน" ; break;
        case 'Jul' : $month = "กรกฎาคม" ; break;
        case 'Aug' : $month = "สิงหาคม" ; break;
        case 'Sep' : $month = "กันยายน" ; break;
        case 'Oct' : $month = "ตุลาคม" ; break;
        case 'Nov' : $month = "พฤศจิกายน" ; break;
        case 'Dec' : $month = "ธันวาคม" ; break;
        kanchana
    }
    $year = $year + 543;
    echo "<p><div align=right>
        วัน $day ที่ $date เดือน $month พ.ศ. $year  </div>";
?>
