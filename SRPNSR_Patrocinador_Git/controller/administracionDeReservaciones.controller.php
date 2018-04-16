<?php
include_once 'model/administracionReservacionModel.php';

class AdministracionDeReservacionesController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new AdmiReservaciones();
    }
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/administracionDeReservaciones.php';
        require_once 'view/footer.php';
    }  
    
    
    public function Editar(){
        $alm = new AdmiReservaciones();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/administracionDeReservaciones-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Registrar(){
        $alm = new AdmiReservaciones();
        
        if(isset($_REQUEST['numReservacion'])){
            $alm = $this->model->Obtener($_REQUEST['numReservacion']);
        }
        
        require_once 'view/header.php';
        require_once 'view/administracionDeReservaciones.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new AdmiReservaciones();
        
        //tipoAdmision;//numReservacion;//Sector;
//Nombre;//Entrada;//Salida;  
//Puesto;//Total;//Estado;
        $alm->numReservacion = $_REQUEST['numReservacion'];
        $alm->parqueNacional = $_REQUEST['parqueNacional'];
        $alm->sector = $_REQUEST['sector'];
        $alm->ingresoPor = $_REQUEST['tipoIngreso'];
        $alm->fEntrada = $_REQUEST['fEntrada'];
        $alm->dias = $_REQUEST['dias'];
        $alm->tipoVisita = $_REQUEST['tipoVisita'];
        $alm->usuario = $_REQUEST['usuario'];
        $alm->total = $_REQUEST['total'];
//        $alm->Estado = $_REQUEST['Estado'];
        
        $this->model->Obtener($_REQUEST['numReservacion'])?
            $this->model->Actualizar($alm):
            $this->model->Registrar($alm);
              
        header('Location: ?c=administracionDeReservaciones');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
//        echo "<script>location.hreft='?c=administracionDeReservaciones'</script>'";
        header('Location: ?c=administracionDeReservaciones');
    }
}

