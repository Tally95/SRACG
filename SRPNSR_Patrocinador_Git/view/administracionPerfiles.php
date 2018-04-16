<div class="admiPerfiles">
    <div class="nav_wrapper">
        <nav class="nav-menu">
            <ul class="clearfix"> 
                <a href='?c=administracionDeReservaciones'>
                    <li style="margin-right: 20px; color: black;">Administrar Reservación</li> 
                </a>
                <a href='?c=vistazoCalendario'>
                    <li style="margin-right: 20px; color: black;">Vistazo Calendario</li>
                </a>   
                <a href='?c=reportes'>
                    <li style="margin-right: 20px; color: black;">Reportes</li>
                </a>
                <a href='?c=administracionPerfiles'>
                    <li style="margin-right: 20px; color: black;">Administración de Perfiles</li>
                </a> 
            </ul>  
        </nav>

    </div><br>

    <label>ADMINISTRACION PERFILES<br></label>
    <hr/>

    <div class="cuerpo1Perfiles" style="text-align: center;">
        <a href='?c=administracionPerfiles&a=IndexAgregar'><button class="botonesPerfiles">AGREGAR</button></a>
        <a href='?c=administracionPerfiles&a=IndexEditar'><button class="botonesPerfiles">EDITAR</button></a>
        <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href='?c=administracionPerfiles&a=EliminarP'><button class="botonesPerfiles">ELIMINAR</button></a>
    </div>
    <br><br>
    <div  class="contTablaPerfiles">
        <table class="tablaPerfiles" >
            <thead>
                <tr>
                    <th style="width:70px;"></th>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>CLAVE</th>
                    <th>TIPO</th>
                    <th>TELEFONO</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->model->Listar() as $r): ?>
                    <?php $valor = $r->idPatrocinador; ?>
                    <tr>
                        <td>
                            <input type="radio" name="idPatrocinador" value="<?php echo $valor; ?>">
                            
                        </td>
                        <td>
                            <?php echo $r->idPatrocinador; ?>
                        </td>
                        <td>
                            <?php echo $r->nombre; ?>
                        </td>
                        <td>
                            <?php echo $r->correo; ?>
                        </td>
                        <td>
                            <?php echo $r->clave; ?>
                        </td>
                        <td>
                            <?php echo $r->tipo; ?>
                        </td>
                        <td>
                            <?php echo $r->telefono; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div> 

