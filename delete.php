<?php ob_start(); ?>
<body bgcolor="#CC9900">
    <table width="700" height="480" border="0">
        <tr>
            <td height="119" colspan="2" bgcolor = "#006600">
                <h1><center><font color="#FFFFFF">ผู้ดูแลระบบ</font>
                </center></h1><br>
            </td>
        </tr>
        <td width="1007" bgcolor="#FFFFFF">
    <?php
        session_start();
        if(isset($_SESSION['user']) && isset($_SESSION['password'])){
            $link = mysqli_connect("localhost","root","1234");
            mysqli_set_charset($link,'utf8');
            mysqli_query($link,"Use room;");
            $sql = "Delete from room where room_id = $_GET[id];";
            $result = mysqli_query($link,$sql);
            if($result){
                echo "ลบรายการข้อมูลห้องพักออกจากฐานข้อมูลแล้ว<p>";
                mysqli_close($link);
            }else{
                echo "ไม่สามารถลบรายการห้องพักออกจากฐานข้อมูลได้<p>";

                // Add new "echo"
                echo "โปรดลองใหม่อีกครั้ง";
            }
        }else{
            echo "Invalid to entry the Admmin page";
        }
        include "load_room.php";
    ?>
        <td width="190" bgcolor="#FFFF66">
                <ul>
                    <li><a href="insert_admin.php">เพิ่มข้อมูลรายการห้อง</a></li>
                    <li><a href="load_room_admin.php">แก้ไข-ลบข้อมูลรายการห้อง</a></li>
                    <li><a href="logout_admin.php">ออกจากระบบ</a></li>
                </ul>
            </td>
    </table>
    <?php ob_end_flush();?>