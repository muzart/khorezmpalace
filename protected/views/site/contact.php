<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
	'Contact',
);
Yii::app()->clientScript->registerScript( 'refresh-captcha-contact',
	'$("img#yw0").click();' );
?>
<section class="box">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="text-dark-blue text-center fancy-heading">
					<h1 class="font-700"><?=Yii::t('contact', 'Contacts');?></h1>
					<hr class="text-dark-blue size-30 center-me">
					<p><?=Yii::t('contact', 'Drop us a line');?></p>
					<br>
				</div>
			</div>
		</div> <!-- /.row -->
		<div class="row">
			<div class="col-md-12">
				<div class="grey contact-data">
					<ul class="row clean-list">
						<li class="col-md-4">
							<div class="center-me">
								<i class="icon-338 font-3x"></i>
								<span><?=Yii::app()->params['hotel'][Yii::app()->language]?></span>
								<span><?=Yii::app()->params['address'][Yii::app()->language]?> </span>
								<span><?=Yii::app()->params['city'][Yii::app()->language]?> </span>
							</div>
						</li>
						<li class="col-md-4">
							<div class="center-me">
								<i class="icon-402 font-3x"></i>
								<span><?=Yii::app()->params['tel']?></span>
								<span><?=Yii::app()->params['fax']?></span>
								<br>
							</div>
						</li>
						<li class="col-md-4">
							<div class="center-me">
								<i class="icon-274 font-3x"></i>
								<span>khorezmpalace@mail.ru</span>
								<span>khorezmpalace@gmail.com</span>
								<br>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-5">
				<?php if(Yii::app()->user->hasFlash('contact')): ?>

					<div class="flash-success">
						<?php echo Yii::app()->user->getFlash('contact'); ?>
					</div>

				<?php else: ?>

					<p>
						<?php
						echo Yii::t('contact','If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.');?>
					</p>

					<div class="form">

						<?php $form=$this->beginWidget('CActiveForm', array(
							'id'=>'contact-form',
							'enableClientValidation'=>true,
							'clientOptions'=>array(
								'validateOnSubmit'=>true,
							),
						)); ?>

						<?php echo $form->errorSummary($model); ?>

						<div class="form-group">
							<?php echo $form->labelEx($model,'name'); ?>
							<?php echo $form->textField($model,'name'); ?>
							<?php echo $form->error($model,'name'); ?>
						</div>

						<div class="form-group">
							<?php echo $form->labelEx($model,'email'); ?>
							<?php echo $form->textField($model,'email'); ?>
							<?php echo $form->error($model,'email'); ?>
						</div>

						<div class="form-group">
							<?php echo $form->labelEx($model,'subject'); ?>
							<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
							<?php echo $form->error($model,'subject'); ?>
						</div>

						<div class="form-group">
							<?php echo $form->labelEx($model,'body'); ?>
							<?php echo $form->textArea($model,'body',array('form-groups'=>6, 'cols'=>50)); ?>
							<?php echo $form->error($model,'body'); ?>
						</div>

						<?php if(CCaptcha::checkRequirements()): ?>
							<div class="form-group">
								<?php echo $form->labelEx($model,'verifyCode'); ?>
								<div>
									<?php $this->widget('CCaptcha',array(
										'showRefreshButton'=>false,
										'clickableImage'=>true,
										'imageOptions'=>array(
											'width'=>'200',
											'style'=>'height:80px'
										)
									)); ?>
									<script>
										$("img#yw0").click();
									</script>
									<?php echo $form->textField($model,'verifyCode'); ?>
								</div>
								<?php echo $form->error($model,'verifyCode'); ?>
							</div>
						<?php endif; ?>

						<div class="form-group buttons">
							<br>
							<?php echo CHtml::submitButton(Yii::t('main','Submit'),array('class'=>'green text-white')); ?>
						</div>

						<?php $this->endWidget(); ?>

					</div><!-- form -->

				<?php endif; ?>
			</div>
			<div class="col-md-7">
				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script>
				<div style='overflow:hidden;height:840px;width:700px;'>
					<div id='gmap_canvas' style='height:755px;width:700px;'></div>
					</div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>
				<script type='text/javascript'>function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(41.5511552,60.6350204),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(41.5508075,60.6342694)});infowindow = new google.maps.InfoWindow({content:'<strong>Khorezm Palace</strong><br>Al-Beruni,2<br>Urgench, Uzbekistan<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</section>