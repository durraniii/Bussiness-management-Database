<?php
include "connection.php";
$p=$_POST["p_name"];
$a=$_POST["unit"];
$c=$_POST["oprice"];

$ins_qry="insert into products values (NULL,'".$p."','".$c."','".$a."')";
if($con->query($ins_qry))
{
     $msg= "Product inserted !";
        header("Location:productmain.php?message=$msg");
}

?>