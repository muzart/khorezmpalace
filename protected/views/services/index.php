<?php /* @var $services Services[] */?>
<div class="row">
    <div class="col-md-12">
        <div class="text-dark-blue text-center fancy-heading">
            <h1 class="font-700"><?=Yii::t('main','Facilities')?></h1>
            <hr class="text-dark-blue size-30 center-me">
        </div>
    </div>
</div>
<div class="row">
    <?php foreach ($services as $service):?>
        <div class="col-md-6 col-sm-12">
            <h4 class="text-center text-dark-blue"><?=$service->title?></h4>
            <hr class="text-dark-blue center-me" style="margin: 10px 0 20px; width: 100%;">
            <?php echo CHtml::link(
                CHtml::image($service->getImgSource(),'',array('style'=>'width: 200px; padding-right: 20px', 'align'=>'left')),
                $service->getImgSource(),
                array('class'=>'zoom-image')
            );?>
            <p class="text-dark-blue">
                <?=$service->description?>
            </p>
        </div>
    <?php endforeach;?>
</div>
<br>