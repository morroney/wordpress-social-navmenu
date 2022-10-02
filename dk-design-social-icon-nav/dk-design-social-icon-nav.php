<?php
//Add a layer to protect against snooping
defined('ABSPATH') or die("No Bueno Amigo."); //Beat it!
/*
Plugin Name: DK Design Add Social Media Nav Menu
Plugin URI:  https://dkdesignhawaii.com
Description: Make nav menu named "Social" which contains links to social profiles. Plugin does the rest.
Version:     1.0
Author:      Dan Morrone
Author URI:  https://dkdesignhawaii.com
*/

//ENQUE FONT AWESOME
add_action( 'wp_enqueue_scripts', 'storefront_social_icons_enqueue_fab' );
function storefront_social_icons_enqueue_fab() {
  wp_enqueue_style( 'font-awesome-5-brands', '//use.fontawesome.com/releases/v5.0.13/css/brands.css' );
}


//THE CSS
add_action('wp_footer','dkAddSocialNavCss');
function dkAddSocialNavCss() {

          echo '<style>#menu-social a[href*="dribbble.com"], #menu-social a[href*="facebook.com"], #menu-social a[href*="flickr.com"], #menu-social a[href*="foursquare.com"], #menu-social a[href*="plus.google.com"], #menu-social a[href*="instagram.com"], #menu-social a[href*="linkedin.com"], #menu-social a[href*="pinterest.com"], #menu-social a[href*="reddit.com"], #menu-social a[href*="tumblr.com"], #menu-social a[href*="twitter.com"], #menu-social a[href*="vimeo.com"], #menu-social a[href*="wordpress.com"], #menu-social a[href*="wordpress.org"], #menu-social a[href*="youtube.com"], #menu-social a[href*="mailto:"], #menu-social a[href*="twitch.tv"], #menu-social a[href$="/feed/"] {
          text-indent: -9999px; }

        #menu-social a[href*="dribbble.com"]:after, #menu-social a[href*="facebook.com"]:after, #menu-social a[href*="flickr.com"]:after, #menu-social a[href*="foursquare.com"]:after, #menu-social a[href*="plus.google.com"]:after, #menu-social a[href*="instagram.com"]:after, #menu-social a[href*="linkedin.com"]:after, #menu-social a[href*="pinterest.com"]:after, #menu-social a[href*="reddit.com"]:after, #menu-social a[href*="tumblr.com"]:after, #menu-social a[href*="twitter.com"]:after, #menu-social a[href*="vimeo.com"]:after, #menu-social a[href*="wordpress.com"]:after, #menu-social a[href*="wordpress.org"]:after, #menu-social a[href*="youtube.com"]:after, #menu-social a[href*="mailto:"]:after, #menu-social a[href*="twitch.tv"]:after, #menu-social a[href$="/feed/"]:after {
            text-indent: 0;
            display: block;
            float: left; }

        #menu-social a[href*="dribbble.com"]:after, #menu-social a[href*="facebook.com"]:after, #menu-social a[href*="flickr.com"]:after, #menu-social a[href*="foursquare.com"]:after, #menu-social a[href*="plus.google.com"]:after, #menu-social a[href*="instagram.com"]:after, #menu-social a[href*="linkedin.com"]:after, #menu-social a[href*="pinterest.com"]:after, #menu-social a[href*="reddit.com"]:after, #menu-social a[href*="tumblr.com"]:after, #menu-social a[href*="twitter.com"]:after, #menu-social a[href*="vimeo.com"]:after, #menu-social a[href*="wordpress.com"]:after, #menu-social a[href*="wordpress.org"]:after, #menu-social a[href*="youtube.com"]:after, #menu-social a[href*="twitch.tv"]:after {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400; }

        #menu-social a[href*="mailto:"]:after, #menu-social a[href$="/feed/"]:after {
            font-family: "Font Awesome 5 Free";
            font-weight: 900; }

        #menu-social a[href$="/feed/"]:after {
          content: "\f09e";
          color: #ff9900; }
        #menu-social a[href*="twitch.tv"]:after {
          content: "\f1e8";
          color: #6441A5; }
        #menu-social a[href*="mailto:"]:after {
          content: "\f0e0"; }
        #menu-social a[href*="youtube.com"]:after {
          content: "\f167";
          color: #bb0000; }
        #menu-social a[href*="wordpress.com"]:after, #menu-social a[href*="wordpress.org"]:after {
          content: "\f19a";
          color: #0073aa; }
        #menu-social a[href*="vimeo.com"]:after {
          content: "\f194";
          color: #aad450; }
        #menu-social a[href*="tumblr.com"]:after {
          content: "\f173";
          color: #32506d; }
        #menu-social a[href*="reddit.com"]:after {
          content: "\f231"; }
        #menu-social a[href*="twitter.com"]:after {
          content: "\f099";
          color: #00aced; }
        #menu-social a[href*="dribbble.com"]:after {
          content: "\f17d";
          color: #ea4c89; }
        #menu-social a[href*="facebook.com"]:after {
          content: "\f09a";
          color: #3b5998; }
        #menu-social a[href*="flickr.com"]:after {
          content: "\f16e";
          color: #ff0084; }
        #menu-social a[href*="foursquare.com"]:after {
          content: "\f180";
          color: #0072b1; }
        #menu-social a[href*="plus.google.com"]:after {
          content: "\f0d5";
          color: #dd4b39; }
        #menu-social a[href*="instagram.com"]:after {
          content: "\f16d";
          color: #517fa4; }
        #menu-social a[href*="linkedin.com"]:after {
          content: "\f0e1";
          color: #007bb6; }
        #menu-social a[href*="pinterest.com"]:after {
          content: "\f231";
          color: #cb2027; }
          </style>';

} //end function