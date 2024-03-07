<?php
    include 'assets/backend/db_connection.php';
    if($_SESSION['logged_in'] == true){  
    include 'assets/backend/todo.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
        <!-- Navbar -->
        <nav class="navbar bg-light">
            <div class="container">
                <span class="navbar-brand mb-0 h1"><?php echo $_SESSION['username'];?></span>
                <div class="d-flex justify-content-end logout-btn"><a href="assets/backend/logout.php">Logout</a></div>
            </div>
        </nav>
        <!-- ./Navbar -->

        <!-- Todo section  -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <!-- add todo -->
                            <div id="add-btn" class=" d-flex justify-content-center mt-5">
                                    <span  class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Todo</span>    
                            </div>
                            <div id="add-todo-form" class="mt-5">
                                <form action="assets/backend/todo.php" method="post" >
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="add-todo" name="add-todo" placeholder="Enter your todo here"  >
                                        <button class="btn btn-primary" name="add-todo-btn" id="add-todo-btn" type="submit">Add</button>
                                    </div>
                                </form>
                            </div>
                    <!-- ./add todo -->

                    <!-- todo table -->
                    <table class="table border rounded mt-5" >
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th class="text-center" scope="col">Tasks</th>
                            <th class="text-center" scope="col">
                                Actions
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sno = 1; while($row = mysqli_fetch_assoc($s_query)){?>
                                <tr>
                                <th scope="row" ><?php echo $sno++;?></th>
                                <td class="text-center">
                                    <div class="task-list">
                                        <?php echo $row['tasks'];?>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <form action="assets/backend/todo.php?id=<?php echo $row['id'];?>" method="post">
                                        <button class="btn btn-danger" name="dlt-todo-btn" id="dlt-todo-btn" type="submit">Delete</button>
                                    </form>
                                </td>
                                </tr>
                            <?php }?>
                            
                        </tbody>
                    </table>
                    <!-- ./todo table -->
                </div>
            </div>
        </div>
        <!-- ./Todo section  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $( "#add-btn" ).click(function() {
                    $("#add-todo-form").toggle();   
            });
        });
    </script>
  </body>
</html>

<?php
    }else{
        header("location:http://localhost/todoPhp/index.php?msg=login_first");
    }
?>