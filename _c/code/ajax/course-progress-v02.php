<?php
    
$html = '
<div id="cp-detail">

    <div class="cp-header">

        <h2>Course Progress</h2>
        
        <div class="filters">
            <ul class="group">
                <li class="incomplete">Incomplete</li>
                <li class="not-attempted">Not Attempted</li>
                <li class="complete">Complete</li>
                <li class="category">By Category</li>
                <li class="courses">All</li>
            </ul>
        </div>

    </div>

    <div class="cp-report">
        
        
        <!-- Categories -->
        

        <dl class="group category hide" data-count="3">
            <dt>Self Development</dt>
            <dd class="hide">
                <dl class="course" data-status="1">
                    <dt>Developing your Potential</dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li data-status="0">Employability</li>
                            <li data-status="0">Career Management</li>
                            <li data-status="0">Career Choices</li>
                            <li data-status="0">Get the Job! - CV&apos;s & Application Forms</li>
                            <li data-status="0">Get the Job! - Interview Skills</li>
                            <li data-status="1">Writing a CV Module</li>
                            <li data-status="0">Preparing to be Interviewed</li>
                            <li data-status="0">Staying Positive in a Changing Environment</li>
                        </ul>
                    </dd>
                </dl>
                <dl class="course" data-status="1">
                    <dt>Self Development Overview</dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li data-status="1">Self Development E-learning Module</li>
                        </ul>
                    </dd>
                </dl>
                <dl class="course" data-status="2">
                    <dt>Managing your Priorities</dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li data-status="2">Managing your Priorities</li>
                        </ul>
                    </dd>
                </dl>
            </dd>
        </dl>

        <dl class="group category hide" data-count="1">
            <dt>Customer and Community Focus</dt>
            <dd class="hide">
                <dl class="course" data-status="1">
                    <dt>You and the Customer Experience</dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li data-status="1">Dealing with Difficult Customers</li>
                            <li data-status="1">Customer Care</li>
                            <li data-status="2">Introduction to &apos;Customer Experience&apos;</li>
                        </ul>
                    </dd>
                </dl>
            </dd>
        </dl>

        <dl class="group category hide" data-count="1">
            <dt>Business Support Section</dt>
            <dd class="hide">
                <dl class="course" data-status="1">
                    <dt>Confidence and Assertiveness Version 2 </dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li data-status="0">Working out your Self Esteem Levels</li>
                            <li data-status="1">Confidence And Assertiveness E-Learning Course</li>
                            <li class="quiz" data-status="2" data-grade="76|passed">Confidence And Assertiveness Quiz</li>
                            <li data-status="0">Confidence and Assertiveness Survey</li>
                        </ul>
                    </dd>
                </dl>
            </dd>
        </dl>

        <dl class="group category hide" data-count="2">
            <dt>Work Smarter with... Excel 2003</dt>
            <dd class="hide">
                <dl class="course" data-status="0">
                    <dt>Advanced Learning for Excel 2003</dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li data-status="0">Advanced Excel 2003 Module</li>
                        </ul>
                    </dd>
                </dl>
                <dl class="course" data-status="0">
                    <dt>Core Skills in Microsoft Excel 2003</dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li data-status="0">Core Excel 2003 Module</li>
                            <li data-status="0">Beginner Skills in Microsoft Excel 2010</li>
                        </ul>
                    </dd>
                </dl>
            </dd>
        </dl>

        <dl class="group category hide" data-count="1">
            <dt>Health and Safety</dt>
            <dd class="hide">
                <dl class="course" data-status="0">
                    <dt>Praxis 42 Modules</dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li data-status="0">Electrical Safety</li>
                            <li data-status="0">Environmental Awareness</li>
                            <li data-status="0">Fire Safety</li>
                            <li data-status="0">Managing Safety</li>
                            <li data-status="0">Manual Handling</li>
                            <li data-status="0">Noise Awareness</li>
                            <li data-status="0">Office Safety</li>
                            <li data-status="0">Working at Heights</li>
                            <li data-status="0">Asbestos Awareness</li>
                        </ul>
                    </dd>
                </dl>
            </dd>
        </dl>

        <dl class="group category hide" data-count="1">
            <dt>Getting Started</dt>
            <dd class="hide">
                <dl class="course" data-status="2">
                    <dt>Help</dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li data-status="2">How to use the elearning modules</li>
                        </ul>
                    </dd>
                </dl>
            </dd>
        </dl>

        <dl class="group category hide" data-count="1">
            <dt>Learning and Development</dt>
            <dd class="hide">
                <dl class="course" data-status="2">
                    <dt>Corporate Learning and Development Priorities</dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li data-status="2">Andy Brookes Interview</li>
                            <li data-status="2">Video Showing How to Fill in Your Learning and Development Plan</li>
                        </ul>
                    </dd>
                </dl>
            </dd>
        </dl>

        <dl class="group category hide" data-count="1">
            <dt>Members</dt>
            <dd class="hide">
                <dl class="course" data-status="2">
                    <dt>Licensing and Regulation</dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li data-status="2">Licensing and Regulation</li>
                        </ul>
                    </dd>
                </dl>
            </dd>
        </dl>

        <dl class="group category hide" data-count="1">
            <dt>Quiz & Games</dt>
            <dd class="hide">
                <dl class="course" data-status="2">
                    <dt>Christmas Quiz 2010</dt>
                    <dd class="hide">
                        <ul class="modules">
                            <li class="quiz" data-status="2" data-grade="15|failed">Christmas Quiz 2010</li>
                        </ul>
                    </dd>
                </dl>
            </dd>
        </dl>
        
        
        <!-- Courses -->
        

        <dl class="group course not-attempted courses hide">
            <dt>Advanced Learning for Excel 2003</dt>
            <dd class="hide">
                <ul class="modules">
                    <li data-status="0">Advanced Excel 2003 Module</li>
                </ul>
            </dd>
        </dl>
        
        <dl class="group course complete courses hide">
            <dt>Christmas Quiz 2010</dt>
            <dd class="hide">
                <ul class="modules">
                    <li class="quiz" data-status="2" data-grade="15|failed">Christmas Quiz 2010</li>
                </ul>
            </dd>
        </dl>
        <dl class="group course courses incomplete hide">
            <dt>Confidence and Assertiveness Version 2 </dt>
            <dd class="hide">
                <ul class="modules">
                    <li data-status="0">Working out your Self Esteem Levels</li>
                    <li data-status="1">Confidence And Assertiveness E-Learning Course</li>
                    <li class="quiz" data-status="2" data-grade="76|passed">Confidence And Assertiveness Quiz</li>
                    <li data-status="0">Confidence and Assertiveness Survey</li>
                </ul>
            </dd>
        </dl>
        <dl class="group course courses not-attempted hide">
            <dt>Core Skills in Microsoft Excel 2003</dt>
            <dd class="hide">
                <ul class="modules">
                    <li data-status="0">Core Excel 2003 Module</li>
                    <li data-status="0">Beginner Skills in Microsoft Excel 2010</li>
                </ul>
            </dd>
        </dl>
        <dl class="group course courses complete hide">
            <dt>Corporate Learning and Development Priorities</dt>
            <dd class="hide">
                <ul class="modules">
                    <li data-status="2">Andy Brookes Interview</li>
                    <li data-status="2">Video Showing How to Fill in Your Learning and Development Plan</li>
                </ul>
            </dd>
        </dl>
        <dl class="group course courses incomplete hide">
            <dt>Developing your Potential</dt>
            <dd class="hide">
                <ul class="modules">
                    <li data-status="0">Employability</li>
                    <li data-status="0">Career Management</li>
                    <li data-status="0">Career Choices</li>
                    <li data-status="0">Get the Job! - CV&apos;s & Application Forms</li>
                    <li data-status="0">Get the Job! - Interview Skills</li>
                    <li data-status="1">Writing a CV Module</li>
                    <li data-status="0">Preparing to be Interviewed</li>
                    <li data-status="0">Staying Positive in a Changing Environment</li>
                </ul>
            </dd>
        </dl>
        <dl class="group course courses complete hide">
            <dt>Help</dt>
            <dd class="hide">
                <ul class="modules">
                    <li data-status="2">How to use the elearning modules</li>
                </ul>
            </dd>
        </dl>
        <dl class="group course courses complete hide">
            <dt>Licensing and Regulation</dt>
            <dd class="hide">
                <ul class="modules">
                    <li data-status="2">Licensing and Regulation</li>
                </ul>
            </dd>
        </dl>
        <dl class="group course courses complete hide">
            <dt>Managing your Priorities</dt>
            <dd class="hide">
                <ul class="modules">
                    <li data-status="2">Managing your Priorities</li>
                </ul>
            </dd>
        </dl>
        <dl class="group course courses not-attempted hide">
            <dt>Praxis 42 Modules</dt>
            <dd class="hide">
                <ul class="modules">
                    <li data-status="0">Electrical Safety</li>
                    <li data-status="0">Environmental Awareness</li>
                    <li data-status="0">Fire Safety</li>
                    <li data-status="0">Managing Safety</li>
                    <li data-status="0">Manual Handling</li>
                    <li data-status="0">Noise Awareness</li>
                    <li data-status="0">Office Safety</li>
                    <li data-status="0">Working at Heights</li>
                    <li data-status="0">Asbestos Awareness</li>
                </ul>
            </dd>
        </dl>
        <dl class="group course courses incomplete hide">
            <dt>Self Development Overview</dt>
            <dd class="hide">
                <ul class="modules">
                    <li data-status="1">Self Development E-learning Module</li>
                </ul>
            </dd>
        </dl>
        <dl class="group course courses incomplete hide">
            <dt>You and the Customer Experience</dt>
            <dd class="hide">
                <ul class="modules">
                    <li data-status="1">Dealing with Difficult Customers</li>
                    <li data-status="1">Customer Care</li>
                    <li data-status="2">Introduction to &apos;Customer Experience&apos;</li>
                </ul>
            </dd>
        </dl>
        
    </div>

</div>
';

$ary = array('html'=>$html);

echo json_encode($ary);
