<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.min.css">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/common.css">
</head>

<body>

<div class="container-fluid" id="page">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <nav class="navbar navbar-default top-navbar" role="navigation">
                <a href="/" class="navbar-brand"><?php echo CHtml::encode(Yii::app()->name); ?></a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex-collapse">
                        <span class="sr-only">Expand the menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-ex-collapse">
                    <?php $this->widget('zii.widgets.CMenu',array(
                        'items'=>array(
                            array('label'=>'Админ', 'url'=>array('/admin/default')),
                            array('label'=>'Меню', 'url'=>array('/admin/menu/admin')),
                            array('label'=>'Элементы меню', 'url'=>array('/admin/menuitem/admin')),
                            array('label'=>'Категории', 'url'=>array('/admin/category/admin')),
                            array('label'=>'Типы номеров', 'url'=>array('/admin/roomType/admin')),
                            array('label'=>'Номера', 'url'=>array('/admin/room/admin')),
                            array('label'=>'Слайдер', 'url'=>array('/admin/slider/admin')),
                            array('label'=>'Контент', 'url'=>array('/admin/content/admin')),
                            array('label'=>'Услуги', 'url'=>array('/admin/services/admin')),
                            array('label'=>'Галерея', 'url'=>array('/admin/gallery/admin')),
                            array('label'=>'Картинки галереи', 'url'=>array('/admin/galleryImages/admin')),
                            array('label'=>'Пользователи', 'url'=>array('/admin/user/admin')),
                            array('label'=>'Логин', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                            array('label'=>'Выход ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                        ),
                        'activeCssClass' => 'active',
                        'htmlOptions'=>array('class'=>'nav navbar-nav')
                    )); ?>
               </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
			        'links'=>$this->breadcrumbs,
			        'htmlOptions'=>array ('class'=>'breadcrumb')
		        )); ?><!-- breadcrumbs -->
            <?php endif?>
            <?php echo $content; ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div id="footer" class="well text-center">
                Copyright &copy; <?php echo date('Y'); ?> Golden Oasis.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->
        </div>
    </div>

</div><!-- page -->

</body>
</html>
