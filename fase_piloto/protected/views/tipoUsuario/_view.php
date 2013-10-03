<?php
/* @var $this TipoUsuarioController */
/* @var $data TipoUsuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoUsuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipoUsuario), array('view', 'id'=>$data->idTipoUsuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

</div>