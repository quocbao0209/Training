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
                $code = $_POST['code'];
                if(empty($name) || empty($code)) {
                    $error = "Please enter complete information";
                } else {
                    $db->action("INSERT INTO class (classcode,classname) VALUES ('$code','$name')"); 
                    header("Location:index.php?controller=class");
                }
            }
            require_once "./Views/class/add.php";
            break;
        case "edit":
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                foreach ($db->getData("SELECT * FROM class WHERE id='$id'") as $row){
                    $name = isset($row['name']) ?$row['name']:'';
                    $code = isset($row['code']) ?$row['code']:'';
                }

                //xu ly update
                if(isset($_POST['submit'])){
                    $name_new = $_POST['name'];
                    $code_new = $_POST['code'];
                    if(empty($name) || empty($code)){
                        $error = "Please enter complete information";
                    } else {
                        $db->action("UPDATE class SET name='$name_new', code='$code_new' 
                            WHERE id = '$id'");
                        header("Location:index.php?controller=class");
                    }
                }
            }
            require_once "./Views/class/edit.php";
            break;
        case "delete":
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $db->action("DELETE FROM class WHERE id = '$id'");
                header("Location:index.php?controller=class");
            }
            break;
        default:
            $data = $db->getData("SELECT * FROM class");
            // print_r($data); die;
            require_once "./Views/class/index.php";
            break;
    }
?>