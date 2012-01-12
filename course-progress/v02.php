<?php
    
    $PAGE->title = 'Development Wireframes - Moodle 2';
    // Left Column Sideblocks
    $PAGE->region->pre->blocks[] = (object) array('type'=>'Settings');
    $PAGE->region->pre->blocks[] = (object) array();
    // Right Column Sideblocks
    $PAGE->region->post->blocks[] = (object) array('type'=>'HTML','title'=>'Test HTML Block', 'content'=>'Some such.');
    $PAGE->region->post->blocks[] = (object) array('type'=>'CourseProgress', 'complete'=>5, 'incomplete'=>4, 'notattempted'=>3);

    // Path to root
    $CFG->wwwroot = (empty($CFG->wwwroot))  ? '../' : $CFG->wwwroot;
    $CFG->dirroot = (empty($CFG->dirroot))  ? '../' : $CFG->dirroot;
    
    // Additional Resources
    $CFG->css->inc[] = 'course-progress';
    $CFG->js->inc[] = 'behaviors.course-progress.v02';
    
    require_once($CFG->dirroot . '/_c/code/config.php');
    require_once($CFG->dirroot . '/_c/code/page.top.php');
    
?>

<h1>Course Progress Prototype</h1>

<h2>How this prototype works</h2>
<p>On page load the course progress block loads into the sidebar on the right. If the block is narrow enough it will only display an iTunes like meter showing a quick summary of complete, incomplete and not attempted courses. Clicking on the meter will display an overlay with the full course progress information.</p>
<p>Clicking on the "Move" button will move the sideblock into the main content area (or back to right sidebar). When in the main content area it displays the full course progress right in the page.</p>
<p>In the Course Progress detail there are three links below the title "Completion Status", "Category" and "Course". Click on each of these will switch the grouping of the courses. Category is how the current course progress works. Completion Status is new and probably most useful. Course shows an A-Z course list.</p>
<p>Back to the <a href="../">prototype home</a>.</p>

<h2>About the meters</h2>
<ul>
    <li>The main meter provides a summary for relative complete, incomplete and not attempted courses for all that you are enrolled on.</li>
    <li>The course meter is intended to provide a more detailed view of just how complete a course is. By assigning values to complete, incomplete, and not attempted we can better give a sense if a course has been barely touched or is near completion.</li>
    <li>The module meter is an evolution of the existing status indicators which also incorporate quiz score as well as if is has been passed or failed.</li>
</ul>

<?php

    require_once($CFG->dirroot . '/_c/code/page.bottom.php');
