<html>
<head>
<title>Products</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<style> 
    .bak{
    background-color: F2F8F7;
    }
    </style>
</head>
<body class="bak"> 
<form action="pro_ins.php" method="post">
<table align="center">
                       
    <tr>
        <td>
            <div class="page-header" align="center"><h2 style="color:85A4FF">New Product</h2></div>
            <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" name="p_name" class="form-control" placeholder="Product">
                </div>
            </div>   
            <div class="form-group row">
            <div class="col-sm-12">
                <input type="number" name="unit" class="form-control" placeholder="Quantity">
                </div>
            </div>   
            <div class="form-group row">
            <div class="col-sm-12">
                <input type="number" name="oprice" class="form-control" placeholder="Original Price">
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
    echo "<p align='center'>".$_GET["message"]."</p>";
    
    ?>
                       </form>
                       </body>
                       </html>