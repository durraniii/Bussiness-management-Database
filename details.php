<?php 
include "connection.php"; 
if(isset($_POST["cname"]))
{
    $cusname=$_POST["cname"];
    $temp="select * from customers where customer_name='".$cusname."' ";
    $test=$con->query($temp);
    
    $temp2=$test->fetch_assoc();
    $c=$temp2["c_id"];
 $qry2="SELECT details.order_id,orders.order_date,products.product_name,orders.recieved,details.quantity,details.price from products,details,orders,customers where orders.c_id='".$c."' AND orders.c_id=customers.c_id AND products.p_id=details.p_id AND orders.order_id=details.order_id "; 
    $resu=$con->query($qry2);
   
}
?>

<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<title> ORDERS RECORD</title>
<style> 
    .bak{
    background-color: CEEBEF
    }
    .tbl{
        
        background-color:mediumspringgreen;
            font-size :12 px;
        color: black;
        
    }
    
    </style>
    </head>
    <body class="bak">
    <form method="post" action="">
    <table align="center">
        <tr>
        <td>
            
<div class="page-header" align="center">
			<h2 style="color : ">Record</h2>
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
        <div class="col-sm-10"
<?php
        include "connection.php";
        if(isset($_POST["cname"]))
        {
            
            $name=$_POST["cname"];
         $m="details of the customer : ".$name.""; 
            echo "<h2 style  align='center'><b> ".$m."</b></h2>";
            $result="";
            $total=0;
            if($resu->num_rows>0)
            {
         $result.="<table class='table table-bordered' align='center' style='color: black'>
                    <th class='tbl'>Order ID</th>
                    <th class='tbl'>Date Of Order </th>
                    <th class='tbl'>Product</th>
                    <th class='tbl'>Quantity</th>
                    <th class='tbl'>price</th> ";
                
                while( $row1=$resu->fetch_assoc())
            {
                $result .="<tr> 
                        <td>".$row1["order_id"]." </td>
                <td>".$row1["order_date"]." </td>
                <td>".$row1["product_name"]." </td>
                <td>".$row1["quantity"]." </td>
                <td>".$row1["price"]." </td>
                </tr>";
            $c=$row1["quantity"]*$row1["price"];
                $total=$total+$c;        
            }      
                $result.="</table>";
                echo $result;
            $last="total : ".$total." ";
                echo "<h3 align='right'><b>".$last."</b></h3>";             
            }
            else
            {
                echo "no record found ! ";
            }
        }
        ?>
        
        
</body>
    </html>
        
        
