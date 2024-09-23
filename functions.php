<?php
// connect CSS
function templates_files()
{
    wp_enqueue_style('templates_main_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'templates_files');

//
function templates_features()
{
    add_theme_support('title-tag');
}

add_theme_support('post-thumbnails'); // add featured image
add_post_type_support('my_product', 'thumbnail');
add_action('after_setup_theme', 'templates_features');


function custom_theme_customize_register($wp_customize)
{

    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer', 'custom-theme'),
        'priority' => 120,
    ));

    // socials
  $social_sites = array(
    'youtube' => 'Youtube',
    'instagram' => 'Instagram'

);

    foreach ($social_sites as $key => $label) {
        $wp_customize->add_setting($key . '_link', array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control($key . '_link', array(
            'label'    => $label . ' Link',
            'section'  => 'footer_section',
            'type'     => 'text',
        ));
    }

}

add_action('customize_register', 'custom_theme_customize_register');



function create_custom_type()
{

    register_post_type('artists', array(
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Artists',

        ),
        'menu_icon' => 'dashicons-art',
        'show_in_rest' => true,
        'taxonomies'  => array('category', 'post_tag'),
        'supports' => array('editor', 'title', 'custom-fields', 'thumbnail') //enable gutenberg 
    ));

    // register_post_type('events', array(
    //     'has_archive' => true,
    //     'public' => true,
    //     'labels' => array(
    //         'name' => 'Events',

    //     ),
    //     'menu_icon' => 'dashicons-heart',
    //     'show_in_rest' => true,
    //     'taxonomies'  => array('category', 'post_tag'),
    //     'supports' => array('editor', 'title', 'custom-fields', 'thumbnail') //enable gutenberg 
    // ));

    register_post_type('archive', array(
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Archive',

        ),
        'menu_icon' => 'dashicons-edit-page',
        'show_in_rest' => true,
        'taxonomies'  => array('category', 'post_tag'),
        'supports' => array('editor', 'title', 'custom-fields', 'thumbnail') //enable gutenberg 
    ));
}

add_action('init', 'create_custom_type');



function mytheme_register_404_settings() {
    add_option('404_title', 'Page Not Found');
    add_option('404_message', 'Sorry, the page you are looking for does not exist.');
    
    register_setting('mytheme_404_settings_group', '404_title');
    register_setting('mytheme_404_settings_group', '404_message');
}
add_action('admin_init', 'mytheme_register_404_settings');

function mytheme_404_settings_page() {
    add_theme_page('404 Page Settings', '404 Page Settings', 'manage_options', 'mytheme-404-settings', 'mytheme_404_settings_page_html');
}
add_action('admin_menu', 'mytheme_404_settings_page');

function mytheme_404_settings_page_html() {
    if (!current_user_can('manage_options')) {
        return;
    }
    ?>
    <div class="wrap">
        <h1>404 Page Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('mytheme_404_settings_group');
            do_settings_sections('mytheme-404-settings');
            ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">404 Page Title</th>
                    <td><input type="text" name="404_title" value="<?php echo esc_attr(get_option('404_title')); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">404 Page Message</th>
                    <td>
                        <?php
                        $content = get_option('404_message');
                        $editor_id = '404_message';
                        $settings = array(
                            'textarea_name' => '404_message',
                            'media_buttons' => true,
                            'tinymce' => true,
                        );
                        wp_editor($content, $editor_id, $settings);
                        ?>
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}





