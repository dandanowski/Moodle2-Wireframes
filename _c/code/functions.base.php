<?



function renderStylesHeader() {
    
    global $CFG;
    
    // External
    if (isset($CFG->css->ext)) {
        foreach ($CFG->css->ext as $css) {
            echo '<link rel="stylesheet" href="'.$css.'"/>';
        }
    }

    // Internal
    if ($CFG->css->compress) {
        $css_list = implode(',', $CFG->css->inc);
        echo '<link rel="stylesheet" href="'.$CFG->wwwroot.$CFG->css->dir.'/styles.php?i='.$css_list.'"/>';
    }
    else {
        foreach ($CFG->css->inc as $css) {
            echo '<link rel="stylesheet" href="'.$CFG->wwwroot.$CFG->css->dir.'/'.$css.'.css"/>';
        }
    }

    return;

} // end renderStylesHeader()



function renderScriptsFooter() {

    global $CFG;

    // Include YUI javascript library
    if ($CFG->js->lib->name == 'yui' && $CFG->js->lib->local) {
        echo '<script src="'.$CFG->wwwroot.'/_c/lib/yui/3.4.1/build/yui/yui-min.js"></script>';
    }
    else if ($CFG->js->lib->name == 'yui') {
        echo '<script src="http://yui.yahooapis.com/3.4.1/build/yui/yui-min.js"></script>';
    }
    
    // Include jQuery javascript library
    if ($CFG->js->lib->name == 'jquery' && $CFG->js->lib->local) {
        echo '<script src="'.$CFG->wwwroot.'/_c/lib/jquery/jquery-1.6.4.min.js"></script>';
    }
    else  if ($CFG->js->lib->name == 'jquery') {
        echo '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>';
    }
    
    //
    if ($CFG->js->compress) {
        $js_list = implode(',', $CFG->js->inc);
        echo '<script src="'.$CFG->wwwroot.$CFG->js->dir.'/scripts.php?i='.$js_list.'"></script>';
    }
    else {
        foreach ($CFG->js->inc as $js) {
            echo '<script src="'.$CFG->wwwroot.$CFG->js->dir.'/'.$js.'.js"></script>';
        }
    }
    
    return;

} // end renderScriptsFooter()



function renderSidePre() {

    global $PAGE;
    $html = '';
    
    foreach ( $PAGE->region->pre->blocks as $block ) {
        $html .= createBlock($block);
    }
        
    echo $html;

} // end renderSidePre()



function renderSidePost() {

    global $PAGE;
    $html = '';
    
    foreach ( $PAGE->region->post->blocks as $block ) {
        $html .= createBlock($block);
    }
        
    echo $html;
    
} // end renderSidePre()



function createBlock($o=false) {

    if (!$o || !isset($o->type)) {
        $o->type = 'HTML';
        $o->title = "Default Side Block Title";
        $o->content = "<p>Ex quis illud instructior eos, quo solum oblique perpetua ad, meliore pertinax qui cu. Et agam aliquid consetetur sed, ut pro latine gloriatur. Mei accumsan mnesarchum elaboraret ad. </p>";
    }
    
    switch($o->type) {
        case 'CourseProgress':  $html = createBlockCourseProgress($o); break;
        case 'Settings':        $html = createBlockSettings(); break;
        case 'Calendar':        $html = createBlockCalendar(); break;
        default:                $html = createBlockHtml($o); break;
    }
    
    return $html;
    
} // end createBlock()



function createBlockHtml($o=false) {

    if (!$o) return false;
    
    $html = '
        <div class="block block_html">
            <div class="header">
                <div class="title">
                    <div class="block_action"><img class="block-hider-hide"><img class="block-hider-show"><input type="image"></div>
                    <h2>'.$o->title.'</h2>
                    <div class="commands"></div>
                </div>
            </div>
            <div class="content">'.$o->content.'</div>
        </div>
        ';
        
    return $html;
    
} // end createBlockHtml()



function createBlockCalendar() {
    
    $html = '
        <div class="block block_calendar">
            <div class="header">
                <div class="title">
                    <div class="block_action"><img class="block-hider-hide"><img class="block-hider-show"><input type="image"></div>
                    <h2>Calendar</h2>
                    <div class="commands"></div>
                </div>
            </div>
            <div class="content">Calendar</div>
        </div>
        ';
        
    return $html;
    
} // end createBlockHtml()



function createBlockSettings() {
    
    $html = '
        <div class="block block_settings">
            <div class="header">
                <div class="title">
                    <div class="block_action"><img class="block-hider-hide"><img class="block-hider-show"><input type="image"></div>
                    <h2>Settings</h2>
                    <div class="commands"></div>
                </div>
            </div>
            <div class="content">Settings</div>
        </div>
        ';
        
    return $html;
    
} // end createBlockHtml()



function createBlockCourseProgress($o=false) {
    
    if (!isset($o->complete)) $o->complete = 10;
    if (!isset($o->incomplete)) $o->incomplete = 10;
    if (!isset($o->notattempted)) $o->notattempted = 10;
    
    $html = '
        <div class="block block_course-progress course-progress">
            <div class="header">
                <div class="title">
                    <div class="block_action"><img class="block-hider-hide"><img class="block-hider-show"><input type="image"><button class="move">Move</button></div>
                    <h2>Course Progress</h2>
                    <div class="commands"></div>
                </div>
            </div>
            <div class="content">
                <div class="meter">
                    <div class="progress complete" data-count="'.$o->complete.'" title="Completed"></div>
                    <div class="progress incomplete" data-count="'.$o->incomplete.'" title="Incomplete"></div>
                    <div class="progress not-attempted" data-count="'.$o->notattempted.'" title="Not Attempted"></div>
                </div>
            </div>
        </div>
        ';
        
    return $html;
    
} // end createBlockHtml()