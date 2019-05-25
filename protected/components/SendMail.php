<?php
class SendMail {
	/**
	 * @param string $to
	 * @param string $subject
	 * @param string $message
	 * @param string $title
	 */
	static function send($view,$to,$subject,$message, $title=null) {

		$__smtp= Yii::app()->params['smtp'];
		$mailer = Yii::app()->mailer;
		if($title == null)
			$title = Yii::app()->name;
		$mailer->IsSMTP();
		$mailer->Subject = $subject;
		$mailer->getView($view, array('message'=>$message, 'title'=>$title));

		if ( is_array($to) ) {
			foreach ($to as $value) {
				$mailer->AddAddress($value);
			}
		} else {
			$mailer->AddAddress($to);
		}

		$mailer->Host = $__smtp['host'];
		$mailer->SMTPDebug = $__smtp['debug'];
		$mailer->SMTPSecure = "ssl";
		$mailer->SMTPAuth = $__smtp['auth'];
		$mailer->Host = $__smtp['host'];
		$mailer->Port = $__smtp['port'];
		$mailer->Username = $__smtp['username'];
		$mailer->Password = $__smtp['password'];
		$mailer->CharSet = $__smtp['charset'];
		$mailer->IsHTML(true);

		$mailer->From = $__smtp['from'];
		$mailer->FromName = $__smtp['fromname'];
		return $mailer->Send();
	}
}