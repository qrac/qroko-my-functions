<?php
/**
 * Plugin name: Qroko My Functions
 * Plugin URI: https://github.com/qrac/qroko-my-functions
 * Description: Function only for theme Qroko.
 * Version: 0.1.0
 * Author: Qrac
 * Author URI: https://qrac.jp
 * Text Domain: qroko-my-functions
 * License: GPLv2 or later
 */

//----------------------------------------------------
// Enabled only if theme is Qroko
//----------------------------------------------------

$theme = wp_get_theme( get_template() );

if ( 'qroko' !== $theme->template ) {
  return;
}

//----------------------------------------------------
// Write the function from here to below
//----------------------------------------------------

// Overwrite function here