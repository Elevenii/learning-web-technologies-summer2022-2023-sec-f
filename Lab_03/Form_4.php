<?php
  if(isset($_POST['button'])){
    $gender = $_POST['gender'];

    $error = [];
    if(empty($_POST['gender'])){
        $error['gender'] = "<br />" . 'Insert Gender Types';
    }
    else{
        echo "Gender is : ". $gender;
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
        <legend>Gender</legend>
        <hr>
        <input type="radio" id="Male" name="gender" value="Male">Male
        <input type="radio"  id = "Female" name="gender" value = "Female">Female
        <input type="radio"  id = "Other" name="gender" value = "Other">Other
        <span>
          <?php
          if(isset($error['gender'])){
            echo $error['gender'];
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