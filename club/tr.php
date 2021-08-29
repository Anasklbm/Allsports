<?php
include '../connection.php';
$sel_gal=mysqli_query($dbcon,"select * from fb_squad where cid='star123'");

while($r=mysqli_fetch_row($sel_gal))
{
 $ins=mysqli_query($dbcon,"insert into fb_squad values('','$r[1]','$r[2]','$r[3]','$r[4]','$r[5]','$r[6]','$r[7]','$r[8]','Warriors','wa123','$r[11]','$r[12]','$r[13]','$r[14]','$r[5]')");
    if($ins>0)
    {
      
                header("location:hgjhg.php?success=1");
            }   
}
?>
