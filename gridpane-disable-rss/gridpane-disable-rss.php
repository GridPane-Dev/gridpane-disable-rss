<?php
add_action('do_feed_rdf', 'gridpane_security_disable_feed', 1);
add_action('do_feed_rss', 'gridpane_security_disable_feed', 1);
add_action('do_feed_rss2', 'gridpane_security_disable_feed', 1);
add_action('do_feed_atom', 'gridpane_security_disable_feed', 1);
add_action('do_feed_rss2_comments', 'gridpane_security_disable_feed', 1);
add_action('do_feed_atom_comments', 'gridpane_security_disable_feed', 1);
add_filter('the_generator','gridpane_security_remove_wp_version_rss');

function gridpane_security_remove_wp_version_rss() {
	return '';
}

function gridpane_security_disable_feed() {
	wp_die( __( 'GridPane Security has disabled the RSS Feed, please visit the <a href="'. esc_url( home_url( '/' ) ) .'">Homepage</a>!' ) );
}

