<?php 

class Buzzcontroller {
	private $site;

	function __construct( &$smarty ) {
		if ($smarty === false) {
			return false;
		}
		$this->site = &$smarty;
	}

	protected function &get_site() {
		return $this->site;
	}
}