<?php
  if(isset($_POST['submit'])){
     $blood = $_POST['blood'];

    $error = [];
    if(empty($_POST['blood'])){
        $error['blood'] = 'Insert blood group';
    }
    else{
        echo "Blood Group is : ". $blood;
    }

   }
?> 

<html>
<head>
<title>Information</title>
</head>
<body>
    <table>
      <td>
      <form action="" method="post" >
      <fieldset>
        <legend>Blood Group</legend>
        <hr>
        <select name="blood">
          <option value=""></option>
          <option value="A+">A+</option>
          <option value="B+">B+</option>
          <option value="O+">O+</option>
        </select>
            <br>
      <button type="submit" name ="submit">Submit</button>
      </fieldset>
  </form>
  </td>
  </table>
</body>
</html>