<?php 
    if(isset($_GET['action'])){
        $action = $_GET['action'];

    } else {
        $action = "";
    }

    switch ($action){
        case "add":
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                if(empty($name) || empty($email) || empty($phone) || empty($address)) {
                    $error = "Please enter complete information";
                } else {
                    $db->action("INSERT INTO teacher (name,email,phone,address) VALUES ('$name','$email','$phone','$address')"); 
                    header("Location:index.php?controller=teacher");
                }
            }
            require_once "./Views/teacher/add.php";
            break;
        case "edit":
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                foreach ($db->getData("SELECT * FROM teacher WHERE id='$id'") as $row){
                    $name = isset($row['name']) ?$row['name']:'';
                    $email = isset($row['email']) ?$row['email']:'';
                    $phone = isset($row['phone']) ?$row['phone']:'';
                    $address = isset($row['address']) ?$row['address']:'';
                }

                //xu ly update
                if(isset($_POST['submit'])){
                    $name_new = $_POST['name'];
                    $email_new = $_POST['email'];
                    $phone_new = $_POST['phone'];
                    $address_new = $_POST['address'];
                    if(empty($name) || empty($email) || empty($phone) || empty($address)){
                        $error = "Please enter complete information";
                    } else {
                        $db->action("UPDATE teacher SET name='$name_new', email='$email_new', phone='$phone_new', address='$address_new' 
                            WHERE id = '$id'");
                        header("Location:index.php?controller=teacher");
                    }
                }
            }
            require_once "./Views/teacher/edit.php";
            break;
        case "delete":
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $db->action("DELETE FROM teacher WHERE id = '$id'");
                header("Location:index.php?controller=teacher");
            }
            break;
        default:
            $data = $db->getData("SELECT * FROM teacher");
            // print_r($data); die;
            require_once "./Views/teacher/index.php";
            break;
    }
?>