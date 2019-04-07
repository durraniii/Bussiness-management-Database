<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
<title>
Customers Updation 
</title>
<style> 
    .bak{
    background-color: E6F7F9
    }
    </style>
    </head>
<body class="bak">
<form action="update_ins.php" method="post">
    <table align="center">
        <tr>
        <td>
            <div class="page-header" align="center"><h2 style="color:1185CB"><i>Customers Record Updation </i></h2></div>
            <div class="form-group row">
            <div class="col-sm-8">
                <input type="text" name="c_na" class="form-control" placeholder="Name" required>
                </div>
            </div>   
<div class="form-group row">
            <div class="col-sm-8">
                <input type="text" name="addr" class="form-control" placeholder="address (new)">
                </div>
            </div>   
            <div class="form-group row">
            <div class="col-sm-8">
                <input type="text" name="ph" class="form-control" placeholder="Contact (new)">
                </div>
            </div>  
            <div class="form-group row">
            <div class="col-sm-8">
                <input type="number" name="bala" class="form-control" placeholder="Balance ">
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