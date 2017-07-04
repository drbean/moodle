<?php

function local_myplugin_extend_navigation(global_navigation $navigation) {
	$nodeFoo = $navigation->add('Foo');
	$nodeBar = $nodeFoo->add('Bar');
	if ($home = $navigation->find('home', global_navigation::TYPE_SETTING)) {
		$home->remove();
	}
}
