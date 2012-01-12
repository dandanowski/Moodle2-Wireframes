<?php
    
    $PAGE->title = 'Development Wireframes - Moodle 2';
    // Left Column Sideblocks
    $PAGE->region->pre->blocks[] = (object) array('type'=>'Settings');
    // Right Column Sideblocks
    $PAGE->region->post->blocks[] = (object) array('type'=>'HTML','title'=>'Test HTML Block', 'content'=>'Some such.');

    // Path to root
    $CFG->wwwroot = (empty($CFG->wwwroot))  ? '.' : $CFG->wwwroot;
    $CFG->dirroot = (empty($CFG->dirroot))  ? '.' : $CFG->dirroot;
    
    // Additional Resources
    $CFG->css->inc[] = 'course-progress';
    $CFG->js->inc[] = 'behaviors.course-progress';
    
    require_once($CFG->dirroot . '/_c/code/config.php');
    require_once($CFG->dirroot . '/_c/code/page.top.php');
    
?>

<h1>Prototype Directory</h1>

<h2>Features</h2>
<ul>
    <li><a href="./course-progress">Course Progress</a>, <a href="./course-progress/v02.php">v02</a></li>
</ul>

<?php

    require_once($CFG->dirroot . '/_c/code/page.bottom.php');
