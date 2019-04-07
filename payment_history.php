<?php 
include "connection.php"; 
$i="";
if(isset($_POST["cname"]))
{
    $custname=$_POST["cname"];
 $in="SELECT c_id from customers where customer_name= '".$custname."'  ";
    $t=$con->query($in);
   if($t->num_rows>0)
   {
    $out=$t->fetch_assoc();
    $i=$out["c_id"];
   }
   
}
?>

<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<title> PAYMENTS RECORD</title>
<style> 
    .bak{
    background-color: beige
    }
    .tbl{
        
        background-color: darkkhaki;
            font-size :12px;
        color: black;
    table-layout: fixed;
    column-rule-width: thick;
        outline-color: brown;
    }
    
    </style>
    </head>
    <body class="bak">
    <form method="post" action="">
    <table align="center">
        <tr>
        <td>
            
<div class="page-header" align="center">
			<h2 >Payment Details</h2>
		</div>
           <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" name="cname" class="form-control" placeholder="Customer Name">
                </div>
            </div>
            <div class="form-group row">  
            <div class="col-sm-8" align="right">
                <input type="submit" value="Search" class="btn btn-primary " >
                </div>
            </div>   
            
            </td>
        </tr>
    </table>
    </form>
    <div class="col-sm-8" >
<?php
        
include "connection.php";
        $result="";
        
        if(isset($i))
        {
         $z="select * from payments where c_id='".$i."' "; 
$res=$con->query($z);
   
            if($res->num_rows>0)
            {
         $result.="<table class='table table-bordered' align='center' >
                    <th class='tbl'>ID</th>
                    <th class='tbl'> Date </th>
                    <th class='tbl'> Type </th>
                    <th class='tbl'>Amount</th>";
                while( $row1=$res->fetch_assoc())
            {
                $result .="<tr> 
                        <td>".$row1["payment_id"]." </td>
                <td>".$row1["paydate"]." </td>
                <td>".$row1["decription"]." </td>
                <td>".$row1["amount"]." </td>
                </tr>";
                    }      
                $result.="</table>";
                echo $result;
             }
            
        }
      else
    {
        $custname=$_POST["cname"];
        echo "No record found for '".$custname."'";
        
    }
        ?>
        
        
    </body>
    </html>
        