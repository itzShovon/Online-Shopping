<?php
    include("UpdateConnect.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Update Product...</title>
    <link rel="icon" href="Data/Images/Icon/Title.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="Data/CSS/AdminDocumentStyle.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/DoctorStyle.css">
    <link rel="stylesheet" type="text/css" href="Data/CSS/AdminDocumentStyle.css">
    <script src="Data/JQ/jquery.min.js"></script>
    <script src="Data/JQ/Sign.min.js"></script>
</head>

<body>
    <div class="Header" id="Header">
        <?php include 'Header.php'; ?>
    </div>
    <div class="Middle" id="Middle">
        <div class="update_account" id="update_account">
            <form name="update_account_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                <?php foreach($result1 as $row)
                    if($row->doctor_no == $login_user){
                ?>
                    <table>
                        <tr>
                            <th>Doctor's Picture</th>
                            <td><input class="user_picture" id="user_picture" name="doctor_picture" type="file" accept="image/*"></td>
                        </tr>
                        <tr>
                            <th>Doctor's Name</th>
                            <td><input class="user_name" id="user_name" name="doctor_name" type="text" placeholder="Your Name" value="<?php echo $row->doctor_name; ?>" autofocus></td>
                        </tr>
                        <tr>
                            <th>Doctor's E-Mail</th>
                            <td><input class="user_email" id="user_email" name="doctor_email" type="email" placeholder="Your E-mail" value="<?php echo $row->doctor_email; ?>"></td>
                        </tr>
                        <tr>
                            <th>Doctor's Password</th>
                            <td><input class="user_password" id="user_password" name="doctor_password" type="password" placeholder="Your Password"></td>
                        </tr>
                        <tr>
                            <th>Conform Password</th>
                            <td><input class="temp_password" id="temp_password" name="doctor_temp_password" type="password" placeholder="Conform Your Password"></td>
                        </tr>
                        <tr>
                            <th>Doctor's Sector</th>
                            <td><input class="user_sector" id="user_sector" name="doctor_sector" type="text" placeholder="Sector" value="<?php echo $row->doctor_sector; ?>"></td>
                        </tr>
                        <tr>
                            <th>Doctor's City</th>
                            <td><input class="user_city" id="user_city" name="doctor_city" type="text" placeholder="Your City" value="<?php echo $row->doctor_city; ?>"></td>
                        </tr>
                        <tr>
                            <th>Doctor's Region</th>
                            <td><input class="user_region" id="user_region" name="doctor_region" type="text" placeholder="Your Region" value="<?php echo $row->doctor_region; ?>"></td>
                        </tr>
                        <tr>
                            <th>Doctor's Phone No.</th>
                            <td><input class="user_phone" id="user_phone" name="doctor_phone" type="text" placeholder="Your Phone No." value="<?php echo $row->doctor_phone; ?>"></td>
                        </tr>
                        <tr>
                            <th>Doctor's Degree</th>
                            <td><input class="user_degree" id="user_degree" name="doctor_degree" type="text" placeholder="Your Degree" value="<?php echo $row->doctor_degree; ?>"></td>
                        </tr>
                        <tr>
                            <th>Doctor's Job</th>
                            <td><input class="user_job" id="user_job" name="doctor_job" type="text" placeholder="Your Job" value="<?php echo $row->doctor_job; ?>"></td>
                        </tr>
<!--
                        <tr>
                            <td><button type="reset">Reset</button></td>
                            <td><button type="submit" name="update_account" onclick="return RegisterValidation();">Update</button></td>
                        </tr>
-->
                    </table>
                <?php } ?>
                <button type="submit" name="update_account" onclick="return RegisterValidation();">Update</button>
                <button type="reset">Reset</button>
            </form>
        </div>
        
    </div>
    <div class="Footer" id="Footer">
        <?php include 'Footer.php' ?>
    </div>
</body>

</html>