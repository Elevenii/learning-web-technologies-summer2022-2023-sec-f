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
                <h3>View Profile</h3>
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
                    <table border="0" width=100%>
                        <tr>
                            <td width=12%>Name</td>
                            <td width=30%>
                                <?php echo ":<b>  ".$_SESSION['#name']."</b>"?> 
                            </td>
                            <td rowspan="3" align="center">
                                <img width=200px src="<?php echo isset($_SESSION['profilePicture']) ? $_SESSION['profilePicture'] : "profile.jpg" ?>" alt="Profile Picture">
                            </td>
                            <td width=40%></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo ":<b>  ".$_SESSION['#email']."</b>"?> </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><?php echo ":<b>  ".$_SESSION['#gender']."</b>"?> </td>
                            <td align="center"><a href="changeProfilePicture.php">Change</a> </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><?php echo ":<b>  ".$_SESSION['#dob']."</b>"?> </td>
                            <td></td>
                        </tr>
                        <tr height=0>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td><a href="edit.php">Edit Profile</a></td>
                        </tr>                        
                    </table>
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