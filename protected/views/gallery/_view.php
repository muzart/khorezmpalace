<?php
/* @var $this GalleryImagesController */
/* @var $data GalleryImages */
?>
<div class="col-md-3 col-xs-6">
    <div class="shape-square middle-corners">
        <a href="<?=Yii::app()->baseUrl.GalleryImages::IMAGE_FOLDER.$data->image;?>" class="zoom-image">
            <img alt="" src="<?=Yii::app()->baseUrl.GalleryImages::IMAGE_FOLDER.$data->image;?>">
        </a>
    </div>
</div>
