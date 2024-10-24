<?php
// Start building widgets for the wp bakery
function eden_custom_widgets() {
    // Slider with center big slide
    vc_map( array(
        'name'     => __( 'Eden custom Gallery Slider', 'salient' ),
        'base'     => 'eden_custom_gallery_slider',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'        => 'attach_images',
                'heading'     => __( 'Select Images', 'salient' ),
                'param_name'  => 'images',
                'description' => __( 'Select multiple images from the media library.', 'salient' ),
            ),
        ),
    ));

    // Spcial media feed slider
    vc_map( array(
        'name'     => __( 'Eden Social Feed Slider', 'salient' ),
        'base'     => 'eden_custom_gallery_slider_with_date_text',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'        => 'param_group',
                'heading'     => __( 'Slides', 'salient' ),
                'param_name'  => 'slides',
                'params'      => array(
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Image', 'salient' ),
                        'param_name' => 'image',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'Title', 'salient' ),
                        'param_name' => 'title',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'Description', 'salient' ),
                        'param_name' => 'description',
                    ),
                ),
                'description' => __( 'Add slides with images, titles, and descriptions.', 'salient' ),
            ),
        ),
    ));

    // Online booking section
    vc_map( array(
        'name'     => __( 'Book Online Section', 'salient' ),
        'base'     => 'eden_book_online_section',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'        => 'textfield',
                'heading'     => __( 'Extra Class', 'salient' ),
                'param_name'  => 'classes',
                'description' => __( 'Add class for customization.', 'salient' ),
            ),
        ),
    ));

    // pricing tooltip menu
    vc_map( array(
        'name'     => __( 'Pricing Menu Tooltip', 'salient' ),
        'base'     => 'eden_pricing_menu_tooltip',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'       => 'param_group',
                'heading'    => __( 'Pricing Menu', 'salient' ),
                'param_name' => 'pricing_menu',
                'params'     => array(
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'Menu Title', 'salient' ),
                        'param_name' => 'title',
                    ),
                    array(
                        'type'        => 'textfield',
                        'heading'     => __( 'Price', 'salient' ),
                        'param_name'  => 'price',
                        'description' => __( 'Enter price in PP', 'salient' ),
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'Tooltip Content', 'salient' ),
                        'param_name' => 'description',
                    ),
                ),
            ),
        ),
    ));

    // Banner section
    vc_map( array(
        'name'     => __( 'Eden Custom Banner Slider', 'salient' ),
        'base'     => 'eden_custom_banner_slider',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'        => 'textfield',
                'heading'     => __( 'Extra Class', 'salient' ),
                'param_name'  => 'classes',
                'description' => __( 'Add class for customization.', 'salient' ),
            ),
            array(
                'type'       => 'param_group',
                'heading'    => __( 'Slides', 'salient' ),
                'param_name' => 'slides',
                'params'     => array(
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Slider Image', 'salient' ),
                        'param_name' => 'slider_image',
                    ),
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Slider center text Image', 'salient' ),
                        'param_name' => 'slider_center_text_image',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'Center Heading Text', 'salient' ),
                        'param_name' => 'center_heading',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'center text', 'salient' ),
                        'param_name' => 'center_text',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => __( 'Book Now Button Link', 'salient' ),
                        'param_name' => 'book_now_link',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => __( 'Learn More Button Link', 'salient' ),
                        'param_name' => 'learn_more_link',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => __( 'Video Link', 'salient' ),
                        'param_name' => 'video_link',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'Paragraph', 'salient' ),
                        'param_name' => 'paragraph',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'extra class', 'salient' ),
                        'param_name' => 'extra_class',
                    ),
                    array(
                        'type'       => 'dropdown_multi',
                        'heading'    => __( 'Options', 'salient' ),
                        'param_name' => 'options',
                        'value'      => activity_options_acf_repeater_options(),
                    ),
                ),
            ),
        ),
    ));

    // Custom Gallery Slider having content and readmore functionality
    vc_map( array(
        'name'     => __( 'Custom Gallery Slider having content and readmore functionality', 'salient' ),
        'base'     => 'custom_gallery_slider_having_content_and_readmore_functionality',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'        => 'param_group',
                'heading'     => __( 'Slides', 'salient' ),
                'param_name'  => 'slides',
                'params'      => array(
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Image', 'salient' ),
                        'param_name' => 'image',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'Title', 'salient' ),
                        'param_name' => 'title',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'Content', 'salient' ),
                        'param_name' => 'content',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'Highlighted Text', 'salient' ),
                        'param_name' => 'highlighted_text',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => __( 'Button URL', 'salient' ),
                        'param_name' => 'button_url',
                    ),
                ),
                'description' => __( 'Add slides with images, titles, content, and a button.', 'salient' ),
            ),
        ),
    ));

    // For the custom gallery slider having center slide very big
    vc_map( array(
        'name'     => __( 'Eden custom slick slider having center big', 'salient' ),
        'base'     => 'eden_custom_slick_slider',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'       => 'param_group',
                'heading'    => __( 'Slides', 'salient' ),
                'param_name' => 'slides',
                'params'     => array(
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Image', 'salient' ),
                        'param_name' => 'image',
                    ),
                ),
            ),
        ),
    ));

    // Activity cards
    vc_map( array(
        'name'     => __( 'Eden Custom Activity Cards', 'salient' ),
        'base'     => 'eden_custom_activity_cards',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'       => 'param_group',
                'heading'    => __( 'Cards', 'salient' ),
                'param_name' => 'cards',
                'params'     => array(
                    array(
                        'type'        => 'attach_image',
                        'heading'     => __( 'Background Image', 'salient' ),
                        'param_name'  => 'background_image',
                        'description' => __( 'Select a background image from the media library.', 'salient' ),
                    ),
                    array(
                        'type'        => 'attach_image',
                        'heading'     => __( 'Thumbnail Image', 'salient' ),
                        'param_name'  => 'thumbnail_image',
                        'description' => __( 'Select a thumbnail image from the media library.', 'salient' ),
                    ),
                    array(
                        'type'        => 'textarea',
                        'heading'     => __( 'Content', 'salient' ),
                        'param_name'  => 'content',
                        'description' => __( 'Enter some content.', 'salient' ),
                    ),
                    array(
                        'type'        => 'vc_link',
                        'heading'     => __( 'Book Now Button', 'salient' ),
                        'param_name'  => 'book_now_button',
                        'description' => __( 'Add a title and link for the Book Now button.', 'salient' ),
                    ),
                    array(
                        'type'        => 'vc_link',
                        'heading'     => __( 'Learn More Button', 'salient' ),
                        'param_name'  => 'learn_more_button',
                        'description' => __( 'Add a title and link for the Learn More button.', 'salient' ),
                    ),
                    array(
                        'type'       => 'dropdown_multi',
                        'heading'    => __( 'Options', 'salient' ),
                        'param_name' => 'options',
                        'value'      => activity_options_acf_repeater_options(),
                    ),
                ),
            ),
        ),
    ));

    // Custom Gallery Slider having content and readmore functionality
    vc_map( array(
        'name'     => __( 'Custom Gallery Slider having content and readmore functionality with title and subtitle', 'salient' ),
        'base'     => 'custom_gallery_slider_having_conten_and_readmore_functionality_with_title_subtitle',
        'category' => __( 'Eden Widgets', 'salient' ),
        'params'   => array(
            array(
                'type'        => 'textfield',
                'heading'     => __( 'Title', 'salient' ),
                'param_name'  => 'main_title',
                'description' => __( 'Add title for customization.', 'salient' ),
            ),
            array(
                'type'        => 'textarea',
                'heading'     => __( 'Content', 'salient' ),
                'param_name'  => 'main_content',
                'description' => __( 'Add content for customization.', 'salient' ),
            ),
            array(
                'type'        => 'param_group',
                'heading'     => __( 'Slides', 'salient' ),
                'param_name'  => 'slides',
                'params'      => array(
                    array(
                        'type'       => 'attach_image',
                        'heading'    => __( 'Image', 'salient' ),
                        'param_name' => 'image',
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'Title', 'salient' ),
                        'param_name' => 'title',
                    ),
                    array(
                        'type'       => 'textarea',
                        'heading'    => __( 'Content', 'salient' ),
                        'param_name' => 'content',
                    ),
                    // Nested Repeater for list items
                    array(
                        'type'        => 'param_group',
                        'heading'     => __( 'List Items', 'salient' ),
                        'param_name'  => 'list_items',
                        'params'      => array(
                            array(
                                'type'       => 'textfield',
                                'heading'    => __( 'List Item', 'salient' ),
                                'param_name' => 'list_item',
                            ),
                            array(
                                'type'       => 'textarea',
                                'heading'    => __( 'Hover Content', 'salient' ),
                                'param_name' => 'hover_content',
                            ),
                        ),
                        'description' => __( 'Add list items with hover content for each slide.', 'salient' ),
                    ),
                    array(
                        'type'       => 'textfield',
                        'heading'    => __( 'Highlighted Text', 'salient' ),
                        'param_name' => 'highlighted_text',
                    ),
                    array(
                        'type'       => 'vc_link',
                        'heading'    => __( 'Button URL', 'salient' ),
                        'param_name' => 'button_url',
                    ),
                ),
                'description' => __( 'Add slides with images, titles, content, and a button.', 'salient' ),
            ),
        ),
    ));

    // Function to get food and drinks posts
    function eden_get_food_drinks_posts() {
        $posts = get_posts(array(
            'post_type'   => 'food-drinks',
            'numberposts' => -1,
            'post_status' => 'publish',
        ));
        
        $options = array();
        if ($posts) {
            foreach ($posts as $post) {
                $options[$post->ID] = $post->post_title;
            }
        }
        
        return $options;
    }
    
    // For the custom feature posts widget
    vc_map(array(
        'name'        => __('Eden custom widget to list the two feature food and drink posts', 'salient'),
        'base'        => 'eden_custom_widget_to_list_the_two_feature_food_and_drink_posts',
        'category'    => __('Eden Widgets', 'salient'),
        'params'      => array(
            array(
                'type'        => 'dropdown_multi',
                'heading'     => __('Select Post', 'salient'),
                'param_name'  => 'food-drinks-posts',
                'value'       => eden_get_food_drinks_posts(),
                'description' => __('Select up to two posts to feature.', 'salient'),
            ),
        ),
    ));

    // Function to get food and drinks posts
    function eden_get_offers_promo_posts() {
        $posts = get_posts(array(
            'post_type'   => 'promotions',
            'numberposts' => -1,
            'post_status' => 'publish',
        ));
        
        $options = array();
        if ($posts) {
            foreach ($posts as $post) {
                $options[$post->ID] = $post->post_title;
            }
        }
        
        return $options;
    }
    
    // For the custom feature posts widget
    vc_map(array(
        'name'        => __('Eden custom widget to list the three feature promotions posts', 'salient'),
        'base'        => 'eden_custom_widget_to_list_the_three_feature_promotions_posts',
        'category'    => __('Eden Widgets', 'salient'),
        'params'      => array(
            array(
                'type'        => 'dropdown_multi',
                'heading'     => __('Select Post', 'salient'),
                'param_name'  => 'promotions-posts',
                'value'       => eden_get_offers_promo_posts(),
                'description' => __('Select up to three posts to feature.', 'salient'),
            ),
            array(
                'type'        => 'textfield',
                'heading'     => __('Title', 'salient'),
                'param_name'  => 'title',
                'description' => __('Enter the title.', 'salient'),
            ),
            array(
                'type'        => 'textarea_html',
                'heading'     => __('Subtitle', 'salient'),
                'param_name'  => 'subtitle',
                'description' => __('Enter the subtitle.', 'salient'),
            ),
            array(
                'type'        => 'textarea',
                'heading'     => __('Description', 'salient'),
                'param_name'  => 'description',
                'description' => __('Enter the description.', 'salient'),
            ),
            array(
                'type'        => 'vc_link',
                'heading'     => __('Link', 'salient'),
                'param_name'  => 'link',
                'description' => __('Select a link.', 'salient'),
            ),
        ),
    )); 

    // Activity feature image slider
    vc_map(array(
        'name'        => __('Eden Custom Activities Slider [Feature images]', 'salient'),
        'base'        => 'eden_custom_activities_slider',
        'category'    => __('Eden Widgets', 'salient'),
        'params'      => array(
            array(
                'type'        => 'textfield',
                'heading'     => __('Title', 'salient'),
                'param_name'  => 'slider_title',
                'description' => __('Enter the title for the slider.', 'salient'),
            ),
        ),
    ));
}
add_action( 'vc_before_init', 'eden_custom_widgets' );

function activity_options_acf_repeater_options() {
    $options = array();
    
    if (have_rows('activity_features_or_key_points', 'option')) {
        while (have_rows('activity_features_or_key_points', 'option')) {
            the_row();
            $text_value = get_sub_field('key_point_name');
            $options[$text_value] = $text_value;
        }
    }

    return $options;
}

// For the home page - slider
add_shortcode( 'eden_custom_gallery_slider', 'eden_custom_gallery_slider_callback' );
function eden_custom_gallery_slider_callback( $atts ) {
    $atts = shortcode_atts( array(
        'images' => '',
    ), $atts, 'eden_custom_gallery_slider' );

    $image_ids = explode( ',', $atts['images'] );

    ob_start();
    ?>
    <div class="custom-gallery-slider">
        <div class="slick-slider">
            <?php foreach ( $image_ids as $image_id ): ?>
                <div class="slick-slide item item-<?php echo $image_id; ?>">
                    <?php $image_url = wp_get_attachment_image_src( $image_id, 'full' );?>
                    <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ); ?>">
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// slider with big slide in the center having date and content
add_shortcode( 'eden_custom_gallery_slider_with_date_text', 'eden_custom_gallery_slider_with_date_text_callback' );
function eden_custom_gallery_slider_with_date_text_callback( $atts ) {
    $atts = shortcode_atts( array(
        'slides' => '',
    ), $atts, 'eden_custom_gallery_slider' );

    $slides = vc_param_group_parse_atts( $atts['slides'] );

    ob_start();
    ?>
    <div class="custom-gallery-slider-center-big">
        <div class="social-feed-slider">
            <?php foreach ( $slides as $slide ): ?>
                <?php
                    $image_id = isset( $slide['image'] ) ? $slide['image'] : '';
                    $title = isset( $slide['title'] ) ? $slide['title'] : '';
                    $description = isset( $slide['description'] ) ? $slide['description'] : '';
                    $image_url = wp_get_attachment_image_src( $image_id, 'full' );
                ?>
                <div class="feed item item-<?php echo esc_attr( $image_id ); ?>">
                    <div class="card">
                        <?php if ( $image_url ): ?>
                            <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ); ?>">
                        <?php endif;?>
                        <?php if ( $title ): ?>
                            <h3><?php echo esc_html( $title ); ?></h3>
                        <?php endif;?>
                        <?php if ( $description ): ?>
                            <p><?php echo esc_html( $description ); ?></p>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// Banner slider
add_shortcode( 'eden_custom_banner_slider', 'eden_custom_banner_slider_callback' );
function eden_custom_banner_slider_callback( $atts ) {
    $atts = shortcode_atts( [
        'slides' => '',
        'classes' => '',
    ], $atts, 'eden_custom_banner_slider' );
    $slides = $atts['slides'];
    $classes = isset($atts['classes']) ? $atts['classes'] : '';

    if ( !empty( $slides ) ) {
        $slides = json_decode( urldecode( $slides ), true ); // Convert JSON string to PHP array
        $count = count( $slides );
        ob_start();
        ?>
			<div class="cake_promo">
				<div class="promotion">
					<img src="/wp-content/uploads/2024/09/birthday_cake.svg">
					<p>
						Cakes are only permitted on the premises with a party booking
					</p>
				</div>
			</div>
            <div class="hero-slider-widget <?php echo $classes; ?>">
                <div class="hero-slider">
                    <?php foreach ( $slides as $slide ) {?>
                        <div class="slide-item <?php echo esc_html( $slide['extra_class'] ); ?>" style="background-image: url(<?php echo esc_url( wp_get_attachment_url( $slide['slider_image'] ) ); ?>);">
                            <?php if ( !empty( $slide['slider_image'] ) ) {?>
                                <div class="slide_inner">
                                    <div class="center-text">
                                        <?php if ( !empty( $slide['slider_center_text_image'] ) ): ?>
                                            <img class="banner-logo" src="<?php echo esc_url( wp_get_attachment_url( $slide['slider_center_text_image'] ) ); ?>" alt="center text Image">
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['center_heading'] ) ): ?>
                                            <h2 class="banner-heading"><?php echo $slide['center_heading']; ?></h2>
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['center_text'] ) ): ?>
                                            <p class="banner-text"><?php echo $slide['center_text']; ?></p>
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['book_now_link'] ) ): ?>
                                            <?php $book_now = vc_build_link( $slide['book_now_link'] );?>
                                            <a class="enquire-btn" href="<?php echo esc_url( $book_now['url'] ); ?>"><?php echo esc_html( $book_now['title'] ); ?></a>
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['learn_more_link'] ) ): ?>
                                            <?php $learn_more = vc_build_link( $slide['learn_more_link'] );?>
                                            <a class="learn-more" href="<?php echo esc_url( $learn_more['url'] ); ?>"><?php echo esc_html( $learn_more['title'] ); ?></a>
                                        <?php endif;?>
                                    </div>
                                    <div class="bottom-features">
                                        <?php if ( !empty( $slide['video_link'] ) ): ?>
                                            <div class="watch">
                                                <?php $video_link = vc_build_link( $slide['video_link'] );?>
                                                <a class="video" href="<?php echo esc_url( $video_link['url'] ); ?>">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/play.png" alt="play icon">
                                                    <?php echo esc_html( $video_link['title'] ); ?>
                                                </a>
                                            </div>
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['paragraph'] ) ): ?>
                                            <p class="bottom-text"><?php echo esc_html( $slide['paragraph'] ); ?></p>
                                        <?php endif;?>
                                        <?php if ( !empty( $slide['options'] ) ): ?>
                                            <?php
                                                echo "<div class='bottom-features-options'>";
                                                foreach ( $slide['options'] as $options ) {
                                                    echo "<div class='features'>";
                                                    if (have_rows('activity_features_or_key_points', 'option')) {
                                                        while (have_rows('activity_features_or_key_points', 'option')) {
                                                            the_row();
                                                            $text_value = get_sub_field('key_point_name');
                                                            $image_value = get_sub_field('key_point_thumbnail');

                                                            if ($options == $text_value) {
                                                                echo "<img src='" . $image_value . "' alt='age-limit'>";
                                                                echo "<span class='age-limit'>$text_value</span>";
                                                            }
                                                        }
                                                    }
                                                    echo "</div>";
                                                }
                                                echo "</div>";
                                            ?>
                                        <?php endif;?>
                                    </div>
                                    <div class="promotions">
                                        <div class="feature-promotion">
                                            <img src="<?php echo get_stylesheet_directory_uri() . "/images/XPA-Logo.png"; ?>" alt="feature-promotion">
                                            <span>4 NEW ARCADE HIGH-SCORES TODAY!</span>
                                        </div>
                                        <div class="feature-activity">
                                            <img src="<?php echo get_stylesheet_directory_uri() . "/images/karaoke-party-img.png"; ?>" alt="feature-activity">
                                            <span>Introducing the multi-player high-end laser tag-battle, perfect for groups, parties and corporate events</span>
                                            <div class="feature-redirections">
                                                <a href="#">Book now</a>
                                                <a href="#">Learn more</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <?php }?>
                        </div>
                    <?php }?>
                </div>

                <?php if ( $count > 1 ) {?>
                    <div class="hero-current-slide-count">1</div>
                <?php }?>
            </div>
        <?php
        return ob_get_clean();
    }
    return ''; // Return empty string if no slides
}

// Custom Gallery Slider having content and readmore functionality
add_shortcode( 'custom_gallery_slider_having_content_and_readmore_functionality', 'custom_gallery_slider_having_content_and_readmore_functionality_callback' );
function custom_gallery_slider_having_content_and_readmore_functionality_callback( $atts ) {
    $atts = shortcode_atts( array(
        'slides' => '',
    ), $atts, 'custom_gallery_slider' );

    $slides = vc_param_group_parse_atts( $atts['slides'] );

    ob_start();
    ?>
    <div class="slider-with-readmore-readless-btns">
        <div class="slider-with-content-readmore-less">
            <?php foreach ( $slides as $slide ): ?>
                <?php
                    $image_id = isset( $slide['image'] ) ? $slide['image'] : '';
                    $title = isset( $slide['title'] ) ? $slide['title'] : '';
                    $content = isset( $slide['content'] ) ? $slide['content'] : '';
                    $highlighted_text = isset( $slide['highlighted_text'] ) ? $slide['highlighted_text'] : '';
                    $button_url = isset( $slide['button_url'] ) ? vc_build_link( $slide['button_url'] ) : array();
                    $image_url = wp_get_attachment_image_src( $image_id, 'full' );
                ?>
                <div class="slick-slide item item-<?php echo esc_attr( $image_id ); ?>">
                    <div class="card" style="position: relative;">
                        <?php if ( $image_url ): ?>
                            <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ); ?>">
                        <?php endif;?>
                        <div class="content-overlay">
                            <?php if ( $title ): ?>
                                <h3><?php echo esc_html( $title ); ?></h3>
                            <?php endif;?>
                            <div class="content-short">
                                <?php echo wp_kses_post( wp_trim_words( $content, 20, '...' ) ); ?>
                                <a href="#" class="read-more">Read More</a>
                            </div>
                            <div class="content-full" style="display: none;">
                                <?php echo wp_kses_post( $content ); ?>
                                <b><?php echo esc_html( $highlighted_text ); ?></b>
                                <?php if ( !empty( $button_url['url'] ) && !empty( $button_url['title'] ) ): ?>
                                    <a href="<?php echo esc_url( $button_url['url'] ); ?>" class="button" <?php echo $button_url['target'] ? 'target="' . esc_attr( $button_url['target'] ) . '"' : ''; ?>>
                                        <?php echo esc_html( $button_url['title'] ); ?>
                                    </a>
                                <?php endif;?>
                                <a href="#" class="button content-less">Read Less</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// Custom Gallery Slider having content and readmore functionality with title and subtitle
add_shortcode( 'custom_gallery_slider_having_conten_and_readmore_functionality_with_title_subtitle', 'custom_gallery_slider_having_conten_and_readmore_functionality_with_title_subtitle_callback' );
function custom_gallery_slider_having_conten_and_readmore_functionality_with_title_subtitle_callback( $atts ) {
    $atts = shortcode_atts( array(
        'slides'       => '',
        'main_title'   => '',
        'main_content' => '',
    ), $atts, 'custom_gallery_slider' );

    $slides = vc_param_group_parse_atts( $atts['slides'] );
    $main_title = $atts['main_title'];
    $main_content = $atts['main_content'];

    ob_start();
    ?>

    <div class="readmore-slider-with-title-and-content">
        <div class="title-and-content">
            <?php if ( !empty( $main_title ) ): ?>
                <h2><?php echo esc_html( $main_title ); ?></h2>
            <?php endif;?>
            <?php if ( !empty( $main_content ) ): ?>
                <p><?php echo wp_kses_post( $main_content ); ?></p>
            <?php endif;?>
        </div>
        <div class="slider-with-readmore-readless-btns">
            <div class="slider-with-content-readmore-less">
                <?php foreach ( $slides as $slide ) {?>
                    <?php
                        $image_id = isset( $slide['image'] ) ? $slide['image'] : '';
                        $title = isset( $slide['title'] ) ? $slide['title'] : '';
                        $content = isset( $slide['content'] ) ? $slide['content'] : '';
                        $highlighted_text = isset( $slide['highlighted_text'] ) ? $slide['highlighted_text'] : '';
                        $button_url = isset( $slide['button_url'] ) ? vc_build_link( $slide['button_url'] ) : array();
                        $image_url = wp_get_attachment_image_src( $image_id, 'full' );
                        $list_items = vc_param_group_parse_atts( $slide['list_items'] );
                    ?>
                    <div class="slick-slide item item-<?php echo esc_attr( $image_id ); ?>">
                        <div class="card" style="position: relative;">
                            <?php if ( $image_url ): ?>
                                <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ); ?>">
                            <?php endif;?>
                            <div class="content-overlay">
                                <?php if ( $title ): ?>
                                    <h3><?php echo esc_html( $title ); ?></h3>
                                <?php endif;?>
                                <div class="content-short">
                                    <?php echo wp_kses_post( wp_trim_words( $content, 20, '...' ) ); ?>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                                <div class="content-full" style="display: none;">
                                    <?php echo wp_kses_post( $content ); ?>
                                    <ul class="list-items">
                                        <?php foreach ( $list_items as $list_item ): ?>
                                            <li>
                                                <span class="list-item-text"><?php echo esc_html( $list_item['list_item'] ); ?></span>
                                                <span class="hover-content"><?php echo wp_kses_post( $list_item['hover_content'] ); ?></span>
                                            </li>
                                        <?php endforeach;?>
                                    </ul>
                                    <b><?php echo esc_html( $highlighted_text ); ?></b>
                                    <?php if ( !empty( $button_url['url'] ) && !empty( $button_url['title'] ) ): ?>
                                        <a href="<?php echo esc_url( $button_url['url'] ); ?>" class="button" <?php echo $button_url['target'] ? 'target="' . esc_attr( $button_url['target'] ) . '"' : ''; ?>>
                                            <?php echo esc_html( $button_url['title'] ); ?>
                                        </a>
                                    <?php endif;?>
                                    <a href="#" class="button content-less">Read Less</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

// For the custom gallery slider having center slide very big
add_shortcode( 'eden_custom_slick_slider', 'eden_custom_slick_slider_callback' );
function eden_custom_slick_slider_callback( $atts ) {
    $atts = shortcode_atts( array(
        'slides' => '',
    ), $atts, 'custom_slick_slider' );

    $slides = vc_param_group_parse_atts( $atts['slides'] );

    ob_start();
    ?>
    <div class="custom-gallery-having-center-slide-big">
        <?php foreach ( $slides as $slide ): ?>
            <?php
                $image_id = isset( $slide['image'] ) ? $slide['image'] : '';
                $image_url = wp_get_attachment_image_src( $image_id, 'full' );
            ?>
            <div class="gallery-item">
                <?php if ( $image_url ): ?>
                    <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr( get_post_meta( $image_id, '_wp_attachment_image_alt', true ) ); ?>">
                <?php endif;?>
            </div>
        <?php endforeach;?>
    </div>

    <?php
    return ob_get_clean();
}

// Activity card section
add_shortcode( 'eden_custom_activity_cards', 'eden_custom_activity_cards_callback' );
function eden_custom_activity_cards_callback( $atts ) {
    $atts = shortcode_atts( array(
        'cards' => '',
    ), $atts, 'custom_eden_activity_cards' );

    $cards = vc_param_group_parse_atts( $atts['cards'] );

    ob_start();
    ?>
    <div class="custom-eden-activity-cards">
        <?php foreach ( $cards as $card ):
            $bg_image_url = wp_get_attachment_image_src( $card['background_image'], 'full' );
            $thumbnail_image_url = wp_get_attachment_image_src( $card['thumbnail_image'], 'full' );
            $book_now_button = vc_build_link( $card['book_now_button'] );
            $learn_more_button = vc_build_link( $card['learn_more_button'] );
        ?>
            <div class="eden-activity-card" style="background-image: url('<?php echo esc_url( $bg_image_url[0] ); ?>');">
                <div class="card-content">
                    <?php if ( $thumbnail_image_url ) {?>
                        <div class="activity-card-thumbnail">
                            <img src="<?php echo esc_url( $thumbnail_image_url[0] ); ?>" alt="Thumbnail">
                        </div>
                    <?php }?>
                    <div class="hover-content">
                        <div class="hover-content-upper-part">
                            <div class="content">
                                <?php echo wp_kses_post( $card['content'] ); ?>
                            </div>
                            <?php if ( $book_now_button['url'] && $book_now_button['title'] ) {?>
                                <a href="<?php echo esc_url( $book_now_button['url'] ); ?>" class="btn book-now" <?php echo $book_now_button['target'] ? 'target="' . esc_attr( $book_now_button['target'] ) . '"' : ''; ?>>
                                    <?php echo esc_html( $book_now_button['title'] ); ?>
                                </a>
                            <?php }?>
                        </div>
                        <div class="hover-content-lower-part">
                            <?php if ( $learn_more_button['url'] && $learn_more_button['title'] ) {?>
                                <div class='lower-part-button'>
                                    <a href="<?php echo esc_url( $learn_more_button['url'] ); ?>" class="btn learn-more" <?php echo $learn_more_button['target'] ? 'target="' . esc_attr( $learn_more_button['target'] ) . '"' : ''; ?>>
                                        <?php echo esc_html( $learn_more_button['title'] ); ?>
                                    </a>
                                </div>
                            <?php }?>
                            <?php if ( !empty( $card['options'] ) ) {?>
                                <?php
                                    echo "<div class='lower-part-features-options'>";
                                        foreach ( $card['options'] as $options ) {
                                            echo "<div class='features'>";
                                            if (have_rows('activity_features_or_key_points', 'option')) {
                                                while (have_rows('activity_features_or_key_points', 'option')) {
                                                    the_row();
                                                    $text_value = get_sub_field('key_point_name');
                                                    $image_value = get_sub_field('key_point_thumbnail');

                                                    if ($options == $text_value) {
                                                        echo "<img src='" . $image_value . "' alt='age-limit'>";
                                                        echo "<span class='age-limit'>$text_value</span>";
                                                    }
                                                }
                                            }
                                            echo "</div>";
                                        }
                                    echo "</div>";
                                ?>
                            <?php }?>
                        </div>
                    </div>
                    <?php if ( $learn_more_button['url'] ) {?>
                        <a href="<?php echo esc_url( $learn_more_button['url'] ); ?>" class="eden-activity-card-overlay-link"></a>
                    <?php }?>
                </div>
            </div>
        <?php endforeach;?>
    </div>
    <?php
    return ob_get_clean();
}

// carding section with pricing tooltip
add_shortcode( 'eden_pricing_menu_tooltip', 'eden_pricing_menu_tooltip_callback' );
function eden_pricing_menu_tooltip_callback( $atts ) {
    $atts = shortcode_atts( array(
        'pricing_menu' => '',
    ), $atts, 'eden_pricing_menu_tooltip' );

    $menus = vc_param_group_parse_atts( $atts['pricing_menu'] );

    ob_start();
    ?>
    <div class="pricing-tooltip-menu">
        <ul class="pricing-menu-item">
            <?php foreach ( $menus as $menu ) {
                $title = $menu['title'];
                $price = $menu['price'];
                $description = $menu['description'];
                ?>
                <li class="tooltip-menu-item">
                    <div class="title">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/images/price-i.png'; ?>" alt="">
                        <?php echo '<p>' . $title; ?>
                        <?php //echo '<p>' . $title . ' <strong>Є' . $price . '</strong> pp</p>'; ?>
                    </div>
                    <div class="tooltip-content">
                        <?php echo '<span>' .  $title . '</span><br>'; ?>
                        <?php echo $description; ?>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
    <?php
    return ob_get_clean();
}

// Get post id by title
function get_post_by_title($page_title, $post_type = 'post', $output = OBJECT) {
    global $wpdb;
    $post_id = $wpdb->get_var($wpdb->prepare(
        "SELECT ID FROM $wpdb->posts WHERE post_title = %s AND post_type = %s AND post_status = 'publish'",
        $page_title,
        $post_type
    ));

    if ($post_id) {
        if ($output === OBJECT || $output === ARRAY_A || $output === ARRAY_N) {
            return get_post($post_id, $output);
        }
        return $post_id;
    }

    return null;
}

add_shortcode('eden_custom_widget_to_list_the_two_feature_food_and_drink_posts', 'eden_custom_widget_to_list_the_two_feature_food_and_drink_posts_callback');
function eden_custom_widget_to_list_the_two_feature_food_and_drink_posts_callback($atts) {
    $atts = shortcode_atts(array(
        'food-drinks-posts' => '',
    ), $atts);

    $post_titles = explode(',', $atts['food-drinks-posts']);

    $post_ids = array();
    foreach ($post_titles as $title) {
        $post = get_post_by_title($title, 'food-drinks');
        if ($post) {
            $post_ids[] = $post->ID;
        }
    }

    ob_start(); ?>
    <div class="custom-row" style="padding-top: 40px;">
        <?php foreach ($post_ids as $post_id) {
            $post = get_post($post_id);
            $thumbnail_url = get_the_post_thumbnail_url($post_id, 'full');
            $custom_image_url = get_field('add_image_to_show_on_the_feature_listing', $post_id);
            $custom_text = get_field('add_text_to_show_on_the_feature_text', $post_id);
            $learn_more_url = get_permalink($post_id);
            ?>
            <div class="custom-col custom-col-6">
                <div class="custom-box">
                    <div class="box-bg" style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');"></div>
                    <div class="inner" style="min-height: 300px">
                        <?php if ($custom_image_url): ?>
                            <img src="<?php echo esc_url($custom_image_url); ?>" alt="" class="box-image">
                        <?php endif; ?>
                        <p><?php echo esc_html($custom_text); ?></p>
                    </div>
                    <div class="link-text">Learn More<span class="arrow"></span></div>
                    <a href="<?php echo esc_url($learn_more_url); ?>" class="box-link"></a>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('eden_custom_widget_to_list_the_three_feature_promotions_posts', 'eden_custom_widget_to_list_the_three_feature_promotions_posts_callback');
function eden_custom_widget_to_list_the_three_feature_promotions_posts_callback($atts) {
    $atts = shortcode_atts(array(
        'promotions-posts' => '',
        'title'       => '',
        'subtitle'    => '',
        'description' => '',
        'link'        => '',
    ), $atts);

    // Parse the link
    $link = vc_build_link($atts['link']);

    $href = isset($link['url']) ? $link['url'] : '';
    $target = isset($link['target']) ? $link['target'] : '';
    $title = $atts['title'];
    $subtitle = $atts['subtitle'];
    $description = $atts['description'];
    $post_titles = explode(',', $atts['promotions-posts']);

    $post_ids = array();
    foreach ($post_titles as $title) {
        $post = get_post_by_title($title, 'promotions');
        if ($post) {
            $post_ids[] = $post->ID;
        }
    }

    // echo '<pre>title:: ';
    // print_r($title);
    // echo '</pre>';

    // echo '<pre>subtitle:: ';
    // print_r($subtitle);
    // echo '</pre>';

    // echo '<pre>post_ids:: ';
    // print_r($post_ids);
    // echo '</pre>';
    // exit;

    ?>
        <div class="custom-feature_promotions-row custom-feature_promotions-full-width-content experience-row" style="padding-top: 0; padding-bottom: 80px;">
            <div class="custom-feature_promotions-row-inner">
                <div class="custom-feature_promotions-column custom-feature_promotions-right-padding-desktop-60px">
                    <div class="custom-feature_promotions-column-inner">
                        <div class="custom-feature_promotions-fancy-box"  style="background-image: url('https://eden.bison-studio.com/wp-content/uploads/2024/05/Disco-Bowling.jpg'); ">
                            <div class="custom-feature_promotions-fancy-box-inner large-card" style="min-height: 300px;">
                                <h2>Disco<br>Bowling</h2>
                                <p>Get ready to groove and strike! Join us every Friday for Disco Bowling Nights—where the lanes come alive with music and fun.</p>
                                <p>
                                    <span class="promo-text">Events</span>
                                    <br>
                                    <span class="notice-text">Every Friday</span>
                                </p>
                            </div>
                            <div class="link-text">Learn More<span class="arrow"></span></div>
                            <a href="#" class="box-link"></a>
                        </div>
                    </div>
                </div>
                <div class="custom-feature_promotions-column custom-feature_promotions-no-extra-padding custom-feature_promotions-top-margin-tablet-80px">
                    <div class="custom-feature_promotions-column-inner">
                        <div class="custom-feature_promotions-section-title small text-left">
                            <h4>offers &amp; promotions</h4>
                        </div>
                        <div class="custom-feature_promotions-section-title">
                            <h2>Experience the</h2>
                            <h2><span style="color: #6fffff;">Excitement</span></h2>
                        </div>
                        <div class="custom-feature_promotions-text">
                            <p>Dive into our dynamic calendar of events, exclusive promotions, and enticing offers designed to elevate your experience at The Eden.</p>
                        </div>
                        <div class="custom-feature_promotions-btn-brand second">
                            <p><a class="custom-feature_promotions-btn learn-more" href="/contact-us/">Learn More</a></p>
                        </div>
                        <div class="custom-feature_promotions-inner-row" style="padding-top: 20px;">
                            <div class="custom-feature_promotions-inner-column custom-feature_promotions-right-padding-desktop-20px">
                                <div class="custom-feature_promotions-inner-column-inner">
                                    <div class="custom-feature_promotions-fancy-box" style="background-image: url('https://eden.bison-studio.com/wp-content/uploads/2024/05/xp-arcade-card.jpg');">
                                        <div class="custom-feature_promotions-fancy-box-inner small-cards" style="min-height: 300px;">
                                            <h2>XP Arcade Card</h2>
                                            <p>Introducing our XP Arcade Card: Buy more, get more! Earn extra credits for endless arcade fun with every purchase.</p>
                                            <p><span class="promo-text">Promo</span></p>
                                        </div>
                                        <div class="link-text">Learn More<span class="arrow"></span></div>
                                        <a href="#" class="box-link"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-feature_promotions-inner-column custom-feature_promotions-left-padding-desktop-20px custom-feature_promotions-top-padding-tablet-20px">
                                <div class="custom-feature_promotions-inner-column-inner">
                                    <div class="custom-feature_promotions-fancy-box" style="background-image: url('https://eden.bison-studio.com/wp-content/uploads/2024/05/gift-voucher.jpg');">
                                        <div class="custom-feature_promotions-fancy-box-inner small-cards" style="min-height: 300px;">
                                            <h2>Gift vouchers</h2>
                                            <p>Unlock endless entertainment with our versatile gift vouchers! From laser tag to escape rooms, give the gift of unforgettable experiences.</p>
                                            <p><span class="promo-text">offer</span></p>
                                        </div>
                                        <div class="link-text">Learn More<span class="arrow"></span></div>
                                        <a href="#" class="box-link"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}

// Add jquery to the admin
add_action('admin_enqueue_scripts', 'eden_enqueue_inline_script_for_vc_admin');
function eden_enqueue_inline_script_for_vc_admin() {
    // Enqueue jQuery (it should already be included by WordPress, this is just to ensure it's loaded)
    wp_enqueue_script('jquery');

    // Add inline script
    $inline_script = '
    jQuery(document).ready(function($) {
        var maxSelections = 2;
        var last_valid_selection = [];

        $(\'select[name="food-drinks-posts[]"]\').change(function(event) {
            var selectedOptions = $(this).val();
            if (selectedOptions.length > maxSelections) {
                alert(\'You can only select up to \' + maxSelections + \' options.\');
                $(this).val(last_valid_selection);
            } else {
                last_valid_selection = selectedOptions;
            }
        });
    });
    ';
    
    wp_add_inline_script('jquery', $inline_script);
}

add_shortcode('eden_custom_activities_slider', 'eden_custom_activities_slider_callback');
function eden_custom_activities_slider_callback() {
    $atts = shortcode_atts(array(
        'slider_title' => '',
    ), $atts);

    $current_page_id = get_the_ID(); // Get the current page ID

    $args = array(
        'post_type'      => 'activities',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'post__not_in'   => array($current_page_id), // Exclude the current page ID
    );

    $activities_query = new WP_Query($args);

    if ($activities_query->have_posts()) {
        ob_start();

        ?>
        <div class="activities-slider-wrapper">
            <?php if (!empty($atts['slider_title'])) : ?>
                <h2><?php echo esc_html($atts['slider_title']); ?></h2>
            <?php endif; ?>
            <div class="activities-slider">
                <?php
                while ($activities_query->have_posts()) : $activities_query->the_post();
                    if (has_post_thumbnail()) :
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        $post_permalink = get_permalink();
                        ?>
                         <div class="activity-slide">
                            <a href="<?php echo esc_url($post_permalink); ?>">
                                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php the_title_attribute(); ?>">
                            </a>
                        </div>
                    <?php
                    endif;
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <?php

        return ob_get_clean();
    }

    return '';
}
