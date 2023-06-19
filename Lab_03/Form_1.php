<?php
  if(isset($_POST['btn'])){
     $name = $_POST['name'];

    $error = [];
    if(empty($_POST['name'])){
        $error['name'] = 'Insert Name';
    }
    else{
        echo "Name : ". $name;
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
        <legend>Name</legend>
        <hr>
        <input type="text"  name="name" value="<?php if(isset($name)) echo $name ?>" >
        <span>
          <?php
          if(isset($error['name'])){
            echo $error['name'];
          }
            ?>
        <br>
        </span>

      <button type="submit"  name ="btn">Submit</button>
      </fieldset>
  </form>
  </div>
  </td>
  </table>
</body>
</html>
