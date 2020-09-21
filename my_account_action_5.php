function mrc_action_woocommerce_before_edit_account_address_form(  ) { 
    echo 'prima dell\' indirizzo';
}; 
         
// add the action 
add_action( 'woocommerce_before_edit_account_address_form', 'mrc_action_woocommerce_before_edit_account_address_form', 10, 0 );





function mrc_action_woocommerce_after_edit_account_address_form( $array ) { 
    echo 'dopo dell\' indirizzo';
}; 
         
// add the action 
add_action( 'woocommerce_after_edit_account_address_form', 'mrc_action_woocommerce_after_edit_account_address_form', 10, 1 );




function mrc_action_woocommerce_before_edit_address_form_load_address(  ) { 
   echo '[indirizzo] prima della form'; 
}; 
         
// add the action 
add_action( "woocommerce_before_edit_address_form_billing", 'mrc_action_woocommerce_before_edit_address_form_load_address', 10, 0 );






function mrc_action_woocommerce_after_edit_address_form_load_address(  ) { 
    echo '[indirizzo] dopo la form'; 
}; 
         
// add the action 
add_action( "woocommerce_after_edit_address_form_billing", 'mrc_action_woocommerce_after_edit_address_form_load_address', 10, 0 );
