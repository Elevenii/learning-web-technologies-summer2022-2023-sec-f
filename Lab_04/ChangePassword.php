<?php
    session_start();
    if(!(isset($_SESSION['loggedin']) && isset($_SESSION['expires']) && $_SESSION['expires'] > time()))
    {
        header('Location: login.php');
    }
    
?>

<html>
<head>
    <title>Dashboard</title>
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
                <h3>Change Password</h3>
            </th>
            <th width=20%>
                Logged in as <a href="dashboard.php"> <?php echo $_SESSION['#username']  ?></a> |
                <a href="logout.php">Logout</a> 
            </th>
        </tr>

        <tr>
            <td width=20%>
                <table  width=100%>
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
                <form method="post" action="changePasswordCheck.php" enctype="">
                    <fieldset>
                        <legend>Change Password</legend>
                        <table width=100%>
                            <tr height=40px>
                                <td width=20%>
                                    Current Password : 
                                </td>
                                <td>
                                    <input type="password" name="currentPassword">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=15%>
                                    New Password : 
                                </td>
                                <td>
                                    <input type="password" name="password">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=15%>
                                    Confrim New Password : 
                                </td>
                                <td>
                                    <input type="password" name="confirmNewPassword">
                                </td>
                            </tr>
                        </table>
                        <input type="submit" name="submit" value="Submit">            
                        <?php
                            
                            if(isset($_SESSION['pwChangeStatus']))
                            {
                                if($_SESSION['pwChangeStatus'])
                                {
                                    unset($_SESSION['pwChangeStatus']);
                                    echo "Password changed!";
                                }else echo "Password does not match!";
                            }
                            unset($_SESSION['pwChangeStatus']);
                        ?>
                    </fieldset>
                </form>
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