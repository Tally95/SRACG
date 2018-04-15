<?php
class administracionPerfilesController{
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
    
    public function IndexEditar(){
        require_once 'view/header.php';
        require_once 'view/editarPerfiles.php';
        require_once 'view/footer.php';
    } 
    
}
