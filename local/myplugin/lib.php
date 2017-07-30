<?php

function local_myplugin_extend_settings_navigation($settingsnav, $context) {
    global $CFG, $PAGE;

    //// Only add this settings item on non-site course pages.
    //if (!$PAGE->course or $PAGE->course->id == 1) {
    //    return;
    //}

    //// Only let users with the appropriate capability see this settings item.
    //if (!has_capability('moodle/backup:backupcourse', context_course::instance($PAGE->course->id))) {
    //    return;
    //}

    if ($settingnode = $settingsnav->find('courseadmin', navigation_node::TYPE_COURSE)) {
        $strfoo = get_string('foo', 'local_myplugin');
        $url = new moodle_url('/local/myplugin/settings.php', array('id' => $PAGE->course->id));
        $foonode = navigation_node::create(
            $strfoo,
            $url,
            navigation_node::NODETYPE_LEAF,
            'myplugin',
            'myplugin',
            new pix_icon('t/addcontact', $strfoo)
        );
        if ($PAGE->url->compare($url, URL_MATCH_BASE)) {
            $foonode->make_active();
        }
        $settingnode->add_node($foonode);
    }
}

function local_myplugin_extend_navigation(global_navigation $navigation) {
	$nodeFoo = $navigation->add('Foo');
	$nodeBar = $nodeFoo->add('Bar');
	//if ($home = $navigation->find('home', global_navigation::TYPE_SETTING)) {
	//	$home->remove();
	//}
}
