<?php /* Template Name: About Nudge */ 
get_header();
?>
    <div id="content" class="site-content">
	<section id="primary page" class="content-area ">
        <main id="main" class="site-main" role="main">
        <div class="row" style="background: url('<?php echo get_bloginfo('template_url') ?>/img/gradient6.png')">
            <div class="top">
                <div class="col-sm-6 textbox">
                    <div class="centered"> 
                        <h1 align="center">Combatting the Forgetting Curve</h1>
                        <p align="center">Nudge is a web based, mobile friendly app that allows teachers to create 
                        quizzes and send them to students in repetitive patterns designed to increase learning 
                        retention.
                        </p>
                        <a align="center" id="modal-open" href="#video" class="btn btn-info" role="button" data-toggle="modal">See Demo</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img class="center-block" src="<?php echo get_bloginfo('template_url') ?>/img/mobile.png" height="400px" />
                </div>
            </div>
        </div>
        <div class="row columns">
            <h1 align="center">How it Works</h1>
            <div class="col-sm-4 item">
                <i class="icon cogs fa fa-question-circle fa-5x"></i>
                <h2 align="center">Simple Quiz Creation</h2>
                <p>Professors create quizzes, select courses to send them to, and specify the date that the material will be taught.
                    Our algorithms determine when to send each quiz to students. </p> 
            </div>
            <div class="col-sm-4 item">
                <i class="icon p fa fa-envelope fa-5x"></i>
                <h2 align="center">Email Notifications</h2>
                <p>Students receive quizzes through email notifications. Our studies have shown that email is the most effective way
                    to communicate with students about coursework.</p>
            </div>
            <div class="col-sm-4 item">
                <i class="icon fa fa-mobile-phone fa-5x"></i>
                <h2 align="center">Mobile Friendly Application</h2>
                <p>With a few simple taps, students can access the quiz on our web page. The page is designed to be mobile friendly,
                    meaning students will have no trouble answering quizzes on the go.</p> 
            </div>
        </div>
        <div class="row columns purple">
            <h1 align="center" >Why it Works</h1>
            <div class="col-sm-2 item">
            </div>
            <div class="col-sm-8 item">
                <p align="center">Studies based on a hypothesis by Herman Ebbinghaus show that memory of learned information fades over time. One
                    can combat this and improve retention through spaced repetition of the material. Our app uses data on the rate 
                    at which infomation is forgotten to determine when students should perform such repetition in order to achieve
                    the highest retention possible.</p> 
                
            </div>
            <div class="col-sm-2 item">
            </div>
        </div>
        <div class="row columns">
            <h1 align="center" >A Work in Progress</h1>
            <img class="center-block nudgley" src="<?php echo get_bloginfo('template_url') ?>/img/logo-short.png" /> 
            <div class="col-sm-2 item">
            </div>
            <div class="col-sm-8 item">
                <p align="center">The Nudge app is still in development. We are currently testing it with classes of students to determine its impact on their 
                performance, its perceived usefulness, and students' willingness to use it. If you'd like to hear more about our 
                progress and be notified about changes to the app, sign up for our early access list!</p> 
                <a href="#" class="btn btn-info" role="button">Sign Up</a>
            </div>
            <div class="col-sm-2 item">
            </div>
        </div>
        <div id="video" class="modal face" role="dialog">
            <div class="modal-dialog modal-lg">	
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times</button>
                        <h3 class="modal-title">Demo</h3>
                    </div>
                    <div class="modal-body centered">
                        <video id="demo-video" class="video" align="center" width="100%" controls>
                            <source src="<?php echo get_bloginfo('template_url')?>/video/demo1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
	    </div>
		</main><!-- #main -->
	</section><!-- #primary -->
<script type="text/javascript">
    $('.close').on('click', function() {
        $('#demo-video')[0].pause();
    });
    $('#modal-open').on('click', function() {
        $('#demo-video')[0].play();
    });
</script>
<?php
get_footer();