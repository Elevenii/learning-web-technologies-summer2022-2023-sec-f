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
                <h3>Change Profile</h3>
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
                    <legend><h3>Profile Picture</h3></legend>
                    <form method="post" action="changeProfilePictureCheck.php" enctype="multipart/form-data">
                        <table border="0" width=100%>
                            <tr>
                                <td>
                                    <img width=200px src="<?php echo isset($_SESSION['profilePicture']) ? $_SESSION['profilePicture'] : "profile.jpg" ?>" alt="Profile Picture">
                                </td>
                                <td width=80%></td>
                            </tr>
                            <tr>
                                <td height=60px>
                                    <input type="file" name="profilePicture"  id="profilePicture">
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <hr>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
                                </td>
                                <td></td>
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