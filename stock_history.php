<?php 
include "connection.php"; 
if(isset($_POST["pro_in"]))
{
    $proname=$_POST["pro_in"];
 $qry1="SELECT stock_id,arrival_date, quantity from stock where stock.p_id=(select p_id from products where product_name='".$proname."')";
    $res1=$con->query($qry1);

}
?>

<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<title> Stock History</title>
<style> 
    .bak{
    background-color: CEEBEF
    }
    .tbl{
    background-color: 6BBDD5;
        
    }
    </style>
    </head>
    <body class="bak">
    <form method="post" action="">
    <table align="center">
        <tr>
        <td>
            
<div class="page-header" align="center">
			<h2  >HISTORY</h2>
		</div>
           <div class="form-group row">
            <div class="col-sm-12">
                <select class="form-control" name="pro_in">
                <?php
                include "connection.php";
                $qry="SELECT product_name from products";
            $res=$con->query($qry);
            while($row=$res->fetch_assoc())
            {
            echo '<option value="'.$row['product_name'].'">'. $row['product_name'].'</option>';    
                  }
                            
                ?>
                </select>
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
        <div class="col-sm-10" align="right">
<?php
        
include "connection.php";
        if(isset($_POST["pro_in"]))
        {
            $name=$_POST["pro_in"];
         $m="Stock details for : ".$name.""; 
            echo "<h2 style  align='center'> ".$m."</h2>";
            $result="";
            if($res1->num_rows>0)
            {
         $result.="<table class='table table-bordered' align='center' style='color: black'>
                    <th class='tbl'>stockID</th>
                    <th class='tbl'>Date Arrived </th>
                    <th class='tbl'>Quantity</th>";
                while( $row1=$res1->fetch_assoc())
            {
                $result .="<tr> 
                        <td>".$row1["stock_id"]." </td>
                <td>".$row1["arrival_date"]." </td>
                <td>".$row1["quantity"]." </td>
                </tr>";
                 }      
                $result.="</table>";
                echo $result;
            }
        }
        ?>
    <div class="col-sm-2" >
    </body>
</html>