<?php

function myplugin_extend_navigation(global_navigation $navigation) {
	$nodeFoo = $navigation->add('Foo');
	$nodeBar = $nodeFoo->add('Bar');
}
