<header id="header">

    <!-- Logo -->
    <div class="logo">
        <a href="<?php bloginfo('template_url'); ?>" class="title"><strong>Pinchapoo</strong> <span class="extra">a cheeky way to help</span></a>
    </div>

    <!-- Nav -->
    <nav id="nav">
        <ul>

        <?php
        $args = array(
            'parent' => 0,
            'post_type' => 'page',
            'post_status' => 'publish'
        );

        $pages = get_pages($args);
            foreach ( $pages as $page ) {

                $args = array(
                    'child_of' => $page->ID,
                    'post_type' => 'page',
                    'post_status' => 'publish'
                );

                $children = get_pages($args);

                if(count($children) > 0)
                {
                    $option = "<li><a href=href=\"' . get_page_link($page->ID) . '\" class='dropdown'>$page->post_title</a>";
                    $option .= "<ul>";

                    foreach($children as $child)
                    {
                        $option .= '<li><a href="' . get_page_link($child->ID) . '">';
                        $option .= $child->post_title;
                        $option .= '</a></li>';
                    }

                    $option .= "</ul></li>";
                }
                else
                {
                    $option = '<li><a href="' . get_page_link($page->ID) . '">';
                    $option .= $page->post_title;
                    $option .= '</a></li>';
                }

                echo $option;
            }
        ?>

          <!--  <li><a href="index.html">Home</a></li>
            <li>
                <a href="#" class="dropdown">Dropdown</a>
                <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Magna phasellus</a></li>
                    <li><a href="#">Etiam dolore nisl</a></li>
                    <li>
                        <a href="#">Phasellus consequat</a>
                        <ul>
                            <li><a href="#">Lorem ipsum dolor</a></li>
                            <li><a href="#">Phasellus consequat</a></li>
                            <li><a href="#">Magna phasellus</a></li>
                            <li><a href="#">Etiam dolore nisl</a></li>
                            <li><a href="#">Veroeros feugiat</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Veroeros feugiat</a></li>
                </ul>
            </li>
            <li><a href="generic.html">Generic</a></li>
            <li><a href="elements.html">Elements</a></li> -->
        </ul>
    </nav>

</header>