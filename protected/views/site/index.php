<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->widget("application.widgets.Reservation");?>
<?php $this->widget("application.widgets.Facilities");?>
<?php $this->widget("application.widgets.Rooms");?>