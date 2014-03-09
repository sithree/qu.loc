<?php
$this->breadcrumbs = array(
    'Actions' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List Action', 'url' => array('index')),
    array('label' => 'Manage Action', 'url' => array('admin')),
);
?>
<?php
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'action-form',
    'enableAjaxValidation' => false,
    'type' => 'horizontal'
        ));
?>
<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="icon"><i class="icon20 i-stats"></i></div>
                <h4>Создание акции</h4>
                <a href="#" class="minimize"></a>
            </div><!-- End .panel-heading -->

            <div class="panel-body">




                <p class="help-block">Поля помеченные <span class="required">*</span> обязательны для заполнения.</p>

                <?php echo $form->errorSummary($model); ?>

                <?php echo $form->textFieldRow($model, 'title', array('class' => 'col-lg-12', 'maxlength' => 255)); ?>
                <?php echo $form->textAreaRow($model, 'shortDesc', array('rows' => 2, 'cols' => 50, 'class' => 'col-lg-12')); ?>
                <?php echo $form->textAreaRow($model, 'description', array('rows' => 5, 'cols' => 50, 'class' => 'col-lg-12')); ?>
                <?php echo $form->textAreaRow($model, 'term', array('rows' => 5, 'cols' => 50, 'class' => 'col-lg-12')); ?>
                <?php echo $form->textFieldRow($model, 'keywords', array('class' => 'col-lg-12', 'maxlength' => 255)); ?>
                <div class="row">
                    <div class="col-lg-6">
                        <?php echo $form->textFieldRow($model, 'city', array('class' => 'col-lg-12')); ?>

                        <?php echo $form->textFieldRow($model, 'category', array('class' => 'col-lg-12')); ?>
                        <?php #echo $form->textAreaRow($model, 'why', array('rows' => 3, 'cols' => 50, 'class' => 'col-lg-12')); ?>
                    </div>
                    <div class="col-lg-6">
                        <?php #echo $form->textAreaRow($model, 'mainDesc', array('rows' => 3, 'cols' => 50, 'class' => 'col-lg-12')); ?>

                        <div class="row">
                            <div class="col-lg-6" style="margin: 0">
                                <?php echo $form->textFieldRow($model, 'start', array('class' => 'col-lg-12')); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $form->textFieldRow($model, 'end', array('class' => 'col-lg-12')); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6" style="margin: 0">
                                <?php echo $form->textFieldRow($model, 'use', array('class' => 'col-lg-12')); ?>
                            </div>
                            <div class="col-lg-6">
                                <?php echo $form->textFieldRow($model, 'created', array('class' => 'col-lg-12')); ?>
                            </div>
                        </div>
                        <?php #echo $form->textAreaRow($model, 'say', array('rows' => 3, 'cols' => 50, 'class' => 'col-lg-12')); ?>

                    </div>
                </div>
                

                


                

                <div class="form-actions">
                    <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType' => 'submit',
                        'type' => 'primary',
                        'label' => $model->isNewRecord ? 'Создать акцию' : 'Сохранить',
                    ));
                    ?>
                </div>



                <div class="clearfix"></div>

            </div><!-- End .panel-body -->
        </div><!-- End .widget -->
    </div><!-- End .col-lg-8  --> 

    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="icon"><i class="icon20 i-stats"></i></div>
                <h4>Условия</h4>
                <a href="#" class="minimize"></a>
            </div><!-- End .panel-heading -->

            <div class="panel-body">
                <?php echo $form->textFieldRow($model, 'maxInHead', array('class' => 'col-lg-12')); ?>
                <?php echo $form->textFieldRow($model, 'max', array('class' => 'col-lg-12')); ?>
                <?php echo $form->textFieldRow($model, 'min', array('class' => 'col-lg-12')); ?>
                <?php echo $form->textFieldRow($model, 'minActions', array('class' => 'col-lg-12')); ?>
                <?php echo $form->checkBoxRow($model, 'available', array('class' => 'col-lg-12')); ?>
                <?php echo $form->checkBoxRow($model, 'free', array('class' => 'col-lg-12')); ?>
                <?php echo $form->checkBoxRow($model, 'charity', array('class' => 'col-lg-12')); ?>
                <?php echo $form->checkBoxRow($model, 'active', array('class' => 'col-lg-12')); ?>

                <div class="clearfix"></div>
            </div><!-- End .panel-body -->
        </div><!-- End .widget -->
    </div><!-- End .col-lg-8  -->

    <div class="col-lg-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="icon"><i class="icon20 i-stats"></i></div>
                <h4>Контрагент</h4>
                <a href="#" class="minimize"></a>
            </div><!-- End .panel-heading -->

            <div class="panel-body">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, in, porro, officia velit quaerat modi doloribus similique dolor aspernatur impedit quod laudantium reiciendis mollitia et debitis quo nihil eius esse!</p>


                <div class="clearfix"></div>

            </div><!-- End .panel-body -->
        </div><!-- End .widget -->
    </div><!-- End .col-lg-8  --> 

</div>
<?php $this->endWidget(); ?>