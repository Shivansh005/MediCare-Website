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

    $conn = mysqli_connect("localhost", "root", "", "hospital") or die("fail ! to connect db.");

  $sql = "SELECT * FROM `appointment`";

  $result = $conn->query($sql);

  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);

  $num = 1;

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Hospital Website Design Tutorial</title>


    <link rel="stylesheet" type="text/css" href="tables/datatables.min.css">

    <script type="text/javascript" src="tables/jquery.min.js"></script>

    <script type="text/javascript" src="tables/datatables.min.js"></script>

    <script type="text/javascript"> $(document).ready(function () { $('#myTable').DataTable(); });</script>

    <link rel="stylesheet" href="css/patient_list.css">


</head>

<body>

    <div class="manual-container">
        <table class="table" id="myTable" style="width : 1200px;">
            <thead>
                <tr>
                    <th>#id</th>
                    <th>Patient Name</th>
                    <th>Gender</th>
                    <th>Number</th>
                    <th>Message</th>
                    <th>Actions</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($row as $col): ?>
                <tr>
                    <td>
                        <?php echo $num; ?>
                    </td>
                    <td>
                        <?php echo $col['p_name']; ?>
                    </td>
                    <td>
                        <?php echo $col['p_gender']; ?>
                    </td>
                    <td>
                        <?php echo $col['p_number']; ?>
                    </td>
                    <td>
                        <?php echo $col['p_msg']; ?>
                    </td>
                    <td><button class="btn-p btn-p-view"><a href="<?php echo $col['p_file'] ?>"
                                target="_blank">view</a></button></td>
                    <td><button class="btn-p btn-p-update"><a
                                href="patient_report.php?p_name=<?php echo $col['p_name']; ?>&p_email=<?php echo $col['p_email']; ?>&p_number=<?php echo $col['p_number']; ?>&p_gender=<?php echo $col['p_gender']; ?>&p_msg=<?php echo $col['p_msg']; ?>&p_address=<?php echo $col['p_address']; ?>"
                                target="_blank">update</a></button></td>
                </tr>
                <?php $num++; endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>