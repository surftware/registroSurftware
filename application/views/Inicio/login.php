<?php
$Controlador="/LoginController/index";
$attributos = array('class' => '', 'id' => 'myform');
// Cajas de texto          $empleados->->Usuario_Id; 
$Nombre= array(
    'name'=>'usuario',
    'placeholder'=>'Usuario',
    'type'=>'text',
    'class'=>'form-control',
    'id'=>'email',
    'value'=>''
);
$Password= array(
  'name'=>'password',
  'placeholder'=>'password',
  'password'=>'text',
  'class'=>'form-control',
  'id'=>'password',
  'value'=>''
);

$label= array('class'=>'col-sm-2 col-form-label');
$boton=array('class'=>'btn btn-primary btn-block');
$label= array('class'=>'col-sm-2 col-form-label');
?>
<?= 
    form_open($Controlador,$attributos);
?>
 <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Inicio de sesion.</div>
      <div class="card-body">
        <form >
          <div class="form-group">
            <div class="form-label-group">
              Nombre:
              <!--<?= form_label('ejemplo','ejemplo',$label); ?>-->
              <?= form_input($Nombre);?>
      
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              Contraseña:

            <?= form_input($Password);?>
  
            </div>
          </div>
          <?= form_submit('', 'Inicio de Sesion',$boton); ?>
        </form>
        <!--<div class="text-center">-->

      </div>
    </div>
  </div>
  <?= 
    form_close();
?>