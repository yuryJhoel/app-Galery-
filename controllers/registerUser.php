<?php
require './../models/CreaUsuario.php';
    if(isset($_POST['login'])){
        $name = $_POST['name'];
        $user = $_POST['user'];
        $password = $_POST['password'];
        $creaUsuario = new CreaUsuario();
        $sql = "INSERT INTO usuarios(nombre, usuario, password) VALUES('$name', '$user','$password')";
        $creaUsuario->create($sql);
        session_start();
        $_SESSION['message'] = "Muy bien tu cuenta se ha creado";
        header('Location:./../views/');
    }

?>