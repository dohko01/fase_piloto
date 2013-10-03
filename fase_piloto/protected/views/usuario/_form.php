<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
	<div class="span6">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>"",
			));
			
		?>
			
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'usuario-form',
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation'=>false,
			)); ?>
				<div class="alert">
					Fields with <strong>*</strong> are required.
				</div>
				<?php echo $form->errorSummary($model); ?>
			
				<!--div class="row"-->
					<?php echo $form->labelEx($model,'nombre'); ?>
					<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255, 'class'=>'span6')); ?>
					<?php echo $form->error($model,'nombre'); ?>
				<!--/div-->
			
				<!--div class="row"-->
					<?php echo $form->labelEx($model,'apellido_paterno'); ?>
					<?php echo $form->textField($model,'apellido_paterno',array('size'=>60,'maxlength'=>255, 'class'=>'span6')); ?>
					<?php echo $form->error($model,'apellido_paterno'); ?>
				<!--/div-->
			
				<!--div class="row"-->
					<?php echo $form->labelEx($model,'apellido_materno'); ?>
					<?php echo $form->textField($model,'apellido_materno',array('size'=>60,'maxlength'=>255, 'class'=>'span6')); ?>
					<?php echo $form->error($model,'apellido_materno'); ?>
				<!--/div-->
			
				<!--div class="row"-->
					<?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255, 'class'=>'span6')); ?>
					<?php echo $form->error($model,'username'); ?>
				<!--/div-->
			
				<!--div class="row"-->
					<?php echo $form->labelEx($model,'pw'); ?>
					<?php echo $form->textArea($model,'pw',array('rows'=>6, 'cols'=>50, 'class'=>'span6')); ?>
					<?php echo $form->error($model,'pw'); ?>
				<!--/div-->
			
				<!--div class="row"-->
					<?php echo $form->labelEx($model,'activo'); ?>
					<?php echo $form->checkBox($model,'activo', array('checked'=>'checked')); ?>
					<?php echo $form->error($model,'activo'); ?>
				<!--/div-->
			
				<!--div class="row"-->
					<?php echo $form->labelEx($model,'permisos'); ?>
					<?php echo $form->textArea($model,'permisos',array('rows'=>6, 'cols'=>50, 'class'=>'span6')); ?>
					<?php echo $form->error($model,'permisos'); ?>
				<!--/div-->
			
				<!--div class="row"-->
					<?php echo $form->labelEx($model,'idTipoUsuario'); ?>
					<?php
						$list = CHtml::listData(TipoUsuario::model()->findAll(array('order' => 'nombre')), 'idTipoUsuario', 'nombre');
						echo $form->dropDownList($model, 'idTipoUsuario', $list, array('class'=>'span6'));
					?>
					<?php echo $form->error($model,'idTipoUsuario'); ?>
				<!--/div-->
			
				<!--div class="row"-->
					<?php echo $form->labelEx($model,'email'); ?>
					<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255, 'class'=>'span6')); ?>
					<?php echo $form->error($model,'email'); ?>
				<!--/div-->
				<br />
				<!--div class="row buttons"-->
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
				<!--/div-->
			
			<?php $this->endWidget(); ?>
		<?php $this->endWidget();?>
	</div>
</div><!-- form -->