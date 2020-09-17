function mrc_action_woocommerce_account_navigation( ) { 
    echo 'menu';
}; 
         
// add the action 
add_action( 'woocommerce_account_navigation', 'mrc_action_woocommerce_account_navigation', 10, 1 );




function mrc_action_woocommerce_before_account_navigation(  ) { 
    echo 'prima del menu';
}; 
         
// add the action 
add_action( 'woocommerce_before_account_navigation', 'mrc_action_woocommerce_before_account_navigation', 10, 0 ); 




function mrc_action_woocommerce_after_account_navigation(  ) { 
    echo '<br>dopo del menu'; 
}; 
         
// add the action 
add_action( 'woocommerce_after_account_navigation', 'mrc_action_woocommerce_after_account_navigation', 10, 0 );




function mrc_action_woocommerce_account_dashboard(  ) { 
    echo 'account'; 
}; 
         
// add the action 
add_action( 'woocommerce_account_dashboard', 'mrc_action_woocommerce_account_dashboard', 10, 0 );
