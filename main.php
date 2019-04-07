<html>
<head>
     <link href="css/bootstrap.min.css" rel="stylesheet">
<title> ORDERS </title>
 <style> 
    .bak{
    background-color: E6F7F9
    }
     .detail{
         color:823BA9; 
         font-size:18px;
         font-weight: bold;
     font-family:courier;
     }
     body
     {
         
         background: url("O81G700.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
     }
    </style>
    <script >
 var total=0;
    function fun()
    {
        var p_na=document.getElementById("pn").value;
        var value1 = document.getElementById("quan").value;
		var msg = document.getElementById("msg");
		var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function()
            {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                {
						msg_check.innerHTML = xmlhttp.responseText;
                        
                        
				}
			};
		xmlhttp.open("POST", "checkunit.php?val="+value1 +"&pname="+p_na, true);
		xmlhttp.send();
}
            function addPro()
     {
         var i=1;
         var p=document.getElementById("pr").value;
        document.getElementById("pr").value="";
         var q=document.getElementById("quan").value;
         document.getElementById("quan").value="";
         var t=parseInt(p)*parseInt(q);
         total+=t;
         document.getElementById("total").innerHTML=total;
         var pr=document.getElementById("pn").value;
         document.getElementById("products").innerHTML+="<br>";
         var list=pr+"  "+q+"  "+p;
        
         var node=document.createTextNode(list);
         document.getElementById("products").appendChild(node);
         
         
     }
        function saveData()
     {
         var data =document.getElementById("products").innerHTML;
         document.getElementById("hide").value=data;
        
         document.getElementById("btn").click();
     }
        </script>

 
    
    </head>
<body class="bak">
    <p id="msg">
    
    </p>
    
<form action="main_ins.php" method="post">
    <input type="text" name="hide" id="hide" style="display:none">
     <input type="submit" id="btn" style="display:none">
    <table align="center">
        <tr>
        <td>
        <div class="page-header" align="center"><h2 style="color:white"><i>ORDERS</i></h2></div>
            <div class="form-group row">
            <div class="col-sm-10">
                <input type="text" name="cname" class="form-control" placeholder="Customer Name">
                </div>
            </div>  
            <div class="form-group row">
            <div class="col-sm-10">
                <input type="Date" name="order_date" class="form-control" placeholder="Date today">
                </div>
            </div>  
        
        
        
      <div class="form-group row">
            <div class="col-sm-10">
                <select class="form-control" id="pn">
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
            <div class="col-sm-8">
                <input type="number" name="p_quantity1" id="quan" class="form-control" placeholder="Quantity"  onfocusout="fun();">
                <label id="msg_check" style="color:red"s >  </label>
                </div>
            </div>
    <div class="form-group row">
            <div class="col-sm-8">
                <input type="number" name="p_price1" id="pr" class="form-control" placeholder="Price" >
                </div>
        <div class="col-sm-4">
                
        <input type="button" value="Add more" class="btn btn-success" onclick="addPro()" >
        </div>
            </div>
                
             <h2 style="color:white;"> <i>Products Selected</i></h2>
            <table class="table table-bordered" > 
                
                 <p class="detail" id="products"></p>
                        <th style="color:white;"  id=" ">
                            Total:
                 <p id="total"></p>
            </th>
        
                 </table>  
        <div class="form-group row">
            <div class="col-sm-8 " align="right">
                <input type="number" name="rec" class="form-control" placeholder="Recieved">
                </div>
            </div>    
            <div class="col-sm-2" align="right">
                <input type="submit" value="Save" class="btn btn-primary" onclick="saveData();" >
                </div> 
        </tr>   
            </td>
    </table>
      <?php
if(isset($_GET["message"]))
    echo "<p class='alert alert-success' align='center'>".$_GET["message"]."</p>";
    
    ?>
 </form> 
   
</body>
</html>

                         