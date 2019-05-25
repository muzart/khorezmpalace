<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
?>
<section class="shape-square-50 error-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-white">
                    <h1 class="font-4x red center-me font-100 text-white uppercase">Error <?php echo $code; ?></h1>
                    <i class="icon-37 font-6x text-grey"></i><br>
                    <span class="font-2x"><b class="uppercase"><?php echo CHtml::encode($message); ?></span>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>