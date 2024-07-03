<?php
/*
Plugin Name: CI Calorie calculator
Plugin URI: https://www.calculator.io/calorie-calculator/
Description: This calorie calculator computes how many calories are required daily to maintain, decrease, or gain weight. Learn about the different types of calories and how they affect you.
Version: 2.0.0
Author: Calculator.io, modified by AlsaHack
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: alsahack_ci_calorie_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Calorie Calculator by Calculator.iO";

function display_ci_calorie_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Calculez vos calories dès maintenant !</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_calorie_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_calorie_calculator', 'display_ci_calorie_calculator' );