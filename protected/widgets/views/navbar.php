<?php
/**
 * @var $item Menuitem
 */
?>
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
<div class="header_bottom">
    <div class="container">
        <div class="header-bottom-top">
            <div class="logo">
                <a href="<?php echo Yii::app()->createUrl("site/index");?>"><img src="/images/log.png" alt=""/></a>
            </div>

            <div class="top-nav">
                <span class="menu"><img src="/images/menu.png" alt=""> </span>
                <ul>
                    <?php foreach($items as $item):?>
                        <?php if($item->parent_id == 0):?>
                            <?php if(empty($item->childs)):?>
                                <li><a href="<?=Yii::app()->createUrl($item->url)?>"><?=$item->title?></a></li>
                            <?php else:?>
                                <li data-target="#dropdown-<?=$item->id;?>" class="dropa">
                                    <a href="<?=Yii::app()->createUrl($item->url)?>"><?=$item->title?></a>
                                    <ul class="drop" id="dropdown-<?=$item->id?>" style="display: none">
                                        <?php foreach($item->childs as $it):?>
                                            <li><a href="<?=$it->url?>"><?=$it->title?></a></li>
                                        <?php endforeach;?>
                                    </ul>
                                </li>
                            <?php endif;?>
                        <?php endif;?>
                    <?php endforeach;?></ul>
                <script>
                    $('.dropa').hover(
                        function(){
                            var target = $(this).data('target');
                            $(target).fadeIn(500);
                        },function(){
                            var target = $(this).data('target');
                            $(target).fadeOut(500);
                        }
                    );
                    $("span.menu").click(function(){
                        $(".top-nav ul").slideToggle(500, function(){
                        });
                    });
                </script>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>