<?php
/*@var $roomTypes RoomType[] */
?>
<section class="box border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-dark-blue text-center fancy-heading">
                    <h1 class="font-700"><?=Yii::t('main','Rooms')?></h1>
                    <hr class="text-dark-blue size-30 center-me">
                    <p><?=Yii::t('main','what kind of rooms we have')?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
				<span id="controls-carousel">
					<a href="#" class="prev-nav soft-corners text-grey hover-grey" data-target="prev"><i class="icon-83"></i></a>
					<a href="#" class="next-nav soft-corners text-grey hover-grey" data-target="next"><i class="icon-90"></i></a>
				</span>
                <div id="rooms-slider" class="row">
                    <ul class="clean-list rooms-items">
                        <?php foreach ($roomTypes as $rt):?>
                        <li>
                            <div class="text-center">
                                <h3 class="text-dark-blue"><a href="<?=Yii::app()->createUrl('rooms/view',array('hash'=>$rt->hash))?>" class="text-dark-blue hover-text-aquablue"><?=$rt->name?></a></h3>
                                <figure>
                                    <a href="<?=Yii::app()->baseUrl.RoomType::IMAGE_FOLDER.$rt->img;?>" class="zoom-image" title="Hotel rooms" rel="gallery-1">
                                        <img src="<?=Yii::app()->baseUrl.RoomType::IMAGE_FOLDER.$rt->img;?>" alt="portfolio item" style="width: 360px; height:250px">
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
                                        <?=$rt->description;?>
                                    </p>
                                    <a href="<?=Yii::app()->createUrl('rooms/view',array('hash'=>$rt->hash))?>" class="button-md center-me grey text-black hover-orange soft-corners long-button"> <i class="icon-382"></i><?=Yii::t('main','View');?></a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>