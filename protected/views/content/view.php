<?php
/* @var $this ContentController */
/* @var $text Content */

$this->pageTitle = Yii::app()->name . ' - ' . $text->title;
?>

                <div class=" blog_box">
                    <h1><?=$text->title?></h1>
                    <?php if($text->image !== ''):?>
                        <p align="center">
                            <a href="/images/content/<?=$text->image;?>" class="zoom-image"><img src="/images/content/<?=$text->image; ?>" style="width:350px; float: left; padding-right: 20px;" alt="image" class="img-responsive"></a>
                        </p>
                    <?php endif;?>
                      <?=$text->description;?>
                </div>
