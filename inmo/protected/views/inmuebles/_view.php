<?php
/* @var $this InmueblesController */
/* @var $data Inmuebles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IdInmueble')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IdInmueble), array('view', 'id'=>$data->IdInmueble)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('coordenadas')); ?>:</b>
	<?php echo CHtml::encode($data->coordenadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria')); ?>:</b>
	<?php echo CHtml::encode($data->categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('superficie')); ?>:</b>
	<?php echo CHtml::encode($data->superficie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antiguedad')); ?>:</b>
	<?php echo CHtml::encode($data->antiguedad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garage')); ?>:</b>
	<?php echo CHtml::encode($data->garage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cantBanio')); ?>:</b>
	<?php echo CHtml::encode($data->cantBanio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantDormitorio')); ?>:</b>
	<?php echo CHtml::encode($data->cantDormitorio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantAmbiente')); ?>:</b>
	<?php echo CHtml::encode($data->cantAmbiente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destacado')); ?>:</b>
	<?php echo CHtml::encode($data->destacado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedulaUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->cedulaUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idBarrio')); ?>:</b>
	<?php echo CHtml::encode($data->idBarrio); ?>
	<br />

	*/ ?>

</div>