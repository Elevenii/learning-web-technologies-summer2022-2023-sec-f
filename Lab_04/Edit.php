<?php
    session_start();
    if(!(isset($_SESSION['loggedin']) && isset($_SESSION['expires']) && $_SESSION['expires'] > time()))
    {
        header('Location: login.php');
    }
?>

<html>
<head>
    <title>View</title>
</head>
<body>
    <table border="1" width=100%>
        <tr height="100px">
            <th width=20%>
                <a href="publicHome.php">
                    <img src="logo.jpg" alt="logo">
                </a>
            </th>
            <th align="middle">
                <h3>Edit Profile</h3>
            </th>
            <th width=20%>
            Logged in as <a href="dashboard.php"> <?php echo $_SESSION['#username']  ?></a> |
                <a href="logout.php">Logout</a> 
            </th>
        </tr>

        <tr>
            <td width=20%>
                <table border="1" width=100%>
                    <tr>
                        <th><h2>Account</h2></th>
                    </tr>
                    <tr>
                        <td>
                            <ul>
                                <li><a href="dashboard.php">Dashboard</a></li>
                                <li><a href="view.php">View Profile</a></li>
                                <li><a href="edit.php">Edit Profile</a></li>
                                <li><a href="changeProfilePicture.php">Change Profile Picture</a></li>
                                <li><a href="changePassword.php">Change Password</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <fieldset>
                    <legend><h3>PROFILE</h3></legend>
                    <form method="post" action="editCheck.php">
                        <table border="0" width=100%>
                            <tr>
                                <td width=12%>Name</td>
                                <td width=30%>
                                    <input type="text" name="#name" value="<?php echo isset($_SESSION['#name']) ? $_SESSION['#name'] : '' ?>">
                                </td>
                                <td rowspan="3" align="center">
                                </td>
                                <td width=40%></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" name="#email" value="<?php echo isset($_SESSION['#email']) ? $_SESSION['#email'] : '' ?> ">
                                </td>
                                <td></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Male') echo "checked" ?> value="Male"/> Male
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Female') echo "checked" ?> value="Female"/> Female
                                    <input type="radio" name="#gender" <?php if(isset($_SESSION['#gender']) && $_SESSION['#gender']=='Other') echo "checked" ?> value="Other"/> Other <br>
                                </td>
                                <td></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>
                                    <input type="date" name="#dob" value="<?php echo isset($_SESSION['#dob']) ? $_SESSION['#dob'] : '' ?>">
                                </td>
                                <td></td>
                            </tr>
                            <tr height=0>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="#submit" value="Submit">
                                </td>
                            </tr>                        
                            <tr>
                                <td>
                                        <?php
                                            
                                            if(isset($_SESSION['#submit'])) 
                                            {
                                                
                                                foreach ($_SESSION as $key => $value) {
                                                    if (!isset($_SESSION[$key]) or empty($value)) {
                                                        echo $key. " not set! <br>";     
                                                        break;                                               
                                                    }
                                                }
                                            }
                                        ?>
                                </td>
                            </tr>                        
                        </table>
                    </form>
                </fieldset>

            </td>
        </tr>
        
        <tr height="80px">
            <td colspan="3" align="center">
                <p>copytight © 2023</p>
            </td>
        </tr>
    </table>
</body>
</html>

<?php
    
?>