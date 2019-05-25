<?php
/* @var $services Services[]*/
?>
<section class="box border-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-dark-blue text-center fancy-heading">
                    <h1 class="font-700"><?=Yii::t('main','Facilities');?></h1>
                    <hr class="text-dark-blue size-30 center-me">
                    <p><?=Yii::t('main','What we can offer');?></p>
                </div>
            </div>
        </div> <!-- /.row -->
        <ul class="clean-list facilities-items text-center row">
            <?php foreach ($services as $service):?>
            <li class="col-md-3 col-sm-4">
                <div class="facility-item">
                    <div class="shape-square aquablue">
                        <figure>
                            <a href="<?=Yii::app()->createUrl('/services')?>">
                                <img src="<?=Yii::app()->baseUrl.Services::IMAGE_FOLDER.$service->img?>" alt="facilities">
                            </a>
                            <!--<figcaption>
                                <div class="hover-top aquablue">
                                    <span class="uppercase font-300 text-white"><?=$service->title?></span>
                                </div>
                                <div class="hover-bottom dark-aquablue">
                                    <span class="text-white font-small"><b><?=$service->cost?></span>
                                </div>
                            </figcaption>-->
                        </figure>
                    </div>
                    <span class="uppercase font-300 text-white facility-text"><?=$service->title?></span>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div> <!-- /.container -->
</section> <!-- /.facilities -->