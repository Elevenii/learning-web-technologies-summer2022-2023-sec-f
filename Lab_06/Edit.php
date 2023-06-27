<?php
include 'connect.php';
$id = $_GET['id'];

$sql = "SELECT * FROM `product` WHERE `id` = $id";

$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 0) {
  die("User with ID $id does not exist.");
}
$row = mysqli_fetch_assoc($result);
if (isset($_POST['submit'])) {
  $name =$_POST['name'];
  $buyingprice =$_POST['buyingprice'];
  $sellingprice =$_POST['sellingprice'];

  $sql = "UPDATE `product` SET `buyingprice` = '$buyingprice', `sellingprice` = '$sellingprice' WHERE `id` = $id";
  $result = mysqli_query($con, $sql);

  if ($result) {
    $msg = "Product with ID $id has been updated.";
  } else {
    $msg = "Error updating product with ID $id: " . mysqli_error($con);
  }
  header("Location: datadb.php?msg=" . urlencode($msg));

  exit();
}
?>

<form method="post">
  
<title>Update page</title>
  <div class="form-group">
    <label for="buyingprice">Buying price</label>
    <input type="email" class="form-control" id="buyingprice" name="buyingprice" value="<?php echo $row['buyingprice']; ?>">
  </div>
  <div class="form-group">
    <label for="sellingprice">Selling Price</label>
    <input type="text" class="form-control" id="sellingprice" name="sellingprice" value="<?php echo $row['sellingprice']; ?>">
  </div><hr>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>