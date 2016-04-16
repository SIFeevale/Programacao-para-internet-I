<?php 

	class Pessoa {
		public $user;
		public $senha;

		function __construct($user, $password) {
			$this->user = $user;
			$this->password = $password;
		}
	}
?>