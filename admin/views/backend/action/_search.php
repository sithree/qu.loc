<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'charity',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'mainDesc',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'keywords',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textAreaRow($model,'shortDesc',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'why',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'say',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'start',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'end',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'use',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'available',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'free',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'maxInHead',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'max',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'min',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'minActions',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'city',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'category',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'active',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
