
function mrc_action_woocommerce_before_account_orders( $has_orders ) { 
    echo 'prima degli ordini'; 
}; 
         
// add the action 
add_action( 'woocommerce_before_account_orders', 'mrc_action_woocommerce_before_account_orders', 10, 1 );






function mrc_action_woocommerce_before_account_orders_pagination(  ) { 
    echo 'prima della paginazione'; 
}; 
         
// add the action 
add_action( 'woocommerce_before_account_orders_pagination', 'mrc_action_woocommerce_before_account_orders_pagination', 10, 0 );






function mrc_action_woocommerce_after_account_orders( $has_orders ) { 
    echo 'dopo gli ordini'; 
}; 
         
// add the action 
add_action( 'woocommerce_after_account_orders', 'mrc_action_woocommerce_after_account_orders', 10, 1 );
