<?php if(!empty($contents)):?>
    <?php foreach($contents as $content):?>
        <div class=" blog_box">
            <?php if($content->image !== ''):?>
            <a href="<?=Yii::app()->createUrl('content/view',array('hash'=>$content->hash))?>">
                <img src="<?=$content->image?>" alt="<?=$content->title?>" class="img-responsive">
            </a>
            <?php endif;?>
            <h3><a href="<?=Yii::app()->createUrl('content/view',array('hash'=>$content->hash))?>"><?=$content->title;?></a></h3>
            <div class="links">
                <p><?=Yii::t('main','Posted by $user in $category_name',array('$user'=>'Admin','$category_name'=>$category->title))?></p>
            </div>
            <p><?=mb_substr(strip_tags($content->description),1,400)."..."?></p>
            <a class="hvr-shutter-out-vertical" href="<?=Yii::app()->createUrl('content/view',array('hash'=>$content->hash))?>"><?=Yii::t('main','Read More');?></a>
        </div>
    <?php endforeach; ?>
<?php else:?>
<div class="blog_box">
<h3><?php echo Yii::t('main','No articles found by category $category_name',array('$category_name'=>$category->title));?></h3>
</div>
<?php endif;?>
