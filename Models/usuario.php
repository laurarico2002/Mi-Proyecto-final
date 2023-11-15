<?php 
//include ("../config/conexion.php");   

    class Usuario extends Conectar{
        /*TODO: Funcion para login de acceso del usuario */
        public function login(){
            //parent llama las funciones 
            $Conectar=parent::conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["CorreoElectronico"];
                $pass = $_POST["ContraseñaHash"];
                if(empty($correo) and empty($pass)){
                    /*TODO: En caso esten vacios correo y contraseña, devolver al index con mensaje = 2 */
                    header("Location:".Conectar::ruta()."index.php?m=2");
                    exit();
                }else{
                    $sql = "SELECT * FROM usuarios WHERE CorreoElectronico=? and ContraseñaHash=?";
                    $stmt=$Conectar->prepare($sql);
                    $stmt->bindValue(1, $correo);
                    $stmt->bindValue(2, $pass);
                    $stmt->execute();
                    $resultado = $stmt->fetch();
                    if (is_array($resultado) and count($resultado)>0){
                        $_SESSION["ID"]=$resultado["ID"];
                        $_SESSION["NombreDeUsuario"]=$resultado["NombreDeUsuario"];
                        $_SESSION["ContraseñaHash"]=$resultado["ContraseñaHash"];
                        $_SESSION["Nombre"]=$resultado["Nombre"];
                        $_SESSION["Rol"]=$resultado["Rol"];
                        $_SESSION["CorreoElectronico"]=$resultado["CorreoElectronico"];
                        $_SESSION["Direccion"]=$resultado["Direccion"];
                       
                        /*TODO: Si todo esta correcto indexar en home */
                        header("Location:".Conectar::ruta()."views/inicio.php");
                        exit();
                    }else{
                        /*TODO: En caso no coincidan el usuario o la contraseña */
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }
        }
    }