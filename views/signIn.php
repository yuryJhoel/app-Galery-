<?php include './../includes/__header.php'?>
<?php
    session_start();
    if(isset($_SESSION['message'])){
        $message = $_SESSION['message'];
        if($message == "Muy bien tu cuenta se ha creado"){        
            echo "<div class='alert alert-success w-75 mx-auto mt-1'>$message</div>";
        }else{
            echo "<div class='alert alert-danger w-75 mx-auto mt-1'>$message</div>";
        }
        session_destroy();
    }
?>
    <div class="d-flex justify-content-center mt-2">
    <div class="card w-25">
        <div class="card-header text-center">
            <span class="h3">Sign In</span><p></p> <p></p><br>
            <img src="./../img/logo.png" alt="" class="w-100">
        </div>
        <div class="card-body text-center">
            <form action="./../controllers/verifica-usuario.php" method="POST">
                <div class="form-group">
                    <input type="text" name="user" placeholder="insert a username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="insert a password" class="form-control">
                </div>
                <input type="submit" name="login" class="btn btn-primary btn-block">
                <p></p>
                <span><a href="./login.php">Create Account</a></span>
            </form>
        </div>
    </div>
    </div>
<?php include './../includes/__footer.php' ?>