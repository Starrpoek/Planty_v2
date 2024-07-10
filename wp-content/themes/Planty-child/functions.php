<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles ()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
}

/* Ajout de la police Syne sur la page */
function ajouter_police_syne(){
    wp_enqueue_style('google-fonts-syne', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;800&display=swap', false);
}
add_action('wp_enqueue_scripts', 'ajouter_police_syne');

/* Ajout du hook de personnalisation du header */
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2);
function ajouter_lien_admin_menu($items, $args) {

    if (is_user_logged_in()) {

        $admin_url = admin_url('index.php');

        $items .= '<li class="menu-item-39"><a href="' . esc_url($admin_url) . '">Admin</a></li>';
    }

    return $items;
}

/* Ajout du hook de personnalisation du footer */
function my_custom_footer() {
    ?>
    <footer class="site-footer">
        <div class="footer-content">
            <p><a href= "<?php echo esc_url(home_url('/')); ?>">Mentions légales</a></p>
        </div>
    </footer>
    <?php
}
add_action('generate_footer', 'my_custom_footer');