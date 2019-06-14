<?php

/**
 * Trigger this file on plugin uninstall
 * 
 * @package RamiPlugin
 */

 if ( ! defined( 'WP_UNINSTALL_PLUGIN' )) {
     die;
 }

 /*
 // Clear data store in DB from plugin

 // METHOD 1:
 // gets all posts in db, from the 'wp_posts' table, with the posttype of 'book'
 $books = get_posts( array( 'post_type' => 'book', 'numberposts' => -1 ) );

 foreach ($books as $book ) {
     wp_delete_post( $book->ID, true );
 }

 // METHOD 2:
 */
 
 // Access the database via SQL and send a query to delete directly from table
 global $wpdb;
 $wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'book'");
 $wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)");
 $wpdb->query( "DELETE FROM wp_term_relationships WHERE post_id NOT IN (SELECT id FROM wp_posts)");
 