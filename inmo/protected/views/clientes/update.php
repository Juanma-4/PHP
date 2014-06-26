<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->cedula=>array('view','id'=>$model->cedula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clientes', 'url'=>array('index')),
	array('label'=>'Create Clientes', 'url'=>array('create')),
	array('label'=>'View Clientes', 'url'=>array('view', 'id'=>$model->cedula)),
	array('label'=>'Manage Clientes', 'url'=>array('admin')),
);
?>

<h1>Update Clientes <?php echo $model->cedula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>