<div class="vistazoCalen">
     <div class="nav_wrapper">
    <nav class="nav-menu">
        <ul class="clearfix"> 
            <a href='?c=administracionDeReservaciones'>
               <li style="margin-right: 20px; color: black;">Administrar Reservación</li> 
            </a>
            <a href='?c=vistazoCalendario'>
                <li style="margin-right: 20px; color: black;">Calendario</li>
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

     <label>VISTAZO CALENDARIO<br></label>
     <hr/>
     <div class="cuerpoVistazo" style="padding: 8px; ">
         <label style="margin-left: 40px;">SECTOR</label>
         <select style="margin-left: 15px;">
             <option>Santa Rosa</option>
             <option>2</option>
             <option>3</option>
             <option>4</option>
         </select>
         <form style="float:right; margin-right: 40px;">
             <input type="search" id="miBusqueda" name="q"
                    placeholder="Buscar ...">
             <button>Buscar</button>
         </form>
     </div>
<!--     sdefwregtrhytjuykiulihkjhggfdfghj,kk.jhthjuklkjyhtrhyjukjtregthyjhtrtytjutretds-->
     
<br/><br/>
<div id="calendario" style="margin: auto;">
  <div id="anterior" onclick="mesantes()"></div>
  <div id="posterior" onclick="mesdespues()"></div>
  <h2 id="titulos"></h2>
  <table id="diasc" style="text-align: center;">
    <tr id="fila0"><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th><th>Sabado</th><th>Domingo</th></tr>
    <tr id="fila1"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr id="fila2"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr id="fila3"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr id="fila4"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr id="fila5"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
    <tr id="fila6"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>
  </table>
  <div id="fechaactual"><i onclick="actualizar()">HOY: </i></div>
  
</div>
<br>
<div>
         <button class="botonesCal">Anterior</button>
         <button class="botonesCal">Siguiente</button>
     </div>
</div>