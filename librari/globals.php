<?php
	function PrintModules($arr_modules){
		foreach($arr_modules as $modfname) {
			include($modfname);
		}
	}
?>