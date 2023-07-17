<?php
$setting1 = 'Change your name';
$setting2 = 'Change your password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $setting1 = $_POST['setting1'];
  $setting2 = $_POST['setting2'];

  header('Location: ' . $_SERVER['PHP_SELF']);
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student Settings</title>
</head>
<body>
  <h1>Student Settings</h1>

  <h2>Current Settings:</h2>
  <p>Setting 1: <?php echo $setting1; ?></p>
  <p>Setting 2: <?php echo $setting2; ?></p>

  <h2>Update Settings:</h2>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="setting1">Setting 1:</label>
    <input type="text" name="setting1" id="setting1" value="<?php echo $setting1; ?>">
    <br>
    <label for="setting2">Setting 2:</label>
    <input type="text" name="setting2" id="setting2" value="<?php echo $setting2; ?>">
    <br>
    <input type="submit" value="Update">
  </form>

<a href="FAQ.html"> back </a>

</body>
</html>