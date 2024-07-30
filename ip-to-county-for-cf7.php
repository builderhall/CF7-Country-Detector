<?php
/**
 * Plugin Name: CF7 Country Detector
 * Plugin URI: https://github.com/builderhall/CF7-Country-Detector
 * Description: Captures user IP location when a Contact Form 7 form is submitted.
 * Version: 1.1
 * License: GPLv3 or later
 * Author: Builder Hall Ltd.
 * Author URI: https://builderhall.com
 */

// Hook into Contact Form 7 form submission
add_action('wpcf7_before_send_mail', 'capture_user_ip_location');

function capture_user_ip_location($contact_form) {
    // Get the Contact Form 7 submission instance
    $submission = WPCF7_Submission::get_instance();

    // If submission exists, proceed
    if ($submission) {

        // Get user's IP address
        $user_ip = '';
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip_array = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $user_ip = trim($ip_array[0]);
        } else {
            $user_ip = $_SERVER['REMOTE_ADDR'];
        }

        // Get user's IP location using
        $ip_info = json_decode(file_get_contents("https://ipinfo.io/{$user_ip}/json"));

        // Extract relevant location information if available
        if ($ip_info && isset($ip_info->city, $ip_info->region, $ip_info->country)) {
            $location = "{$ip_info->city}, {$ip_info->region}, {$ip_info->country}";
        } else {
            $location = 'Location data not available';
        }

        // Add the location to the Contact Form 7 email body
        $mail = $contact_form->prop('mail');
        $mail['body'] .= "\nUser Location: {$location}";

        // Update the mail properties
        $contact_form->set_properties(array('mail' => $mail));
    } 
}
