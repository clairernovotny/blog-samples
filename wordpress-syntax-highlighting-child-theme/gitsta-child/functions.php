<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function add_codeFix() {
    // Register prism.js file
    wp_register_script(
    'codeFixJS', // handle name for the script so we can register, de-register, etc.
    get_stylesheet_directory_uri() . '/code-fix.js' // location of the code-fix.js file
    );
    
    
    wp_enqueue_script('codeFixJS');
}

add_action('wp_enqueue_scripts', 'add_codeFix');

// Function to add prism.css and prism.js to the site
function add_prism() {
    // Register prism.css file
    wp_register_style(
    'prismstbCSS', // handle name for the style so we can register, de-register, etc.
    get_stylesheet_directory_uri() . '/prism/prism.css' // location of the prism.css file
    );
    // Register prism.js file
    wp_register_script(
    'prismstbJS', // handle name for the script so we can register, de-register, etc.
    get_stylesheet_directory_uri() . '/prism/prism.js' // location of the prism.js file
    );
    // Enqueue the registered style and script files
    wp_enqueue_style('prismstbCSS');
    wp_enqueue_script('prismstbJS');
}
add_action('wp_enqueue_scripts', 'add_prism');
?>