<?php /* @var $room_types RoomType[] */?>
<?php
    $value = $roomType ? $roomType: '';
?>
<section class="box border-bottom book-box" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="the-title text-center font-300"><i class="icon-141"></i> <?=Yii::t('main','Make a Reservation')?></h4>
                <div class="dark-blue booking-form">
                    <?php if(Yii::app()->user->hasFlash('booking')):?>
                    <div>
                        <h1 class="text-white text-center"><?=Yii::app()->user->getFlash('booking')?></h1>
                    </div>
                    <?php else:?>
                        <?php $form=$this->beginWidget('CActiveForm', array(
                            'id'=>'booking-form',
                            'action'=>Yii::app()->createUrl('booking'),
//                            'enableClientValidation'=>true,
                            'enableAjaxValidation'=>true,
                            'clientOptions'=>array(
                                'validateOnSubmit'=>true,
                            ),
                            'htmlOptions'=>array(
                                'class'=>'row no-padding',
                            )
                        )); ?>
                        <?php echo $form->errorSummary($model); ?>

                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <?php echo $form->textField($model,'your_name', array('class'=>'darken text-white','required','placeholder'=>Yii::t('main','Your name'))); ?>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <?php echo $form->textField($model,'email', array('class'=>'darken text-white','required','placeholder'=>Yii::t('main','Your email'))); ?>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <i class="icon-201"></i>
                                <?php echo $form->textField($model,'room_type', array('value'=>$value,'readonly','class'=>'room-select','required','placeholder'=>Yii::t('main','Room type'))); ?>
                                <ul class="clean-list font-small">
                                    <?php foreach ($room_types as $rt):?>
                                        <li><?=$rt->name;?></li>
                                    <?php endforeach;?>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <i class="icon-201"></i>
                            <?php echo $form->textField($model,'rooms', array('class'=>'room-select','required','placeholder'=>Yii::t('main','Rooms'))); ?>
                                <ul class="clean-list font-small">
                                    <li>1 room</li>
                                    <li>2 rooms</li>
                                    <li>3 rooms</li>
                                    <li>4 rooms</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <i class="icon-201"></i>
                            <?php echo $form->textField($model,'adults', array('class'=>'room-select','required','placeholder'=>Yii::t('main','Adults'))); ?>
                                <ul class="clean-list font-small">
                                    <li>1 adult</li>
                                    <li>2 adults</li>
                                    <li>3 adults</li>
                                    <li>4 adults</li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <i class="icon-201"></i>
                            <?php echo $form->textField($model,'childs', array('class'=>'room-select','required','placeholder'=>Yii::t('main','Childs'))); ?>
                                <ul class="clean-list font-small">
                                    <li>1 child</li>
                                    <li>2 childs</li>
                                    <li>3 childs</li>
                                    <li>4 childs</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-3 col-sm-6">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <i class="icon-233"></i>
                                        <?php echo $form->textField($model,'check_in', array('required','placeholder'=>Yii::t('main','Check in'))); ?>
                                    </div>
                                    <div class="col-md-5 col-sm-6">
                                        <i class="icon-201"></i>
                                        <?php echo $form->textField($model,'check_in_time', array('readonly','value'=>'14:00','class'=>'room-select','required','placeholder'=>Yii::t('main','Check in time'))); ?>
                                        <ul class="clean-list font-small">
                                            <li>00:00</li>
                                            <li>01:00</li>
                                            <li>02:00</li>
                                            <li>03:00</li>
                                            <li>04:00</li>
                                            <li>05:00</li>
                                            <li>06:00</li>
                                            <li>07:00</li>
                                            <li>08:00</li>
                                            <li>09:00</li>
                                            <li>10:00</li>
                                            <li>11:00</li>
                                            <li>12:00</li>
                                            <li>13:00</li>
                                            <li>14:00</li>
                                            <li>15:00</li>
                                            <li>16:00</li>
                                            <li>17:00</li>
                                            <li>18:00</li>
                                            <li>19:00</li>
                                            <li>20:00</li>
                                            <li>21:00</li>
                                            <li>22:00</li>
                                            <li>23:00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <i class="icon-233"></i>
                                        <?php echo $form->textField($model,'check_out', array('required','placeholder'=>Yii::t('main','Check out'))); ?>
                                    </div>
                                    <div class="col-md-5 col-sm-6">    <i class="icon-201"></i>
                                        <?php echo $form->textField($model,'check_out_time', array('readonly', 'value'=>'12:00' ,'class'=>'room-select','required','placeholder'=>Yii::t('main','Check out time'))); ?>
                                        <ul class="clean-list font-small">
                                            <li>00:00</li>
                                            <li>01:00</li>
                                            <li>02:00</li>
                                            <li>03:00</li>
                                            <li>04:00</li>
                                            <li>05:00</li>
                                            <li>06:00</li>
                                            <li>07:00</li>
                                            <li>08:00</li>
                                            <li>09:00</li>
                                            <li>10:00</li>
                                            <li>11:00</li>
                                            <li>12:00</li>
                                            <li>13:00</li>
                                            <li>14:00</li>
                                            <li>15:00</li>
                                            <li>16:00</li>
                                            <li>17:00</li>
                                            <li>18:00</li>
                                            <li>19:00</li>
                                            <li>20:00</li>
                                            <li>21:00</li>
                                            <li>22:00</li>
                                            <li>23:00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php if(CCaptcha::checkRequirements()): ?>
                            <div class="col-md-2 col-sm-6">
                                    <?php $this->widget('CCaptcha',array(
                                        'showRefreshButton'=>false,
                                        'clickableImage'=>true,
                                        'imageOptions'=>array(
                                            'width'=>'100%',
                                            'style'=>'height:46px'
                                        )
                                    ));
                                    Yii::app()->clientScript->registerScript( 'refresh-captcha',
                                        '$(document).ready(function(){jQuery("img#yw0").click();});' );
                                    ?>

                            </div>
                            <div class="col-md-2 col-sm-6">
                                <?php echo $form->textField($model,'verifyCode',array('placeholder'=>'Enter code')); ?>
                            </div>
                            <?php endif; ?>
                            <div class="col-md-2 col-sm-12 text-right">
                                <button type="submit" class="button-md green hover-dark-green soft-corners" style="width: 100%"><?=Yii::t('main','Book now')?></button>
                            </div>
                        </div>
            	        <?php $this->endWidget(); ?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /.book-form -->