<?php

    $server = "localhost";
    $host = "root";
    $pass = "";
    $db = "hospital";

    $conn = new mysqli($server , $host , $pass , $db);

    if ($conn->connect_error)
        {
            die("Connection fail !" . $conn->connect_error);
        }

    $tb_name = $_POST['tb_name'];

    if ($tb_name == 'signin')
        {
            $uname = $_POST['uname'];
            $upass = $_POST['upass'];

            $sql = "SELECT * FROM `users` WHERE uname='{$uname}' AND upass='{$upass}'";

            $res = $conn->query($sql);

            if ($res->num_rows == 1)
                {
                    $data = $res->fetch_assoc();
                    session_start();
                    $_SESSION['uname'] = $data['uname'];
                    $_SESSION['uemail'] = $data['uemail'];
                    $_SESSION['status'] = $data['status'];
                    $arr = ["login_success" , $conn->error];
                    echo json_encode($arr);
                }

            else
                {
                    $arr = ["fail" , $conn->error];
                    echo json_encode($arr);
                 }
        }


    if ($tb_name == 'signup')
        {
            $uname = $_POST['uname'];
            $uemail = $_POST['uemail'];
            $upass = $_POST['upass'];

            $sql = "INSERT INTO `users` (`id`, `uname`, `uemail`, `upass`) VALUES (NULL, '{$uname}', '{$uemail}', '{$upass}')";

            $res = $conn->query($sql);

            if ($res)
                {
                    $arr = ["signup_success" , $conn->error];
                    echo json_encode($arr);
                }

            else
                {
                    $arr = ["fail" , $conn->error];
                    echo json_encode($arr);
                 }
        }

    if($tb_name == "p_appoint")
        {
            $p_name = $_POST['p_name'];
            $p_email = $_POST['p_email'];
            $p_gender = $_POST['p_gender'];
            $p_number = $_POST['p_number'];
            $p_address = $_POST['p_address'];
            $p_msg = $_POST['p_msg'];
            $p_time = $_POST['p_time'];
            $p_file_name = $_FILES['p_file']['name'];
            $p_file_tmp_name = $_FILES['p_file']['tmp_name'];
            $loc = 'uploaded/' . $p_file_name;
        
            move_uploaded_file($p_file_tmp_name, $loc);

            $sql = "INSERT INTO `appointment` (`p_id`, `p_name`, `p_email`, `p_gender`, `p_number`, `p_address`, `p_file`, `p_msg`, `p_time`, `p_status`) 
            VALUES (NULL, '{$p_name}', '{$p_email}', '{$p_gender}', '{$p_number}', '{$p_address}', '{$loc}', '{$p_msg}', '{$p_time}', 'not cure')";

            $res = $conn->query($sql);

            if($res)
                {
                    $_SESSION['c_a_p_name'] = $p_name;
                    $_SESSION['c_a_p_email'] = $p_email;
                    $_SESSION['c_a_p_password'] = $p_number;
                    $arr = ["success" , $conn->error];
                    echo json_encode($arr);
                 }

            else
                {
                    $arr = ["fail" , $conn->error];
                    echo json_encode($arr);
                }
        }

    $conn->close();

?>