<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inmuebles-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'coordenadas'); ?>
		<?php echo $form->textField($model,'coordenadas',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'coordenadas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria'); ?>
		<?php echo $form->textField($model,'categoria',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'superficie'); ?>
		<?php echo $form->textField($model,'superficie'); ?>
		<?php echo $form->error($model,'superficie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antiguedad'); ?>
		<?php echo $form->textField($model,'antiguedad'); ?>
		<?php echo $form->error($model,'antiguedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garage'); ?>
		<?php echo $form->textField($model,'garage'); ?>
		<?php echo $form->error($model,'garage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantBanio'); ?>
		<?php echo $form->textField($model,'cantBanio'); ?>
		<?php echo $form->error($model,'cantBanio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantDormitorio'); ?>
		<?php echo $form->textField($model,'cantDormitorio'); ?>
		<?php echo $form->error($model,'cantDormitorio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantAmbiente'); ?>
		<?php echo $form->textField($model,'cantAmbiente'); ?>
		<?php echo $form->error($model,'cantAmbiente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'destacado'); ?>
		<?php echo $form->textField($model,'destacado'); ?>
		<?php echo $form->error($model,'destacado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedulaUsuario'); ?>
		<?php echo $form->textField($model,'cedulaUsuario',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'cedulaUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idBarrio'); ?>
		<?php echo $form->textField($model,'idBarrio'); ?>
		<?php echo $form->error($model,'idBarrio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->