<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=Yii::app()->name?> | <?=Yii::app()->user->role ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= Yii::app()->baseUrl; ?>/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= Yii::app()->baseUrl; ?>/adminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= Yii::app()->baseUrl; ?>/adminLTE/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/common.css">
    <!-- iCheck -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue wysihtml5-supported">
<section class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="<?=Yii::app()->baseUrl?>/admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Khorezm</b> Palace</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= Yii::app()->baseUrl; ?>/adminLTE/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?=Yii::app()->user->name ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?= Yii::app()->baseUrl; ?>/adminLTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                <p>
                                    <?=Yii::app()->user->name ?> - <?=Yii::app()->user->role ?>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?=Yii::app()->createUrl('/admin/user/view',array('id'=>Yii::app()->user->id))?>" class="btn btn-default btn-flat">Профиль</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?=Yii::app()->createUrl('/site/logout');?>" class="btn btn-default btn-flat">Выход</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar" style="height: auto; ">
            <!-- sidebar menu: : style can be found in sidebar.less -->
                <?php $this->widget('zii.widgets.CMenu',array(
                    'items'=>array(
                        array('label'=>'Админ', 'url'=>array('/admin/default')),
                        array('label'=>'Бронирование', 'url'=>array('/admin/booking/admin')),
                        array('label'=>'Меню', 'url'=>array('/admin/menu/admin')),
                        array('label'=>'Элементы меню', 'url'=>array('/admin/menuitem/admin')),
                        array('label'=>'Категории', 'url'=>array('/admin/category/admin')),
                        array('label'=>'Типы номеров', 'url'=>array('/admin/roomType/admin')),
//                        array('label'=>'Номера', 'url'=>array('/admin/room/admin')),
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
                    'htmlOptions'=>array('class'=>'sidebar-menu')
                )); ?>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <section class="content-wrapper" style="min-height: 600px; ">
        <!-- Main content -->
        <section class="content">
            <?php echo $content;?>
        </section>
    </section><!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Dashboard by AdminLTE Version</b> 2.3.0
        </div>
        <strong>Copyright © <?=date('Y')?> <a href="http://ubtuit.uz">UBTUIT</a>.</strong> All rights
        reserved.
    </footer>
</section><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="<?=Yii::app()->baseUrl ?>/adminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="<?=Yii::app()->baseUrl ?>/js/bootstrap.min.js"></script>
<script src="<?=Yii::app()->baseUrl ?>/adminLTE/dist/js/app.min.js"></script>
</body>
</html>