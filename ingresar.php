<?php
include("connbd.php");
 try{
     if(isset($_POST['entrar'])){
        if(strlen($_POST['txtUsuario']) > 1 && strlen($_POST['txtContra']) > 1 ){
            $usuario = trim($_POST['txtUsuario']);
            $contra = trim($_POST['txtContra']);
            $query = ("SELECT usuario,usuariopassword FROM usuario WHERE usuario = '$usuario' and usuariopassword = '$contra'");
            $sentencia = $conn->prepare($query);
            $sentencia->execute();
            if ($sentencia->rowCount() > 0) {
                session_start();
                $_SESSION["auth"] = "yes";
                header('Location: inicio.php');
            } else{
                $_SESSION["auth"] = "no";
                ?>
                <br>
                <div class = "btn-danger"> 
                    <p style="text-align:center">El usuario y/o contraseña ingresado no coinciden </p>
                    </div>
                <?php
            }
        }
     }
}catch (PDOException $ex) {
       echo $ex->getMessage();
       exit;
    }
?>