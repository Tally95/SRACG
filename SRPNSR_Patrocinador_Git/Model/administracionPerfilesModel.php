<?php //
//
//require 'database.php';
//
//class AdmiPerfiles {
//
//   

//    public function __CONSTRUCT() {
//        try {
//            $this->pdo = Database::StartUp();
//        } catch (Exception $e) {
//            die($e->getMessage());
//        }
//    }
//
//    public function Listar() {
//        try {
//            $result = array();
//
//            $stm = $this->pdo->prepare("SELECT * FROM admireservaciones");
//            $stm->execute();
//
//            return $stm->fetchAll(PDO::FETCH_OBJ);
//        } catch (Exception $e) {
//            die($e->getMessage());
//        }
//    }
//
//    public function Obtener($id) {
//        try {
//            $stm = $this->pdo
//                    ->prepare("SELECT * FROM admireservaciones WHERE numReservacion = ?");
//
//
//            $stm->execute(array($id));
//            return $stm->fetch(PDO::FETCH_OBJ);
//        } catch (Exception $e) {
//            die($e->getMessage());
//        }
//    }
//
//    public function Eliminar($id) {
//        try {
//            $stm = $this->pdo
//                    ->prepare("DELETE FROM admireservaciones WHERE numReservacion = ?");
//
//            $stm->execute(array($id));
//        } catch (Exception $e) {
//            die($e->getMessage());
//        }
//    }
//
//    public function Actualizar($data) {
//        try {
////tipoAdmision;//numReservacion;//Sector;
////Nombre;//Entrada;//Salida;  
////Puesto;//Total;//Estado;
//
//            $sql = "UPDATE admireservaciones SET 
//						tipoAdmision          = ?, 
//                                                Sector                = ?,
//						Nombre                = ?, 
//						Entrada               = ?,
//                                                Salida                = ?, 
//						Puesto                = ?,
//                                                Total                 = ?				
//				    WHERE numReservacion = ?";
//
//            $this->pdo->prepare($sql)
//                    ->execute(
//                            array(
//                                $data->tipoAdmision,
//                                $data->Sector,
//                                $data->Nombre,
//                                $data->Entrada,
//                                $data->Salida,
//                                $data->Puesto,
//                                $data->Total,
//                                
//                                $data->numReservacion
//                            )
//            );
//        } catch (Exception $e) {
//            echo '<script>alert("error en actuliazar")</script>';
//            die($e->getMessage());
//        }
//    }
//
//    public function Registrar(Alumno $data) {
//
////tipoAdmision;//numReservacion;//Sector;
////Nombre;//Entrada;//Salida;  
////Puesto;//Total;//Estado;
//        try {
//            $sql = "INSERT INTO admireservaciones (numReservacion,tipoAdmision,Sector,Nombre,Entrada,Salida,Puesto,Total,Estado) 
//		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
//
//            $this->pdo->prepare($sql)
//                    ->execute(
//                            array(
//                                $data->numReservacion,
//                                $data->tipoAdmision,
//                                $data->Sector,
//                                $data->Nombre,
//                                $data->Entrada,
//                                $data->Salida,
//                                $data->Puesto,
//                                $data->Total,
//                                $data->Estado,
//                                date('Y-m-d')
//                            )
//            );
//        } catch (Exception $e) {
//            die($e->getMessage());
//        }
//    }

//}
php?>;