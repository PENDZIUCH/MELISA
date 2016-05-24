<?php include('enlace.php');


$envio = mysqli_query($enlace, "SELECT * FROM productos ORDER by id desc");


function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Nombre: ".$resultados['nombre']."<br/> ";
echo "- Apellidos: ".$resultados['extras']."<br/>";
echo "**********************************<br/>";}
else {echo "<br/>No hay más datos!!! <br/>";}
}
if($envio){

while ($fila = mysqli_fetch_array($envio)){ ?>

<div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-bar-chart-o"></i>

              <h3 class="box-title"><? echo $fila['nombre']; ?></h3>

              <div class="box-tools pull-right">
              <? echo $fila['fecha']; ?>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div id="line-chart" style="height: 100px;">
              </div>
            </div>
            <!-- /.box-body-->
          </div>


	<?}
} 

?>