<?php /* Template Name: GetInvolvedPage */ ?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Pinchapoo - a cheeky way to help</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ie8.css" /><![endif]-->
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">
    <?php get_header(); ?>

    <!-- Main -->
    <div id="main">

        <!-- Content -->

        <section class="main">
            <div class="inner">

                <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!-- <div class="post-header"> -->
                    <!--<div class="date">< ?php the_time( 'M j y' ); ?></div> -->
                    <header class="major">
                        <span class="category">a cheeky way to help</span>
                        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <ul class="meta"></ul>
                    </header>
                    <!--<div class="author">< ?php the_author(); ?></div> -->
                    <!--</div><!--end post header-->
                    <div class="entry clear">
                        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
                        <?php the_content(); ?>
                        <!--< ?php edit_post_link(); ?> -->
                        <!-- < ?php wp_link_pages(); ?> </div>
                    <!--end entry-->
                        <div class="post-footer">
                            <!-- <div class="comments">< ?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
                        </div><!--end post footer-->
                        </div><!--end post-->
                        <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
                        <!-- <div class="navigation index">
                            <div class="alignleft">< ?php next_posts_link( 'Older Entries' ); ?></div>
                            <div class="alignright">< ?php previous_posts_link( 'Newer Entries' ); ?></div>
                        </div><!--end navigation-->
                        <?php else : ?>
                        <?php endif; ?>



                        <!--  <h2><a href="#">Etiam feugiat tempus veroeros lorem</a></h2>
                         <ul class="meta">
                             <li>3 days ago</li>
                             <li><a href="#" class="favorites">2,174</a></li>
                             <li><a href="#" class="comments">1,423</a></li>
                         </ul> -->


                        <!-- <a href="#" class="image main"><img src="< ?php bloginfo('template_url'); ?>/images/pic04.jpg" alt="" /></a>

                <p>In ut odio eu quam consectetur tristique nec non nisl. Maecenas porttitor vestibulum augue, nec sodales eros blandit non. Phasellus libero nibh, erat blandit, aliquet volutpat purus. Nullam pretium sed turpis lorem, ac congue orci. Donec pulvinar sagittis pellentesque. In ut odio eu quam consectetur tristique nec non nisl. Maecenas porttitor vestibulum augue, nec sodales eros blandit non. Vis accumsan feugiat adipiscing nisl amet adipiscing accumsan blandit accumsan sapien blandit ac amet faucibus aliquet placerat commodo. Interdum ante aliquet commodo accumsan vis phasellus adipiscing. Ornare a in lacinia. Vestibulum accumsan ac metus massa tempor. Accumsan in lacinia ornare massa amet. Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan.</p>

                <h3>Magna commodo lobortis</h3>
                <p>Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus. In amet magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam id ante adipiscing commodo integer arcu amet Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan commodo odio cubilia ac eu interdum placerat placerat arcu commodo lobortis adipiscing semper ornare pellentesque.</p>

                <h3>Erat condimentum</h3>
                <p>Interdum ante aliquet commodo accumsan vis phasellus adipiscing. Ornare a in lacinia. Vestibulum accumsan ac metus massa tempor. Accumsan in lacinia ornare massa amet. Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan. Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus. In amet magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam id ante adipiscing commodo integer arcu amet Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan commodo odio cubilia ac eu interdum placerat placerat arcu commodo lobortis adipiscing.</p>
                <p>Amet nibh adipiscing adipiscing. Commodo ante vis placerat interdum massa massa primis. Tempus condimentum tempus non ac varius cubilia adipiscing placerat lorem turpis at. Aliquet lorem porttitor interdum. Amet lacus. Aliquam lobortis faucibus blandit ac phasellus. In amet magna non interdum volutpat porttitor metus a ante ac neque. Nisi turpis. Commodo col. Interdum adipiscing mollis ut aliquam id ante adipiscing commodo integer arcu amet blandit adipiscing arcu ante.</p>
-->
                    </div>
        </section>

        <!-- Posts -->
        <section class="main">
            <div class="posts">
                <article>
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/banner_birthday.png" alt="" /></a>
                    <header>
                        <h2><a href="/get-involved/donate-toiletries/">Donate Toiletries</a></h2>
                        <ul class="meta">
                            <!--<li>3 days ago</li>
                            <li><a href="#" class="favorites">2,174</a></li>
                            <li><a href="#" class="comments">1,423</a></li> -->
                        </ul>
                    </header>
                    <p></p>
                    <footer>
                        <ul class="actions">
                            <li><a href="/get-involved/donate-toiletries/" class="button">Donate Now</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/banner_about_kate.png" alt="" /></a>
                    <header>
                        <h2><a href="http://128.199.197.86/get-involved/donate-money/">Donate Money</a></h2>
                        <ul class="meta"></ul>
                    </header>
                    <p></p>
                    <footer>
                        <ul class="actions">
                            <li><a href="http://128.199.197.86/get-involved/donate-money/" class="button">Donate Now</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/banner.png" alt="" /></a>
                    <header>
                        <h2><a href="/get-involved/volunteer/">Volunteer</a></h2>
                        <ul class="meta"></ul>
                    </header>
                    <p>Words...</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="/get-involved/volunteer/" class="button">Read More</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/banner_birthday.png" alt="" /></a>
                    <header>
                        <h2><a href="/get-involved/corporate-sponsorship/">Corporate Sponsorship</a></h2>
                        <ul class="meta">
                            <!--<li>3 days ago</li>
                            <li><a href="#" class="favorites">2,174</a></li>
                            <li><a href="#" class="comments">1,423</a></li> -->
                        </ul>
                    </header>
                    <p></p>
                    <footer>
                        <ul class="actions">
                            <li><a href="/get-involved/corporate-sponsorship/" class="button">Read More</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/banner_about_kate.png" alt="" /></a>
                    <header>
                        <h2><a href="/get-involved/fundraise/">Fundraise</a></h2>
                        <ul class="meta"></ul>
                    </header>
                    <p></p>
                    <footer>
                        <ul class="actions">
                            <li><a href="/get-involved/fundraise/" class="button">Read More</a></li>
                        </ul>
                    </footer>
                </article>
                <article>
                    <a href="#" class="image"><img src="<?php bloginfo('template_url'); ?>/images/banner.png" alt="" /></a>
                    <header>
                        <h2><a href="/get-involved/events/">Events</a></h2>
                        <ul class="meta"></ul>
                    </header>
                    <p>Words...</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="/get-involved/events/" class="button">Read More</a></li>
                        </ul>
                    </footer>
                </article>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <?php get_footer(); ?>

</div>

<!-- Scripts -->
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.dropotron.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/skel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="<?php bloginfo('template_url'); ?>/assets/js/main.js"></script>

</body>
</html>

