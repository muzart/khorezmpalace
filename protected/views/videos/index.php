<?php
/**
 * Created by PhpStorm.
 * User: Muzaffar
 * Date: 02.06.2016
 * Time: 18:03
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="text-dark-blue text-center fancy-heading">
            <h1 class="font-700"><?=Yii::t('main','Videos')?></h1>
            <hr class="text-dark-blue size-30 center-me">
        </div>
    </div>
</div>
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
