<?php include './../includes/__header.php'?>
    
<div class="container mt-5">
    <div class="alert alert-warning">Sube tu foto / Inspiration</div>
    <form enctype="multipart/form-data" action="./../backend-foto/backend-foto.php" method="POST" class="w-50">
        <div class="form-group">
            <input type="file" name="photo" class="form-control">
        </div>
        <?php
        session_start();
        if(isset($_SESSION['message'])){
           echo "<span class='text-danger'>Solo esta permitido archivos jpg, png y jpeg</span>";
        }
         ?>
        <div class="form-group">
            <textarea name="inspiration" cols="30" rows="10" placeholder="Your inspiration" class="form-control"></textarea>
        </div>
        <input type="submit" name="submit-photo" class="btn btn-primary btn-block">
    </form>
</div>

<?php include './../includes/__footer.php' ?>