<?php
include_once '../config.php';
$msg="";
if(isset($_POST['can_uid']))
{
    $can_name=$_POST['can_name'];
    $can_fname=$_POST['can_fname'];
    $can_dob=$_POST['can_dob'];
    $can_uid=$_POST['can_uid'];
    $can_mob=$_POST['can_mob'];
    $can_email=$_POST['can_email'];
    
    $s=  mysql_query("select get_candidate_reg() as reg",$conn);
    $qr=mysql_fetch_array($s);
    if($qr['reg']!="")
    {
        
    }
}


?>