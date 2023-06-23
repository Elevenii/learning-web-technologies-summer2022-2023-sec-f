<?php
    session_start();
    
?>

<html>
<head>
    <title>Home</title>
</head>
<body>
    <header>
    <table border="1" width=100%>
        <tr height="100px">
            <th width=20%>
                <a href="publicHome.php">
                    <img src="logo.jpg" alt="logo">
                </a>
            </th>
            <th></th>
            <th width=20%>
                <a href="publicHome.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="registration.php">Registration</a>
            </th>
        </tr>
        
        <body>
        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="post" action="registrationCheck.php">
                    <fieldset>
                        <legend>Registration</legend>
                        <table align="center" >
                            <tr height=40px>
                                <td width=50%>
                                    Name : 
                                </td>
                                <td>
                                    <input type="text" name="name" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Email : 
                                </td>
                                <td>
                                    <input type="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input type="text" name="username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Password : 
                                </td>
                                <td>
                                    <input type="password" name="password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td>
                                    Confirm Password : 
                                </td>
                                <td>
                                    <input type="password" name="confirmPassword" value="<?php echo isset($_SESSION['confirmPassword']) ? $_SESSION['confirmPassword'] : ''  ?>">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Male') echo "checked" ?> value="Male"/> Male
                                            <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Female') echo "checked" ?> value="Female"/> Female
                                            <input type="radio" name="gender" <?php if(isset($_SESSION['gender']) && $_SESSION['gender']=='Other') echo "checked" ?> value="Other"/> Other <br>
                                        </fieldset>
                                </td>
                            </tr>
                            <tr height=100px>
                                <td colspan="2">
                                        <fieldset>
                                            <legend>Date of Birth</legend>
                                            <input type="date" name="dob" value="<?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : ''  ?>"/>
                                        </fieldset>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Submit">            
                                <input type="reset" name="" value="Reset">
                                </td>              
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <?php
                                        
                                        if(isset($_SESSION['submit'])) 
                                        {
                                            if($_SESSION['password'] != $_SESSION['confirmPassword'])
                                            {
                                                echo "Password does not match!!! <br>";
                                                exit;
                                            } 
                                            
                                            foreach ($_SESSION as $key => $value) {
                                                if($key[0] != '#')
                                                if (!isset($_SESSION[$key]) or empty($value)) {
                                                    echo $key. " not set! <br>";     
                                                    break;                                               
                                                }
                                            }

                                            if(!isset($_SESSION['gender']))
                                            {
                                                echo "gender not set!";
                                            }
                                            

                                        }
                                        
                                        
                                        
                                    ?>
                                </td>              
                            </tr>
                        </table>
                    </fieldset>

                </form>

            </td>
            <td width=20%></td>
        </tr>
        <footer>
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copytight © 2023</p>
            </td>
        </tr>
    </table>
</body>
</html>