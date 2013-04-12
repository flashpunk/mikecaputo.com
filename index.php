<?PHP

// First Date: 1 January 2005
// Second Date: 27 January 2005

$first_date = MKTIME(12,0,0,7,1,2005);
$second_date = MKTIME(date('12,0,0,n,j,Y'));

$offset = $second_date-$first_date;

$number_of_days = FLOOR($offset/60/60/24) . " days";

?><!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title><?php  // bloginfo( 'name' ); ?> - Designer & Rock Star</title>
	<link href="http://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="stylesheets/app.css" />
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/4.0.9/js/vendor/custom.modernizr.js"></script>
</head>
<body>
	<div id="nav">
		<div class="sticky">
			<nav class="top-bar">
				<ul class="title-area">
					<li class="name"><h1><a href="#">Navigation</a></h1></li>
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>
				<section class="top-bar-section">
					<ul class="left">
						<li class="divider"></li>
						<li><a href="#about">About Me</a></li>
						<li class="has-dropdown"><a href="#clients">Clients</a>
							<ul class="dropdown">
								<li class="has-dropdown"><a href="#">Responsive/Mobile</a>
									<ul class="dropdown">
										<li><a href="http://www.positivelypositive.com/" target="_blank">Positively Positive</a></li>
										<li><a href="http://www.newcollege.utoronto.ca/" target="_blank">New College UofT</a></li>
										<li><a href="http://www.revmodo.com" target="_blank">Revmodo</a></li>
										<li><a href="http://www.ousa.ca/" target="_blank">Ontario Undergraduate Student Alliance</a></li>
										<li><a href="http://www.helpdeskgeek.com" target="_blank">Help Desk Geek</a></li>
									</ul>
								</li>
								<li class="has-dropdown"><a href="#">Non Responsive</a>
									<ul class="dropdown">
										<li><a href="http://www.zerofootprint.net/" target="_blank">ZeroFootprint</a></li>
										<li><a href="http://www.brucepower.com/" target="_Blank">Bruce Power</a></li>
										<li><a href="http://www.chiropracticcanada.ca/" target="_blank">Canadian Chiropractic Association</a></li>
										<li><a href="http://www.cheapeatsguides.com" target="_blank">CheapEats Guides</a></li>
										<li><a href="http://www.cofps.ca/" target="_blank">Coalition of Family Physicians &amp; Specialists of Ontario</a></li>
										<li><a href="http://www.ecorazzi.com/" target="_blank">Ecorazzi</a></li>
										<li><a href="http://www.maplemusic.com/" target="_blank">Maple Music</a></li>
										<li><a href="http://www.audioblood.com/" target="_blank">Audioblood</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#experience">Experience</a></li>
					</ul>
					<ul class="right">
						<li><a href="#experience">Contact me</a></li>
						<li><a href="#experience">Download CV</a></li>
					</ul>
				</section>
			</nav>
		</div>
	</div>
	<header>
		<div class="row">
			<div class="large-10 small-11 small-centered large-centered columns">
				<div class="row">
					<div class="large-10 small-12 large-centered columns">
						<h1 class="cent">Hi My name is Michael Caputo</h1>
					</div>
					<div class="large-5 small-9 small-centered columns">
						<img src="images/color-headshot.png" class="face" />
					</div>
				</div>
				<div class="row">
					<div class="large-11 small-12 large-centered columns">
						<h2 class="cent subheader lead">I am a front end web developer with more than <strong><?php echo $number_of_days; ?></strong> of professional experience, proudly based in Toronto, Ontario.</h2>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section id="about">
		<div class="row space">
			<div class="large-8 large-centered columns">
				<h3>A Little About Me</h3>
				<p>For the last 8 years I have been working as a lead website developer with a commitment to staying on top of the latest trends and standards. I am fluent and comfortable working with HTML5, Javascript/jQuery, Backbone.js/Node.js & Ruby. In the last 2 years I have worked with a heavy focus on Responsive Mobile Web design and User Experience/User Interface. I believe in building websites that give the user the best possible experience and meet all client needs in one cohesive design.</p>
				<p>Outside of the office I play guitar with The Reason and have had the opportunity to travel around the world. That experience has given me a unique perspective that I am able to bring to my development work.</p>
				<p>For more info or if you have questions, feel free to <a href="#" data-reveal-id="myModal" data-animation="fadeAndPop" data-animationspeed="300" data-closeonbackgroundclick="true" data-dismissmodalclass="close-reveal-modal">get in touch!</a>!</p>
			</div>
		</div>
	</section>

	<div class="photo jump space" data-stellar-background-ratio="0.5">
		<div class="row">
			<div class="large-6 small-7 columns right">
				<div id="coolStuff">
					<h2 class="rw noMargin">I've been lucky enough to do a lot of cool stuff in my life...</h2>
				</div>
			</div>
		</div>
	</div>

	<section id="balance">
		<div class="row space">
			<div class="large-12 columns">
				<h2 class="cent noMargin">But I also believe in a work + play balance</h2>
			</div>
		</div>
	</section>

	<div class="row space" id="clients">
		<div class="large-3 columns">
			<h3 class="rw">Clients I've<br />Worked With</h3>
		</div>
		<div class="large-9 small-12 columns">
			<div class="row">
				<div class="large-6 small-12 columns">
					<ul>
						<li><a href="http://www.zerofootprint.net/" target="_blank">ZeroFootprint</a></li>
						<li><a href="http://www.brucepower.com/" target="_Blank">Bruce Power</a></li>
						<li><a href="http://www.chiropracticcanada.ca/" target="_blank">Canadian Chiropractic Association</a></li>
						<li><a href="http://www.cheapeatsguides.com" target="_blank">CheapEats Guides</a></li>
						<li><a href="http://www.cofps.ca/" target="_blank">Coalition of Family Physicians &amp; Specialists of Ontario</a></li>
						<li><a href="http://www.ecorazzi.com/" target="_blank">Ecorazzi</a></li>
						<li><a href="http://www.haytersfarm.com" target="_blank">Hayters Farm</a></li>
						<li><a href="http://www.newcollege.utoronto.ca/" target="_blank">New College UofT</a></li>
					</ul>
				</div>
				<div class="large-6 small-12 columns">
					<ul>
						<li><a href="http://www.ousa.ca/" target="_blank">Ontario Undergraduate Student Alliance</a></li>
						<li><a href="http://www.positivelypositive.com/" target="_blank">Positively Positive</a></li>
						<li><a href="http://www.helpdeskgeek.com" target="_blank">Help Desk Geek</a></li>
						<li><a href="http://www.maplemusic.com/" target="_blank">Maple Music</a></li>
						<li><a href="http://www.audioblood.com/" target="_blank">Audio Blood</a></li>
						<li><a href="http://mixtape.beaus.ca/" target="_blank">Beau's All Natural Brewing</a></li>
						<li><a href="http://thebalconies.ca/" target="_blank">The Balconies</a></li>
						<li><a href="http://bencaplan.ca/" target="_blank">Ben Caplan</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="row space" id="experience">
		<div class="large-3 columns">
			<h3 class="rw">Technical Experience</h3>
		</div>
		<div class="large-9 small-12 columns">
			<div class="row">
				<div class="large-4 small-12 columns">
					<ul>
						<li>Wordpress</li>
						<li>Expression Engine</li>
						<li>Movable Type</li>
						<li>TypePad</li>
					</ul>
				</div>
				<div class="large-4 small-12 columns">
					<ul>
						<li>FBML / XBML</li>
						<li>HTML5 / CSS3</li>
						<li>PHP &amp; MySQL</li>
						<li>SCSS / SASS</li>
						<li>Javascript / jQuery</li>
					</ul>
				</div>
				<div class="large-4 small-12 columns">
					<ul>
						<li>Backbone.js / Node.js</li>
						<li>GIT / Subversion</li>
						<li>Adobe Creative Suite</li>
						<li>Zurb Foundation</li>
						<li>Twitter Bootstrap</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="row space">
		<div class="large-3 small-12 columns">
			<h3 class="rw">Professional Experience</h3>
		</div>
		<div class="large-9 columns">
			<div class="row">
				<div class="large-4 small-12 columns">
					<h4><strong>The Blog Studio</strong></h4>
					<h5 class="subheader">Lead Web Developer - <em>Sep 2008 to Present</em></h5>
					<ul class="alt">
						<li>Front end coding using HTML5/CSS3</li>
						<li>Integration, configuration, maintinance, and upgrading CMS environments</li>
						<li>Custom Facebook page creation</li>
					</ul>
				</div>
				<div class="large-4 small-12 columns">
					<h4><strong>Onroad Inc.</strong></h4>
					<h5 class="subheader">Front End &amp; Wordpress Developer - <em>Feb 2008 to Aug 2008</em></h5>
					<ul class="alt">
						<li>Designing web intefaces for clients</li>
						<li>Maintain existing client sites</li>
					</ul>
				</div>
				<div class="large-4 small-12 columns">
					<h4><strong>Augustus New Media</strong></h4>
					<h5 class="subheader">Web Designer &amp; Production Artist - <em>Jul 2004 to Dec 2004</em></h5>
					<ul class="alt">
						<li>Carried out production work for designs provided by the lead designer</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<footer class="row hide-for-print">
		<div class="large-6 small-12 columns">
			<h3 class="rw"><strong>Thanks for coming by!</strong></h3>
			<p>You can follow me on any of the social networks listed above. Also, if you have any inquiries please use the contact form to get in touch with me.</p>
		</div>
		<div class="large-6 small-12 columns">
			<?php
				// $form = do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');
				// echo $form;
			?>
		</div>
	</footer>

	<div id="myModal" class="reveal-modal large">
		<div class="row">
			<div class="six columns">
				<h3 class="rw">Thanks for coming by!</h3>
				<p>You can follow me on any of the social networks listed here. Also, if you have any inquiries please use the contact form to get in touch with me.</p>
				<ul class="nice vertical">
					<li><a class="social foundicon-twitter" href="http://www.twitter.com/flashpunk/"> Twitter</a></li>
					<li><a class="social foundicon-linkedin" href="http://www.linkedin.com/profile/view?id=86762415&locale=en_US&trk=tab_pro"> LinkedIn</a></li>
					<li><a class="social foundicon-thumb-up" href="http://klout.com/flashpunk/"> Klout</a></li>
					<li><a class="social foundicon-instagram" href="http://statigr.am/flashpunk"> Instagram</a></li>
					<li><a class="social foundicon-facebook" href="http://www.facebook.com/flashpunk"> Facebook</a></li>
					<li><a class="social foundicon-google-plus" href="https://plus.google.com/u/0/115635103499342988030/posts"> Google+</a></li>
					<li><a class="social foundicon-flickr" href="http://www.flickr.com/photos/flashpunkca"> Flickr</a></li>
				</ul>
			</div>
			<div class="six columns">
				<?php // echo $form; ?>
			</div>
		</div>
	</div>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/foundation/4.0.8/js/foundation.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/stellar.js/0.6.0/jquery.stellar.min.js"></script>
	<script>
	$(document).foundation();
	$(function(){
		$.stellar({
			horizontalScrolling: false,
			verticalOffset: 40
		});
	});
		try{Typekit.load();}catch(e){}
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-33193434-2']);
		_gaq.push(['_trackPageview']);
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</body>
</html>
