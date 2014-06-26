<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IdInmueble'); ?>
		<?php echo $form->textField($model,'IdInmueble'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'coordenadas'); ?>
		<?php echo $form->textField($model,'coordenadas',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoria'); ?>
		<?php echo $form->textField($model,'categoria',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'superficie'); ?>
		<?php echo $form->textField($model,'superficie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antiguedad'); ?>
		<?php echo $form->textField($model,'antiguedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garage'); ?>
		<?php echo $form->textField($model,'garage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantBanio'); ?>
		<?php echo $form->textField($model,'cantBanio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantDormitorio'); ?>
		<?php echo $form->textField($model,'cantDormitorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantAmbiente'); ?>
		<?php echo $form->textField($model,'cantAmbiente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'destacado'); ?>
		<?php echo $form->textField($model,'destacado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cedulaUsuario'); ?>
		<?php echo $form->textField($model,'cedulaUsuario',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idBarrio'); ?>
		<?php echo $form->textField($model,'idBarrio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->