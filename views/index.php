<?php include './../includes/__header.php'?>
<?php 
    session_start();
    if(!isset($_SESSION['usuario'])){
        header('Location: ./signIn.php');
    }
?>
 <?php
    require "./../models/CreaUsuario.php";
    $usuario = $_SESSION['usuario'];
    $read_contenido = new CreaUsuario();
    $sql = "SELECT * FROM contenido";
    $content = $read_contenido->read2($sql);
    $reverse_content = array_reverse($content);
 ?>
<div class="row">
    <div id="" class="col-3 bg-primary vh-100 fixed-top pt-5">
        <div class="container">
            <img src="./../img/logo.png" alt="" class="img-fluid">
            <div class="text-light text-center">
                        <a href="#" class="btn btn-success h2"><?php echo$_SESSION['usuario']?></a><br>
                        <a href="./../controllers/logOut.php" class="text-light">Log Out</a><br>
                        <a href="subir_foto.php" class="text-light">Subir Foto</a>    
                <p class="mt-5">“La fotografía es el único lenguaje que puede ser entendido y comprendido en todo el mundo”. Bruno Barbey”</p>
            </div>
        </div>
    </div>
    <div class="col-9 ml-auto mt-5">
        <div class="container">
        <div class="alert alert-dark w-75">
            Que la siguiente inspiracion sea el tuya ...
        </div>

<?php
    foreach ($reverse_content as $value) {
?>
            <div class="card w-75">
                <div class="card-header">
                    <img src="./../img-uploads/<?= $value['foto']?>" alt="" class="img-fluid">
                </div>
                <div class="card-body">
<?php
    $id_user =  $value['usuarios_id'];
    $getname_sql = "SELECT nombre FROM usuarios WHERE id = '$id_user'";
    $nombre_db = $read_contenido->read($getname_sql);
?>
                <p><?= $value['comentario']?> <a href="#" class="h4"><span class="badge badge-success"><?= $nombre_db['nombre'];?></span></a></p>
                </div>
            </div>
<?php
}
?>
            
        </div>
    </div>
</div>
<?php include './../includes/__footer.php' ?>