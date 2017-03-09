<?php

# A2 Quiz, Question 9

namespace DWA;

class Email {

	private $recipient;

	public function __construct($recipient) {
		$this->recipient = $recipient;
	}

	public function send($subject, $message) {
		return mail($this->recipient, $subject, $message);
	}
}
