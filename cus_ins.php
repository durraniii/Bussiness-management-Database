<?php
include "connection.php";
$c_na=$_POST["c_n"];
$c_add=$_POST["Add"];
$c_con=$_POST["ph_no"];
$c_bal=$_POST["bal"];


    if(!empty($c_add) && empty($c_con) && empty($c_bal))
    {
        $q1="INSERT INTO customers values(NULL,'".$c_na."','".$c_add."',NULL,NULL)";
$con->query($q1);    
    }
else if(!empty($c_bal) && empty($c_con) &&  empty($c_add))
    {
        $q2="INSERT INTO customers values(NULL,'".$c_na."',NULL,NULL,'".$c_bal."')";
    $con->query($q2);
    }
else if(!empty($c_con) && empty($c_add ) && empty($c_bal))
    {
        $q3="INSERT INTO customers values(NULL,'".$c_na."',NULL,'".$c_con."',NULL)";
    $con->query($q3);
    }

else if(empty($c_add) && !empty($c_con ) && !empty($c_bal))
    {
        $q4="INSERT INTO customers values(NULL,'".$c_na."',NULL,'".$c_con."','".$c_bal."')";
    $con->query($q4);
     }

else if(!empty($c_add) && !empty($c_bal) && empty($c_con))
    {
        $q5="INSERT INTO customers values(NULL,'".$c_na."','".$c_add."',NULL,'".$c_bal."')";
    $con->query($q5);
   
    }
else if(empty($c_bal) && !empty($c_add) && !empty($c_con))
    {
        $q7="INSERT INTO customers values(NULL,'".$c_na."','".$c_add."','".$c_con."',NULL)";
    $con->query($q7);
    
    }

else if(!empty($c_add && $c_con && $c_bal))
{
    $q6="INSERT INTO customers values(NULL,'".$c_na."','".$c_add."','".$c_con."','".$c_bal."')";
    $con->query($q6);
    
}
 $msg= "Customer Added !";
        header("Location:customers.php?message=$msg");
?>