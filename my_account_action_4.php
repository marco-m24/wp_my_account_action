function mrc_action_woocommerce_before_account_downloads( $has_downloads ) { 
    echo 'prima di download';
}; 
         
// add the action 
add_action( 'woocommerce_before_account_downloads', 'mrc_action_woocommerce_before_account_downloads', 10, 1 );






function mrc_action_woocommerce_before_available_downloads(  ) { 
    echo 'prima dei download disponibili';
}; 
         
// add the action 
add_action( 'woocommerce_before_available_downloads', 'mrc_action_woocommerce_before_available_downloads', 10, 0 ); 







function mrc_action_woocommerce_after_available_downloads(  ) { 
    echo 'dopo dei download disponibili'; 
}; 
         
// add the action 
add_action( 'woocommerce_after_available_downloads', 'mrc_action_woocommerce_after_available_downloads', 10, 0 ); 






function mrc_action_woocommerce_after_account_downloads( $has_downloads ) { 
    echo '<br>dopo i download'; 
}; 
         
// add the action 
add_action( 'woocommerce_after_account_downloads', 'mrc_action_woocommerce_after_account_downloads', 10, 1 );

