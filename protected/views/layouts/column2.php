<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="col-md-8">
            <?php echo $content; ?>
    </div>
    <div class="col-md-4">

        <?php $this->widget('application.widgets.Categories');?>
        <div class="blog-bottom">
            <h4><?php echo Yii::t('main','Category Posts');?></h4>
            <div class="product-go">
                <a href="#" class="fashion"><img class="img-responsive " src="/images/bi2.jpg" alt=""></a>
                <div class="grid-product">
                    <a href="#" class="elit">Consectetuer adipiscing</a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

    </div>
</div>
    <div class="clearfix"> </div>

<?php $this->endContent(); ?>