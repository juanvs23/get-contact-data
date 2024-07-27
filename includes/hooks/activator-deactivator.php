<?php

function coltman_get_contact_activate() { 
	// Trigger our function that registers the custom post type plugin.
	unknown_user_contact_fn();
	// Clear the permalinks after the post type has been registered.
	flush_rewrite_rules(); 
}

register_activation_hook( __FILE__, 'coltman_get_contact_activate' );


/**
 * Deactivation hook.
 */
function coltman_get_contact_deactivate() {
	// Unregister the post type, so the rules are no longer in memory.
	unregister_post_type( 'coltman_contact_user' );
	// Clear the permalinks to remove our post type's rules from the database.
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'coltman_get_contact_deactivate' );