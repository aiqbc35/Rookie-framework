<?php
function p($data)
{
	if (is_bool($data)) {
		var_dump($data);
	}else if(is_null($data)){
		var_dump($data);
	}else{
		echo "<div style='width:100%;background-color:#CD5C5C;color:black;font-size:18px;padding:10px 10px;'>".print_r($data,true)."<div>";
	}
}