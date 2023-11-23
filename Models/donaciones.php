<?php
    class donacion extends Conectar{

        public function insert_donacion($NombreDonante, $CorreoDonante, $CantidadDonada, $FechaDonacion){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="INSERT INTO donaciones (ID,NombreDonante,CorreoDonante,CantidadDonada,FechaDonacion) VALUES (null,?,?,?,now())";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$NombreDonante);
            $sql->bindValue(2,$CorreoDonante);
            $sql->bindValue(3,$CantidadDonada);
            $sql->bindValue(4,$FechaDonacion);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function update_donacion($ID, $NombreDonante, $ape_paternoi, $ape_maternoi, $correo, $sexo, $telefono){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE instructor SET nombrei=?, ape_paternoi=?, ape_maternoi=?, correo=?, sexo=?, telefono=? WHERE inst_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$NombreDonante);
            $sql->bindValue(2,$ape_paternoi);
            $sql->bindValue(3,$ape_maternoi);
            $sql->bindValue(4,$correo);
            $sql->bindValue(5,$sexo);
            $sql->bindValue(6,$telefono);
            $sql->bindValue(7,$ID);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function delete_instructor($inst_id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="UPDATE instructor SET estado=0 WHERE inst_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$inst_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function instructor(){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM instructor WHERE estado=1";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

        public function instructor_id($inst_id){
            $conectar=parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM instructor WHERE estado=1 AND inst_id=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1,$inst_id);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }

?>