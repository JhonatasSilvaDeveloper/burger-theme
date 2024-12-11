<?php

function burger_load_scripts() {
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), '3.4.13');
}

add_action('wp_enqueue_scripts', 'burger_load_scripts');