   <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/prism.css" rel="stylesheet" />
    <link href="assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
                <div class="centered">
					<div id="nt-example1-container">
		                <ul id="nt-example1">
		                <li >

                                            <a href="allPDFs/Format.pdf" title="Megan Boyle flourishes...">Course wise data of all Admitted Candidates in the College.
</a><
                                        </li>

                                        <li>
                                           <a href="allPDFs/MassMedia.pdf" title="Megan Boyle flourishes...">Course & Category-wise vacant postion as on 17.08.2015.</a>
                                        </li>

                                        <li >
                                            <a href="allPDFs/Vacant_Position.pdf" title="News-Ticker1">Notice for Students of Add-on Certificate Courses in Spanish , German and French and Diploma Courses in Spanish.</a>
                                        </li>
                                        <li >
                                            <a href="allPDFs/Notice_English.pdf" title="News-Ticker2">Notice for the Appointment of Assistant Professor on Ad-hoc Basis in the Department of English (01-UR and 01-OBC Category).</a>
                                        </li>
                                        <li >
                                            <a href="allPDFs/Notice_History.pdf" title="News-Ticker3">Notice for the Appointment of Assistant Professor on Ad-hoc Basis in the Department of History (01-UR Category).</a>
                                        </li>
                                        <li >
                                            <a href="" title="News-Ticker4">Under Graduate Twelfth cutoff List.</a>
                                        </li>
                                        <li >
                                            <a href="" title="News-Ticker5">Notice for Foundantion Course (for 2 Yrs Students).</a>
                                        </li>
                                        <li >
                                            <a href="" title="News-Ticker6">Download Examination Form For Semester3Y.</a>
                                        </li>
                                        <li>
                                            <a href="" title="News-Ticker6">Download Examination Form For Semester3Y (Erstwhile - FYUP).</a><
                                        </li>
                                        <li>
                                            <a href="" title="News-Ticker6">Hostel facility for Girl/Boy students beloning to SC/ST/OBC/minorities category.</a><
                                        </li>
                                        <li >
                                            <a href="" title="News-Ticker6">Last date has been Extended for English Language Proficiency Course - Details and Form</a><
                                        </li>
		                </ul>
		                <i class="fa fa-arrow-down" id="nt-example1-next"></i>
		            </div>
				</div>
				
			
		<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/prism.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="jquery.newsTicker.js"></script>
    <script>
    		$('a[href*=#]').click(function(e) {
			    var href = $.attr(this, 'href');
			    if (href != "#") {
				    $('html, body').animate({
				        scrollTop: $(href).offset().top - 81
				    }, 500);
				}
				else {
					$('html, body').animate({
				        scrollTop: 0
				    }, 500);
				}
			    return false;
			});

    		$(window).load(function(){
	            $('code.language-javascript').mCustomScrollbar();
	        });
            var nt_title = $('#nt-title').newsTicker({
                row_height: 40,
                max_rows: 1,
                duration: 3000,
                pauseOnHover: 0
            });
            var nt_example1 = $('#nt-example1').newsTicker({
                row_height: 80,
                max_rows: 5,
                duration: 4000,
                prevButton: $('#nt-example1-prev'),
                nextButton: $('#nt-example1-next')
            });
            var nt_example2 = $('#nt-example2').newsTicker({
                row_height: 60,
                max_rows: 1,
                speed: 300,
                duration: 6000,
                prevButton: $('#nt-example2-prev'),
                nextButton: $('#nt-example2-next'),
                hasMoved: function() {
                	$('#nt-example2-infos-container').fadeOut(200, function(){
	                	$('#nt-example2-infos .infos-hour').text($('#nt-example2 li:first span').text());
	                	$('#nt-example2-infos .infos-text').text($('#nt-example2 li:first').data('infos'));
	                	$(this).fadeIn(400);
	                });
                },
                pause: function() {
                	$('#nt-example2 li i').removeClass('fa-play').addClass('fa-pause');
                },
                unpause: function() {
                	$('#nt-example2 li i').removeClass('fa-pause').addClass('fa-play');
                }
            });
            $('#nt-example2-infos').hover(function() {
                nt_example2.newsTicker('pause');
            }, function() {
                nt_example2.newsTicker('unpause');
            });
            var state = 'stopped';
            var speed;
            var add;
            var nt_example3 = $('#nt-example3').newsTicker({
                row_height: 80,
                max_rows: 1,
                duration: 0,
                speed: 10,
                autostart: 0,
                pauseOnHover: 0,
                hasMoved: function() {
                	if (speed > 700) {
                		$('#nt-example3').newsTicker("stop");
                		console.log('stop')
                		$('#nt-example3-button').text("RESULT: " + $('#nt-example3 li:first').text().toUpperCase());
                		setTimeout(function() {
                			$('#nt-example3-button').text("START");
                			state = 'stopped';
                		},2500);
                		
                	}
                	else if (state == 'stopping') {
                		add = add * 1.4;
                		speed = speed + add;
                		console.log(speed)
                		$('#nt-example3').newsTicker('updateOption', "duration", speed + 25);
                		$('#nt-example3').newsTicker('updateOption', "speed", speed);
                	}
                }
            });
            
            $('#nt-example3-button').click(function(){
            	if (state == 'stopped') {
	            	state = 'turning';
	            	speed = 1;
	            	add = 1;
	            	$('#nt-example3').newsTicker('updateOption', "duration", 0);
	            	$('#nt-example3').newsTicker('updateOption', "speed", speed);
	            	nt_example3.newsTicker('start');
	            	$(this).text("STOP");
	            }
	            else if (state == 'turning') {
	            	state = 'stopping';
	            	$(this).text("WAITING...");
	            }
            });
        </script>

        <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-48039933-1', 'risq.github.io');
			ga('send', 'pageview');
		</script>