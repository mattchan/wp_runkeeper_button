<?php
/*
Plugin Name: WP RunKeeper Button
Plugin URI: https://github.com/mattchan/wp_runkeeper_button
Version: 0.1
Author: Matt Chan
Author URI: http://mattchan.net/
License: GPLv2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

/*  Copyright 2012 Matthew Chan  (email : matt@mattchan.net)

    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

add_filter('the_content', 'add_runkeeper_btn' );

function add_runkeeper_btn($content) {
    if (is_single()) {
		echo '<p><a href="javascript:void(window.open(\'http://runkeeper.com/share?healthyUrl=';
		echo trim(get_permalink());
		echo '\', \'\', \'width=630,height=350\'));">';
		echo '<img src="http://runkeeper.com/static/kronos/images/HealthyButton.png" class="healthyImage" alt="RunKeeper Healthy Button" />';
		echo '</a></p>';
	}
	
	return $content;
}

?>
