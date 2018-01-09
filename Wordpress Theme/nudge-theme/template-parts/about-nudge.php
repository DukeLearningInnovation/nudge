<?php /* Template Name: About Nudge */ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
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
                    <a href="https://www.learningsolutionsmag.com/articles/1400/brain-science-overcoming-the-forgetting-curve" class="btn btn-info" role="button">Read More</a>
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

				<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
					<div id="mc_embed_signup">
					<form action="https://duke.us17.list-manage.com/subscribe/post?u=ca7ff3b58af71c2fe570fd59d&amp;id=d87c3c441d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
					</label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
					<div class="mc-field-group">
						<label for="mce-FNAME">First Name </label>
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
					</div>
					<div class="mc-field-group">
						<label for="mce-LNAME">Last Name </label>
						<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
					</div>
					<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ca7ff3b58af71c2fe570fd59d_d87c3c441d" tabindex="-1" value=""></div>
						<div class="clear text-center"><input align="center" class="btn btn-info" type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe"></div>
						</div>
					</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					<!--End mc_embed_signup-->



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