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
         <button class="botonesPerfiles">ELIMINAR</button>
     </div>
     <br><br>
     <div>
         <table class="tablaPerfiles" style="margin-left: 280px;" >
             <tr><th style="width:70px;"></th><th>ID</th><th>NOMBRE</th><th>CORREO</th><th>CLAVE</th><th>TIPO</th><th>TELEFONO</th></tr>
             <tr>
                 
                 <td><input type=radio name=id  ></td>
                 <!--    value=<?php echo $r->id; ?> -->
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
             </tr>
         </table>
     </div>
</div> 

