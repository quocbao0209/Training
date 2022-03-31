<?php 
    include "./Models/crudstudent.php";
    include "./Models/crudteacher.php";
    include "./Models/crudclass.php";



    $db = new crudStudent();
    if (isset($_GET['controller'])){
        $controller = $_GET['controller'];
    } else {
        $controller = "";
    }
    switch ($controller) {
        case 'student':
            require_once "Controller/student.php";
            break;
        case 'teacher':
            // var_dump("gfdgfdg"); exit;
            require_once "Controller/teacher.php";
            break;
        case 'class':
            require_once "Controller/class.php";
            break;
        default:
            require_once "Controller/student.php";
            require_once "Controller/teacher.php";
            require_once "Controller/class.php";
            break;
    }
?>