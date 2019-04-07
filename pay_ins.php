<?php
include "connection.php";
$cusname=$_POST["customer"];
$pdate=$_POST["paydate"];
$desc=$_POST["des"];
$amou=$_POST["am"];

$num="";
$money="";
$new="";
$qr="SELECT * from customers where customer_name='".$cusname."' ";
$x=$con->query($qr);
if($x->num_rows>0)
{
    $y=$x->fetch_assoc();
    $num=$y["c_id"];
    $money=$y["balance"];
    $new=$money-$amou;
    $qr2="INSERT INTO payments values(NULL,'".$num."','".$pdate."','".$desc."','".$amou."')";
    $con->query($qr2);
$qr3="UPDATE customers set balance='".$new."' where c_id='".$num."'";
if($con->query($qr3))
{
    $msg="balance left = '".$new."'";    

        header("Location:payments.php?message=$msg");    

}
}
else
{
    
    $msg="you entered an in-correct name,please check the list.php ";    

        header("Location:payments.php?message=$msg");
    
}


?>