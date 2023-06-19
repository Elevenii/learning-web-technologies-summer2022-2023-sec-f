<?php
  if(isset($_POST['button'])){
     $email = $_POST['email'];

    $error = [];
    if(empty($_POST['email'])){
        $error['email'] = 'Insert email';
    }
    else{
        echo "Email is : ". $email;
    }

  }
?>

<html>
<head>
<title>Information</title>
</head>
<body>
  <div>
    <table>
      <td>
    <form action="" method="post" >
      <fieldset>
        <legend>Email</legend>
        <hr>
        <input type="text"  name="email" value="<?php if(isset($email)) echo $email ?> ">
        <span>
          <?php
          if(isset($error['email'])){
            echo $error['email'];
          }
            ?>
        <br>
        </span>
      <button type="submit" name ="button">Submit</button>
      </fieldset>
  </form>
  </div>
  </td>
  </table>
</body>
</html>
