<?php
include "connection.php";
$cn=$_POST["c_na"];
$addrs=$_POST["addr"];
$phone=$_POST["ph"];
$blnc=$_POST["bala"];

$q0="SELECT * from customers where customer_name='".$cn."'";
$b=$con->query($q0);
    if($b->num_rows>0)
    {
if(!empty($addrs) && empty($phone) && empty($blnc))
    {
        $q1="UPDATE customers set address='".$addrs."' where customer_name='".$cn."' ";
$con->query($q1);    
    }
else if(!empty($blnc) && empty($phone) &&  empty($addrs))
    {
        $q2="UPDATE customers set balance='".$blnc."' where customer_name='".$cn."' ";;
    $con->query($q2);
    }
else if(!empty($phone) && empty($addrs ) && empty($blnc))
    {
        $q3="UPDATE customers set contact='".$phone."' where customer_name='".$cn."' ";
    $con->query($q3);
    }

else if(empty($addrs) && !empty($phone ) && !empty($blnc))
    {
        $q4="UPDATE customers set contact='".$phone."',balance='".$blnc."' where customer_name='".$cn."' ";
    $con->query($q4);
     }

else if(!empty($addrs) && !empty($blnc) && empty($phone))
    {
        $q5="UPDATE customers set address='".$addrs."',balance='".$blnc."' where customer_name='".$cn."' ";
    $con->query($q5);
   
    }
else if(empty($blnc) && !empty($addrs) && !empty($phone))
    {
        $q7="UPDATE customers set address='".$addrs."',contact='".$phone."' where customer_name='".$cn."' ";
    $con->query($q7);
    
    }

else if(!empty($addrs && $phone && $blnc))
{
    $q6="UPDATE customers set address='".$addrs."',contact='".$phone."', balance='".$blnc."' where customer_name='".$cn."' ";
    $con->query($q6);
    
}
$msg="record Updated !";    

        header("Location:cus_update.php?message=$msg");    

        
    }

else 
{
$msg="no such customer exists,kindly check 'list.php' (form)";    

        header("Location:cus_update.php?message=$msg");    
}
?>