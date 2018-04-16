<?php

include_once 'model/patrocinadorModel.php';

class administracionPerfilesController{
    
     private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Patrocinador();
    }
    
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/administracionPerfiles.php';
        require_once 'view/footer.php';
    } 
    
    public function IndexAgregar(){
        require_once 'view/header.php';
        require_once 'view/agregarPerfiles.php';
        require_once 'view/footer.php';
    }

    public function IndexEditar() {

        $alm = new Patrocinador();

        if (isset($_REQUEST['idPatrocinador'])) {
          $alm = $this->model->Obtener($_REQUEST['idPatrocinador']);

            }  
//        else {
//            header('Location: ?c=administracionPerfiles');
//        }
            require_once 'view/header.php';
            require_once 'view/editarPerfiles.php';
            require_once 'view/footer.php';
    }

    public function GuardarP() {
        $alm = new Patrocinador();

        $alm->idPatrocinador = $_REQUEST['idPatrocinador'];
        $alm->clave = $_REQUEST['clave'];
        $alm->correo = $_REQUEST['correo'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->telefono = $_REQUEST['tel'];
        $alm->tipo = $_REQUEST['tipo'];
        
        $this->model->Obtener($_REQUEST['idPatrocinador']) ?
                        header('Location: ?c=administracionPerfiles') :
                        $this->model->Registrar($alm);

        header('Location: ?c=administracionPerfiles');
    }
    
    public function EliminarP() {
        $this->model->Eliminar($_REQUEST['idPatrocinador']);    
        
        header('Location: ?c=administracionPerfiles');
    }
    
    public function Cancelar() {
        header('Location: ?c=administracionPerfiles');
    }
    
}
