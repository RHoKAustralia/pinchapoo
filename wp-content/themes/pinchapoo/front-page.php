<!DOCTYPE HTML>
<!--
Theme Name: Pinchapoo
Theme URI: http://www.pinchapoo.org.au/
Description: A brief description.
Version: 1.0
Author: RHoK
Author URI: http://www.rhokaustralia.org/d
-->
<html>
<head>
    <title>Untitled</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/odometer.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ie8.css" /><![endif]-->
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">
    <?php get_header(); ?>

    <!-- Banner -->
    <section id="banner">

        <!-- One -->
        <article class="full">
            <img src="<?php bloginfo('template_url'); ?>/images/banner_products.png" alt="" data-position="center" />
            <div class="content">
                <h2><a href="#">A CHEEKY WAY TO HELP</a></h2>
                <p>Pinchapoo has been distributing ‘pinched’ hotel toiletries since 2009, helping improve the quality of life for disadvantaged people around Australia.</p>
                <ul class="actions">
                    <li><a href="/about-us/what-is-pinchapoo/" class="button">Read More</a></li>
                </ul>
            </div>
        </article>
				
				<article class="half pinchapoo-blue squash">
					<div class="content">
						<span id="goods_counter" class="counter">0</span><span id="goods_desc" class="counter-description" style="display: none;"> <?php echo get_option('number_of_goods_desc'); ?></span>
					</div>
				</article>
				
				<article class="half pinchapoo-blue squash">
					<div class="content">
						<span id="orgs_counter" class="counter">0</span><span id="orgs_desc" class="counter-description" style="display: none;"> <?php echo get_option('number_of_orgs_desc'); ?></span>
					</div>
				</article>

        <!-- Two -->
        <!-- <article class="half">
            <img src="<?php bloginfo('template_url'); ?>/images/pic02.jpg" alt="" data-position="center" />
            <div class="content">
                <h2><a href="#">Aliquam veroeros</a></h2>
                <p>Dolor sit amet tempus adipiscing amet sed aliquam feugiat veroeros lorem ipsum dolor sit amet consequat.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </div>
        </article> -->

        <!-- Three -->
        <!-- <article class="half">
            <img src="<?php bloginfo('template_url'); ?>/images/pic03.jpg" alt="" data-position="center" />
            <div class="content">
                <h2><a href="#">Tempus sed magna</a></h2>
                <p>Dolor sit amet tempus adipiscing amet sed aliquam feugiat veroeros lorem ipsum dolor sit amet consequat.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Full Story</a></li>
                </ul>
            </div>
        </article> -->

    </section>

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <!-- <section class="main special">
            <div class="inner">
                <header class="major">
                    <span class="category">In Depth</span>
                    <h2><a href="#">Etiam feugiat tempus veroeros lorem</a></h2>
                    <ul class="meta">
                        <li>3 days ago</li>
                        <li><a href="#" class="favorites">2,174</a></li>
                        <li><a href="#" class="comments">1,423</a></li>
                    </ul>
                </header>
                <a href="#" class="image main"><img src="<?php bloginfo('template_url'); ?>/images/pic04.jpg" alt="" /></a>
                <p>In ut odio eu quam consectetur tristique nec non nisl. Maecenas porttitor vestibulum augue, nec sodales eros blandit non. Phasellus libero nibh, erat blandit, aliquet volutpat purus. Nullam pretium sed turpis lorem, ac congue orci. Donec pulvinar sagittis pellentesque. In ut odio eu quam consectetur tristique nec non nisl. Maecenas porttitor vestibulum augue, nec sodales eros blandit non.</p>
                <footer>
                    <ul class="actions">
                        <li><a href="#" class="button">Full Story</a></li>
                    </ul>
                </footer>
            </div>
        </section> -->

        <!-- Posts -->
        <section class="main">
            <div class="posts">
                <article>
                    <a href="/about-us/what-is-pinchapoo/" class="image"><img src="<?php bloginfo('template_url'); ?>/images/banner_birthday.png" alt="" /></a>
                    <header>
                        <h2><a href="/about-us/what-is-pinchapoo/">What is Pinchapoo?</a></h2>
                        <ul class="meta">
                            <!--<li>3 days ago</li>
                            <li><a href="#" class="favorites">2,174</a></li>
                            <li><a href="#" class="comments">1,423</a></li> -->
                        </ul>
                    </header>
                    <p>Pinch-a-what? Learn how to become part of the hotel toiletry pinching movement sweeping Oz!!</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="/about-us/what-is-pinchapoo/" class="button">Read More</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="/about-us/how-pinchapoo-began/" class="image"><img src="<?php bloginfo('template_url'); ?>/images/banner_about_kate.png" alt="" /></a>
                    <header>
                        <h2><a href="/about-us/how-pinchapoo-began/">How Pinchapoo Began</a></h2>
                        <ul class="meta">
                        </ul>
                    </header>
                    <p>If you had one minute to leave your house never to return….what would you take? Learn about the moment Pinchapoo was born.
                    </p>
                    <footer>
                        <ul class="actions">
                            <li><a href="/about-us/how-pinchapoo-began/" class="button">Read More</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="/get-involved/donate-toiletries/" class="image"><img src="<?php bloginfo('template_url'); ?>/images/banner.png" alt="" /></a>
                    <header>
                        <h2><a href="/get-involved/donate-toiletries/">How to Donate</a></h2>
                        <ul class="meta">

                        </ul>
                    </header>
                    <p>It’s easy……we have someone just near you! Find your closest collection co-ordinator now! </p>
                    <footer>
                        <ul class="actions">
                            <li><a href="/get-involved/donate-toiletries/" class="button">Donate Now</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="/get-involved/volunteer/" class="image"><img src="<?php bloginfo('template_url'); ?>/images/banner_11.png" alt="" /></a>
                    <header>
                        <h2><a href="/get-involved/volunteer/">Volunteer</a></h2>
                        <ul class="meta">

                        </ul>
                    </header>
                    <p>Got some time you could lend us? There is a job for everyone……we’d love to have you aboard the army!</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="/get-involved/volunteer/" class="button">Volunteer Now</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="/media-centre/" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic09.jpg" alt="" /></a>
                    <header>
                        <h2><a href="/media-centre/">'Poo News</a></h2>
                        <ul class="meta">

                        </ul>
                    </header>
                    <p>Did you hear the news? Well in case you missed it….here it is! </p>
                    <footer>
                        <ul class="actions">
                            <li><a href="/media-centre/" class="button">Read More</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="/get-involved/fundraise/" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic10.jpg" alt="" /></a>
                    <header>
                        <h2><a href="/get-involved/fundraise/">Fundraising</a></h2>
                        <ul class="meta">

                        </ul>
                    </header>
                    <p>Don’t travel much but would still like to help? You can! Find out how now!</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="/get-involved/fundraise/" class="button">Read More</a></li>
                        </ul>
                    </footer>
                </article>
                
            </div>
            <!--<footer class="major">
              <ul class="pagination">
                   <!--<li><a href="#" class="previous">Prev</a></li>
                   <li><a href="#" class="page active">1</a></li>
                   <li><a href="#" class="page">2</a></li>
                   <li><a href="#" class="page">3</a></li>
                   <li><span class="extra">&hellip;</span></li>
                   <li><a href="#" class="page">19</a></li>
                   <li><a href="#" class="page">20</a></li>
                   <li><a href="#" class="next">Next</a></li>
               </ul>
            </footer>-->
        </section>

    </div>

    <?php get_footer(); ?>

</div>

<!-- Scripts -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.dropotron.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/skel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/util.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/odometer.min.js"></script>
<!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>

				<script>
					$(document).ready(function() {
						var goodsCounter = new Odometer({
						  el: document.getElementById('goods_counter'),
						  value: 0
						});
						var orgsCounter = new Odometer({
						  el: document.getElementById('orgs_counter'),
						  value: 0
						});
						setTimeout(function() {
							goodsCounter.update(<?php echo get_option('number_of_goods'); ?>);
							$('#goods_desc').show({duration: 400, easing: 'swing'});
							orgsCounter.update(<?php echo get_option('number_of_orgs'); ?>);
							$('#orgs_desc').show({duration: 400, easing: 'swing'});
						}, 1000);
					});
				</script>
</body>
</html>