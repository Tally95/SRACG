<div class="AdminitracionReserv">
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

    </div>
    <label><br>ADMINISTRACIÓN DE RESERVACIONES<br></label>
    <hr/>


    <form action="?c=administracionDeReservaciones" method="post">
        <div>
            <!--<button class="btnAdmi"  style="margin-left: 120px;">Agregar</button>-->
            <a  href="http://localhost/SRPNSR-ModuloUsuario/SRPNSR_Usuario_Git/index.php">
                <input style="width: 70px;" value="Agregar" name="a" class="btnAdmi" readonly/>
            </a>
            <!--    <button class="btnAdmi">Editar</button>-->


            <!--    <a href="?c=administracionDeReservaciones&a=Eliminar" method="post">
                  <button class="btnAdmi">Eliminar</button>  
                </a>-->
            <a href="?c=administracionDeReservaciones&a=Eliminar">
                <input style="width: 70px;" value="Eliminar" onclick="javascript:return confirm('¿Seguro de eliminar esta Reservación?');" name="a" class="btnAdmi"/>
            </a>


            <button class="btnAdmi">Aceptar<br></button>

            <!--<a href="?c=administracionDeReservaciones&a=Editar">-->
            <input type="submit" value="Editar" name="a" class="btnAdmi"/>
            <!--</a>-->
        </div>



        <div class="divTablaAdm" style="margin: auto;">
            <table class="tablaAdmi" style="margin: auto; text-align: center; ">
                <tr class="encabezadoTabla" style="text-align: center;">
                    <th style="width:70px;"></th>

                    <th style="height:40px;">Num Reser</th>
                    <th>Parque</th>
                    <th>Sector</th>
                    <th>Ingreso</th>
                    <th>Entrada</th>
                    <th>Dias</th>
                    <th>Tipo Visit</th>
                    <th>Usuario</th>
                <th>Total</th>
                <th>Estado</th>
<!--                    <th>Estado</th>-->
            </tr>
            <tbody>
                <?php foreach ($this->model->Listar() as $r): ?>
                    <?php $valor = $r->numReservacion; ?>
                    <tr>
                        <td><input type=radio name="id" value=<?php echo $valor; ?> ></td>

                        <td><?php echo $r->numReservacion; ?></td>
                        <td><?php echo $r->parqueNacional; ?></td>
                        <td><?php echo $r->sector; ?></td>
                        <td><?php echo $r->ingresoPor; ?></td>
                        <td><?php echo $r->fEntrada; ?></td>
                        <td><?php echo $r->dias; ?></td>
                        <td><?php echo $r->tipoVisita; ?></td>
                        <td><?php echo $r->usuario; ?></td>
                        <td><?php echo $r->total; ?></td>
                        <td><?php echo $r->estado; ?></td>
                        <th></th>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
</form>


</div>

