<!doctype html>

<html>

    <head>
    
        <meta charset="utf-8"/>
        <title><?= $PAGE->title; ?></title>
        <?= renderStylesHeader(); ?>
        
        
    </head>
    
    <body>
    
        <div id="page">
        
            <div id="page-header">
            
                <div class="meta">
                    <div class="title">Moodle 2 Development Wireframes</div>
                    <div class="logininfo">You are logged in as <a href="">LP Admin</a>. (<a href="">Logout</a>)</div>
                </div>
                
                <div class="banner"><div class="inner"></div></div>
                
                <div class="main-nav">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Courses</a></li>
                        <li><a href="">My E-learning</a></li>
                        <li><a href="">Help</a></li>
                    </ul>
                </div>
                
                <div class="ticker"></div>
                
                <div class="navbar">
                   
                    <div class="breadcrumb">
                        <ul>
                            <li><a title="Home" href="<?= $CFG->wwwroot ?>/">Home</a></li>
                            <li><span class="arrow sep">&#9658;</span> <span tabindex="0">Courses</span></li>
                            <li><span class="arrow sep">&#9658;</span> <a title="John" href="<?= $CFG->wwwroot ?>/">JR</a></li>
                        </ul>
                    </div>
                    
                    <div class="navbutton">
                        <div class="singlebutton">
                            <form method="" action="">
                                <div>
                                    <input type="submit" value="Turn editing on">
                                    <input type="hidden" name="id" value="">
                                    <input type="hidden" name="sesskey" value="">
                                    <input type="hidden" name="edit" value="on">
                                </div>
                            </form>
                        </div>
                    </div>                    
                
                </div>
                
                <div class="vc"></div>
                
            </div>
        
            <div id="page-content">
            
                
                <div id="region-main-box">
                    <div id="region-main">