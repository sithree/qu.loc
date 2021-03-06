<?php
$this->breadcrumbs=array(
	'Actions'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Action','url'=>array('index')),
	array('label'=>'Create Action','url'=>array('create')),
	array('label'=>'Update Action','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Action','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Action','url'=>array('admin')),
);
?>

<h1>View Action #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'charity',
		'mainDesc',
		'description',
		'keywords',
		'shortDesc',
		'why',
		'say',
		'start',
		'end',
		'use',
		'available',
		'free',
		'maxInHead',
		'max',
		'min',
		'minActions',
		'city',
		'category',
		'created',
		'active',
	),
)); ?>
