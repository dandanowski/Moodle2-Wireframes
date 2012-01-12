YUI().use('node', 'event', 'selector-css3', 'io-base', 'json-parse', 'event-hover', 'get', 'anim', 'overlay', function(Y) {
    
    var min_block_width = 300;
    var min_num_courses = 2;
    uri = '../_c/code/ajax/course-progress.php';
    
    loaded = false;

    progress_meter = Y.one('.block_course-progress .meter');
    
    blockBehaviors();
    
    if (progress_meter) {
    
        // Progress Status
    
        var num_complete, num_incomplete, num_notattempted, num_total;
        var w_complete, w_incomplete, w_notattempted;
        
        complete = progress_meter.one('.complete');
        incomplete = progress_meter.one('.incomplete');
        not_attempted = progress_meter.one('.not-attempted');
        
        num_complete = parseInt(complete.getAttribute('data-count'));
        num_incomplete = parseInt(incomplete.getAttribute('data-count'));
        num_notattempted = parseInt(not_attempted.getAttribute('data-count'));
    
        num_total = num_complete + num_incomplete + num_notattempted;
        
        complete.set('text', num_complete);
        incomplete.set('text', num_incomplete);
        not_attempted.set('text', num_notattempted);
        
        w_complete = (num_complete / num_total) * 100;
        w_incomplete = (num_incomplete / num_total) * 100;
        w_notattempted = (num_notattempted / num_total) * 100;
            
        anim_complete = new Y.Anim({ node: complete, to: { width: w_complete+'%' } });
        anim_incomplete = new Y.Anim({ node: incomplete, to: { width: w_incomplete+'%' } });
        anim_notattempted = new Y.Anim({ node: not_attempted, to: { width: w_notattempted+'%' } });
        
        anim_complete.run();
        anim_incomplete.run();
        anim_notattempted.run();
        
        // Behaviors
        
        if (parseInt(Y.one('.block_course-progress').getComputedStyle('width')) < min_block_width) {
            click_meter = progress_meter.on('click', showOverlay);
            Y.one('.block_course-progress').addClass('small');
        }
        else {
            //Y.one('.block_course-progress .content').append('<div class="course-progress-detail"></div>');
            cpRequest(Y.one('.block_course-progress .content'));
        }
        
        Y.on('windowresize', testSize);
            
            
        // Overlay
        Y.one('#overlay button.close').on('click', function() { Y.one('#overlay').addClass('hide'); });
        
    }
    
    function testSize() {
    
        click_meter = Y.one('.block_course-progress .meter');
    
        if (parseInt(Y.one('.block_course-progress').getComputedStyle('width')) < min_block_width) {
            // Small Sideblock
            Y.one('.block_course-progress').addClass('small');
            click_meter.on('click', showOverlay);
            
            cp_detail = Y.one('#cp-detail');
            if (cp_detail) {
                cp_clone = Y.one('#cp-detail').cloneNode(true);
                cp_detail.remove();
                Y.one('#overlay .wrap').append(cp_clone);
            }
            cpBehaviors();
        }
        else {
            // Large Sideblock
            Y.one('.block_course-progress').removeClass('small'); 
            if (!Y.one('#cp-detail')) {
                cpRequest(Y.one('.block_course-progress .content'));
            }
            else {
                orig = Y.one('#cp-detail');
                clone = orig.cloneNode(true);
                Y.one('.block_course-progress .content').append(clone);
                orig.remove();
                cpBehaviors();
            }
            click_meter.detach();
        }
        
    } // end testSize()
    
    function showOverlay(e) {
    
        Y.one('#overlay')
            .addClass('course-progress')
            .removeClass('hide');
        
        detail = Y.one('#overlay.course-progress #course-progress-detail');
        
        if (!detail) cpRequest();
        
    } // end showOverlay
    
    function cpRequest(obj){
        if (!obj) obj = Y.one('#overlay .wrap');
        if (!loaded) {
            Y.on('io:complete', cpReceived, Y, [obj]);
            var request = Y.io(uri);
        }
    } // end cpRequest()
    
    function cpReceived(id, o, args) {
    
        var id = id;
        var data = Y.JSON.parse(o.responseText);
    
        args[0].append(data.html);
        
        cpInit();
        
        loaded = true;
    
    } // end cpReceived()
    
    function cpInit() { // Progress Status
        
        Y.one('#cp-detail .cp-header').prepend(Y.one('.block_course-progress .meter').cloneNode(true));

        var num_complete, num_incomplete, num_notattempted, num_total;
        var w_complete, w_incomplete, w_notattempted;
        
        complete = progress_meter.one('.complete');
        incomplete = progress_meter.one('.incomplete');
        not_attempted = progress_meter.one('.not-attempted');
        
        num_complete = parseInt(complete.getAttribute('data-count'));
        num_incomplete = parseInt(incomplete.getAttribute('data-count'));
        num_notattempted = parseInt(not_attempted.getAttribute('data-count'));

        num_total = num_complete + num_incomplete + num_notattempted;
        
        complete.set('text', num_complete);
        incomplete.set('text', num_incomplete);
        not_attempted.set('text', num_notattempted);
        
        w_complete = (num_complete / num_total) * 100;
        w_incomplete = (num_incomplete / num_total) * 100;
        w_notattempted = (num_notattempted / num_total) * 100;
        
        complete = Y.one('#cp-detail .cp-header .meter .complete');
        incomplete = Y.one('#cp-detail .cp-header .meter .incomplete');
        not_attempted = Y.one('#cp-detail .cp-header .meter .not-attempted');
        
        complete.setStyle('width', w_complete+'%');
        incomplete.setStyle('width', w_incomplete+'%');
        not_attempted.setStyle('width', w_notattempted+'%');
        
        
        // Group stuff
        Y.all('#cp-detail .cp-report dl.group')
            .each( function(node){
                // Add Number for courses in group
                if (node.hasClass('status')) {
                    this_count = node.getAttribute('data-count');
                    html = '<span class="count">'+this_count+'</span>';
                    node.one('dt').append(html);
                }
                else if (node.hasClass('category')) {
                
                    node.one('dt').append('<div class="meter"><div class="progress complete" title="Completed"></div><div class="progress incomplete" title="Incomplete"></div><div class="progress not-attempted" title="Not Attempted"></div></div>');
                    
                    complete = node.one('.meter .complete');
                    incomplete = node.one('.meter .incomplete');
                    not_attempted = node.one('.meter .not-attempted');
                    
                    num_complete = 0;
                    num_incomplete = 0;
                    num_notattempted = 0;
                    
                    node.all('dl.course').each(
                        function (node) {
                        
                            switch (parseInt(node.getAttribute('data-status'))) {
                                case 2: num_complete++; break;
                                case 1: num_incomplete++; break;
                                case 0: num_notattempted++; break;
                            }
                            
                        }
                    );
                    
                    num_total = num_complete + num_incomplete + num_notattempted;
        
                    complete.set('text', num_complete);
                    incomplete.set('text', num_incomplete);
                    not_attempted.set('text', num_notattempted);
                    
                    w_complete = (num_complete / num_total) * 100;
                    w_incomplete = (num_incomplete / num_total) * 100;
                    w_notattempted = (num_notattempted / num_total) * 100;
                    
                    complete.setStyle('width', w_complete+'%');
                    incomplete.setStyle('width', w_incomplete+'%');
                    not_attempted.setStyle('width', w_notattempted+'%');
                    
                }
                
                // Hide too many courses
                var counter = 1;
                var num_courses = node.all('dl.course').size();
                if (num_courses >= min_num_courses) {
                    node.all('dl.course')
                        .each( function(node) {
                            if (counter++ > min_num_courses) {
                                node.addClass('hide');
                            }
                        });
                    node.one('dd').append('<div class="show-more">Showing last '+min_num_courses+' recently accessed courses. Show all...</div>');
                }
            });
        
        // Add meter to each module
        Y.all('#cp-detail .cp-report li')
            .each( function(node){
                var score='', grade='', pf='';
                this_status = parseInt(node.getAttribute('data-status')) * 50;
                if (node.hasClass('quiz') && this_status == 100) {
                    grade = node.getAttribute('data-grade').split('|');
                    score = '<div class="grade">'+grade[0]+'</div>';
                    pf = (grade[1] == 'passed') ? 'passed' : 'failed';
                }
                html = '<div class="meter"><div class="level '+pf+'" style="width:'+this_status+'%">'+score+'</div></div>';
                node.append(html);
            });
        
        // Add meter to each course
        Y.all('#cp-detail .course')
            .each( function(node) {
                var count = 0;
                var score = 0;
                node.all('li').each( function(node) {
                    score += parseInt(node.getAttribute('data-status'));
                    count ++;
                });
                count *= 2;
                percent = parseInt((score / count) * 100);
                html = '<div class="meter" title="'+percent+'%"><div class="level" style="width:'+percent+'%"></div></div>';
                node.one('dt').append(html);
            });
            
        cpBehaviors();
        
    } // end cpInit()
            
    function cpBehaviors() {
    
        Y.all('#cp-detail .filters .group li')
            .on(
                'click',
                function(e) {
                
                    Y.all('#cp-detail .filters .group li').removeClass('active');
                    e.target.addClass('active');
                    
                    Y.all('#cp-detail .cp-report dl.group').addClass('hide');
                    Y.all('#cp-detail .cp-report dl.group dd').addClass('hide');
                    
                    if (e.target.hasClass('courses')) {
                        Y.all('#cp-detail .cp-report dl.courses').removeClass('hide');
                    }
                    else if (e.target.hasClass('category')) {
                        Y.all('#cp-detail .cp-report dl.category').removeClass('hide');
                    }
                    else {
                        Y.all('#cp-detail .cp-report dl.status').removeClass('hide');
                    }
                }
            );
        
        Y.all('#cp-detail .cp-report dt').detach();
        Y.all('#cp-detail .cp-report dt')
            .setStyle('cursor', 'pointer')
            .on('click', function(e) { 
                e.target.next('dd').toggleClass('hide'); 
                cpShowMoreCourses(e.target);
                e.stopPropagation();
            });
        
        Y.all('#cp-detail .cp-report dt, #cp-detail .cp-report li')
            .on(
                'hover', 
                function(e) { e.target.addClass('hover'); },
                function(e) { e.target.removeClass('hover'); }
            );
        
        Y.all('#cp-detail .show-more')
            .on('click', function(e) {
                e.target.siblings('dl.course').removeClass('hide');
                e.target.remove();
            });
            
    } // end cpBehaviors()
    
    function blockBehaviors() {
    
        // Move Block Button
        btn_move = Y.one('.block_course-progress .header button.move');
        btn_move.on(
            'click',
            function(e) {
            
                target = Y.one('#region-post');
                if (e.target.ancestor('.block-region')) { target = Y.one('#region-main'); }
            
                block = Y.one('.block_course-progress');
                clone = block.cloneNode(true);
                target.append(clone);
                block.remove();
                testSize();
                cpBehaviors();
                blockBehaviors();
            }
        );
        
    } // end blockBehaviors()
    
    function cpShowMoreCourses(o) {
        
    } // end cpShowMoreCourses()
    
});