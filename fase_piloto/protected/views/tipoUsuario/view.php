<?php
/* @var $this TipoUsuarioController */
/* @var $model TipoUsuario */

$this->breadcrumbs=array(
	'Tipo Usuarios'=>array('index'),
	$model->idTipoUsuario,
);

$this->menu=array(
	array('label'=>'List TipoUsuario', 'url'=>array('index')),
	array('label'=>'Create TipoUsuario', 'url'=>array('create')),
	array('label'=>'Update TipoUsuario', 'url'=>array('update', 'id'=>$model->idTipoUsuario)),
	array('label'=>'Delete TipoUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoUsuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoUsuario', 'url'=>array('admin')),
);
?>

<h1>Detalles Tipo Usuario #<?php echo $model->idTipoUsuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoUsuario',
		'nombre',
	),
)); ?>
