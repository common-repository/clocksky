<?php
/*
Plugin Name: ClockPms
Plugin URI: http://www.clock-hotel-software.com
Description: [clockpms uri=https://sky-eu1.clock-software.com/1040/728 {mode=base|products|calendar} {width=...} {height=...}] shortcode
Version: 1.1
Author: Clock Software Ltd.
Author URI: http://www.clock-hotel-software.com
License: GPLv2 or later
*/

if ( !function_exists( 'clocksky_embed_shortcode' ) ) :
  
  function clockpms_embed_shortcode($atts, $content = null) {
    $html .= "<script src='https://sky-eu1.clock-software.com/js/iframe_integration.js'></script>";
    $height = $atts["height"];
    if (empty($height)) $height = "2000px";
    $width = $atts["width"];
    if (empty($width)) $width = "100%";
    if ($atts["mode"] == "products") { 
      $html .= "<script>clock_pms_iframe({ height: '".$height."',  width: '".$width."', seamless: 'seamless', frameborder: '0', src: '".$atts["uri"]."/wbe/products/calendar_new' })</script>";
    } elseif ($atts["mode"] == "calendar") {
      $html .= "<script>clock_pms_iframe({ height: '".$height."',  width: '".$width."', seamless: 'seamless', frameborder: '0', src: '".$atts["uri"]."/wbe/products/calendar_new' })</script>";
    } else {
      $html .= "<script>clock_pms_iframe({ height: '".$height."',  width: '".$width."', seamless: 'seamless', frameborder: '0', src: '".$atts["uri"]."/wbe/products/new' })</script>";
    }
    return $html;
  }
  add_shortcode('clockpms', 'clockpms_embed_shortcode');
  
endif;