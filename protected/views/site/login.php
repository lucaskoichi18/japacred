<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm'); ?>
 
    <?php echo $form->errorSummary($model); ?>
 
    <div class="row">
        <?php echo $form->label($model,'username'); ?>
        <?php echo $form->textField($model,'username') ?>
    </div>
 
    <div class="row">
        <?php echo $form->label($model,'password'); ?>
        <?php echo $form->passwordField($model,'password') ?>
    </div>
 
    <div class="row rememberMe">
        <?php echo $form->checkBox($model,'rememberMe'); ?>
        <?php echo $form->label($model,'rememberMe'); ?>
    </div>
 
    <div class="row submit">
        <?php echo CHtml::submitButton('Login'); ?>
    </div>
 
<?php $this->endWidget(); ?>
</div><!-- form -->
