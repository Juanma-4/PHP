<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->IdInmueble=>array('view','id'=>$model->IdInmueble),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inmuebles', 'url'=>array('index')),
	array('label'=>'Create Inmuebles', 'url'=>array('create')),
	array('label'=>'View Inmuebles', 'url'=>array('view', 'id'=>$model->IdInmueble)),
	array('label'=>'Manage Inmuebles', 'url'=>array('admin')),
);
?>

<h1>Update Inmuebles <?php echo $model->IdInmueble; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>