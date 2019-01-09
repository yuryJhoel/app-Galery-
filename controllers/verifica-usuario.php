<?php
    require "./../models/CreaUsuario.php";
    if(isset($_POST['login'])){
        $usuario = $_POST['user'];
        $password = $_POST['password'];
        try {
            $read = new CreaUsuario();
            $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password= '$password'";
            $result = $read->read($sql);
            if($result == false){
                $message = "No se ha podido encontrar tu cuenta";
                session_start();
                $_SESSION['message'] = $message;
                header('Location: ./../views/signIn.php');
            }else{
                session_start();
                $_SESSION['usuario'] = $usuario;
                header('Location: ./../views/');
                
            }
        }catch(Exception $e){
            die('Error: '.$e->getMessage());
        }
    }else{
        header('Location: ./../views/signIn.php');
    }



?>