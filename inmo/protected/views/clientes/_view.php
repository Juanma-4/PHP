<?php
/* @var $this ClientesController */
/* @var $data Clientes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cedula), array('view', 'id'=>$data->cedula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedulaUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->cedulaUsuario); ?>
	<br />


</div>