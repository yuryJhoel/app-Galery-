<?php include './../includes/__header.php'?>
    <div class="d-flex justify-content-center mt-5">
    <div class="card w-25">
        <div class="card-header text-center">
            <span class="h3">Login</span><p></p> <p></p><br>
            <img src="./../img/logo.png" alt="" class="w-100">
        </div>
        <div class="card-body">
            <form action="./../controllers/registerUser.php" method="POST">
                <div class="form-group">
                    <input type="text" name="name" placeholder="insert a name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="user" placeholder="insert a username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="insert a password" class="form-control">
                </div>
                <input type="submit" name="login" class="btn btn-primary btn-block">
            </form>
        </div>
    </div>
    </div>
<?php include './../includes/__footer.php' ?>