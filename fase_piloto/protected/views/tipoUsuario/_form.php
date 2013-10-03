<?php
/* @var $this TipoUsuarioController */
/* @var $model TipoUsuario */
/* @var $form CActiveForm */
?>

<div class="row-fluid">
	<div class="span6">
		<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>"Text fields",
			));
			
		?>
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'tipo-usuario-form',
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation'=>false,
			)); ?>
			
				<p class="note">Fields with <span class="required">*</span> are required.</p>
			
				<?php echo $form->errorSummary($model); ?>
			
				<!--div class="row"-->
					<?php echo $form->labelEx($model,'nombre'); ?>
					<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
					<?php echo $form->error($model,'nombre'); ?>
				<!--/div-->
			<br />
				<!--div class="row buttons"-->
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
				<!--/div-->
			
			<?php $this->endWidget(); ?>
		<?php $this->endWidget();?>
	</div>
</div><!-- form -->