<?php
include "connection.php";
$p=$_REQUEST["pname"];

if(!empty($_REQUEST["val"]))
{
$qty2 = $_REQUEST["val"];

	
$chk="select stock from products where product_name ='".$p."'  ";
$s=$con->query($chk);
if($s->num_rows>0)
{

$re=$s->fetch_assoc();
    
    $qty=$re["stock"];
    }

	if($qty2>$qty)
    {
     
		echo "stock not available";
    }
}
?>