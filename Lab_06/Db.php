<?php
require_once 'connect.php';
if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $buyingprice=$_POST['buyingprice'];
   $sellingprice=$_POST['sellingprice'];
   $sql="insert into `product` (name,buyingprice,sellingprice) 
   values('$name','$buyingprice','$sellingprice')";
   $result=mysqli_query($con,$sql);
   if($result){
    // echo"Data inserted Successfully";
    header('location: datadb.php');
   } else{
    die(mysqli_error($con));
   }
}
?>
<html lang="en">

<title>Add Product</title>
<body>

    <div class="signup-content">
        <div class="error"></div>
        <form id="form" name="login" method="POST">
            <h1>Add Product</h1>
            <table>
                <tr>
                    <td>
                        <label for="name">Name</label><br />
                        <input type="text" name="name" />
                    </td>
                <tr>
                    <td>
                        <label for="buyingprice">Buying Price</label><br />
                        <input type="text" name="buyingprice" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="sellingprice">Selling Price</label><br />
                        <input type="text" name="sellingprice" />
                    </td>
                </tr>
                </table><hr>


                <input type="checkbox" id="data" name="data" value="product">
            <label for="data"> Display</label><br><hr>
                <button type="submit" class="btn btn-primary" name="submit">Save</button>
            
        </form>
</body>
</html>