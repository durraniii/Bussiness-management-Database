<html>
<head>
         <link href="css/bootstrap.min.css" rel="stylesheet">
<title>
Payments
</title>
    <style> 
        .bak{
            background-color: F4F6F7;
        }
          body
     {
         
         background: url("OG2O1C0.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
     }
    </style>
</head>
<body class="bak">
<form action="pay_ins.php" method="post">
    <table align="center">
        <tr>
        <td>
            <div class="page-header" align="center"><h2 style="color:white"><b>Payments</b></h2></div>
            <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" name="customer" class="form-control" placeholder="Customer Name" required>
                </div>
            </div>   
            <div class="form-group row">
            <div class="col-sm-12">
                <input type="date" name="paydate" class="form-control" placeholder="Payment Dates">
                </div>
            </div>   
            <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" name="des" class="form-control" placeholder="Description">
                </div>
            </div>   
<div class="form-group row">
            <div class="col-sm-12">
                <input type="number" name="am" class="form-control" placeholder="Amount (Rs)" required>
                </div>
            </div>   

            
            
            <div class="form-group row">  
            <div class="col-sm-12" align="right">
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
