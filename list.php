<?php 
include "connection.php"; 
if(isset($_POST["cus"]))
{
    $cus_na=$_POST["cus"];
 $qr1="SELECT * FROM customers where customer_name like '%".$cus_na."%' ";
    $re=$con->query($qr1);

}
?>

<html>
<head>
     <link href="css/bootstrap.min.css" rel="stylesheet">
<title>list</title>
<style> 
    .bak{
    background-color: EDFDFC;
    }
    .tbl{
    background-color: powderblue;
        
    }
    </style>
    </head>
    <body class="bak">
    <form method="post" action="">
    <table align="center">
        <tr>
        <td>
            
<div class="page-header" align="center">
			<h2  >List Of Customers</h2>
		</div>
           <div class="form-group row">
            <div class="col-sm-12">
                 <input type="text" name="cus" class="form-control" placeholder="Name (any)" required>
                </div>
            </div> 
        <div class="form-group row">  
            <div class="col-sm-8" align="center">
                <input type="submit" value="Search" class="btn btn-primary " >
                </div>
            </div>          
            </td>
        </tr>
        </table>
        </form>
        <div class="col-sm-10 ">
    <?php
        include "connection.php";
        if(isset($_POST["cus"]))
        {
            $c=$_POST["cus"];
        $m="showing records of the customers having names :".$c."";

            $result=""; 
        if($re->num_rows>0)
            {
         $result.="<table class='table table-bordered' align='center' style='color: black'>
                    <th class='tbl'>ID</th>
                    <th class='tbl'>Name </th>
                    <th class='tbl'>Business Address</th>
                    <th class='tbl'>contact</th>
                    <th class='tbl'>Amount Recievable</th>   
                    ";
             echo "<h3 align='center' >" .$m."</h3>";
                while( $r1=$re->fetch_assoc())

              {
                $result .="<tr> 
                        <td>".$r1["c_id"]." </td>
                <td>".$r1["customer_name"]." </td>
                <td>".$r1["address"]." </td>
                <td>".$r1["contact"]." </td>
                <td>".$r1["balance"]." </td>
                </tr>";
                 }      
                $result.="</table>";
                echo $result;
            }
            
            
        }
        ?>
            <div class="col-sm-10">
    </body>
</html>
            
            