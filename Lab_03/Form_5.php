<?php
  if(isset($_POST['button'])){
     $degree = $_POST['degree'];

    $error = [];
    if(empty($_POST['degree'])){
        $error['degree'] = 'Insert degree';
    }
    else{
        echo "Degree is : ". $degree;
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
        <legend>Degree</legend>
        <hr>
        <input type="checkbox"  name="degree"  id="SSc" value="SSc">SSC
        <input type="checkbox"  name="degree" id="HSc" value="HSc">HSC
        <input type="checkbox"  name="degree" id="BSc" value="BSc">BSC
        <input type="checkbox"  name="degree" id="MSc" value="MSc">MSC
        
        <span>
          <?php
          if(isset($error['degree'])){
            echo $error['degree'];
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