<?php

/*
  Plugin Name: WP Disable right click
  Plugin URI:
  Description: Site Protection against copying
  Author: Anatoliy Vladimirovich Demchenko
  Version: 1.0
  Author URI: http://freelancevip.pro
 */

/*  Copyright 2016  Anatoliy Vladimirovich Demchenko  (email: freelancevip@yandex.ru)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

FLV_Disable_Right_Click::init();

class FLV_Disable_Right_Click
{

    public static $name = 'wp-disable-right-click';
    public static $enable_inputs = TRUE;

    function init()
    {
        add_action('wp_enqueue_scripts', array(__CLASS__, 'add_script'));
    }

    public static function add_script()
    {
        wp_enqueue_script('jquery');

        wp_register_script(self::$name, plugins_url('js/wp-disable-right-click.js', __FILE__), array('jquery'), '1.0', TRUE);
        wp_localize_script(self::$name, 'WpDisableRightClickOptions', array(
            'enable_inputs' => self::$enable_inputs
        ));
        wp_enqueue_script('wp-disable-right-click');
    }

}
