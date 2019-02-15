<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'mood072';
$CFG->dbuser    = 'apache';
$CFG->dbpass    = 'momoyuhi';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 5433,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'https://sac.nuu.edu.tw/cgi-bin/moodle';
$CFG->dataroot  = '/var/lib/moodle';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
