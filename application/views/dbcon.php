<?php
    $server = '97.74.86.74'; 
    $user = 'olympiad_admin';
    $password = '@$p3ElQvbys5';
    $db = 'olympiad_admin'; 

    $con= mysqli_connect($server,$user,$password,$db);

    if($con){?>
        <script> alert(connected!);</script>  <?php
    }
    else{
        ?><script> alert(connected failed);</script><?php
    }
?>