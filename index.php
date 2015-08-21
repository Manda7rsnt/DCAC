<?php require('header.php');
?>

 <div class="row no-gutter fullwidth"><!-- row -->

                    <div class="col-md-12 clearfix"><!-- featured posts slider -->

                        <div id="carousel-featured" class="carousel slide" data-interval="4000" data-ride="carousel"><!-- featured posts slider wrapper; auto-slide -->

                            <ol class="carousel-indicators"><!-- Indicators -->
                                <li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-featured" data-slide-to="1"></li>
                                <li data-target="#carousel-featured" data-slide-to="2"></li>
                                <li data-target="#carousel-featured" data-slide-to="3"></li>
                                <li data-target="#carousel-featured" data-slide-to="4"></li>
                            </ol><!-- Indicators end -->

                            <div class="carousel-inner"><!-- Wrapper for slides -->

                                <div class="item active">
                                    <img src="img/DCAC1.png" alt="Image slide 3" />
                                    <div class="k-carousel-caption pos-1-3-right scheme-dark">
                                        <div class="caption-content">
                                            <h3 class="caption-title"> Image 1</h3>
                                            <p>
                                                Description
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/DCAC1.png" alt="Image slide 2" />
                                    <div class="k-carousel-caption pos-1-3-left scheme-light">
                                        <div class="caption-content">
                                            <h3 class="caption-title">Image 2</h3>
                                            <p>
                                                All the description for the image
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/DCAC1.png" alt="Image slide 1" />
                                    <div class="k-carousel-caption pos-2-3-right scheme-dark">
                                        <div class="caption-content">
                                            <h3 class="caption-title">Image 3</h3>
                                            <p>
                                                Description
                                            </p>
                                            <p>
                                                <a href="index.html#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/DCAC1.png" alt="Image slide 4" />
                                    <div class="k-carousel-caption pos-2-3-left scheme-light">
                                        <div class="caption-content">
                                            <h3 class="caption-title">Image 4</h3>
                                            <p>
                                                Description
                                            </p>
                                            <p>
                                                <a href="index.html#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/DCAC1.png" alt="Image slide 5" />
                                    <div class="k-carousel-caption pos-c-2-3 scheme-dark no-bg">
                                        <div class="caption-content">
                                            <h3 class="caption-title title-giant">Image 5</h3>
                                            <p>
                                                All the description for the image
                                            </p>
                                            <p>
                                                <a href="index.html#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                                            </p>
                                        </div>

                                    </div>
                                </div>

                            </div><!-- Wrapper for slides end -->

                            <!-- Controls -->
                            <a class="left carousel-control" href="index.html#carousel-featured" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                            <a class="right carousel-control" href="index.html#carousel-featured" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                            <!-- Controls end -->

                        </div><!-- featured posts slider wrapper end -->

                    </div><!-- featured posts slider end -->

                </div><!-- row end --><br>
                <!--8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->
                
<style>
.fade {
opacity: 0;
-webkit-transition: opacity 2.25s linear;
  -moz-transition: opacity 2.25s linear;
   -ms-transition: opacity 2.25s linear;
	-o-transition: opacity 2.25s linear;
	   transition: opacity 2.25s linear;
}
</style>
               
               <div class="row">
               <div class="text-center">
                   <div class="col-md-3"></div>
                   
<ul class="nav nav-pills list-unstyled clear-margins ">
 
  <li class="active"><a href="#tab_a" class="custom-button cb-green " title="About College" data-toggle="pill">
  <i class="custom-button-icon fa fa-check-square-o"></i>
                                        <span class="custom-button-wrap">
                                            <span class="custom-button-title">Inside DCAC</span>
                                            <span class="custom-button-tagline">The DCAC</span>
                                        </span>
                                        <em></em>
      </a></li>

  <li><a href="#tab_b" data-toggle="pill" class="custom-button cb-gray" title="faculty"><i class="custom-button-icon fa  fa-play-circle-o"></i>
                                        <span class="custom-button-wrap">
                                            <span class="custom-button-title" >Student Zone</span>
                                            <span class="custom-button-tagline" >Academics at DCAC</span>
                                        </span>
                                        <em></em></a></li>
  <li><a href="#tab_c" data-toggle="pill" class="custom-button cb-yellow" title="Students"><i class="custom-button-icon fa  fa-leaf"></i>
                                        <span class="custom-button-wrap">
                                            <span class="custom-button-title">Faculty Zone</span>
                                            <span class="custom-button-tagline">Know your Gurus</span>
                                        </span>
                                        <em></em></a></li>
</ul>
               <div class="col-md-1"></div>
                
<div class="tab-content col-md-10">
        <div class="tab-pane active" id="tab_a">
            <div class="mediabox">
                <img src="images/photo gallery/govbody.png" class="img-responsive center-block" alt="img01" />
                <h3><a href="governingbody.php">Governing Body</a></h3>
             </div>
            <div class="mediabox">
                <img src="images/photo gallery/activities.png" class="img-responsive center-block" alt="img02" />
                <h3><a href="student.php">Activities</a></h3>
                </div>
            <div class="mediabox">
                <img src="images/photo gallery/facilities.gif" alt="img03" />
                <h3><a href="lifeatdcac.php">Facilities</a></h3>
                </div>
        </div>
        <div class="tab-pane" id="tab_b">
             <div class="mediabox">
                <img src="images/photo gallery/attendance1.png" alt="img01" />
                <h3><a href="attendance.php">Attendance</a></h3>
             </div>
            <div class="mediabox">
                <img src="images/photo gallery/syllabus.png" alt="img02" />
                <h3><a href="courses.php">Courses and Syllabus</a></h3>
                </div>
            <div class="mediabox">
                <img src="images/photo gallery/Timetable.jpg" alt="img03" />
                <h3><a href="timetable.php">Time Table</a></h3>
                </div>
                <div class="mediabox">
                <img src="images/photo gallery/preyearqp.jpg" alt="img03" />
                <h3><a href="#">Previous Year Q.Papers</a></h3>
                </div>
                <div class="mediabox">
                <img src="images/photo gallery/internalassesment.png" alt="img03" />
                <h3><a href="#">Internal Assessment</a></h3>
                </div>
                <div class="mediabox">
                <img src="images/photo gallery/FSE.gif" alt="img03" />
                <h3><a href="#">Friday School of Economics</a></h3>
                </div>
        </div>
        <div class="tab-pane" id="tab_c">
             <div class="mediabox">
                <img src="images/photo gallery/department.jpg" alt="img01" />
                <h3><a href="">Department</a></h3>
             </div>
            <div class="mediabox">
                <img src="images/photo gallery/profile.png" alt="img02" />
                <h3><a href="">Profile</a></h3>
                </div>
            <div class="mediabox">
                <img src="images/photo gallery/achievement.png" alt="img03" />
                <h3><a href="">Achievement</a></h3>
                </div>
        </div>
</div><!-- tab content -->
</div>
</div>
<br><br><br>
            


        <script src="js/cbpFWTabs.js"></script>
<script>
    new CBPFWTabs( document.getElementById( 'tabs' ) );

function( window ) {
    
    'use strict';

    function extend( a, b ) {
        for( var key in b ) { 
            if( b.hasOwnProperty( key ) ) {
                a[key] = b[key];
            }
        }
        return a;
    }

    function CBPFWTabs( el, options ) {
        this.el = el;
        this.options = extend( {}, this.options );
        extend( this.options, options );
        this._init();
    }

    CBPFWTabs.prototype.options = {
        start : 0
    };

    CBPFWTabs.prototype._init = function() {
        // tabs elemes
        this.tabs = [].slice.call( this.el.querySelectorAll( 'nav > ul > li' ) );
        // content items
        this.items = [].slice.call( this.el.querySelectorAll( '.content > section' ) );
        // current index
        this.current = -1;
        // show current content item
        this._show();
        // init events
        this._initEvents();
    };

    CBPFWTabs.prototype._initEvents = function() {
        var self = this;
        this.tabs.forEach( function( tab, idx ) {
            tab.addEventListener( 'click', function( ev ) {
                ev.preventDefault();
                self._show( idx );
            } );
        } );
    };

    CBPFWTabs.prototype._show = function( idx ) {
        if( this.current >= 0 ) {
            this.tabs[ this.current ].className = '';
            this.items[ this.current ].className = '';
        }
        // change current
        this.current = idx != undefined ? idx : this.options.start >= 0 && this.options.start < this.items.length ? this.options.start : 0;
        this.tabs[ this.current ].className = 'tab-current';
        this.items[ this.current ].className = 'content-current';
    };

    // add to global namespace
    window.CBPFWTabs = CBPFWTabs;

})( window );
</script>






                <!--8888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->

                <div class="row no-gutter"><!-- row -->

                    <div class="col-lg-4 col-md-4"><!-- upcoming events wrapper -->

                        <div class="col-padded col-shaded"><!-- inner custom column -->

                            <ul class="list-unstyled clear-margins"><!-- widgets -->

                                <li class="widget-container widget_up_events"><!-- widgets list -->

                                    <h1 class="title-widget">Upcoming Events</h1>

                                    <ul class="list-unstyled">

                                        <li class="up-event-wrap">

                                            <h1 class="title-median"><a href="index.html#" title="Annual alumni game">Annual alumni Meet 2015-16</a></h1>

                                            <div class="up-event-meta clearfix">
                                                <div class="up-event-date">Jul 25, 2015</div><div class="up-event-time">9:00 - 11:00</div>
                                            </div>

                                            <p>
                                                Fusce condimentum pulvinar mattis. Nunc condimentum sapien sit amet odio vulputate, nec suscipit orci pharetra... <a href="index.html#" class="moretag" title="read more">MORE</a> 
                                            </p>

                                        </li>

                                        <li class="up-event-wrap">

                                            <h1 class="title-median"><a href="index.html#" title="School talents gathering">CUT-OFF LISTS 2015-16</a></h1>

                                            <div class="up-event-meta clearfix">
                                                <div class="up-event-date">Aug 25, 2015</div><div class="up-event-time">8:30 - 10:30</div>
                                            </div>

                                            <p>
                                                Pellentesque lobortis, arcu eget condimentum auctor, magna neque faucibus dui, ut varius diam neque sed diam... <a href="index.html#" class="moretag" title="read more">MORE</a> 
                                            </p>

                                        </li>

                                    </ul>

                                </li><!-- widgets list end -->

                            </ul><!-- widgets end -->

                        </div><!-- inner custom column end -->

                    </div><!-- upcoming events wrapper end -->



                    <div class="col-lg-4 col-md-4"><!-- misc wrapper -->

                        <div class="col-padded "><!-- inner custom column -->

                            <ul class="list-unstyled clear-margins"><!-- widgets -->

                               <h1 class="title-widget">About Us</h1>

                                <li class="widget-container widget_text"><!-- widget -->
                                

                                <img src="images/photo gallery/aboutcollege.gif"><br><br>
                                <p>
                                    " Delhi College of Arts & Commerce, premier higher educational institution, 
                                    imparts holistic professional and vocational education. 
                                    The college provides a dynamic learning environment to its students to pursue excellence, 
                                    gain knowledge and acquire skills to achieve their goals Delhi College of Arts & Commerce, 
                                    premier higher educational institution, imparts holistic professional and vocational education."
                                </p>


                                </li><!-- widget end -->



                            </ul><!-- widgets end -->

                        </div><!-- inner custom column end -->

                    </div><!-- misc wrapper end -->


<!--888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888-->


                    <div class="col-lg-4 col-md-4" ><!-- recent news wrapper -->

                        <div class="col-padded col-shaded" ><!-- inner custom column -->
                            
                            

                                    <h1 class="title-widget">What's New @ DCAC</h1>
                                    <iframe src="ticker.php" frameborder="0" class="span6"
           style="height: 490px;width: 100%; " border="0" cellspacing="0"></iframe>
                        </div><!-- inner custom column end -->

                    </div><!-- recent news wrapper end -->

                </div><!-- row end -->

                <div class="row">
  

  <div class="col-xs- col-md-4">
    <a href="Cut-off-list.php" class="thumbnail">
      <img src="images/photo gallery/a2.jpg" alt="Cut-Off List">
    </a>
  </div>
<div class="col-xs- col-md-4">
    <a href="timetable.php" class="thumbnail">
      <img src="images/photo gallery/Timetable.jpg" alt="Time Table">
    </a>
  </div>
  <div class="col-xs- col-md-4">
    <a href="allPDFs/Anti_Ragging.pdf" class="thumbnail">
      <img src= "images/photo gallery/p33.jpg" alt="anti-ragging">
    </a>
  </div>
  </div>

            </div><!-- container end -->

        </div><!-- content wrapper end -->


        


<?php require('footer.php');

?>