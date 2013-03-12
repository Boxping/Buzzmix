<?php

class Session {
	function __get($key) {
		if (isset($_SESSION[$key])) {
			$var = $_SESSION[$key];
			unset($this->$key);
			return $var;
		} else {
			return null;		
		}
	}

	function __set($key, $value = false) {
		if (is_array($key)) {
			foreach ($key as $k => $v) {
				$_SESSION[$k] = $v;	
			}
		} else {
			$_SESSION[$key]	= $value;
		}
	}

	function __isset($key) {
		if (isset($_SESSION[$key])) {
			return true;
		} 
		return false;
	}

	function __unset($key) {
		if (isset($_SESSION[$key])){
			unset($_SESSION[$key]);
		}
	}
}