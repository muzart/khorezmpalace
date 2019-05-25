<?php
/**
 * Menuitems[] $items
 */
?>
<header class="main-header clearfix">
    <!-- Header Shorcode Area -->
    <div class="header-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-4">
                    <ul class="inline-list uppercase font-small header-meta">
                        <li><i class="icon-312 font-13x"></i> <?=Yii::app()->params['address'][Yii::app()->language]?></li>
                        <li><i class="icon-274 font-13x"></i> <?=Yii::app()->params['adminEmail']?></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-4">
                <?php $this->widget("application.widgets.LanguageSwitcherWidget");?>
                </div>
                <div class="col-md-2 col-sm-4">
                    <ul class="inline-list to-right header-social">
                        <li><a href="http://facebook.com/khorezmpalace"><i class="icon-528"></i></a></li>
<!--                        <li><a href="#"><i class="icon-556"></i></a></li>-->
                        <li><a href="#"><i class="icon-537"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- /.header-bar -->

    <div class="nav-bar sticky-bar" style="background-color: #00aa72"> <!-- .mega-menu helper class ued as switcher -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-8">
                    <!-- Logo Area -->
                    <figure class="identity">
                        <a href="<?=Yii::app()->createUrl("/");?>">
                            <img src="<?=Yii::app()->baseUrl;?>/images/logo.png" alt="Khorezm palace logo">
                        </a>
                    </figure>
                </div><!-- /.col-md-2 -->
                <div class="col-md-8 col-xs-4">
                    <!-- Menu Area -->
                    <nav class="main-nav clearfix"> <!-- .mega-menu helper class ued as switcher -->
                        <ul class="clean-list to-right"> <!-- .to-right, to-left, .center-me helper class-->
                            <?php foreach ($items as $item): ?>
                                <?php if($item->parent_id == 0):?>
                                    <?php if(empty($item->childs)):?>
                                        <li><a href="<?=Yii::app()->createUrl($item->url)?>"><?=$item->title?></a></li>
                                    <?php else:?>
                                        <li>
                                            <a href="<?=Yii::app()->createUrl($item->url)?>"><?=$item->title?></a>
                                            <ul>
                                                <?php foreach ($item->childs as $child):?>
                                                    <li><a href="<?=Yii::app()->createUrl($child->url)?>"><?=$child->title?></a></li>
                                                <?php endforeach;?>
                                            </ul>
                                        </li>
                                    <?php endif;?>
                                <?php endif;?>
                            <?php endforeach;?>
                        </ul>
                    </nav><!-- /.main-nav -->

                    <a href="#" class="mobile-switch to-right">
                        <i class="icon-467 font-2x text-dark hover-text-grey"></i>
                    </a>
                </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.nav-bar -->
</header> <!-- /.main-nav -->