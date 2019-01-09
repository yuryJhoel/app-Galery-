<?php
    require "./../models/CreaUsuario.php";

    if(is_uploaded_file($_FILES['photo']['tmp_name'])){
        $tipo = $_FILES['photo']['type'];
        if($tipo == "image/jpg" ||$tipo == "image/png" ||$tipo == "image/jpeg"){
            $new_name = "photo".date('YmdHis');
            $nombre = $_FILES['photo']['name'];
            $array = explode(".",$nombre); 
            $nombre_img = $new_name.".".$array[1];
            copy($_FILES['photo']['tmp_name'],"./../img-uploads/$nombre_img");
            $inspiracion = $_POST['inspiration'];
            // SAVE  IN DATABASE
                // GET ID
                    $create = new CreaUsuario();
                    session_start();
                    $usuario = $_SESSION['usuario'];
                    $sql2 = "SELECT id FROM usuarios WHERE usuario = '$usuario'";
                    $result = $create->read($sql2);
                    $id = $result['id'];

            $sql = "INSERT INTO contenido(foto, comentario, usuarios_id) VALUES('$nombre_img', '$inspiracion', '$id')";
            $create->create($sql);  
            header('Location: ./../views/');
        }else{
            session_start();
            $_SESSION['message'] = "asdasd";
            header('Location: ./../views/subir_foto.php');
        }        
    }else{
        echo "Error al cargar el archivo";
    }


?>