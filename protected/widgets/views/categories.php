<div class="grid-categories">
    <h4><?=Yii::t('main','Categories');?></h4>
    <ul class="popular">
        <?php foreach($cats as $cat):?>
        <li><a href="<?=Yii::app()->createUrl('category/view',array('hash'=>$cat->hash))?>"><i> </i><?=$cat->title;?></a></li>
        <?php endforeach;?>
    </ul>
</div>