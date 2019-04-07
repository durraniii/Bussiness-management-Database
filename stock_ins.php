<?php
include "connection.php";
$pr=$_POST["pro_in"];
$a_date=$_POST["ar_date"];
$p_unit=$_POST["p_quantity"];

$q0="SELECT * from products where product_name = '".$pr."'";
$a=$con->query($q0);
$updation=0;

if($a->num_rows>0)
{
    $row = $a->fetch_assoc();
    $result1 = $row["stock"];

    $d=$row["p_id"];
$updation=$result1+$p_unit;
}


 $qry1="INSERT INTO stock values (NULL,'".$d."','".$a_date."','".$p_unit."') ";
        
$q1="UPDATE products set stock='".$updation."' where product_name='".$pr."'";
$msg="";
if($con->query($qry1) && $con->query($q1))
{
 $msg= "Stock updated !";
        header("Location:stock.php?message=$msg");
}

?>