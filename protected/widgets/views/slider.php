<section class="slider-box">
    <div class="slider-mask"></div>
    <div class="simple-slider">
        <ul class="clean-list">
            <?php foreach ($sliders as $slider):?>
            <li><a href="#"><?=CHtml::image(Yii::app()->baseUrl.Slider::IMAGE_FOLDER.$slider->img,'slide')?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="container custom-controls">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="slider-helper">
                    <ul class="clean-list">
                        <?php foreach ($sliders as $slider):?>
                        <li class="text-white text-center">
                            <h1 class="font-4x font-100"><?=Yii::t('main','Visit our hotel')?></h1>
                            <p class="darken font-100 welcome-mess"><?=Yii::t('main','With us you will enjoy your Vacation')?></p>
                            <p class="uppercase letter-spacing"><b><?=Yii::t('main','You are Welcome')?></b></p>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container custom-controls">
		<span id="controls">
			<a href="#" class="prev-nav" data-target="prev"><i class="icon-83"></i></a>
			<a href="#" class="next-nav" data-target="next"><i class="icon-90"></i></a>
		</span>
    </div>
</section> <!-- /.slider-box -->