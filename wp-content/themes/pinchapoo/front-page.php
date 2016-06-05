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
                    <li><a href="#" class="button">Read More</a></li>
                </ul>
            </div>
        </article>
				
				<article class="full pinchapoo-blue">
					<div class="content">
						<h2><div id="odometer" class="odometer"> <?php echo get_option('goods_counter_callback'); ?> goods redistributed and counting</div></h2>
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
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic05.jpg" alt="" /></a>
                    <header>
                        <h2><a href="#">Mauris vitae</a></h2>
                        <ul class="meta">
                            <li>3 days ago</li>
                            <li><a href="#" class="favorites">2,174</a></li>
                            <li><a href="#" class="comments">1,423</a></li>
                        </ul>
                    </header>
                    <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button">Full Story</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic06.jpg" alt="" /></a>
                    <header>
                        <h2><a href="#">Dapibus nulla</a></h2>
                        <ul class="meta">
                            <li>3 days ago</li>
                            <li><a href="#" class="favorites">2,174</a></li>
                            <li><a href="#" class="comments">1,423</a></li>
                        </ul>
                    </header>
                    <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button">Full Story</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic07.jpg" alt="" /></a>
                    <header>
                        <h2><a href="#">Dictum veroeros</a></h2>
                        <ul class="meta">
                            <li>3 days ago</li>
                            <li><a href="#" class="favorites">2,174</a></li>
                            <li><a href="#" class="comments">1,423</a></li>
                        </ul>
                    </header>
                    <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button">Full Story</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic08.jpg" alt="" /></a>
                    <header>
                        <h2><a href="#">Lorem sed magna</a></h2>
                        <ul class="meta">
                            <li>3 days ago</li>
                            <li><a href="#" class="favorites">2,174</a></li>
                            <li><a href="#" class="comments">1,423</a></li>
                        </ul>
                    </header>
                    <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button">Full Story</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic09.jpg" alt="" /></a>
                    <header>
                        <h2><a href="#">Vitae adipiscing</a></h2>
                        <ul class="meta">
                            <li>3 days ago</li>
                            <li><a href="#" class="favorites">2,174</a></li>
                            <li><a href="#" class="comments">1,423</a></li>
                        </ul>
                    </header>
                    <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button">Full Story</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/pic10.jpg" alt="" /></a>
                    <header>
                        <h2><a href="#">Aliquam phasellus</a></h2>
                        <ul class="meta">
                            <li>3 days ago</li>
                            <li><a href="#" class="favorites">2,174</a></li>
                            <li><a href="#" class="comments">1,423</a></li>
                        </ul>
                    </header>
                    <p>Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna feugiat cursus lorem nisi. Ut mauris vitae mi dapibus nulla dictum. Ipsum dolor sit amet tempus adipiscing amet sed aliquam veroeros etiam magna.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button">Full Story</a></li>
                        </ul>
                    </footer>
                </article>
                
            </div>
            <footer class="major">
                <ul class="pagination">
                    <!--<li><a href="#" class="previous">Prev</a></li>-->
                    <li><a href="#" class="page active">1</a></li>
                    <li><a href="#" class="page">2</a></li>
                    <li><a href="#" class="page">3</a></li>
                    <li><span class="extra">&hellip;</span></li>
                    <li><a href="#" class="page">19</a></li>
                    <li><a href="#" class="page">20</a></li>
                    <li><a href="#" class="next">Next</a></li>
                </ul>
            </footer>
        </section>

    </div>

    <?php get_footer(); ?>

</div>

<!-- Scripts -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.dropotron.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/skel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/util.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/odometer.min.js"></script>
<!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>

</body>
</html>