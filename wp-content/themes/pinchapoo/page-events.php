<?php /* Template Name: EventsPage */ ?>

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
                        <?php else : ?>
                        <?php endif; ?>
                    </div>
        </section>

        <!-- Posts -->
        <section class="main">
            <div class="inner">
                <div class="postlist">
                    <?php
                    $args = array( 'category_name' => 'Events' );

                    $gossposts = get_posts( $args );
                    foreach ( $gossposts as $post ) : setup_postdata( $post ); ?>
                        <article>
                            <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail('medium', array( 'class' => 'thumbnail alignleft' )); ?>
                            <header>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </header>
                            <p><?php the_excerpt(); ?></p>
                            <footer>
                                <ul class="actions">
                                    <li><a href="<?php the_permalink(); ?>" class="button">More Info</a></li>
                                </ul>
                            </footer>
                        </article>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                </div>

        <!-- Posts -->
                <hr>
                <h2>Past Events</h2>
                <div class="postlist">
                <div class="row">
                    <?php
                    $args = array( 'category_name' => 'Past Events' );

                    $gossposts = get_posts( $args );
                    foreach ( $gossposts as $post ) : setup_postdata( $post ); ?>
                        <div class="4u 12u$(medium)">
                        <article>
                            <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail('medium', array( 'class' => 'thumbnail alignleft' )); ?>
                            <header>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </header>
                            <p><?php the_excerpt(); ?></p>
                            <footer>
                                <ul class="actions">
                                </ul>
                            </footer>
                        </article>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata();
                    ?>
                </div>
                </div>
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

