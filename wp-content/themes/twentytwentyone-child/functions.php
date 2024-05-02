<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'twenty-twenty-one-custom-color-overrides','twenty-twenty-one-style','twenty-twenty-one-style','twenty-twenty-one-print-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION
add_action('wp_ajax_my_submit_log_action', 'my_submit_log_action');
add_action('wp_ajax_nopriv_my_submit_log_action', 'my_submit_log_action');
function my_submit_log_action(){
    global $wpdb;
$to = $_POST['email_id'];
$subject = 'Invite Email';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$message = 'Hi '.$to;
$message .= 'This is a Invite email sent from WordPress Admin. Please click on this <a href="'.site_url().'/register/?inviteuser='.base64_encode($to).'">link</a> and complete your registration process.';
// send email
$mail_sent=wp_mail($to,$subject,$message,$headers);
    if($mail_sent){
        echo 'mail sent succesfully';
    }else{
        echo 'mail not sent';
    }
    die;
}
