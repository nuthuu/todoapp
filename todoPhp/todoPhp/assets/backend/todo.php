<?php
    include 'db_connection.php';
    $user_id = $_SESSION['user_id'];
    // =========== Fetch tasks list ==========
    $select = "SELECT * FROM `todolist` WHERE user_id = '$user_id'";
    $s_query = mysqli_query($conn,$select);
    // $row = mysqli_fetch_assoc($query);
    // =========== ADD TASKS =========
    $tasks = $_POST['add-todo'];
    if(isset($_POST['add-todo-btn'])){
        $insert = "INSERT INTO `todolist`(`user_id`, `tasks`, `created_at`, `updated_at`) VALUES ('$user_id','$tasks', CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
        $query = mysqli_query($conn,$insert);
        if($query){
            echo "<script> window.location='../../home.php';</script>";
        }else{
            // echo $user_id;
            echo "<script>alert('Something Went wrong...try again!!'); window.location='../../home.php';</script>";
        }
    }
    // ============== Delete Task ===========
    if(isset($_POST['dlt-todo-btn'])){
        $row_id = $_GET['id'];
        $delete = "DELETE FROM `todolist` WHERE id = $row_id";
        $d_query = mysqli_query($conn,$delete);
        if($d_query){
            echo "<script> window.location='../../home.php';</script>";
        }else{
            // echo $row['id'];
            echo "<script>alert('Something Went wrong...try again!!'); window.location='../../home.php';</script>";
        }
    }
?>