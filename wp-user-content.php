<?php

// Display content for website guest.
add_shortcode('guest','wp_show_guest_content');
function wp_show_guest_content($atts,$content){
    if (!is_user_logged_in()){
		$output = ''.do_shortcode($content).'';
        return $output;
    }
        return '';
}

// Display content for website logged in user.
add_shortcode('user','wp_show_user_content');
function wp_show_user_content($atts,$content = null){
    global $post;
    if (!is_user_logged_in()){
		$message = 'This content is for logged in user only. '.wp_login_url( get_permalink($post->ID)).' to view the content ';
        return $message;
    }
    	$output = ''.do_shortcode($content).'';
        return $output;
}

// Don't write your code below the closing php tag.
?>
