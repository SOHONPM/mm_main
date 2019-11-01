	<?php
    // FF Blog Carousel
    add_shortcode('ff_blog_carousel', function ($atts) {
        ob_start();
        extract(shortcode_atts(array(
            'heading' => 'Blog',
            'num' => 9,
            'class' => '',
            'post_type' => 'post',
            'view_all_btn_text' => 'View all',
            'view_all_btn_link' => '/blogs-podcasts/',
        ), $atts));
        $class = ($class) ? ' ' . $class : '';
        $args = array(
            'post_type' => $post_type,
            'showposts' => $num,
            'no_found_rows' => true,
            'fields' => 'ids',
        );

        $q = new WP_Query($args);

        $posts = get_posts($args);
        if ($q->have_posts()) :
            //if( $posts ) :
            //$posts_count = count($posts);
            $posts_count = $q->post_count;
            echo '<div class="custom-carousel carousel-cols-3 blog-carousel' . $class . '">';

            echo '<div class="r1">';
            echo '<div class="c1">';
            echo '<h3 class="sc-heading">' . $heading . '</h3>';
            echo '</div>';
            echo '<div class="c2">';
            // View all button
            if ($view_all_btn_link) echo '<a href="./' . $view_all_btn_link . '" class="blog-view-all">' . $view_all_btn_text . '</a>';
            echo '<div class="carousel-nav' . (($posts_count <= 3) ? ' not-enough-slides' : '') . '"></div>';
            echo '</div>';
            echo '</div>';

            echo '<div class="r2 carousel-items row">';
            while ($q->have_posts()) : $q->the_post();
                //foreach( $posts as $id ) :
                //$title = get_post_field('post_title', $id);
                //$link = get_permalink($id);
                //$excerpt = get_post_field('post_content', $id);
                //if( !$excerpt ) $excerpt = get_post_field('post_content', $id);

                $title = get_the_title();
                $link = get_permalink();
                $excerpt = get_the_excerpt();
                echo '<div class="col-xxs-12 col-xs-6 col-md-12">';
                echo '<div class="post-item">';
                echo '<div class="s1">';
                echo '<a href="' . $link . '">';
                $image = (has_post_thumbnail()) ? get_the_post_thumbnail_url(get_the_ID(), 'image_size_1') : get_stylesheet_directory_uri() . '/images/default-370x185.jpg';
                echo '<img src="' . $image . '" width="370" height="185" alt="' . $title . '">';
                echo '</a>';
                echo '</div>';
                echo '<div class="s2">';
                //echo '<h4 class="title"><a href="'. $link .'">'. mb_strimwidth($title, 0, 80 , '...') .'</a></h4>';
                echo '<h4 class="title"><a href="' . $link . '">' . mb_strimwidth($title, 0, 80, '...') . '</a></h4>';
                echo '<div class="excerpt"><p class="content">' . mb_strimwidth($excerpt, 0, 120, '...') . '</p></div>';
                echo '<div class="link-container"><a href="' . $link . '" class="more-link">' . __('Read more', 'mindmatters') . '</a></div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            //endforeach;
            endwhile;
            echo '</div>';

            echo '</div>';
        endif;

        return ob_get_clean();
    });
