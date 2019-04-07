<html>
<head>
     <link href="css/bootstrap.min.css" rel="stylesheet">
<title>
Entry
</title>
    <style> 
    .bak{
    background-color: E6F7F9
    }
    </style>
</head>
<body class="bak">
<form action="cus_ins.php" method="post">
    <table align="center">
        <tr>
        <td>
            <div class="page-header" align="center"><h2 style="color:0F88AB">Customer Entry</h2></div>
            <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" name="c_n" class="form-control" placeholder="Customer Name">
                </div>
            </div>   
<div class="form-group row">
            <div class="col-sm-12">
                <input type="text" name="Add" class="form-control" placeholder="address">
                </div>
            </div>   
            <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" name="ph_no" class="form-control" placeholder="Contact">
                </div>
            </div>  
            <div class="form-group row">
            <div class="col-sm-12">
                <input type="number" name="bal" class="form-control" placeholder="Balance (if any)">
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