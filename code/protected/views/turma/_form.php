<?php
/* @var $this TurmaController */
/* @var $model Turma */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'turma-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são Obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'classe_id'); ?>
                <?php 
                    $list = Classe::model()->findAll(array(), array('id','nome'));
                    $result = array();
                    $position = 1;
                    foreach($list as $class) {
                        $result[(string)$class->id] = (string)$class->nome;
                        $position++;
                    }
                    echo $form->dropDownList($model,'classe_id', $result , array('empty' => '')); 
                ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vagas'); ?>
		<?php echo $form->textField($model,'vagas'); ?>
		<?php echo $form->error($model,'vagas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unica'); ?>
		<?php echo $form->checkBox($model,'unica'); ?>
		<?php echo $form->error($model,'unica'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->