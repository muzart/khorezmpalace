<div class="container">
    <div class="header-top-top">
        <div class=" header-top-left">
            <p>24/7 Support <span>99893-4677590</span></p>
        </div>
        <div class=" header-top-right">
            <?php $this->widget('application.widgets.LanguageSwitcherWidget');?>
            <div class="clearfix"></div>
        </div>

        <div class="clearfix"></div>
    </div>
</div>

<ul class="megamenu skyblue">
    <li class="showhide" style="display: none;"><span class="title">MENU</span><span class="icon1"></span><span class="icon2"></span></li>
    <?php foreach ($items as $item): ?>
        <?php if($item->parent_id == 0):?>
            <?php if(empty($item->childs)):?>
    <li><a href="<?=Yii::app()->createUrl($item->url)?>"><?=$item->title?></a></li>
        <?php else:?>
    <li style="">
        <a href="<?=Yii::app()->createUrl($item->url)?>"><?=$item->title?></a>
        <ul class="dropdown" style="display: none;">
            <?php foreach ($item->childs as $child):?>
            <li><a href="<?=$child->url?>"><?=$child->title?></a></li>
            <?php endforeach;?>
        </ul>
    </li>
            <?php endif;?>
        <?php endif;?>
    <?php endforeach;?>
</ul>