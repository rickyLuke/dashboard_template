<?php

$nav = "<ul class='nav_items'>";

foreach ($features as $key => $value) {

	$feature = ucfirst($key);
	$path = strtolower($value);

	$nav .= "
		<li data-ur='$path'>$feature</li>
	";
}

$nav .="</ul>";

echo $nav;


?>