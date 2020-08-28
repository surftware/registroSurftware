<?php
$Controlador="Platillos";
$attributos = array('class' => '', 'id' => 'myform');
// Cajas de texto $empleados->->Usuario_Id; 
$busqueda= array(
  'name'=>'busqueda',
  'placeholder'=>'Ingresa el Nombre del Platillo',
  'password'=>'text',
  'class'=>'form-control',
  'id'=>'password',
  'value'=>''
);
$label= array('class'=>'col-sm-2 col-form-label');
$boton=array('class'=>'btn btn-outline-secondary');
$label= array('class'=>'col-sm-2 col-form-label');
?>
<?= 
    form_open($Controlador,$attributos);
?>
<div class="container-fluid">
  <ol class="breadcrumb">
      <li class="breadcrumb-item">
          <a href="#">Platillos</a>
      </li>
      <li class="breadcrumb-item active">Busqueda</li>
  </ol>
  <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Busqueda de Platillos.
          </div>
          <div class="card-body">
          
            <div class="input-group mb-3">
              <?= form_input($busqueda);?>
              <div class="input-group-append">
              
                <?= form_submit('', 'Busqueda',$boton); ?>
              </div>
            </div>
            <hr>
            <?= 
                form_close();
            ?>
            <?php
            if(empty($Platillos)) {
                echo '<h1>No se encontro ningun resultado relacionado</h1>';
                echo '<p>Puede buscar otro platillo</p>';
                }
            else{

            ?>
            <table class="table table-bordered table-dark table-hover table-responsive-sm ">
              <thead>
                <tr>
                  <th scope="col">Clave</th>
                  <th scope="col">Platillo</th>
                  <th scope="col">Costo</th>
                  <th scope="col">Imagen</th>
                </tr>
              </thead>
              <tbody>
              <?php
                foreach ($Platillos as $p) 
                {
              ?>
                <tr>
                  <th scope="row"><?php echo $p->Platillos_Id?></th>
                  <td><?php echo $p->Platillos_Nombre?></td>
                  <td>$ <?php echo $p->Platillo_Costo?></td>
                  <td><img style="width:50px; height:50px;" src="<?php echo base_url(); ?><?php echo $p->Plarillo_Imagen; ?>" ></td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
            <?php
            }
            ?>
          <hr>
    </div>
  </div>
</div>



