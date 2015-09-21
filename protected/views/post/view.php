<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<h1>View Post #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'tags',
		'status',
		'create_time',
		'update_time',
		'author_id',
	),
));
?>

//Iz primera bloga

<div id="comments">
	<?php if($model->commentCount>=1): ?>
	<h3>
		echo $model->commentCount . 'comment(s)'; ?>
	</h3>

	$this->renderPartial('_comments',array(
	'post'=>$model,
	'comments'=>$model->comments,
	)); ?>
	endif; ?>

	<h3>Оставить комментарий</h3>

	<?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
	<div class="flash-success">
		echo Yii::app()->user->getFlash('commentSubmitted'); ?>
	</div>
	else: ?>
	$this->renderPartial('/comment/_form',array(
	'model'=>$comment,
	)); ?>
	endif; ?>
</div>
