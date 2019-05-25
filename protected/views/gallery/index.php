<?php
/* @var $this GalleryImagesController */
/* @var $dataProvider CActiveDataProvider */
/* @var $galleries Gallery[] */
?>
<div class="row">
    <div class="col-md-12">
        <div class="text-dark-blue text-center fancy-heading">
            <h1 class="font-700"><?=Yii::t('main','Gallery')?></h1>
            <hr class="text-dark-blue size-30 center-me">
        </div>
    </div>
</div>

<div class="">
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'ajaxUpdate'=>true,
        'pagerCssClass'=>'YiiPager',
        'summaryText'=>'',
        'itemView'=>'_view',
        'itemsCssClass'=>'clean-list row gallery-items',
        'pagerCssClass'=>'text-center',
        'pager' => array(
            'cssFile'=>Yii::app()->baseUrl."/css/pagination.css",
        ),
    )); ?>
</div>
