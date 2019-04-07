<?php

include "connection.php";
$naam=$_POST["cname"];
$dt=$_POST["order_date"];
$data=$_POST["hide"];
$re=$_POST["rec"];
$peice=explode ("<br>",$data);
$len=count($peice);

$qu="Select * from customers where customer_name='".$naam."' ";
$run=$con->query($qu);
if($run->num_rows>0)
{
    $total=0;
    $result1=array();
    $pr_id=array();
    $store=array();
    $out=$run->fetch_assoc();
    $cus_id=$out["c_id"];
    $cus_money=$out["balance"];    
    $qry1="INSERT INTO orders values (NULL,'".$dt."','".$cus_id."','".$re."') ";
        $con->query($qry1);
     
    for($i=1;$i<$len;$i++)
{
    $d=explode (" ",$peice[$i]);
    $prname= $d[0];
    $prquan= $d[2];
    $prru= $d[4];
   $temp="select * from products where product_name='".$prname."' ";
    $temp1=$con->query($temp);
    $temp2=$temp1->fetch_assoc();
    $result1[$i]=$temp2["stock"];
    $pr_id[$i]=$temp2["p_id"];
    $result1[$i]=$result1[$i]-$prquan;
        $qry2="UPDATE products SET stock='".$result1[$i]."' WHERE product_name='".$prname."' ";
 $con->query($qry2);
       
    $mul=$prquan*$prru;
$total=$total+$mul;
    $re1 = "SELECT order_id FROM orders where orders.c_id ='".$cus_id."'  AND orders.order_date ='".$dt."'";
        $re2= $con->query($re1);
     $re3 = $re2->fetch_assoc();  

        $store[$i] = $re3["order_id"];
        
        $qry3="INSERT INTO details values(NULL,'".$store[$i]."','".$pr_id[$i]."','".$prquan."','".$prru."')";
        $con->query($qry3);
             
}
 $a=$total;

    if($re>0)
{
    $a=$total-$re;
$b=$cus_money+$a;
}
$b=$cus_money+$a;
    $qry4="UPDATE customers set balance='".$b."' where c_id='".$cus_id."'  ";
    $con->query($qry4);
    $msg= "Done !";
        header("Location:main.php?message=$msg");

}

else
{
    $msg= "this customer does not exists,record an entry on customers.php";
        header("Location:main.php?message=$msg");

    
}

?>