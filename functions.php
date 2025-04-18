<?php
function vitejs_assets(): void
{
    if (WP_DEBUG) {
        echo '<script type="module" src="http://localhost:5173/@vite/client"></script>';
        echo '<script type="module" src="http://localhost:5173/src/main.js"></script>';
    } else {
        $data = file_get_contents(get_theme_file_path() . '/dist/.vite/manifest.json');
        $manifest = json_decode($data, true)['index.html'];
        wp_enqueue_script('vitejs', get_template_directory_uri() . '/dist/' . $manifest['file'], [], 1, true);
        wp_enqueue_style('vitejs', get_template_directory_uri() . '/dist/' . $manifest['css'][0]);
    }
}

add_action('wp_enqueue_scripts', 'vitejs_assets');
