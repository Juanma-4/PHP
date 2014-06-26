<?php
/* @var $this InmueblesController */
/* @var $model Inmuebles */

$this->breadcrumbs=array(
	'Inmuebles'=>array('index'),
	$model->IdInmueble,
);

$this->menu=array(
	array('label'=>'List Inmuebles', 'url'=>array('index')),
	array('label'=>'Create Inmuebles', 'url'=>array('create')),
	array('label'=>'Update Inmuebles', 'url'=>array('update', 'id'=>$model->IdInmueble)),
	array('label'=>'Delete Inmuebles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IdInmueble),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inmuebles', 'url'=>array('admin')),
);
?>

<h1>View Inmuebles #<?php echo $model->IdInmueble; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdInmueble',
		'coordenadas',
		'categoria',
		'superficie',
		'antiguedad',
		'garage',
		'precio',
		'cantBanio',
		'cantDormitorio',
		'cantAmbiente',
		'destacado',
		'cedulaUsuario',
		'idBarrio',
	),
)); ?>
