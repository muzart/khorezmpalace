<?php
/* @var $room_type RoomType*/
?>
<div class="text-center">
    <figure>
        <div class="text-dark-blue text-center fancy-heading">
            <h1 class="font-700"><a href="<?=Yii::app()->createUrl('rooms/view',array('hash'=>$room_type->hash))?>" class="text-dark-blue hover-text-aquablue"><?=$room_type->name?></a></h1>
            <hr class="text-dark-blue size-30 center-me">
            <br>
        </div>
        <a href="<?=Yii::app()->baseUrl.RoomType::IMAGE_FOLDER.$room_type->img;?>" class="zoom-image" title="Hotel rooms" rel="gallery-1">
            <img src="<?=Yii::app()->baseUrl.RoomType::IMAGE_FOLDER.$room_type->img;?>" alt="portfolio item">
        </a>
        <figcaption class="aquablue text-white">
            <ul class="inline-list center-me amenities">
                <li><i class="icon-326 font-13x"></i></li>
                <li><i class="icon-391 font-13x"></i></li>
                <li><i class="icon-426 font-13x"></i></li>
                <li><i class="icon-217 font-13x"></i></li>
                <li><i class="icon-219 font-13x"></i></li>
                <li><i class="icon-237 font-13x"></i></li>
            </ul>
        </figcaption>
    </figure>
    <div class="rooms-description">
        <p>
            <?=$room_type->description;?>
        </p>
        <a href="#" id="booking" class="button-md center-me grey text-black hover-orange soft-corners long-button"> <i class="icon-382"></i><?=Yii::t('main','Show booking form');?></a>
    </div>
    <div class="booking">
        <?php $this->widget('application.widgets.Reservation',array('roomType'=>$room_type->name));?>
    </div>
</div>
<script>
    $('div.booking').hide();
    $('#booking').click(
        function (e) {
            e.preventDefault();
            $('div.booking').show();
        }
    );
</script>