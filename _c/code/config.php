<?php


// Variables -------------------------------------------------------------------

// Defaults
#$CFG->css->default = array('reset','layout');
$CFG->css->default = array('layout');
$CFG->js->default = array('behaviors.base');

// Environment
$CFG->css->dir = '/_c/css';
$CFG->js->dir = '/_c/js';
$CFG->lib->dir = '/_c/lib';

// CSS Stuff
$CFG->css->compress = (!isset($CFG->css->compress)) ? true : $CFG->css->compress;
$CFG->css->inc = (!isset($CFG->css->inc)) ? $CFG->css->default : array_merge($CFG->css->default, $CFG->css->inc);

// JS Stuff
$CFG->js->compress = (!isset($CFG->js->compress)) ? true : $CFG->js->compress;
$CFG->js->lib->name = (empty($CFG->js->lib->name)) ? 'jquery' : $CFG->js->lib->name;
$CFG->js->lib->local = (!isset($CFG->js->lib->local)) ? false : $CFG->js->lib->local;
$CFG->js->inc = (!isset($CFG->js->inc)) ? $CFG->js->default : array_merge($CFG->js->default, $CFG->js->inc);

// Page Title
$PAGE->title = (empty($PAGE->title)) ? 'No Title' : $PAGE->title;



// Required Files --------------------------------------------------------------
require_once($CFG->wwwroot . '/_c/code/functions.base.php');



// Dev Settings ----------------------------------------------------------------
$CFG->css->compress = false;
$CFG->js->compress = false;
$CFG->js->lib->local = true;



// Project Specific ------------------------------------------------------------
$CFG->js->lib->name = 'yui';
$CFG->css->ext = array(
    'http://yui.yahooapis.com/3.4.1/build/cssreset/cssreset.css',
    'http://yui.yahooapis.com/3.4.1/build/cssfonts/cssfonts.css',
    'http://yui.yahooapis.com/3.4.1/build/cssgrids/cssgrids.css',
    );
