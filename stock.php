<html>
<head>
<title> Stock</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .ty{
            background-color: lightblue
            
        }
    </style>
    </head>
    
<body class="ty">
<form action="stock_ins.php" method="post">
    <table align="center">
        <tr>
        <td>
            <div class="page-header" align="center"><h2 style="color:0F88AB">Stock arrival</h2></div>
            <div class="form-group row">
                <div class="col-sm-12">
                <select class="form-control" placeholder="products" name="pro_in">
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
            <div class="col-sm-12">
                <input type="date" name="ar_date" class="form-control" placeholder="Arrival Date">
                </div>
            </div>   
            <div class="form-group row">
            <div class="col-sm-12">
                <input type="number" name="p_quantity" class="form-control" placeholder="Quantity">
                </div>
            </div>   
            <div class="form-group row">  
            <div class="col-sm-8" align="right">
                <input type="submit" value="Save" class="btn btn-primary " >
                </div>
            </div>   
            
            </td>
            </tr>
 </table>
<?php
if(isset($_GET["message"]))
    echo "<p class='alert alert-success' align='center'>".$_GET["message"]."</p>";
    
    ?>
    </form>
</body>
</html>