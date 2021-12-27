<?php 

    session_start(); 
    if(!isset($_SESSION['uname']))
    {
        header("location: login.php");
    }

    else if($_SESSION['status'] == 'patient')
    {
        header("location: index.php");
    }

$p_name = $_GET['p_name'];
$p_email = $_GET['p_email'];
$p_number = $_GET['p_number'];
$p_gender = $_GET['p_gender'];
$p_msg = $_GET['p_msg'];
$p_address = $_GET['p_address'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient report</title>
    <link rel="stylesheet" href="css/patient_report.css">
</head>
<body>
    <div class="container">
        <div class="header"><h1>Patient Report</h1></div>
        <div class="main">
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Patient Name</span></label></div>
                <div class="field data"><input type="text" class="label-d" value="<?php echo $p_name; ?>" disabled></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Email Id</span></label></div>
                <div class="field data"><input type="text" class="label-d" value="<?php echo $p_email; ?>" disabled></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Mobile Number</span></label></div>
                <div class="field data"><input type="text" class="label-d" value="<?php echo $p_number; ?>" disabled></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Gender</span></label></div>
                <div class="field data"><input type="text" class="label-d" value="<?php echo $p_gender; ?>" disabled></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Patient Address</span></label></div>
                <div class="field data"><input type="text" class="label-d" value="<?php echo $p_address; ?>" disabled></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Patient's Message</span></label></div>
                <div class="field data"><input type="text" class="label-d" value="<?php echo $p_msg; ?>" disabled></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Blood Pressure</span></label></div>
                <div class="field data"><input type="text" class="label-d" placeholder="in mm of Hg"></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Hemogram Level</span></label></div>
                <div class="field data"><input type="text" class="label-d" placeholder="in gms"></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Cholesterol Level</span></label></div>
                <div class="field data"><input type="text" class="label-d" placeholder="in gms"></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Glucose Level</span></label></div>
                <div class="field data"><input type="text" class="label-d" placeholder="in gms"></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Sugar Level</span></label></div>
                <div class="field data"><input type="text" class="label-d" placeholder="in gms"></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Insulin Level</span></label></div>
                <div class="field data"><input type="text" class="label-d" placeholder="in gms"></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">Doctor's Message</span></label></div>
                <div class="field data"><input type="text" class="label-d" placeholder="Give advice"></div>
            </div>
            <div class="item">
                <div class="field head"><label for=""><span class="label-h">HeartBeat Rate</span></label></div>
                <div class="field data"><input type="text" class="label-d" placeholder="beats per min"></div>
            </div>
            <div class="item">
               <div class="field data"><input type="submit" class="label-d submit"></div>
            </div>
        </div>
    </div>
</body>
</html>