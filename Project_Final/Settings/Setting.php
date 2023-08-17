<!DOCTYPE html>
<html>
<head>
  <title>Student Settings</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
    }

    h1, h2 {
      text-align: center;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"], input[type="file"] {
      width: 100%;
      padding: 5px;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
    }

    p.message {
      font-style: italic;
      color: #4CAF50;
    }

    img {
      max-width: 100%;
      height: auto;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <?php
  $setting1 = 'Change your name';
  $setting2 = 'Change your password';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $setting1 = $_POST['setting1'];
    $setting2 = $_POST['setting2'];

    
    if ($_FILES['image']['error'] === 0) {
      $image_name = $_FILES['image']['name'];
      $target_dir = 'uploads/';
      $target_path = $target_dir . $image_name;
      move_uploaded_file($_FILES['image']['tmp_name'], $target_path);
    }

    $response = array('status' => 'success', 'message' => 'Settings updated successfully.', 'image' => $target_path);
    echo json_encode($response);
    exit();
  }
  ?>
  
  <h1>Student Settings</h1>

  <h2>Current Settings:</h2>
  <p>Setting 1: <?php echo $setting1; ?></p>
  <p>Setting 2: <?php echo $setting2; ?></p>
  <p>Current Image:</p>
  <img src="<?php echo $target_path ?? 'default_image.jpg'; ?>" alt="Current Image">

  <h2>Update Settings:</h2>
  <form id="settingsForm" enctype="multipart/form-data">
    <label for="setting1">Setting 1:</label>
    <input type="text" name="setting1" id="setting1" value="<?php echo $setting1; ?>">
    <br>
    <label for="setting2">Setting 2:</label>
    <input type="text" name="setting2" id="setting2" value="<?php echo $setting2; ?>">
    <br>
    <label for="image">Update Image:</label>
    <input type="file" name="image" id="image">
    <br>
    <input type="submit" value="Update">
  </form>
  <p class="message" id="message"></p>

  <script>
    const form = document.getElementById('settingsForm');
    const message = document.getElementById('message');

    form.addEventListener('submit', (event) => {
      event.preventDefault();

      const setting1Input = document.getElementById('setting1');
      const setting2Input = document.getElementById('setting2');
      const imageInput = document.getElementById('image');

      const setting1Value = setting1Input.value.trim();
      const setting2Value = setting2Input.value.trim();

      if (!setting1Value || !setting2Value) {
        message.textContent = 'Please fill in all fields.';
      } else {
        
        message.textContent = '';

        const formData = new FormData();
        formData.append('setting1', setting1Value);
        formData.append('setting2', setting2Value);
        formData.append('image', imageInput.files[0]); 


        const xhr = new XMLHttpRequest();
        xhr.open('POST', window.location.href, true);
        xhr.onreadystatechange = function () {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              const response = JSON.parse(xhr.responseText);
              message.textContent = response.message;
              
              document.getElementById('setting1').value = setting1Value;
              document.getElementById('setting2').value = setting2Value;
              
              const currentImage = document.querySelector('img');
              currentImage.src = response.image;
            } else {
              message.textContent = 'An error occurred. Please try again later.';
            }
          }
        };
        xhr.send(formData);
      }
    });
  </script>

<a href="Faq.html"> back </a>
</body>
</html>
