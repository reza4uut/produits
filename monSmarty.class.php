<?php
  require_once "smarty/libs/Smarty.class.php";

	class monSmarty extends Smarty {

		public function __construct(){
			parent::__construct();

			$this->template_dir = getcwd() . "/smarty/templates/";
			$this->compile_dir = getcwd() . "/smarty/templates_c/";
			$this->config_dir = getcwd() . "/smarty/configs/";
			$this->cache_dir = getcwd() . "/smarty/cache/";
		}
	}
