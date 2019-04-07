<?php
include "connection.php";
$pname=$_POST["productname"];
$un=$_POST["p_quantity"];

$chk="Select stock from products where product_name='".$pname."' ";
$temp=$con->query($chk);
$u="";
if($temp->num_rows>0)
{
    
$t1=$temp1->fetch_assoc();
    $u=$t1["stock"];
    if($un>$u)
    {
        
       ?

    }
}
?>