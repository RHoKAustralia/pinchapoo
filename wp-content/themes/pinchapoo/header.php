<header id="header">

    <!-- Logo -->
    <div class="logo">
        <a href="index.html" class="title"><strong>Pinchapoo</strong> <span class="extra">a cheeky way to help</span></a>
    </div>

    <!-- Nav -->
    <nav id="nav">
        <ul>

        <?php
            $pages = get_pages();
            foreach ( $pages as $page ) {
                $option = '<li><a href="' . get_page_link( $page->ID ) . '">';
                $option .= $page->post_title;
                $option .= '</a></li>';
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