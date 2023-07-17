<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];

    $errors = array();

    
    if (empty($name)) {
        $errors['name'] = 'Name is required';
    }

    
    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }

    
    if (empty($password)) {
        $errors['password'] = 'Password is required';
    } elseif (strlen($password) < 4) {
        $errors['password'] = 'Password must be at least 4 characters long';
    }

    
    if (empty($confirm_password)) {
        $errors['confirm_password'] = 'Confirm Password is required';
    } elseif ($password !== $confirm_password) {
        $errors['confirm_password'] = 'Passwords do not match';
    }

   
    if (empty($gender)) {
        $errors['gender'] = 'Gender is required';
    }

    
    if (empty($errors)) {
        
        header("Location: success.html");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form - Error</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="POST" action="registration.php">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo isset($name) ? $name : ''; ?>" required>
            <span class="error"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></span>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
            <span class="error"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></span>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <span class="error"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></span>
        </div>
        <div>
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
            <span class="error"><?php echo isset($errors['confirm_password']) ? $errors['confirm_password'] : ''; ?></span>
        </div>
        <div>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="male" <?php echo isset($gender) && $gender === 'male' ? 'selected' : ''; ?>>Male</option>
                <option value="female" <?php echo isset($gender) && $gender === 'female' ? 'selected' : ''; ?>>Female</option>
                <option value="other" <?php echo isset($gender) && $gender === 'other' ? 'selected' : ''; ?>>Other</option>
            </select>
            <span class="error"><?php echo isset($errors['gender']) ? $errors['gender'] : ''; ?></span>
        </div>
        <div>
            <input type="submit" value="Register">
        </div>
    </form>
</body>
</html>